# SMSA Express SDK

Simple PHP package for integrating SMSA Web Services (SECOM).

[![Latest Stable Version](https://img.shields.io/packagist/v/mohannadnaj/smsa-sdk.svg?style=flat-square)](https://packagist.org/packages/mohannadnaj/smsa-sdk)
[![Total Downloads](https://poser.pugx.org/mohannadnaj/smsa-sdk/downloads)](https://packagist.org/packages/mohannadnaj/smsa-sdk)
[![Build Status](https://travis-ci.org/MohannadNaj/smsa-sdk.svg?branch=master)](https://travis-ci.org/MohannadNaj/smsa-sdk)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/MohannadNaj/smsa-sdk/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/MohannadNaj/smsa-sdk/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/MohannadNaj/smsa-sdk/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/MohannadNaj/smsa-sdk/?branch=master)

## Installation
Include the package via [composer](https://getcomposer.org/) :
``` shell
composer require mohannadnaj/smsa-sdk
```
Use the static class `SmsaSDK\Smsa`:
``` php
<?php

use SmsaSDK\Smsa;

$result = Smsa::key('my-smsa-key')
            ->getRTLCities()
            ->getGetRTLCitiesResult()
            ->getAny();

print_r($result);

```

## Background
SMSA Provides a [SOAP Web Service](http://track.smsaexpress.com/SECOM/SMSAwebService.asmx) for processing shipment-related services. [SMSA Express](http://www.smsaexpress.com/aboutsmsa.html) mostly recognized on Saudi Arabia.

In PHP, integrating SMSA can be done using the built-in PHP's [SoapClient](https://secure.php.net/manual/en/class.soapclient.php). However, usually there is some caveats and issues on the process. This package helps to reduce this issues.

## Features

- Each Soap service method and response is a dedicated class. Dealing with classes is easier than the magical objects generated during the runtime, at least in your code editor's opinion. *(this was possible thanks to [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator)).*
- Validating data before submission, and meaningful messages on exceptions.
- Unified one entrypoint for all your Smsa requests, through the static class `Smsa`.
- Testable.
- Easily Configurable.
  
## Integration

As a client of SMSA, you will receive a `pass key` that you will use for your operations to SMSA Web Services (SECOM).

After Including this package, set up this `pass key` before initiating the first SECOM request:
```php
<?php
use SmsaSDK\Smsa;

Smsa::key('my-smsa-key');

```

Usually you want to do that in the `boot` of your application.

#### Tip For Laravel Users

If you are using Laravel, a good place for this configuration is the `AppServiceProvider` and setting the key in the `.env` file.
**.env**:
```
SMSA_PASSKEY="my-smsa-key"
```

**AppServiceProvider.php**
```php
<?php

namespace App\Providers;

use SmsaSDK\Smsa;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Smsa::key(env('SMSA_PASSKEY'));
    }
}
```

## Usage Examples:

#### Configuration:

```php
<?php

use SmsaSDK\Smsa;

// set up the key
Smsa::key('my-smsa-key');

// SECOM WSDL address, set by default to the url: http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?wsdl
Smsa::uri('http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?wsdl');

// or just use the setup method
Smsa::setUp(['key' => 'my-smsa-key','uri' => 'http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?wsdl']);

// Set the null values, the ignored arguments in a SECOM method call, to an empty string
Smsa::nullValues('');

}
```
#### Add Shipment:

```php
<?php

use SmsaSDK\Smsa;

Smsa::key('my-smsa-key');   // Setting up the SMSA Key

// Since we are not filling all the SECOM method arguments
// as defined in the WSDL, here we are telling SMSA SDK to
// fill the null values by an empty string
Smsa::nullValues(''); 

$shipmentData = [
        'refNo' => 'my_app_name' . time(), // shipment reference in your application
        'cName' => 'Mohannad Najjar', // customer name
        'cntry' => 'SA', // shipment country
        'cCity' => 'JEDDAH', // shipment city, try: Smsa::getRTLCities() to get the supported cities
        'cMobile' => '0555555555', // customer mobile
        'cAddr1' => 'ALNAHDA DIST, ...detailed address here', // customer address
        'cAddr2' => 'ALBAWADI DIST, ...detailed address here', // customer address 2
        'shipType' => 'DLV', // shipment type
        'PCs' => 1, // quantity of the shipped pieces
        'cEmail' => 'mohannad.najjar@mail.com', // customer email
        'codAmt' => '50', // payment amount if it's cash on delivery, 0 if not cash on delivery
        'weight' => '10', // pieces weight
        'itemDesc' => 'Foo Bar', // extra description will be printed
    ];

/** @var SmsaSDK\Methods\addShipmentResponse $shipment */
$shipment = Smsa::addShipment($shipmentData);

$awbNumber = $shipment->getAddShipmentResult();

echo "shipment AWB: " . $awbNumber ;
echo "\r\n";

$status = Smsa::getStatus(['awbNo' => $awbNumber])->getGetStatusResult();

echo "shipment Status: " . $status;
}
```

## Unit & Integration Testing:

This package shipped with a custom [SoapClient](src/SoapClient.php) that will redirect the calls to the testing/mocked client if it's provided.

```php
<?php
use SmsaSDK\SoapClient;

SoapClient::setTestingClient($myMockedClient);
// do stuff will affect the mocked client only..

SoapClient::turnOffTestingClient();
// turn off testing, do stuff with the real soap client

print_r(SoapClient::$lastCall); // whether in testing or not, access all the arguments passed to the SoapClient

```
