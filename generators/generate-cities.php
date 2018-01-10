<?php

require __DIR__.'/../vendor/autoload.php';

use SmsaSDK\Smsa;

$dist = __DIR__.'/cities.json';

echo "Fetch cities\n\r";

$cities = Smsa::getRTLCities()->getGetRTLCitiesResult()->getAny();

$cities = json_encode(simplexml_load_string($cities));

$cities = json_decode($cities)->NewDataSet;

$cities = json_encode($cities, JSON_PRETTY_PRINT);

file_put_contents($dist, $cities);

echo "Cities fetched and copied to [$dist]\n\r";
