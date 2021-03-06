<?php

class KNXExtendedMonitor extends IPSModule
{
    public function Create()
    {
        parent::Create();

        $this->ConnectParent('{0722B5E9-2D05-4388-B48F-6EAD4A6400CD}');
    }

    public function ReceiveData($JSONString)
    {
        $input = json_decode($JSONString, true);
        $input['Data'] = utf8_decode($input['Data']);

        $this->DebugReceiveData($input);
    }

    public function Test($value) {
        $output = array();
        $output['DataID'] = "{9F36EA2E-A354-116A-AF03-D80DC15111C3}";
        $output['GroupAddress'] = '0/0/7';
        $output['Value'] = $value;
        $this->SendDataToParent(json_encode($output));
    }

    private function DebugReceiveData($input) {
        if (isset($input['GroupName'])) {
            $msg = $input['GroupName'] .' (' . $input['GroupAddress'] . ')';
        } else {
            $msg = $input['GroupAddress'];
        }

        if ($input['ReadRequest']) { // Read
            $this->SendDebug($msg, 'ReadRequest', 0);
        } else {
            if (is_bool($input['Value'])) {
                $input['Value'] = (int)$input['Value'];
            }
            $this->SendDebug($msg, $input['Value']. ' (' . $input['DPT'] . ')', 0);
        }
    }
}
