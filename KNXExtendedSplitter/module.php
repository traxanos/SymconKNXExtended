<?php

class KNXExtendedSplitter extends IPSModule
{

    public static $dpts = array();
    public $groupAddressTable = null;

    public function Create()
    {
        parent::Create();

        $this->ConnectParent('{1C902193-B044-43B8-9433-419F09C641B8}');
        $this->RegisterPropertyString('GroupAddressFile', '');
        $this->RegisterAttributeString('GroupAddressFileHash', '');
        $this->RegisterAttributeString('GroupAddressTable', '{}');
    }

    public function Destroy()
    {
        parent::Destroy();
    }

    public function ApplyChanges()
    {
        parent::ApplyChanges();
        $this->LoadXMLFile();
    }

    public function ReceiveData($JSONString)
    {
        # Prepare Input
        $input = json_decode($JSONString, true);
        $input['Data'] = utf8_decode($input['Data']);

        # Prepare Output
        $output = array();
        $output['DataID'] = "{94CC3F77-1E0A-4C7E-E3EF-466FF1589084}";

        # Build combined GroupAddress
        $groupAddress = $input['GroupAddress1'];
        $groupAddress .= '/';
        $groupAddress .= $input['GroupAddress2'];
        $groupAddress .= '/';
        $groupAddress .= $input['GroupAddress3'];

        $output['GroupAddress1'] = $input['GroupAddress1'];
        $output['GroupAddress2'] = $input['GroupAddress2'];
        $output['GroupAddress3'] = $input['GroupAddress3'];
        $output['GroupAddress'] = $groupAddress;

        $additionalGroupAddressData = $this->GetGroupAddressData($output['GroupAddress']);
        if (!$additionalGroupAddressData) {
            $this->SendDebug(
                'RECV | '. $output['GroupAddress'],
                'Unknown GA (' . bin2hex($input['Data']) . ')',
                0
            );
            return;
        }

        $output['GroupName1'] = $additionalGroupAddressData['GroupName1'];
        $output['GroupName2'] = $additionalGroupAddressData['GroupName2'];
        $output['GroupName3'] = $additionalGroupAddressData['GroupName3'];

        $output['GroupName'] = $output['GroupName1'];
        $output['GroupName'] .= ' > ';
        $output['GroupName'] .= $output['GroupName2'];
        $output['GroupName'] .= ' > ';
        $output['GroupName'] .= $output['GroupName3'];

        $output['DPT'] = $additionalGroupAddressData['DPT'];

        $dptData = $this->GetDPTData($output['DPT']);
        if (!$dptData) {
            $this->SendDebug(
                'RECV | '. $output['GroupAddress'] . ' | ' . $output['DPT'],
                'Unsupported DPT (' . bin2hex($input['Data']) . ')',
                0
            );
            return;
        }

        $output['Data'] = $input['Data'];

        if ((ord($input['Data'][0]) & 0b11000000) != 00) {
            // Normal Telegram
            $output['Value'] = $this->ConvertFromDPT($input['Data'], $output['DPT']);
            $output['ReadRequest'] = false;
        } elseif ((ord($input['Data'][0]) & 0b11110000) == 0) {
            // Readrequest
            $output['ReadRequest'] = true;
        } else {
            $this->SendDebug(
                'RECV | '. $output['GroupAddress'],
                'Unkown Datagram (' . bin2hex($input['Data'] . ')'),
                0
            );
            return;
        }

        $this->DebugReceiveData($output);

        # Encode
        $output['Data'] = utf8_encode($output['Data']);

        $this->SendDataToChildren(json_encode($output));
    }

    public function ForwardData($JSONString) {
        # Prepare Input
        $input = json_decode($JSONString, true);

        $output = array();
        $output['DataID'] = "{42DFD4E4-5831-4A27-91B9-6FF1B2960260}";
        $output['Value'] = $input['Value'];

        if (isset($input['Answer'])) {
            $output['Answer'] = (bool)$input['Answer'];
        } else {
            $output['Answer'] = false;
        }

        # GroupAddress
        if (!isset($input['GroupAddress'])) {
            $this->LogMessage('[SEND] Missing GA', KL_ERROR);
            return;
        }

        list($ga1, $ga2, $ga3) = explode('/', $input['GroupAddress'], 3);
        $output['GroupAddress'] = (string)$input['GroupAddress'];
        $output['GroupAddress1'] = (int)$ga1;
        $output['GroupAddress2'] = (int)$ga2;
        $output['GroupAddress3'] = (int)$ga3;

        # GroupData
        $additionalGroupAddressData = $this->GetGroupAddressData($output['GroupAddress']);
        if (!$additionalGroupAddressData) {
            $this->LogMessage(
                '[SEND] Unknown GA ' . $output['GroupAddress'], KL_ERROR
            );
            return;
        }

        $output['DPT'] = $additionalGroupAddressData['DPT'];
        $dptData = $this->GetDPTData($output['DPT']);
        if (!$dptData) {
            $this->LogMessage(
                '[SEND] Unsupported DPT ' . $output['DPT'] . ' ' . $output['GroupAddress'], KL_ERROR
            );
            return;
        }

        $validation = $this->ValidateValue($output['Value'], $output['DPT']);
        if($validation !== true) {
            $this->LogMessage(
                '[SEND] Invalid Value (' . $validation . ')', KL_ERROR
            );
            return;
        }

        $output['Data'] = $this->ConvertToDPT($output['Value'], $output['DPT'], $output['Answer']);
        $this->DebugForwardData($output);
        
        $output['Data'] = utf8_encode($output['Data']);
        unset($output['Value']);
        unset($output['GroupAddress']);
        $this->SendDataToParent(json_encode($output));
    }

