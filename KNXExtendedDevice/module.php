<?php
require(__DIR__ . '/../KNXExtendedSplitter/module.php');

class KNXExtendedDevice extends IPSModule
{
    public $receiveGroupAddresses = null;
    public $receiveGroupAddresses2 = null;
    public $answerGroupAddresses = null;
    public $sendingGroupAddresses = null;
    public $actuatorScripts = null;
    public $groupAddressData = null;

    public function Create()
    {
        parent::Create();

        $this->ConnectParent('{0722B5E9-2D05-4388-B48F-6EAD4A6400CD}');
        $this->RegisterPropertyString('List', '');
    }

    public function ApplyChanges()
    {
        parent::ApplyChanges();

        $this->RegisterMessage($this->GetConnectionId(), IM_CHANGESETTINGS);
        $this->RegisterMessage($this->InstanceID, FM_CONNECT);
        $this->RegisterMessage(0, IPS_KERNELSTARTED);

        if (IPS_GetKernelRunlevel() == KR_READY) {
            $this->Init();
        }
    }

    public function MessageSink($TimeStamp, $SenderID, $Message, $Data)
    {
        $this->SendDebug('MessageSink', $SenderID . '|'. $Message, 0);
        $this->Init();
    }

    public function ReceiveData($JSONString)
    {
        $input = json_decode($JSONString, true);
        $input['Data'] = utf8_decode($input['Data']);

        if ($input['ReadRequest']) {
            $this->SendDebug("READ", $input['GroupAddress'], 0);

            $this->LoadAnswerGA();
            if($ident = $this->GetAnswerIdentForGA($input['GroupAddress'])) {
                $answerCall = json_encode(
                    array(
                        'GroupAddress' => $input['GroupAddress'],
                        'Ident' => $ident
                    )
                );

                $this->RegisterOnceTimer(
                    'Answer',
                    "IPS_RequestAction(" . $this->InstanceID . ", 'INTERNAL_SEND_ANSWER', '" . $answerCall ."');"
                );
            }
        } else {
            $this->SendDebug("RECV | " . $input['GroupAddress'], $input['Value'], 0);

            $this->LoadReceiveGA();

            if($idents = $this->GetReceiveIdentsForGA($input['GroupAddress'])) {
                foreach($idents as $ident) {
                    $status = $this->ExecuteActuatorScript($ident, $input['Value']);

                    if(!$status) {
                        SetValue($this->GetIDForIdent($ident), $input['Value']);
                    }
                }
            }
        }
    }

    private function SendValueToParent($ga, $value, $answer = false)
    {
        $output = array();
        $output['DataID'] = "{9F36EA2E-A354-116A-AF03-D80DC15111C3}";
        $output['GroupAddress'] = $ga;
        $output['Answer'] = $answer;
        $output['Value'] = $value;
        $this->SendDataToParent(json_encode($output));
    }

