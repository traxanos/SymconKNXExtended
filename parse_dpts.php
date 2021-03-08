<?php

$xml = file_get_contents(__DIR__ . '/knx_master.xml');

$dpts = array();
$formats = array();
$supported = array();
$supported[] = 'DPT-1';
$supported[] = 'DPT-2';
$supported[] = 'DPT-4';
$supported[] = 'DPT-5';
$supported[] = 'DPT-6';
$supported[] = 'DPT-7';
$supported[] = 'DPT-8';
$supported[] = 'DPT-9';
$supported[] = 'DPT-12';
$supported[] = 'DPT-13';
$supported[] = 'DPT-14';
$supported[] = 'DPT-16';
$supported[] = 'DPT-20';
$supported[] = 'DPT-21';

# spezifische subprofile
$profiles = array();
$profiles['DPST-1-5'] = '~Alert';
$profiles['DPST-1-8'] = '~ShutterMove';
$profiles['DPST-1-9'] = '~Window';
$profiles['DPST-1-17'] = '~Motion';
$profiles['DPST-1-19'] = '~Window';
$profiles['DPST-5-1'] = '~Intensity.100';
$profiles['DPST-5-3'] = '~WindDirection';


function add_format($element) {
    global $formats;

    if ($element->getName() == 'RefType') return;

    $format = array();
    $format['Type'] = $element->getName();
    foreach($element->attributes() as $key => $value) {
        $format[$key] = (string)$value;
    }
    $formats[(string)$element['Id']] = $format;

    foreach($element->EnumValue as $element) {
        add_format($element);
    }
}

$simplexml = simplexml_load_string($xml);
if (isset($simplexml->MasterData)) {
    $datapointTypes = $simplexml->MasterData->DatapointTypes->DatapointType;

    foreach ($datapointTypes as $datapointType) {
        $item = array();
        $id = (string)$datapointType['Id'];
        if (!in_array($id, $supported)) {
            continue;
        }
        $item['Name'] = (string)$datapointType['Name'];
        $item['Text'] = (string)$datapointType['Text'];
        $item['Profile'] = '';

        if ($id == 'DPT-1') {
            $item['Type'] = 'boolean';
            $item['Profile'] = '~Switch';
        } elseif($id == 'DPT-2') {
            $item['Type'] = 'integer';
            $item['Validation'] = array('Min' => 0, 'Max' => 3);
            $item['Profile'] = 'KNXE.DPT-2';
        } elseif($id == 'DPT-4') {
            $item['Type'] = 'string';
        } elseif($id == 'DPT-5' || $id == 'DPT-20' || $id == 'DPT-21') {
            $item['Type'] = 'integer';
            $item['Profile'] = '~Intensity.255';
            $item['Validation'] = array('Min' => 0, 'Max' => 255);
        } elseif($id == 'DPT-6') {
            $item['Type'] = 'integer';
            $item['Validation'] = array('Min' => -128, 'Max' => 127);
        } elseif($id == 'DPT-7') {
            $item['Type'] = 'integer';
            $item['Validation'] = array('Min' => 0, 'Max' => 65535);
        } elseif($id == 'DPT-8') {
            $item['Type'] = 'integer';
            $item['Validation'] = array('Min' => -32768, 'Max' => 32767);
        } elseif($id == 'DPT-9') {
            $item['Type'] = 'double';
            $item['Validation'] = array('Min' => -671088.64, 'Max' => 670760.96);
        } elseif($id == 'DPT-12') {
            $item['Type'] = 'integer';
            $item['Validation'] = array('Min' => 0, 'Max' => 4294967295);
        } elseif($id == 'DPT-13') {
            $item['Type'] = 'integer';
            $item['Validation'] = array('Min' => -2147483648, 'Max' => 2147483647);
        } elseif($id == 'DPT-16') {
            $item['Type'] = 'string';
        }

        $dpts[$id] = $item;
        $datapointSubtypes = $datapointType->DatapointSubtypes->DatapointSubtype;
        foreach ($datapointSubtypes as $datapointSubtype) {
            $subitem = array();
            $subid = (string)$datapointSubtype['Id'];
            $subitem['Name'] = (string)$datapointSubtype['Name'];
            $subitem['Text'] = (string)$datapointSubtype['Text'];
            $subitem['Parent'] = $id;
            $subitem['Type'] = $item['Type'];
            $subitem['Profile'] = $item['Profile'];

            if(isset($item['Validation'])) {
                $subitem['Validation'] = $item['Validation'];
            }

            # Ermittle alle Formate
            $subitem['Format'] = array();
            foreach($datapointSubtype->Format->children() as $formatElement) {
                add_format($formatElement);

                if ($formatElement->getName() == 'RefType') {
                    $subitem['Format'][] = $formats[(string)$formatElement['RefId']];
                } else {
                    $subitem['Format'][] = $formats[(string)$formatElement['Id']];
                }
            }

            if ($id == 'DPT-1') {
                $subitem['Value'] = array();
                $subitem['Value'][] = (string)$subitem['Format'][0]['Cleared'];
                $subitem['Value'][] = (string)$subitem['Format'][0]['Set'];
            }

            if ($id == 'DPT-2') {
                $subitem['Value'] = array();
                foreach(array($subitem['Format'][0]['Cleared'], $subitem['Format'][0]['Set']) as $item1) {
                    foreach(array($subitem['Format'][1]['Cleared'], $subitem['Format'][1]['Set']) as $item2) {
                        $subitem['Value'][] = "$item1, $item2";
                    }
                }
            }

            if($subid == 'DPST-5-1') {
                $subitem['Validation'] = array('Min' => 0, 'Max' => 100);
            }

            if($subid == 'DPST-5-3') {
                $subitem['Validation'] = array('Min' => 0, 'Max' => 360);
            }

            if (count($subitem['Format']) == 1 && isset($subitem['Format'][0]['Unit'])) {
                $subitem['Unit'] = $subitem['Format'][0]['Unit'];
            }

            if(isset($profiles[$subid])) {
                $subitem['Profile'] = $profiles[$subid];
            }

            unset($subitem['Format']);
            $dpts[$subid] = $subitem;
        }
    }
} else {
    throw new Exception("Invalid File", 1);
}

$content = "<?\n";
$content .= "KNXExtendedSplitter::\$dpts = ";
$content .= var_export($dpts, true);
$content .= ";\n";

print_r($dpts);
file_put_contents(__DIR__ . '/dpts.php', $content);