    private function DebugReceiveData($input) {
        $msg = 'RECV | ' . $input['GroupAddress'];
        if (isset($input['DPT'])) {
            $msg .= ' | ' . $input['DPT'];
        }
        if ($input['ReadRequest']) { // Read
            $this->SendDebug($msg, 'ReadRequest', 0);
        } else {
            if (is_bool($input['Value'])) {
                $input['Value'] = (int)$input['Value'];
            }
            $this->SendDebug($msg, $input['Value'], 0);
        }
    }

    private function DebugForwardData($input) {
        $msg = 'SEND | ' . $input['GroupAddress'] . ' | ' . $input['DPT'];
        $this->SendDebug($msg, $input['Value'] . ' (' . bin2hex($input['Data']) . ')', 0);
    }

    private function ValidateValue($value, $dpt) {
        $dptData = $this->GetDPTData($dpt);

        if ($dptData['Type'] != gettype($value)) {
            return 'Type missmatch';
        }

        if (isset($dptData['Validation'])) {
            $validation = $dptData['Validation'];
            if (isset($validation['Min']) && $validation['Min'] > $value) {
                return 'lesser than allowed';
            }
            if (isset($validation['Max']) && $validation['Max'] < $value) {
                return 'geater than allowed';
            }
        }
        return true;
    }

    private function ConvertToDPT($value, $dpt, $answer = false) {
        list($dpt_kind, $dpt_type, $dpt_subtype) = $this->SplitDPT($dpt);

        if ($answer) {
            $prefix = 0b01000000;
        } else {
            $prefix = 0b10000000;
        }

        if ($dpt_type == '1' || $dpt_type == '2') {
            $value = ((int)$value) & 0b00000011;
            $value = $value | $prefix;
            return chr($value);
        } else {
            if ($dpt_type == '4') {
                if($dpt_kind == 'DPST' && $dpt_subtype == '2') {
                    $value = mb_convert_encoding($value, 'ISO-8859-1', 'UTF-8');
                } else {
                    $value = mb_convert_encoding($value, 'ASCII', 'UTF-8');
                }
                return pack("Ca", $prefix, substr($value, 0, 1));
            } elseif($dpt_type == '5') {
                $value = (int)$value;
                if($dpt_kind == 'DPST') {
                    if ($dpt_subtype == '1') {
                        $value = round($value / 0.3921566);
                    } elseif ($dpt_subtype == '3') {
                        $value = round($value / 1.4117647);
                    }
                }
                return pack("CC", $prefix, $value);
            } elseif($dpt_type == '6') {
              return pack("Cc", $prefix, $value);
            } elseif($dpt_type == '7') {
              return pack("Cn", $prefix, $value);
            } elseif($dpt_type == '8') {
                if (0 > $value) {
                    $value += 0x010000;
                }
                return pack("Cn", $prefix, $value);
            } elseif($dpt_type == '9') {
                $sign = ($value < 0) ? 0x8000 : 0x0;
                $value = abs(round($value * 100));
                $exp = 0;
                while ($value > 0x07ff) {
                    $value >>= 1;
                    $exp++;
                }
                if (0 != $sign) {
                    $value = -$value;
                }
                $value = ($sign | ($value & 0x07ff) | (($exp << 11) & 0x07800));
                return pack("Cn", $prefix, $value);
            } elseif($dpt_type == '12') {
                return pack("CN", $prefix, $value);
            } elseif($dpt_type == '13') {
                if (0 > $value) {
                    $value += 0xFFFFFFFF + 1;
                }
                return pack("CN", $prefix, $value);
            } elseif($dpt_type == '14') {
                $sign = ($value < 0) ? 1 : 0;
                $value = abs($value);
                $exp = (floor(log($value, 2)) + 1);
                $frac = ($value * pow(2, -$exp));
                $exp += 126;
                $frac *= 2 << 23;
                $byte1 = (($sign << 7) & 0x80) | (($exp >> 1) & 0x7F);
                $byte2 = (($exp << 7) & 0x80) | (($frac >> 16) & 0x7F);
                $byte3 = (($frac >> 8) & 0xFF);
                $byte4 = $frac & 0xFF;
                return pack("C5", $prefix, $byte1, $byte2, $byte3, $byte4);
            } elseif($dpt_type == '16') {
                if($dpt_kind == 'DPST' && $dpt_subtype == '1') {
                    $value = mb_convert_encoding($value, 'ISO-8859-1', 'UTF-8');
                } else {
                    $value = mb_convert_encoding($value, 'ASCII', 'UTF-8');
                }
            } elseif($dpt_type == '20' || $dpt_type == '21') {
                return pack("CC", $prefix, $value);
            } else {
                return null;
            }
        }
    }