    private function Init()
    {
        // Reset list
        $this->receiveGroupAddresses = array();
        $this->receiveGroupAddresses2 = array();
        $this->answerGroupAddresses = array();
        $this->sendingGroupAddresses = array();
        $this->actuatorScripts = array();

        $recvGA = array();
        $sendGA = array();
        $answerGA = array();

        if (!isset($this->groupAddressData)) {
            $this->groupAddressData = array();
            $groupAddresses = array();
            $list = json_decode($this->ReadPropertyString('List'), true);
            if ($list) {
                foreach ($list as $data) {
                    $dptData = false;
                    $groupData = false;
                    if ($data['StatusGA']) {
                        if (!$statusGroupData = $this->GetGroupAddressData($data['StatusGA'])) {
                            $this->LogMessage('Invalid GA ' . $data['StatusGA'], KL_ERROR);
                            continue;
                        }
                        if (!$statusDPTData = $this->GetDPTData($statusGroupData['DPT'])) {
                            $this->LogMessage('Invalid ' . $statusGroupData['DPT'] . ' for ' . $data['StatusGA'], KL_ERROR);
                            continue;
                        }

                        $dptData = $statusDPTData;
                        $groupData = $statusGroupData;
                    }
                    if ($data['ControlGA']) {
                        if (!$controlGroupData = $this->GetGroupAddressData($data['ControlGA'])) {
                            $this->LogMessage('Invalid GA ' . $data['ControlGA'], KL_ERROR);
                            continue;
                        }
                        if (!$controlDPTData = $this->GetDPTData($controlGroupData['DPT'])) {
                            $this->LogMessage('Invalid ' . $controlGroupData['DPT'] . ' for ' . $data['ControlGA'], KL_ERROR);
                            continue;
                        }

                        $dptData = $controlDPTData;
                        $groupData = $controlGroupData;
                    }

                    if (!$data['ControlGA'] && !$data['StatusGA']) {
                        $this->LogMessage('Missing GA ' . $data['Ident'], KL_ERROR);
                        continue;
                    }

                    // Register Addresses
                    if (isset($data['ActuatorScript']) && $data['ActuatorScript'] > 0) {
                        $actor = true;
                        $this->RegisterAnswerGA($data['StatusGA'], $data['Ident']);
                        $this->RegisterSendingGA($data['StatusGA'], $data['Ident']);
                        $this->RegisterReceiveGA($data['ControlGA'], $data['Ident']);
                        $this->RegisterActuatorScript($data['Ident'], $data['ActuatorScript']);
                    } else {
                        $actor = false;
                        $this->RegisterReceiveGA($data['StatusGA'], $data['Ident']);
                        $this->RegisterSendingGA($data['ControlGA'], $data['Ident']);
                    }

                    // Build Variable
                    $this->MaintainProfile($dptData['Profile']);
                    $this->MaintainVariable(
                        $data['Ident'],
                        $groupData['GroupName3'],
                        $this->GetVariableTypByType($dptData['Type']),
                        $dptData['Profile'],
                        0,
                        true
                    );

                    $this->MaintainAction(
                        $data['Ident'],
                        (($actor && $data['StatusGA'] != '' ) ||
                            (!$actor && $data['ControlGA'] != ''))
                    );
                }
            }

            $this->SetBuffer('receiveGroupAddresses', json_encode($this->receiveGroupAddresses));
            $this->SetBuffer('sendingGroupAddresses', json_encode($this->sendingGroupAddresses));
            $this->SetBuffer('answerGroupAddresses', json_encode($this->answerGroupAddresses));
            $this->SetBuffer('actuatorScripts', json_encode($this->actuatorScripts));

            $this->SetGroupAddressFilter();
        }
    }

    private function SetGroupAddressFilter() {
        $addresses = array_merge(
            array_keys($this->receiveGroupAddresses),
            array_keys($this->answerGroupAddresses)
        );
        $addresses = array_unique($addresses);
        $filter = ".*(" . implode('|', $addresses) .").*";
        $filter = str_replace('/', '\\\\/', $filter);
        $this->SetReceiveDataFilter($filter);
    }

    private function SendAnswer(string $ga, string $ident) {
        $varId = $this->GetIDForIdent($ident);
        if($varId) {
            $value = GetValue($varId);
            $this->SendValueToParent($ga, $value, true);
        }
    }

