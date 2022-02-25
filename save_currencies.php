<?php
$x = simplexml_load_file("http://www.ecb.int/stats/eurofxref/eurofxref-daily.xml");
function getEuroRate($symbol,$xml) {     
  $xml->registerXPathNamespace("ecb", "http://www.ecb.int/vocabulary/2002-08-01/eurofxref");
  $array = $xml->xpath("//ecb:Cube[@currency='".$symbol."']/@rate");
  $rate = (string) $array[0]['rate'];
  return $rate;
} 

//generates the csv file
$fh = fopen("usd_currency_rates_2022-7-2.csv", "w");

//headers
$headers = array("Currency Code", "Rate");

//create the arrays with the data
$data = array (
    array(
        "Currency Code" => "USD",
        "Rate" => getEuroRate('USD', $x),
        ),
     array(
        "currency code" => "JPY",
        "Rate" => getEuroRate('JPY',$x),
        ),
    array(
        "currency code" => "BGN",
        "Rate" => getEuroRate('BGN',$x),
        ),
    array(
        "currency code" => "CZK",
        "Rate" => getEuroRate('CZK',$x),
        ),
    array(
        "currency code" => "DKK",
        "Rate" => getEuroRate('DKK',$x),
        ),
    array(
        "currency code" => "GBP",
        "Rate" => getEuroRate('GBP',$x),
        ),
    array(
        "currency code" => "HUF",
        "Rate" => getEuroRate('HUF',$x),
        ),
    array(
        "currency code" => "PLN",
        "Rate" => getEuroRate('PLN',$x),
        ),
    array(
        "currency code" => "RON",
        "Rate" => getEuroRate('RON',$x),
        ),
    array(
        "currency code" => "SEK",
        "Rate" => getEuroRate('SEK',$x),
        ),
    array(
        "currency code" => "CHF",
        "Rate" => getEuroRate('CHF',$x),
        ),
    array(
        "currency code" => "ISK",
        "Rate" => getEuroRate('ISK',$x),
        ),
    array(
        "currency code" => "NOK",
        "Rate" => getEuroRate('NOK',$x),
        ),
    array(
        "currency code" => "HRK",
        "Rate" => getEuroRate('HRK',$x),
        ),
    array(
        "currency code" => "RUB",
        "Rate" => getEuroRate('RUB',$x),
        ),
    array(
        "currency code" => "TRY",
        "Rate" => getEuroRate('TRY',$x),
        ),
    array(
        "currency code" => "AUD",
        "Rate" => getEuroRate('AUD',$x),
        ),
    array(
        "currency code" => "BRL",
        "Rate" => getEuroRate('BRL',$x),
        ),
    array(
        "currency code" => "CAD",
        "Rate" => getEuroRate('CAD',$x),
        ),
    array(
        "currency code" => "CNY",
        "Rate" => getEuroRate('CNY',$x),
        ),
    array(
        "currency code" => "HKD",
        "Rate" => getEuroRate('HKD',$x),
        ), 
    array(
        "currency code" => "IDR",
        "Rate" => getEuroRate('IDR',$x),
        ),
    array(
        "currency code" => "ILS",
        "Rate" => getEuroRate('ILS',$x),
        ),
    array(
        "currency code" => "INR",
        "Rate" => getEuroRate('INR',$x),
        ),
    array(
        "currency code" => "KRW",
        "Rate" => getEuroRate('KRW',$x),
        ),
    array(
        "currency code" => "MXN",
        "Rate" => getEuroRate('MXN',$x),
        ),
    array(
        "currency code" => "MYR",
        "Rate" => getEuroRate('MYR',$x),
        ),
    array(
        "currency code" => "NZD",
        "Rate" => getEuroRate('NZD',$x),
        ),
    array(
        "currency code" => "PHP",
        "Rate" => getEuroRate('PHP',$x),
        ),
    array(
        "currency code" => "SGD",
        "Rate" => getEuroRate('SGD',$x),
        ),
    array(
        "currency code" => "THB",
        "Rate" => getEuroRate('THB',$x),
        ),
    array(
        "currency code" => "ZAR",
        "Rate" => getEuroRate('ZAR',$x),
        ),
        );

//create the headers
fputcsv($fh, $headers);

//adds the information of the arrays in the tables
foreach ($data as $fields) {
    fputcsv($fh, $fields);

}

fclose($fh);
?>