    private function ConvertFromDPT($value, $dpt) {
        $dptData = $this->getDPTData($dpt);
        list($dpt_kind, $dpt_type, $dpt_subtype) = $this->SplitDPT($dpt);

        if ($dpt_type == '1') {
            $value = unpack('C', $value)[1];
            return (bool) ($value & 0b00000001);
        } elseif ($dpt_type == '2') {
            $value = unpack('C', $value)[1];
            return (int) ($value & 0b00000011);
        } elseif ($dpt_type == '3') {
            $value = unpack('C', $value)[1];
            return (int) ($value & 0b00001111);
        } elseif ($dpt_type == '4') {
            $value = unpack('a', $value, 1)[1];
            if ($dpt_kind == 'DPST' && $dpt_subtype == '2') {
                return mb_convert_encoding($value, 'UTF-8', 'ISO-8859-1');
            } else {
                return mb_convert_encoding($value, 'UTF-8', 'ASCII');
            }
        } elseif ($dpt_type == '5') {
            $value = unpack('C', $value, 1)[1];
            if($dpt_kind == 'DPST') {
                if ($dpt_subtype == '1') {
                    $value = round($value * 0.3921566);
                } elseif ($dpt_subtype == '3') {
                    $value = round($value * 1.4117647);
                }
            }
            return (int) round($value);
        } elseif ($dpt_type == '6') {
            return (int) unpack('c', $value, 1)[1];
        } elseif ($dpt_type == '7') {
            return (int) unpack('n', $value, 1)[1];
        } elseif ($dpt_type == '8') {
            $value = unpack('n', $value, 1)[1];
            if (0x8000 & $value) {
                $value = - ( 0x010000 - $value );
            }
            return (int) $value;
        } elseif ($dpt_type == '9') {
            $value = unpack('n', $value, 1)[1];
            $sign = (0 == $value >> 15) ? 1 : -1 ;
            $exp = (($value >> 11) & 0xF);
            $frac = ($value & 0x07FF );
            if ($sign == -1) {
                $frac = (~($frac - 1)) & 0x07FF;
            }
            return (double) round(($sign * 0.01 * $frac * pow(2, $exp)), 2);
        } elseif ($dpt_type == '12') {
            return (int) unpack('N', $value, 1)[1];
        } elseif ($dpt_type == '13') {
            $value = unpack('N', $value, 1)[1];
            if (0x80000000 & $value) {
                $value = -(0xFFFFFFFF - $value + 1);
            }
            return (int) $value;
        } elseif ($dpt_type == '14') {
            $value = unpack('N', $value, 1)[1];
            $sign = (0 == $value >> 31) ? 1 : -1;
            $x = ($value & (( 1 << 23 ) - 1)) + (1 << 23);
            $exp = ($value >> 23 & 0xFF) - 127;
            return round($sign * $x * pow(2, $exp - 23), 2);
        } elseif ($dpt_type == '16') {
            $value = unpack("Z14", $value, 1)[1];
            if ($dpt_kind == 'DPST' && $dpt_subtype == '1') {
                return mb_convert_encoding($value, 'UTF-8', 'ISO-8859-1');
            } else {
                return mb_convert_encoding($value, 'UTF-8', 'ASCII');
            }
        } elseif ($dpt_type == '20' || $dpt_type == '21') {
            return (int) unpack('C', $value, 1)[1];
        }
    }