    public function RequestAction($ident, $value) {
        // Spezialhandling
        if ($ident == 'INTERNAL_SEND_ANSWER') {
            $value = json_decode($value);
            $this->SendAnswer($value->GroupAddress, $value->Ident);
            return;
        }

        if (!$this->HasActiveParent()) {
            return;
        }
        
        $this->SendDebug("RequestAction: $ident", $value, 0);
        $this->LoadActuatorScripts();
        if($scriptId = @$this->actuatorScripts[$ident]) {
            // Gibt es ein Aktorscript dann muss sich dieses um alles kümmern
            $this->ExecuteActuatorScript($ident, $value);
        } else {
            $this->LoadSendingGA();
            $this->LoadReceiveGA();
            
            $variableId = $this->GetIDForIdent($ident);
            $sendingGA = $this->GetSendingGAForIdent($ident);
            $receiveGA = $this->GetReceiveGAForIdent($ident);

            if($sendingGA) {
                // Sende auf Bus
                $this->SendValueToParent($sendingGA, $value);
            }

            // Sollte es keine StatusGA geben
            // Oder ist ControlGA und StatusGA identisch
            // Dann übernehme den Wert direkt
            if (!$receiveGA || $sendingGA == $receiveGA) {
                SetValue($variableId, $value);
            }
        }
    }

    public function SetActuatorValue(string $ident, $value) {
        $variableId = $this->GetIDForIdent($ident);

        SetValue($variableId, $value);

        $this->LoadSendingGA();
        $this->LoadReceiveGA();
        $sendingGA = $this->GetSendingGAForIdent($ident);
        $receiveGA = $this->GetReceiveGAForIdent($ident);

        // Um einen Loop zu vermeiden darf der Status
        // nur bei unterschiedlichen GAs gesendet werden.
        if ($sendingGA != $receiveGA) {
            $this->SendValueToBus($ident);
        }
    }
    public function SetActuatorValueBoolean(string $ident, bool $value) {
        $this->SetActuatorValue($ident, $value);
    }
    public function SetActuatorValueInteger(string $ident, int $value) {
        $this->SetActuatorValue($ident, $value);
    }
    public function SetActuatorValueFloat(string $ident, float $value) {
        $this->SetActuatorValue($ident, $value);
    }
    public function SetActuatorValueString(string $ident, string $value) {
        $this->SetActuatorValue($ident, $value);
    }

    public function SendValueToBus(string $ident) {
        $this->LoadSendingGA();

        $value = GetValue($this->GetIDForIdent($ident));

        $this->SendDebug("SendValueToBus: $ident", $value, 0);

        if($ga = $this->GetSendingGAForIdent($ident)) {
            $this->SendValueToParent($ga, $value);
        }
    }

    private function GetGroupAddressData(string $groupAddress) {
        if ($splitterId = $this->GetConnectionId()) {
            return KNXE_GetGroupAddressData($splitterId, $groupAddress);
        }

        return false;
    }

    private function GetDPTData(string $dpt) {
        if ($data = @KNXExtendedSplitter::$dpts[$dpt]) {
            return $data;
        }

        return false;
    }

    private function GetConnectionId()
    {
        $instance = IPS_GetInstance($this->InstanceID);
        return ($instance['ConnectionID'] > 0) ? $instance['ConnectionID'] : false;
    }

    private function LoadReceiveGA()
    {
        if (!$this->receiveGroupAddresses)
        {
            $this->receiveGroupAddresses = json_decode(
                $this->GetBuffer('receiveGroupAddresses'), true
            );
            foreach ($this->receiveGroupAddresses as $ga => $idents) {
                foreach ($idents as $ident) {
                    $this->receiveGroupAddresses2[$ident] = $ga;
                }
            }
        }
    }

    private function LoadAnswerGA()
    {
        if (!$this->answerGroupAddresses)
        {
            $this->answerGroupAddresses = json_decode(
                $this->GetBuffer('answerGroupAddresses'), true
            );
        }
    }

    private function LoadSendingGA()
    {
        if (!$this->sendingGroupAddresses)
        {
            $this->sendingGroupAddresses = json_decode(
                $this->GetBuffer('sendingGroupAddresses'), true
            );
        }
    }

    private function GetReceiveIdentsForGA($ga) {
        $this->LoadReceiveGA();
        if (array_key_exists($ga, $this->receiveGroupAddresses)) {
            return $this->receiveGroupAddresses[$ga];
        }

        return false;
    }

