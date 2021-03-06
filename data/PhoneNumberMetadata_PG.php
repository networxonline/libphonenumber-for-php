<?php
return array (
  'generalDesc' =>
  array (
    'NationalNumberPattern' => '[1-9]\\d{6,7}',
    'PossibleNumberPattern' => '\\d{7,8}',
    'ExampleNumber' => '',
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '
          (?:
            3[0-2]\\d|
            4[25]\\d|
            5[34]\\d|
            64[1-9]|
            77(?:
              [0-24]\\d|
              30
            )|
            85[02-46-9]|
            9[78]\\d
          )\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{7}',
    'ExampleNumber' => '3123456',
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '
          (?:
            68|
            7(?:
              [0-369]\\d|
              75
            )
          )\\d{5}
        ',
    'PossibleNumberPattern' => '\\d{7,8}',
    'ExampleNumber' => '6812345',
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '180\\d{4}',
    'PossibleNumberPattern' => '\\d{7}',
    'ExampleNumber' => '1801234',
  ),
  'premiumRate' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'sharedCost' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'noInternationalDialling' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => 'PG',
  'countryCode' => 675,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{3})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '[1-689]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 =>
    array (
      'pattern' => '(7\\d{3})(\\d{4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '7',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' =>
  array (
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);