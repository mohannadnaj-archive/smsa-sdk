<?php

namespace SmsaSDKTests;

use SmsaSDK\Smsa;
use SmsaSDK\Config;
use SmsaSDK\SoapClient;
use SmsaSDKTests\TestCase;
use SmsaSDK\Exceptions\InvalidArgumentException;
use SmsaSDK\Exceptions\UndefinedMethodException;

class IntegrationTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        SoapClient::turnOffTestingClient();
        SoapClient::setTestingClient(null);
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    /** @test */
    public function it_is_called() {
        $this->assertTrue(true);
    }

    /**  @ignore-test */
    public function it_call_the_real_soap_client() {
        SoapClient::turnOffTestingClient();
        Smsa::nullValues('');
        $result = Smsa::key('my-smsa-key')->getRTLCities()->getGetRTLCitiesResult()->getAny();
        $this->assertContains('JED', $result );
    }

    /** @ignore-test */
    public function it_can_add_shipments_then_get_status() {
        Smsa::refresh();
        Smsa::key(Config::get('smsa_testing_key'));
        Smsa::nullValues('');
        $shipmentData = [
                'refNo' => 'my_app_name' . time(),
                'cName' => 'Mohannad Najjar',
                'cntry' => 'SA',
                'cCity' => 'JEDDAH',
                'cMobile' => '0555555555',
                'cAddr1' => 'ALNAHDA DIST',
                'shipType' => 'DLV',
                'PCs' => 1,
                'cEmail' => 'mohannad.najjar@mail.com',
                'codAmt' => '50',
                'weight' => '10',
                'itemDesc' => 'Foo Bar',
            ];

        $shipment = Smsa::addShipment($shipmentData);

        $awbNumber = $shipment->getAddShipmentResult();

        $status = (string) Smsa::getStatus(['awbNo' => $awbNumber])->getGetStatusResult();

        $this->assertContains('RECEIVED', $status );
    }
}