    private function GetAnswerIdentForGA($ga) {
        $this->LoadAnswerGA();
        if (array_key_exists($ga, $this->answerGroupAddresses)) {
            return $this->answerGroupAddresses[$ga];
        }

        return false;
    }

    private function GetReceiveGAForIdent($ident) {
        $this->LoadReceiveGA();
        if (is_array($this->receiveGroupAddresses2) && array_key_exists($ident, $this->receiveGroupAddresses2)) {
            return $this->receiveGroupAddresses2[$ident];
        }

        return false;
    }

    private function GetSendingGAForIdent($ident) {
        $this->LoadSendingGA();
        if (is_array($this->sendingGroupAddresses) && array_key_exists($ident, $this->sendingGroupAddresses)) {
            return $this->sendingGroupAddresses[$ident];
        }

        return false;
    }

    private function LoadActuatorScripts()
    {
        if (!$this->actuatorScripts)
        {
            $this->actuatorScripts = json_decode(
                $this->GetBuffer('actuatorScripts'), true
            );
        }
    }

    private function RegisterReceiveGA($ga, $ident)
    {
        if (!$ga) {
            return false;
        }

        if (!isset($this->receiveGroupAddresses[$ga])) {
            $this->receiveGroupAddresses[$ga] = array();
        }

        $this->receiveGroupAddresses[$ga][] = $ident;

        return true;
    }

    private function RegisterAnswerGA(string $ga, string $ident)
    {
        if (!$ga) {
            return false;
        }

        $this->answerGroupAddresses[$ga] = $ident;

        return true;
    }

    private function RegisterSendingGA(string $ga, string $ident)
    {
        if (!$ga) {
            return false;
        }

        $this->sendingGroupAddresses[$ident] = $ga;
        return true;
    }

    private function RegisterActuatorScript(string $ident, int $scriptId)
    {
        if (!$ident) {
            return false;
        }

        $this->SendDebug('RegisterActuatorScript', "$ident = $scriptId", 0);
        $this->actuatorScripts[$ident] = $scriptId;
        return true;
    }

    private function GetVariableTypByType(string $type) {
        if ($type == 'boolean') {
            return 0;
        } elseif ($type == 'integer') {
            return 1;
        } elseif ($type == 'double') {
            return 2;
        }

        return 3;
    }

    private function ExecuteActuatorScript(string $ident, $value) {
        $this->LoadActuatorScripts();

        if($scriptId = @$this->actuatorScripts[$ident]) {
            $this->SendDebug("ExecuteActuatorScript $ident", $value, 0);
            if(IPS_ScriptExists($scriptId)) {
                $data = array(
                    'IDENT' => $ident,
                    'VALUE' => $value,
                    'VARIABLE' => $this->GetIDForIdent($ident),
                    'INSTANCE' => $this->InstanceID
                );
                $data = serialize($data);
                $execute = "IPS_RunScriptEx($scriptId, unserialize('$data'));";
                $this->RegisterOnceTimer('ExecuteActuatorScript', $execute);

                return true;
            }
        }

        return false;
    }

    private function MaintainProfile(string $dpt) {
        if ($dpt == 'KNXE.DPT-2') {
            if(!IPS_VariableProfileExists("KNXE.DPT-2")) {
               IPS_CreateVariableProfile("KNXE.DPT-2", 1); 
            }
            IPS_SetVariableProfileAssociation("KNXE.DPT-2", 0, "Keine Priorität, Aus", "", -1);
            IPS_SetVariableProfileAssociation("KNXE.DPT-2", 1, "Keine Priorität, An", "", -1);
            IPS_SetVariableProfileAssociation("KNXE.DPT-2", 2, "Priorität, Aus", "", -1);
            IPS_SetVariableProfileAssociation("KNXE.DPT-2", 3, "Priorität, An", "", -1);
            IPS_SetVariableProfileIcon("KNXE.DPT-2", "Execute");
            IPS_SetVariableProfileValues("KNXE.DPT-2", 0, 4, 0);
        }
    }
}
