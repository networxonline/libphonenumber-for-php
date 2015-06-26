<?php
return array (
  'generalDesc' =>
  array (
    'NationalNumberPattern' => '[56]\\d{8}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '',
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '
          590(?:
            0[13468]|
            1[012]|
            2[0-68]|
            3[28]|
            4[0-8]|
            5[579]|
            6[0189]|
            70|
            8[0-689]|
            9\\d
          )\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '590201234',
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '
          690(?:
            0[0-7]|
            [1-9]\\d
          )\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '690301234',
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
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
  'id' => 'GP',
  'countryCode' => 590,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '([56]90)(\\d{2})(\\d{4})',
      'format' => '$1 $2-$3',
      'leadingDigitsPatterns' =>
      array (
      ),
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' =>
  array (
  ),
  'mainCountryForCode' => true,
  'leadingZeroPossible' => NULL,
);