    public function GetConfigurationForm()
    {
        $form = json_decode(file_get_contents(__DIR__ . "/form.json"));

        // Load Table
        $table = array();
        $this->LogMessage('GetConfigurationForm', KL_MESSAGE);
        $this->LoadGroupAddressTable();

        foreach($this->groupAddressTable as $group_address => $data) {
            $table_item = array();
            $table_item['GroupAddress'] = $group_address;
            $table_item['GroupName1'] = $data['GroupName1'];
            $table_item['GroupName2'] = $data['GroupName2'];
            $table_item['GroupName3'] = $data['GroupName3'];
            $table_item['Description'] = $data['Description'];
            $table_item['DPT'] = $data['DPT'];
            if($dptData = $this->GetDPTData($data['DPT'])) {
                if(isset($dptData['Parent'])) {
                    $table_item['rowColor'] = "#C0FFC0";
                } else {
                    $table_item['rowColor'] = "#FFFFC0";
                }
            } else {
                $table_item['rowColor'] = "#FFC0C0";
            }

            $table[] = $table_item;
        }
        $form->elements[1]->values = $table;
        
        return json_encode($form);
    }

    public function GetGroupAddressData(string $ga) {
        $this->LoadGroupAddressTable();

        if ($this->groupAddressTable && array_key_exists($ga, $this->groupAddressTable)) {
            return $this->groupAddressTable[$ga];
        } else {
            return false;
        }
    }

    public function GetGroupAddressDPT(string $ga) {
        if ($data = $this->GetGroupAddressData($ga)) {
            $dpt = $data['dpt'];
            if ($dpt != '') {
                return $dpt;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    private function LoadXMLFile() {
        $result = array();

        if($this->ReadPropertyString('GroupAddressFile')) {
            $xml = base64_decode($this->ReadPropertyString('GroupAddressFile'));
            $hash = sha1($xml);

            if($this->ReadAttributeString('GroupAddressFileHash') == $hash) {
                return;
            }
            $this->WriteAttributeString('GroupAddressFileHash', $hash);

            $simplexml = simplexml_load_string($xml);
            if (isset($simplexml->GroupRange)) {
                IPS_LogMessage('KNXExtendedSplitter', 'Parse XML (Type GA)');
                $group1_list = $simplexml;
            } elseif(isset($simplexml->Project)) {
                IPS_LogMessage('KNXExtendedSplitter', 'Parse XML (Type Projekt)');
                $group1_list = $simplexml->Project->Installations->Installation->GroupAddresses->GroupRanges->GroupRange;
            } else {
                #throw new Exception("Invalid File", 1);
                IPS_LogMessage('KNXExtendedSplitter', 'Parse XML (Invalid File)');
                return array();
            }

            foreach ($group1_list as $group1) {
                $group_name_1 = (string)$group1['Name'];
                foreach ($group1->GroupRange as $group2) {
                    $group_name_2 = (string)$group2['Name'];
                    foreach ($group2->GroupAddress as $group3) {
                        $dpt = null;
                        $group_name_3 = (string)$group3['Name'];
                        $description = (string)$group3['Description'];
                        if (strpos($group3['Address'], '/') == 0) {
                            $group_address1 = ($group3['Address'] & 0x7800) >> 11;
                            $group_address2 = ($group3['Address'] & 0x700) >> 8;
                            $group_address3 = ($group3['Address'] & 0xff);
                            $group_address = "$group_address1/$group_address2/$group_address3";
                        } else {
                            $group_address = (string)$group3['Address'];
                        }
                        if (isset($group3['DatapointType'])) {
                            $dpt = (string)$group3['DatapointType'];
                        } elseif(isset($group3['DPTs'])) {
                            $dpt = (string)$group3['DPTs'];
                        }

                        $data = array(
                            'GroupName1' => $group_name_1,
                            'GroupName2' => $group_name_2,
                            'GroupName3' => $group_name_3,
                            'Description' => $description,
                            'DPT' => $dpt
                        );

                        $result[$group_address] = $data;
                    }
                }
            }
            uksort($result, array('KNXExtendedSplitter', 'SortGroupAddress'));
        }

        $this->WriteAttributeString('GroupAddressTable', json_encode($result));
    }

    private function LoadGroupAddressTable() {
        if(!$this->groupAddressTable) {
            $this->groupAddressTable = json_decode(
                $this->ReadAttributeString('GroupAddressTable'),
                true
            );
        }
    }

    public function GetDPTs() {
        return static::$dpts;
    }

    public function GetDPTData(string $dpt) {
        if (isset(static::$dpts[$dpt])) {
            return static::$dpts[$dpt];
        }

        return false;
    }

    private function SplitDPT(string $dpt) {
        if (substr($dpt, 0, 3) == 'DPT') {
            $dpt .= '-0';
        }
        return explode('-', $dpt, 3);
    }

    public function SortGroupAddress(string $a, string $b) {
        list($a1, $a2, $a3) = explode('/', $a);
        list($b1, $b2, $b3) = explode('/', $b);
        $x = 1000000 * $a1 + 10000 * $a2 + $a3;
        $y = 1000000 * $b1 + 10000 * $b2 + $b3;
        if ($x == $y) {
            return 0;
        }
        return ($x < $y) ? -1 : 1;
    }
}

require(__DIR__ . '/../dpts.php' );