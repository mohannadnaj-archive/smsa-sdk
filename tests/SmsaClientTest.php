<?php

namespace SmsaSDKTests;

use SmsaSDK\Smsa;
use SmsaSDK\Config;
use SmsaSDK\SoapClient;
use SmsaSDKTests\TestCase;
use SmsaSDK\Exceptions\InvalidArgumentException;
use SmsaSDK\Exceptions\UndefinedMethodException;

class SmsaTest extends TestCase
{
    private $client;

    public function setUp()
    {
        parent::setUp();
        Smsa::refresh();

        $this->mockSoapClient();
    }

    public function tearDown()
    {
        parent::tearDown();
    }
    /** @test */
    public function it_call_the_soap_client() {
        $this->client
            ->method('getStatus')
            ->willReturn('test');

        $this->assertEquals(Smsa::getStatus(['awbNo'=>'']), 'test');
    }

    /** @test */
    public function soap_client_preserves_calls() {
        $this->client
            ->method('getStatus')
            ->willReturn('test');
        Smsa::getStatus(['awbNo'=>'foo-bar']);
        $this->assertEquals("foo-bar", SoapClient::$lastCall['arguments'][0]->getAwbNo());
    }

    /** @test */
    public function it_can_fill_null_values() {
        // Exception is not thrown
        Smsa::nullValues('');
        $this->assertNull(Smsa::addShipment(['refNo'=>'123']));

        // the exception should be thrown if the null values is still null
        Smsa::nullValues(null);
        $this->expectException(InvalidArgumentException::class);
        $this->assertNull(Smsa::addShipment(['refNo'=>'123']));
    }

    private function mockSoapClient() {
        $wsdlFilePath = Config::get('wsdl_file_path');
        $wsdlMock = $this->getMockFromWsdl($wsdlFilePath);
        SoapClient::setTestingClient($wsdlMock);

        $this->client = SoapClient::getTestingClient();
    }
}
