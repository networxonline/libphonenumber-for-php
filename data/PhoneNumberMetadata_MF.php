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
            [02][79]|
            13|
            5[0-268]|
            [78]7
          )\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '590271234',
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
  'id' => 'MF',
  'countryCode' => 590,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
  ),
  'intlNumberFormat' =>
  array (
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);