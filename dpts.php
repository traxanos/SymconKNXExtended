<?
KNXExtendedSplitter::$dpts = array (
  'DPT-1' => 
  array (
    'Name' => '1.xxx',
    'Text' => '1-bit',
    'Profile' => '~Switch',
    'Type' => 'boolean',
  ),
  'DPST-1-1' => 
  array (
    'Name' => 'DPT_Switch',
    'Text' => 'switch',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Off',
      1 => 'On',
    ),
  ),
  'DPST-1-2' => 
  array (
    'Name' => 'DPT_Bool',
    'Text' => 'boolean',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'False',
      1 => 'True',
    ),
  ),
  'DPST-1-3' => 
  array (
    'Name' => 'DPT_Enable',
    'Text' => 'enable',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Disable',
      1 => 'Enable',
    ),
  ),
  'DPST-1-4' => 
  array (
    'Name' => 'DPT_Ramp',
    'Text' => 'ramp',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'No ramp',
      1 => 'Ramp',
    ),
  ),
  'DPST-1-5' => 
  array (
    'Name' => 'DPT_Alarm',
    'Text' => 'alarm',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Alert',
    'Value' => 
    array (
      0 => 'No alarm',
      1 => 'Alarm',
    ),
  ),
  'DPST-1-6' => 
  array (
    'Name' => 'DPT_BinaryValue',
    'Text' => 'binary value',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Low',
      1 => 'High',
    ),
  ),
  'DPST-1-7' => 
  array (
    'Name' => 'DPT_Step',
    'Text' => 'step',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Decrease',
      1 => 'Increase',
    ),
  ),
  'DPST-1-8' => 
  array (
    'Name' => 'DPT_UpDown',
    'Text' => 'up/down',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~ShutterMove',
    'Value' => 
    array (
      0 => 'Up',
      1 => 'Down',
    ),
  ),
  'DPST-1-9' => 
  array (
    'Name' => 'DPT_OpenClose',
    'Text' => 'open/close',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Window',
    'Value' => 
    array (
      0 => 'Open',
      1 => 'Close',
    ),
  ),
  'DPST-1-10' => 
  array (
    'Name' => 'DPT_Start',
    'Text' => 'start/stop',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Stop',
      1 => 'Start',
    ),
  ),
  'DPST-1-11' => 
  array (
    'Name' => 'DPT_State',
    'Text' => 'state',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Inactive',
      1 => 'Active',
    ),
  ),
  'DPST-1-12' => 
  array (
    'Name' => 'DPT_Invert',
    'Text' => 'invert',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Not inverted',
      1 => 'Inverted',
    ),
  ),
  'DPST-1-13' => 
  array (
    'Name' => 'DPT_DimSendStyle',
    'Text' => 'dim send style',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Start/stop',
      1 => 'Cyclically',
    ),
  ),
  'DPST-1-14' => 
  array (
    'Name' => 'DPT_InputSource',
    'Text' => 'input source',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Fixed',
      1 => 'Calculated',
    ),
  ),
  'DPST-1-15' => 
  array (
    'Name' => 'DPT_Reset',
    'Text' => 'reset',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'no action (dummy)',
      1 => 'reset command (trigger)',
    ),
  ),
  'DPST-1-16' => 
  array (
    'Name' => 'DPT_Ack',
    'Text' => 'acknowledge',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'no action (dummy)',
      1 => 'acknowledge command (trigger), e.g. for alarming',
    ),
  ),
  'DPST-1-17' => 
  array (
    'Name' => 'DPT_Trigger',
    'Text' => 'trigger',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Motion',
    'Value' => 
    array (
      0 => 'trigger (0)',
      1 => 'trigger (1)',
    ),
  ),
  'DPST-1-18' => 
  array (
    'Name' => 'DPT_Occupancy',
    'Text' => 'occupancy',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'not occupied',
      1 => 'occupied',
    ),
  ),
  'DPST-1-19' => 
  array (
    'Name' => 'DPT_Window_Door',
    'Text' => 'window/door',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Window',
    'Value' => 
    array (
      0 => 'closed',
      1 => 'open',
    ),
  ),
  'DPST-1-21' => 
  array (
    'Name' => 'DPT_LogicalFunction',
    'Text' => 'logical function',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'logical function OR',
      1 => 'logical function AND',
    ),
  ),
  'DPST-1-22' => 
  array (
    'Name' => 'DPT_Scene_AB',
    'Text' => 'scene',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'scene A',
      1 => 'scene B',
    ),
  ),
  'DPST-1-23' => 
  array (
    'Name' => 'DPT_ShutterBlinds_Mode',
    'Text' => 'shutter/blinds mode',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'only move Up/Down mode (shutter)',
      1 => 'move Up/Down + StepStop mode (blind)',
    ),
  ),
  'DPST-1-24' => 
  array (
    'Name' => 'DPT_DayNight',
    'Text' => 'day/night',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'Day',
      1 => 'Night',
    ),
  ),
  'DPST-1-100' => 
  array (
    'Name' => 'DPT_Heat_Cool',
    'Text' => 'cooling/heating',
    'Parent' => 'DPT-1',
    'Type' => 'boolean',
    'Profile' => '~Switch',
    'Value' => 
    array (
      0 => 'cooling',
      1 => 'heating',
    ),
  ),
  'DPT-2' => 
  array (
    'Name' => '2.xxx',
    'Text' => '1-bit controlled',
    'Profile' => 'KNXE.DPT-2',
    'Type' => 'integer',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
  ),
  'DPST-2-1' => 
  array (
    'Name' => 'DPT_Switch_Control',
    'Text' => 'switch control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, Off',
      1 => 'no control, On',
      2 => 'control, Off',
      3 => 'control, On',
    ),
  ),
  'DPST-2-2' => 
  array (
    'Name' => 'DPT_Bool_Control',
    'Text' => 'boolean control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, False',
      1 => 'no control, True',
      2 => 'control, False',
      3 => 'control, True',
    ),
  ),
  'DPST-2-3' => 
  array (
    'Name' => 'DPT_Enable_Control',
    'Text' => 'enable control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, Disable',
      1 => 'no control, Enable',
      2 => 'control, Disable',
      3 => 'control, Enable',
    ),
  ),
  'DPST-2-4' => 
  array (
    'Name' => 'DPT_Ramp_Control',
    'Text' => 'ramp control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, No ramp',
      1 => 'no control, Ramp',
      2 => 'control, No ramp',
      3 => 'control, Ramp',
    ),
  ),
  'DPST-2-5' => 
  array (
    'Name' => 'DPT_Alarm_Control',
    'Text' => 'alarm control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, No alarm',
      1 => 'no control, Alarm',
      2 => 'control, No alarm',
      3 => 'control, Alarm',
    ),
  ),
  'DPST-2-6' => 
  array (
    'Name' => 'DPT_BinaryValue_Control',
    'Text' => 'binary value control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, Low',
      1 => 'no control, High',
      2 => 'control, Low',
      3 => 'control, High',
    ),
  ),
  'DPST-2-7' => 
  array (
    'Name' => 'DPT_Step_Control',
    'Text' => 'step control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, Decrease',
      1 => 'no control, Increase',
      2 => 'control, Decrease',
      3 => 'control, Increase',
    ),
  ),
  'DPST-2-8' => 
  array (
    'Name' => 'DPT_Direction1_Control',
    'Text' => 'direction control 1',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, Up',
      1 => 'no control, Down',
      2 => 'control, Up',
      3 => 'control, Down',
    ),
  ),
  'DPST-2-9' => 
  array (
    'Name' => 'DPT_Direction2_Control',
    'Text' => 'direction control 2',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, Open',
      1 => 'no control, Close',
      2 => 'control, Open',
      3 => 'control, Close',
    ),
  ),
  'DPST-2-10' => 
  array (
    'Name' => 'DPT_Start_Control',
    'Text' => 'start control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, Stop',
      1 => 'no control, Start',
      2 => 'control, Stop',
      3 => 'control, Start',
    ),
  ),
  'DPST-2-11' => 
  array (
    'Name' => 'DPT_State_Control',
    'Text' => 'state control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, Inactive',
      1 => 'no control, Active',
      2 => 'control, Inactive',
      3 => 'control, Active',
    ),
  ),
  'DPST-2-12' => 
  array (
    'Name' => 'DPT_Invert_Control',
    'Text' => 'invert control',
    'Parent' => 'DPT-2',
    'Type' => 'integer',
    'Profile' => 'KNXE.DPT-2',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 3,
    ),
    'Value' => 
    array (
      0 => 'no control, Not inverted',
      1 => 'no control, Inverted',
      2 => 'control, Not inverted',
      3 => 'control, Inverted',
    ),
  ),
  'DPT-4' => 
  array (
    'Name' => '4.xxx',
    'Text' => 'character',
    'Profile' => '',
    'Type' => 'string',
  ),
  'DPST-4-1' => 
  array (
    'Name' => 'DPT_Char_ASCII',
    'Text' => 'character (ASCII)',
    'Parent' => 'DPT-4',
    'Type' => 'string',
    'Profile' => '',
  ),
  'DPST-4-2' => 
  array (
    'Name' => 'DPT_Char_8859_1',
    'Text' => 'character (ISO 8859-1)',
    'Parent' => 'DPT-4',
    'Type' => 'string',
    'Profile' => '',
  ),
  'DPT-5' => 
  array (
    'Name' => '5.xxx',
    'Text' => '8-bit unsigned value',
    'Profile' => '~Intensity.255',
    'Type' => 'integer',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-5-1' => 
  array (
    'Name' => 'DPT_Scaling',
    'Text' => 'percentage (0..100%)',
    'Parent' => 'DPT-5',
    'Type' => 'integer',
    'Profile' => '~Intensity.100',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 100,
    ),
    'Unit' => '%',
  ),
  'DPST-5-3' => 
  array (
    'Name' => 'DPT_Angle',
    'Text' => 'angle (degrees)',
    'Parent' => 'DPT-5',
    'Type' => 'integer',
    'Profile' => '~WindDirection',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 360,
    ),
    'Unit' => '°',
  ),
  'DPST-5-4' => 
  array (
    'Name' => 'DPT_Percent_U8',
    'Text' => 'percentage (0..255%)',
    'Parent' => 'DPT-5',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
    'Unit' => '%',
  ),
  'DPST-5-5' => 
  array (
    'Name' => 'DPT_DecimalFactor',
    'Text' => 'ratio (0..255)',
    'Parent' => 'DPT-5',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
    'Unit' => '',
  ),
  'DPST-5-6' => 
  array (
    'Name' => 'DPT_Tariff',
    'Text' => 'tariff (0..255)',
    'Parent' => 'DPT-5',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
    'Unit' => '',
  ),
  'DPST-5-10' => 
  array (
    'Name' => 'DPT_Value_1_Ucount',
    'Text' => 'counter pulses (0..255)',
    'Parent' => 'DPT-5',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
    'Unit' => 'counter pulses',
  ),
  'DPST-5-100' => 
  array (
    'Name' => 'DPT_FanStage',
    'Text' => 'fan stage (0..255)',
    'Parent' => 'DPT-5',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
    'Unit' => 'fan stage',
  ),
  'DPT-6' => 
  array (
    'Name' => '6.xxx',
    'Text' => '8-bit signed value',
    'Profile' => '',
    'Type' => 'integer',
    'Validation' => 
    array (
      'Min' => -128,
      'Max' => 127,
    ),
  ),
  'DPST-6-1' => 
  array (
    'Name' => 'DPT_Percent_V8',
    'Text' => 'percentage (-128..127%)',
    'Parent' => 'DPT-6',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -128,
      'Max' => 127,
    ),
    'Unit' => '%',
  ),
  'DPST-6-10' => 
  array (
    'Name' => 'DPT_Value_1_Count',
    'Text' => 'counter pulses (-128..127)',
    'Parent' => 'DPT-6',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -128,
      'Max' => 127,
    ),
    'Unit' => 'counter pulses',
  ),
  'DPST-6-20' => 
  array (
    'Name' => 'DPT_Status_Mode3',
    'Text' => 'status with mode',
    'Parent' => 'DPT-6',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -128,
      'Max' => 127,
    ),
  ),
  'DPT-7' => 
  array (
    'Name' => '7.xxx',
    'Text' => '2-byte unsigned value',
    'Profile' => '',
    'Type' => 'integer',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
  ),
  'DPST-7-1' => 
  array (
    'Name' => 'DPT_Value_2_Ucount',
    'Text' => 'pulses',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'pulses',
  ),
  'DPST-7-2' => 
  array (
    'Name' => 'DPT_TimePeriodMsec',
    'Text' => 'time (ms)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'ms',
  ),
  'DPST-7-3' => 
  array (
    'Name' => 'DPT_TimePeriod10Msec',
    'Text' => 'time (10 ms)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'ms',
  ),
  'DPST-7-4' => 
  array (
    'Name' => 'DPT_TimePeriod100Msec',
    'Text' => 'time (100 ms)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'ms',
  ),
  'DPST-7-5' => 
  array (
    'Name' => 'DPT_TimePeriodSec',
    'Text' => 'time (s)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 's',
  ),
  'DPST-7-6' => 
  array (
    'Name' => 'DPT_TimePeriodMin',
    'Text' => 'time (min)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'min',
  ),
  'DPST-7-7' => 
  array (
    'Name' => 'DPT_TimePeriodHrs',
    'Text' => 'time (h)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'h',
  ),
  'DPST-7-10' => 
  array (
    'Name' => 'DPT_PropDataType',
    'Text' => 'property data type',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
  ),
  'DPST-7-11' => 
  array (
    'Name' => 'DPT_Length_mm',
    'Text' => 'length (mm)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'mm',
  ),
  'DPST-7-12' => 
  array (
    'Name' => 'DPT_UElCurrentmA',
    'Text' => 'current (mA)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'mA',
  ),
  'DPST-7-13' => 
  array (
    'Name' => 'DPT_Brightness',
    'Text' => 'brightness (lux)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'lux',
  ),
  'DPST-7-600' => 
  array (
    'Name' => 'DPT_Absolute_Colour_Temperature',
    'Text' => 'absolute colour temperature (K)',
    'Parent' => 'DPT-7',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 65535,
    ),
    'Unit' => 'K',
  ),
  'DPT-8' => 
  array (
    'Name' => '8.xxx',
    'Text' => '2-byte signed value',
    'Profile' => '',
    'Type' => 'integer',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
  ),
  'DPST-8-1' => 
  array (
    'Name' => 'DPT_Value_2_Count',
    'Text' => 'pulses difference',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => 'pulses',
  ),
  'DPST-8-2' => 
  array (
    'Name' => 'DPT_DeltaTimeMsec',
    'Text' => 'time lag (ms)',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => 'ms',
  ),
  'DPST-8-3' => 
  array (
    'Name' => 'DPT_DeltaTime10Msec',
    'Text' => 'time lag(10 ms)',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => 'ms',
  ),
  'DPST-8-4' => 
  array (
    'Name' => 'DPT_DeltaTime100Msec',
    'Text' => 'time lag (100 ms)',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => 'ms',
  ),
  'DPST-8-5' => 
  array (
    'Name' => 'DPT_DeltaTimeSec',
    'Text' => 'time lag (s)',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => 's',
  ),
  'DPST-8-6' => 
  array (
    'Name' => 'DPT_DeltaTimeMin',
    'Text' => 'time lag (min)',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => 'min',
  ),
  'DPST-8-7' => 
  array (
    'Name' => 'DPT_DeltaTimeHrs',
    'Text' => 'time lag (h)',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => 'h',
  ),
  'DPST-8-10' => 
  array (
    'Name' => 'DPT_Percent_V16',
    'Text' => 'percentage difference (%)',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => '%',
  ),
  'DPST-8-11' => 
  array (
    'Name' => 'DPT_Rotation_Angle',
    'Text' => 'rotation angle (°)',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => '°',
  ),
  'DPST-8-12' => 
  array (
    'Name' => 'DPT_Length_m',
    'Text' => 'length (m)',
    'Parent' => 'DPT-8',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -32768,
      'Max' => 32767,
    ),
    'Unit' => 'm',
  ),
  'DPT-9' => 
  array (
    'Name' => '9.xxx',
    'Text' => '2-byte float value',
    'Profile' => '',
    'Type' => 'double',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
  ),
  'DPST-9-1' => 
  array (
    'Name' => 'DPT_Value_Temp',
    'Text' => 'temperature (°C)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => '°C',
  ),
  'DPST-9-2' => 
  array (
    'Name' => 'DPT_Value_Tempd',
    'Text' => 'temperature difference (K)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'K',
  ),
  'DPST-9-3' => 
  array (
    'Name' => 'DPT_Value_Tempa',
    'Text' => 'kelvin/hour (K/h)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'K/h',
  ),
  'DPST-9-4' => 
  array (
    'Name' => 'DPT_Value_Lux',
    'Text' => 'lux (Lux)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'Lux',
  ),
  'DPST-9-5' => 
  array (
    'Name' => 'DPT_Value_Wsp',
    'Text' => 'speed (m/s)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'm/s',
  ),
  'DPST-9-6' => 
  array (
    'Name' => 'DPT_Value_Pres',
    'Text' => 'pressure (Pa)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'Pa',
  ),
  'DPST-9-7' => 
  array (
    'Name' => 'DPT_Value_Humidity',
    'Text' => 'humidity (%)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => '%',
  ),
  'DPST-9-8' => 
  array (
    'Name' => 'DPT_Value_AirQuality',
    'Text' => 'parts/million (ppm)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'ppm',
  ),
  'DPST-9-9' => 
  array (
    'Name' => 'DPT_Value_AirFlow',
    'Text' => 'air flow (m³/h)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'm³/h',
  ),
  'DPST-9-10' => 
  array (
    'Name' => 'DPT_Value_Time1',
    'Text' => 'time (s)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 's',
  ),
  'DPST-9-11' => 
  array (
    'Name' => 'DPT_Value_Time2',
    'Text' => 'time (ms)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'ms',
  ),
  'DPST-9-20' => 
  array (
    'Name' => 'DPT_Value_Volt',
    'Text' => 'voltage (mV)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'mV',
  ),
  'DPST-9-21' => 
  array (
    'Name' => 'DPT_Value_Curr',
    'Text' => 'current (mA)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'mA',
  ),
  'DPST-9-22' => 
  array (
    'Name' => 'DPT_PowerDensity',
    'Text' => 'power density (W/m²)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'W/m²',
  ),
  'DPST-9-23' => 
  array (
    'Name' => 'DPT_KelvinPerPercent',
    'Text' => 'kelvin/percent (K/%)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'K/%',
  ),
  'DPST-9-24' => 
  array (
    'Name' => 'DPT_Power',
    'Text' => 'power (kW)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'kW',
  ),
  'DPST-9-25' => 
  array (
    'Name' => 'DPT_Value_Volume_Flow',
    'Text' => 'volume flow (l/h)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'l/h',
  ),
  'DPST-9-26' => 
  array (
    'Name' => 'DPT_Rain_Amount',
    'Text' => 'rain amount (l/m²)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'l/m²',
  ),
  'DPST-9-27' => 
  array (
    'Name' => 'DPT_Value_Temp_F',
    'Text' => 'temperature (°F)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => '°F',
  ),
  'DPST-9-28' => 
  array (
    'Name' => 'DPT_Value_Wsp_kmh',
    'Text' => 'wind speed (km/h)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'km/h',
  ),
  'DPST-9-29' => 
  array (
    'Name' => 'DPT_Value_Absolute_Humidity',
    'Text' => 'absolute humidity (g/m³)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'g/m³',
  ),
  'DPST-9-30' => 
  array (
    'Name' => 'DPT_Concentration_µgm3',
    'Text' => 'concentration (µg/m³)',
    'Parent' => 'DPT-9',
    'Type' => 'double',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -671088.64,
      'Max' => 670760.96,
    ),
    'Unit' => 'µg/m³',
  ),
  'DPT-12' => 
  array (
    'Name' => '12.xxx',
    'Text' => '4-byte unsigned value',
    'Profile' => '',
    'Type' => 'integer',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 4294967295,
    ),
  ),
  'DPST-12-1' => 
  array (
    'Name' => 'DPT_Value_4_Ucount',
    'Text' => 'counter pulses (unsigned)',
    'Parent' => 'DPT-12',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 4294967295,
    ),
    'Unit' => 'counter pulses',
  ),
  'DPST-12-100' => 
  array (
    'Name' => 'DPT_LongTimePeriod_Sec',
    'Text' => 'counter timesec (s)',
    'Parent' => 'DPT-12',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 4294967295,
    ),
    'Unit' => 's',
  ),
  'DPST-12-101' => 
  array (
    'Name' => 'DPT_LongTimePeriod_Min',
    'Text' => 'counter timemin (min)',
    'Parent' => 'DPT-12',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 4294967295,
    ),
    'Unit' => 'min',
  ),
  'DPST-12-102' => 
  array (
    'Name' => 'DPT_LongTimePeriod_Hrs',
    'Text' => 'counter timehrs (h)',
    'Parent' => 'DPT-12',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 4294967295,
    ),
    'Unit' => 'h',
  ),
  'DPST-12-1200' => 
  array (
    'Name' => 'DPT_VolumeLiquid_Litre',
    'Text' => 'volume liquid (l)',
    'Parent' => 'DPT-12',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 4294967295,
    ),
    'Unit' => 'l',
  ),
  'DPST-12-1201' => 
  array (
    'Name' => 'DPT_Volume_m³',
    'Text' => 'volume (m³)',
    'Parent' => 'DPT-12',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 4294967295,
    ),
    'Unit' => 'm³',
  ),
  'DPT-13' => 
  array (
    'Name' => '13.xxx',
    'Text' => '4-byte signed value',
    'Profile' => '',
    'Type' => 'integer',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
  ),
  'DPST-13-1' => 
  array (
    'Name' => 'DPT_Value_4_Count',
    'Text' => 'counter pulses (signed)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'counter pulses',
  ),
  'DPST-13-2' => 
  array (
    'Name' => 'DPT_FlowRate_m3/h',
    'Text' => 'flow rate (m³/h)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'm³/h',
  ),
  'DPST-13-10' => 
  array (
    'Name' => 'DPT_ActiveEnergy',
    'Text' => 'active energy (Wh)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'Wh',
  ),
  'DPST-13-11' => 
  array (
    'Name' => 'DPT_ApparantEnergy',
    'Text' => 'apparant energy (VAh)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'VAh',
  ),
  'DPST-13-12' => 
  array (
    'Name' => 'DPT_ReactiveEnergy',
    'Text' => 'reactive energy (VARh)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'VARh',
  ),
  'DPST-13-13' => 
  array (
    'Name' => 'DPT_ActiveEnergy_kWh',
    'Text' => 'active energy (kWh)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'kWh',
  ),
  'DPST-13-14' => 
  array (
    'Name' => 'DPT_ApparantEnergy_kVAh',
    'Text' => 'apparant energy (kVAh)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'kVAh',
  ),
  'DPST-13-15' => 
  array (
    'Name' => 'DPT_ReactiveEnergy_kVARh',
    'Text' => 'reactive energy (kVARh)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'kVARh',
  ),
  'DPST-13-16' => 
  array (
    'Name' => 'DPT_ActiveEnergy_MWh',
    'Text' => 'active energy (MWh)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'MWh',
  ),
  'DPST-13-100' => 
  array (
    'Name' => 'DPT_LongDeltaTimeSec',
    'Text' => 'time lag (s)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 's',
  ),
  'DPST-13-1200' => 
  array (
    'Name' => 'DPT_DeltaVolumeLiquid_Litre ',
    'Text' => 'delta volume liquid (l)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'l',
  ),
  'DPST-13-1201' => 
  array (
    'Name' => 'DPT_DeltaVolume_m³',
    'Text' => 'delta volume (m³)',
    'Parent' => 'DPT-13',
    'Type' => 'integer',
    'Profile' => '',
    'Validation' => 
    array (
      'Min' => -2147483648,
      'Max' => 2147483647,
    ),
    'Unit' => 'm³',
  ),
  'DPT-14' => 
  array (
    'Name' => '14.xxx',
    'Text' => '4-byte float value',
    'Profile' => '',
  ),
  'DPST-14-0' => 
  array (
    'Name' => 'DPT_Value_Acceleration',
    'Text' => 'acceleration (m/s²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'm/s²',
  ),
  'DPST-14-1' => 
  array (
    'Name' => 'DPT_Value_Acceleration_Angular',
    'Text' => 'angular acceleration (rad/s²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'rad/s²',
  ),
  'DPST-14-2' => 
  array (
    'Name' => 'DPT_Value_Activation_Energy',
    'Text' => 'activation energy (J/mol)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'J/mol',
  ),
  'DPST-14-3' => 
  array (
    'Name' => 'DPT_Value_Activity',
    'Text' => 'radioactive activity (1/s)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => '1/s',
  ),
  'DPST-14-4' => 
  array (
    'Name' => 'DPT_Value_Mol',
    'Text' => 'amount of substance (mol)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'mol',
  ),
  'DPST-14-5' => 
  array (
    'Name' => 'DPT_Value_Amplitude',
    'Text' => 'amplitude',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
  ),
  'DPST-14-6' => 
  array (
    'Name' => 'DPT_Value_AngleRad',
    'Text' => 'angle (radiant)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'rad',
  ),
  'DPST-14-7' => 
  array (
    'Name' => 'DPT_Value_AngleDeg',
    'Text' => 'angle (degree)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => '°',
  ),
  'DPST-14-8' => 
  array (
    'Name' => 'DPT_Value_Angular_Momentum',
    'Text' => 'angular momentum (Js)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Js',
  ),
  'DPST-14-9' => 
  array (
    'Name' => 'DPT_Value_Angular_Velocity',
    'Text' => 'angular velocity (rad/s)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'rad/s',
  ),
  'DPST-14-10' => 
  array (
    'Name' => 'DPT_Value_Area',
    'Text' => 'area (m*m)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'm²',
  ),
  'DPST-14-11' => 
  array (
    'Name' => 'DPT_Value_Capacitance',
    'Text' => 'capacitance (F)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'F',
  ),
  'DPST-14-12' => 
  array (
    'Name' => 'DPT_Value_Charge_DensitySurface',
    'Text' => 'flux density (C/m²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'C/m²',
  ),
  'DPST-14-13' => 
  array (
    'Name' => 'DPT_Value_Charge_DensityVolume',
    'Text' => 'charge density (C/m³)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'C/m³',
  ),
  'DPST-14-14' => 
  array (
    'Name' => 'DPT_Value_Compressibility',
    'Text' => 'compressibility (m²/N)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'm²/N',
  ),
  'DPST-14-15' => 
  array (
    'Name' => 'DPT_Value_Conductance',
    'Text' => 'conductance (S)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'S',
  ),
  'DPST-14-16' => 
  array (
    'Name' => 'DPT_Value_Electrical_Conductivity',
    'Text' => 'conductivity  (S/m)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'S/m',
  ),
  'DPST-14-17' => 
  array (
    'Name' => 'DPT_Value_Density',
    'Text' => 'density (kg/m³)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'kg/m³',
  ),
  'DPST-14-18' => 
  array (
    'Name' => 'DPT_Value_Electric_Charge',
    'Text' => 'electric charge (C)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'C',
  ),
  'DPST-14-19' => 
  array (
    'Name' => 'DPT_Value_Electric_Current',
    'Text' => 'electric current (A)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'A',
  ),
  'DPST-14-20' => 
  array (
    'Name' => 'DPT_Value_Electric_CurrentDensity',
    'Text' => 'electric current density (A/m²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'A/m²',
  ),
  'DPST-14-21' => 
  array (
    'Name' => 'DPT_Value_Electric_DipoleMoment',
    'Text' => 'electric dipole moment (Cm)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Cm',
  ),
  'DPST-14-22' => 
  array (
    'Name' => 'DPT_Value_Electric_Displacement',
    'Text' => 'electric displacement (C/m²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'C/m²',
  ),
  'DPST-14-23' => 
  array (
    'Name' => 'DPT_Value_Electric_FieldStrength',
    'Text' => 'electric field strength (V/m)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'V/m',
  ),
  'DPST-14-24' => 
  array (
    'Name' => 'DPT_Value_Electric_Flux',
    'Text' => 'electric flux (C)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'C',
  ),
  'DPST-14-25' => 
  array (
    'Name' => 'DPT_Value_Electric_FluxDensity',
    'Text' => 'electric flux density (C/m²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'C/m²',
  ),
  'DPST-14-26' => 
  array (
    'Name' => 'DPT_Value_Electric_Polarization',
    'Text' => 'electric polarization (C/m²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'C/m²',
  ),
  'DPST-14-27' => 
  array (
    'Name' => 'DPT_Value_Electric_Potential',
    'Text' => 'electric potential (V)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'V',
  ),
  'DPST-14-28' => 
  array (
    'Name' => 'DPT_Value_Electric_PotentialDifference',
    'Text' => 'electric potential difference (V)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'V',
  ),
  'DPST-14-29' => 
  array (
    'Name' => 'DPT_Value_ElectromagneticMoment',
    'Text' => 'electromagnetic moment (Am²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Am²',
  ),
  'DPST-14-30' => 
  array (
    'Name' => 'DPT_Value_Electromotive_Force',
    'Text' => 'electromotive force (V)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'V',
  ),
  'DPST-14-31' => 
  array (
    'Name' => 'DPT_Value_Energy',
    'Text' => 'energy (J)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'J',
  ),
  'DPST-14-32' => 
  array (
    'Name' => 'DPT_Value_Force',
    'Text' => 'force (N)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'N',
  ),
  'DPST-14-33' => 
  array (
    'Name' => 'DPT_Value_Frequency',
    'Text' => 'frequency (Hz)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Hz',
  ),
  'DPST-14-34' => 
  array (
    'Name' => 'DPT_Value_Angular_Frequency',
    'Text' => 'angular frequency (rad/s)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'rad/s',
  ),
  'DPST-14-35' => 
  array (
    'Name' => 'DPT_Value_Heat_Capacity',
    'Text' => 'heat capacity (J/K)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'J/K',
  ),
  'DPST-14-36' => 
  array (
    'Name' => 'DPT_Value_Heat_FlowRate',
    'Text' => 'heat flow rate (W)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'W',
  ),
  'DPST-14-37' => 
  array (
    'Name' => 'DPT_Value_Heat_Quantity',
    'Text' => 'heat quantity',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'J',
  ),
  'DPST-14-38' => 
  array (
    'Name' => 'DPT_Value_Impedance',
    'Text' => 'impedance (Ω)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Ω',
  ),
  'DPST-14-39' => 
  array (
    'Name' => 'DPT_Value_Length',
    'Text' => 'length (m)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'm',
  ),
  'DPST-14-40' => 
  array (
    'Name' => 'DPT_Value_Light_Quantity',
    'Text' => 'light quantity (J)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'J',
  ),
  'DPST-14-41' => 
  array (
    'Name' => 'DPT_Value_Luminance',
    'Text' => 'luminance (cd/m²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'cd/m²',
  ),
  'DPST-14-42' => 
  array (
    'Name' => 'DPT_Value_Luminous_Flux',
    'Text' => 'luminous flux (lm)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'lm',
  ),
  'DPST-14-43' => 
  array (
    'Name' => 'DPT_Value_Luminous_Intensity',
    'Text' => 'luminous intensity (cd)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'cd',
  ),
  'DPST-14-44' => 
  array (
    'Name' => 'DPT_Value_Magnetic_FieldStrength',
    'Text' => 'magnetic field strength (A/m)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'A/m',
  ),
  'DPST-14-45' => 
  array (
    'Name' => 'DPT_Value_Magnetic_Flux',
    'Text' => 'magnetic flux (Wb)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Wb',
  ),
  'DPST-14-46' => 
  array (
    'Name' => 'DPT_Value_Magnetic_FluxDensity',
    'Text' => 'magnetic flux density (T)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'T',
  ),
  'DPST-14-47' => 
  array (
    'Name' => 'DPT_Value_Magnetic_Moment',
    'Text' => 'magnetic moment (Am²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Am²',
  ),
  'DPST-14-48' => 
  array (
    'Name' => 'DPT_Value_Magnetic_Polarization',
    'Text' => 'magnetic polarization (T)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'T',
  ),
  'DPST-14-49' => 
  array (
    'Name' => 'DPT_Value_Magnetization',
    'Text' => 'magnetization (A/m)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'A/m',
  ),
  'DPST-14-50' => 
  array (
    'Name' => 'DPT_Value_MagnetomotiveForce',
    'Text' => 'magnetomotive force (A)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'A',
  ),
  'DPST-14-51' => 
  array (
    'Name' => 'DPT_Value_Mass',
    'Text' => 'mass (kg)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'kg',
  ),
  'DPST-14-52' => 
  array (
    'Name' => 'DPT_Value_MassFlux',
    'Text' => 'mass flux (kg/s)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'kg/s',
  ),
  'DPST-14-53' => 
  array (
    'Name' => 'DPT_Value_Momentum',
    'Text' => 'momentum (N/s)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'N/s',
  ),
  'DPST-14-54' => 
  array (
    'Name' => 'DPT_Value_Phase_AngleRad',
    'Text' => 'phase angle (rad)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'rad',
  ),
  'DPST-14-55' => 
  array (
    'Name' => 'DPT_Value_Phase_AngleDeg',
    'Text' => 'phase angle (°)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => '°',
  ),
  'DPST-14-56' => 
  array (
    'Name' => 'DPT_Value_Power',
    'Text' => 'power (W)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'W',
  ),
  'DPST-14-57' => 
  array (
    'Name' => 'DPT_Value_Power_Factor',
    'Text' => 'power factor (cos Φ)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'cos Φ',
  ),
  'DPST-14-58' => 
  array (
    'Name' => 'DPT_Value_Pressure',
    'Text' => 'pressure (Pa)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Pa',
  ),
  'DPST-14-59' => 
  array (
    'Name' => 'DPT_Value_Reactance',
    'Text' => 'reactance (Ω)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Ω',
  ),
  'DPST-14-60' => 
  array (
    'Name' => 'DPT_Value_Resistance',
    'Text' => 'resistance (Ω)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Ω',
  ),
  'DPST-14-61' => 
  array (
    'Name' => 'DPT_Value_Resistivity',
    'Text' => 'resistivity (Ωm)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Ωm',
  ),
  'DPST-14-62' => 
  array (
    'Name' => 'DPT_Value_SelfInductance',
    'Text' => 'self inductance (H)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'H',
  ),
  'DPST-14-63' => 
  array (
    'Name' => 'DPT_Value_SolidAngle',
    'Text' => 'solid angle (sr)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'sr',
  ),
  'DPST-14-64' => 
  array (
    'Name' => 'DPT_Value_Sound_Intensity',
    'Text' => 'sound intensity (W/m²)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'W/m²',
  ),
  'DPST-14-65' => 
  array (
    'Name' => 'DPT_Value_Speed',
    'Text' => 'speed (m/s)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'm/s',
  ),
  'DPST-14-66' => 
  array (
    'Name' => 'DPT_Value_Stress',
    'Text' => 'stress (Pa)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Pa',
  ),
  'DPST-14-67' => 
  array (
    'Name' => 'DPT_Value_Surface_Tension',
    'Text' => 'surface tension (N/m)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'N/m',
  ),
  'DPST-14-68' => 
  array (
    'Name' => 'DPT_Value_Common_Temperature',
    'Text' => 'temperature (°C)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => '°C',
  ),
  'DPST-14-69' => 
  array (
    'Name' => 'DPT_Value_Absolute_Temperature',
    'Text' => 'temperature absolute (K)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'K',
  ),
  'DPST-14-70' => 
  array (
    'Name' => 'DPT_Value_TemperatureDifference',
    'Text' => 'temperature difference (K)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'K',
  ),
  'DPST-14-71' => 
  array (
    'Name' => 'DPT_Value_Thermal_Capacity',
    'Text' => 'thermal capacity (J/K)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'J/K',
  ),
  'DPST-14-72' => 
  array (
    'Name' => 'DPT_Value_Thermal_Conductivity',
    'Text' => 'thermal conductivity (W/mK)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'W/mK',
  ),
  'DPST-14-73' => 
  array (
    'Name' => 'DPT_Value_ThermoelectricPower',
    'Text' => 'thermoelectric power (V/K)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'V/K',
  ),
  'DPST-14-74' => 
  array (
    'Name' => 'DPT_Value_Time',
    'Text' => 'time (s)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 's',
  ),
  'DPST-14-75' => 
  array (
    'Name' => 'DPT_Value_Torque',
    'Text' => 'torque (Nm)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'Nm',
  ),
  'DPST-14-76' => 
  array (
    'Name' => 'DPT_Value_Volume',
    'Text' => 'volume (m³)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'm³',
  ),
  'DPST-14-77' => 
  array (
    'Name' => 'DPT_Value_Volume_Flux',
    'Text' => 'volume flux (m³/s)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'm³/s',
  ),
  'DPST-14-78' => 
  array (
    'Name' => 'DPT_Value_Weight',
    'Text' => 'weight (N)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'N',
  ),
  'DPST-14-79' => 
  array (
    'Name' => 'DPT_Value_Work',
    'Text' => 'work (J)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'J',
  ),
  'DPST-14-1200' => 
  array (
    'Name' => 'DPT_Volume_Flux_Meter',
    'Text' => 'volume flux for meters (m³/h)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => 'm³/h',
  ),
  'DPST-14-1201' => 
  array (
    'Name' => 'DPT_Volume_Flux_ls',
    'Text' => 'volume flux for meters (1/ls)',
    'Parent' => 'DPT-14',
    'Type' => NULL,
    'Profile' => '',
    'Unit' => '1/ls',
  ),
  'DPT-16' => 
  array (
    'Name' => '16.xxx',
    'Text' => 'character string',
    'Profile' => '',
    'Type' => 'string',
  ),
  'DPST-16-0' => 
  array (
    'Name' => 'DPT_String_ASCII',
    'Text' => 'Character String (ASCII)',
    'Parent' => 'DPT-16',
    'Type' => 'string',
    'Profile' => '',
  ),
  'DPST-16-1' => 
  array (
    'Name' => 'DPT_String_8859_1',
    'Text' => 'Character String (ISO 8859-1)',
    'Parent' => 'DPT-16',
    'Type' => 'string',
    'Profile' => '',
  ),
  'DPT-20' => 
  array (
    'Name' => '20.xxx',
    'Text' => '1-byte',
    'Profile' => '~Intensity.255',
    'Type' => 'integer',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-1' => 
  array (
    'Name' => 'DPT_SCLOMode',
    'Text' => 'SCLO mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-2' => 
  array (
    'Name' => 'DPT_BuildingMode',
    'Text' => 'building mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-3' => 
  array (
    'Name' => 'DPT_OccMode',
    'Text' => 'occupied',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-4' => 
  array (
    'Name' => 'DPT_Priority',
    'Text' => 'priority',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-5' => 
  array (
    'Name' => 'DPT_LightApplicationMode',
    'Text' => 'light application mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-6' => 
  array (
    'Name' => 'DPT_ApplicationArea',
    'Text' => 'light application area',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-7' => 
  array (
    'Name' => 'DPT_AlarmClassType',
    'Text' => 'alarm class',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-8' => 
  array (
    'Name' => 'DPT_PSUMode',
    'Text' => 'PSU mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-11' => 
  array (
    'Name' => 'DPT_ErrorClass_System',
    'Text' => 'system error class',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-12' => 
  array (
    'Name' => 'DPT_ErrorClass_HVAC',
    'Text' => 'HVAC error class',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-13' => 
  array (
    'Name' => 'DPT_Time_Delay',
    'Text' => 'time delay',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-14' => 
  array (
    'Name' => 'DPT_Beaufort_Wind_Force_Scale',
    'Text' => 'wind force scale (0..12)',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-17' => 
  array (
    'Name' => 'DPT_SensorSelect',
    'Text' => 'sensor mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-20' => 
  array (
    'Name' => 'DPT_ActuatorConnectType',
    'Text' => 'actuator connect type',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-21' => 
  array (
    'Name' => 'DPT_Cloud_Cover',
    'Text' => 'cloud cover',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-22' => 
  array (
    'Name' => 'DPT_PowerReturnMode',
    'Text' => 'power return mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-100' => 
  array (
    'Name' => 'DPT_FuelType',
    'Text' => 'fuel type',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-101' => 
  array (
    'Name' => 'DPT_BurnerType',
    'Text' => 'burner type',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-102' => 
  array (
    'Name' => 'DPT_HVACMode',
    'Text' => 'HVAC mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-103' => 
  array (
    'Name' => 'DPT_DHWMode',
    'Text' => 'DHW mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-104' => 
  array (
    'Name' => 'DPT_LoadPriority',
    'Text' => 'load priority',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-105' => 
  array (
    'Name' => 'DPT_HVACContrMode',
    'Text' => 'HVAC control mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-106' => 
  array (
    'Name' => 'DPT_HVACEmergMode',
    'Text' => 'HVAC emergency mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-107' => 
  array (
    'Name' => 'DPT_ChangeoverMode',
    'Text' => 'changeover mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-108' => 
  array (
    'Name' => 'DPT_ValveMode',
    'Text' => 'valve mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-109' => 
  array (
    'Name' => 'DPT_DamperMode',
    'Text' => 'damper mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-110' => 
  array (
    'Name' => 'DPT_HeaterMode',
    'Text' => 'heater mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-111' => 
  array (
    'Name' => 'DPT_FanMode',
    'Text' => 'fan mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-112' => 
  array (
    'Name' => 'DPT_MasterSlaveMode',
    'Text' => 'master/slave mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-113' => 
  array (
    'Name' => 'DPT_StatusRoomSetp',
    'Text' => 'status room setpoint',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-114' => 
  array (
    'Name' => 'DPT_Metering_DeviceType',
    'Text' => 'metering device type',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-115' => 
  array (
    'Name' => 'DPT_HumDehumMode',
    'Text' => 'hum dehum mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-116' => 
  array (
    'Name' => 'DPT_EnableHCStage',
    'Text' => 'enable H/C stage',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-120' => 
  array (
    'Name' => 'DPT_ADAType',
    'Text' => 'ADA type',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-121' => 
  array (
    'Name' => 'DPT_BackupMode',
    'Text' => 'backup mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-122' => 
  array (
    'Name' => 'DPT_StartSynchronization',
    'Text' => 'start syncronization type',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-600' => 
  array (
    'Name' => 'DPT_Behaviour_Lock_Unlock',
    'Text' => 'behavior lock/unlock',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-601' => 
  array (
    'Name' => 'DPT_Behaviour_Bus_Power_Up_Down',
    'Text' => 'behavior bus power up/down',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-602' => 
  array (
    'Name' => 'DPT_DALI_Fade_Time',
    'Text' => 'dali fade time',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-603' => 
  array (
    'Name' => 'DPT_BlinkingMode',
    'Text' => 'blink mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-604' => 
  array (
    'Name' => 'DPT_LightControlMode',
    'Text' => 'light control mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-605' => 
  array (
    'Name' => 'DPT_SwitchPBModel',
    'Text' => 'PB switch mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-606' => 
  array (
    'Name' => 'DPT_PBAction',
    'Text' => 'PB action mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-607' => 
  array (
    'Name' => 'DPT_DimmPBModel',
    'Text' => 'PB dimm mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-608' => 
  array (
    'Name' => 'DPT_SwitchOnMode',
    'Text' => 'switch on mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-609' => 
  array (
    'Name' => 'DPT_LoadTypeSet',
    'Text' => 'load type',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-610' => 
  array (
    'Name' => 'DPT_LoadTypeDetected',
    'Text' => 'load type detection',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-611' => 
  array (
    'Name' => 'DPT_Converter_Test_Control',
    'Text' => 'converter test control',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-801' => 
  array (
    'Name' => 'DPT_SABExcept-Behaviour',
    'Text' => 'SAB except behavior',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-802' => 
  array (
    'Name' => 'DPT_SABBehaviour_Lock_Unlock',
    'Text' => 'SAB behavior on lock/unlock',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-803' => 
  array (
    'Name' => 'DPT_SSSBMode',
    'Text' => 'SSSB mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-804' => 
  array (
    'Name' => 'DPT_BlindsControlMode',
    'Text' => 'blinds control mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-1000' => 
  array (
    'Name' => 'DPT_CommMode',
    'Text' => 'communication mode',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-1001' => 
  array (
    'Name' => 'DPT_AddInfoTypes',
    'Text' => 'additional information type',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-1002' => 
  array (
    'Name' => 'DPT_RF_ModeSelect',
    'Text' => 'RF mode selection',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-20-1003' => 
  array (
    'Name' => 'DPT_RF_FilterSelect',
    'Text' => 'RF filter mode selection',
    'Parent' => 'DPT-20',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPT-21' => 
  array (
    'Name' => '21.xxx',
    'Text' => '8-bit set',
    'Profile' => '~Intensity.255',
    'Type' => 'integer',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-1' => 
  array (
    'Name' => 'DPT_StatusGen',
    'Text' => 'general status',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-2' => 
  array (
    'Name' => 'DPT_Device_Control',
    'Text' => 'device control',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-100' => 
  array (
    'Name' => 'DPT_ForceSign',
    'Text' => 'forcing signal',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-101' => 
  array (
    'Name' => 'DPT_ForceSignCool',
    'Text' => 'forcing signal cool',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-102' => 
  array (
    'Name' => 'DPT_StatusRHC',
    'Text' => 'room heating controller status',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-103' => 
  array (
    'Name' => 'DPT_StatusSDHWC',
    'Text' => 'solar DHW controller status',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-104' => 
  array (
    'Name' => 'DPT_FuelTypeSet',
    'Text' => 'fuel type set',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-105' => 
  array (
    'Name' => 'DPT_StatusRCC',
    'Text' => 'room cooling controller status',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-106' => 
  array (
    'Name' => 'DPT_StatusAHU',
    'Text' => 'ventilation controller status',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-107' => 
  array (
    'Name' => 'DPT_CombinedStatus_RTSM',
    'Text' => 'combined status RTSM',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-601' => 
  array (
    'Name' => 'DPT_LightActuatorErrorInfo',
    'Text' => 'lighting actuator error information',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-1000' => 
  array (
    'Name' => 'DPT_RF_ModeInfo',
    'Text' => 'RF communication mode info',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-1001' => 
  array (
    'Name' => 'DPT_RF_FilterInfo',
    'Text' => 'cEMI server supported RF filtering modes',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
  'DPST-21-1010' => 
  array (
    'Name' => 'DPT_Channel_Activation_8',
    'Text' => 'channel activation for 8 channels',
    'Parent' => 'DPT-21',
    'Type' => 'integer',
    'Profile' => '~Intensity.255',
    'Validation' => 
    array (
      'Min' => 0,
      'Max' => 255,
    ),
  ),
);
