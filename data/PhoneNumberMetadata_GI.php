<?php
return array (
  'generalDesc' =>
  array (
    'NationalNumberPattern' => '[2568]\\d{7}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '',
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '
          2(?:
            00\\d|
            1(?:
              6[24-7]|
              9\\d
            )|
            2(?:
              00|
              2[2457]
            )
          )\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '20012345',
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '
          (?:
            5[46-8]|
            62
          )\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '57123456',
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => '80\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '80123456',
  ),
  'premiumRate' =>
  array (
    'NationalNumberPattern' => '8[1-689]\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '88123456',
  ),
  'sharedCost' =>
  array (
    'NationalNumberPattern' => '87\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '87123456',
  ),
  'noInternationalDialling' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => 'GI',
  'countryCode' => 350,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{3})(\\d{5})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      array (
        0 => '2',
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