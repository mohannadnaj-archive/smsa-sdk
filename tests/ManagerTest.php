<?php

namespace SmsaSDKTests;

use SmsaSDK\Config;
use SmsaSDK\Exceptions\InvalidArgumentException;
use SmsaSDK\Exceptions\UndefinedMethodException;
use SmsaSDK\Smsa;

class ManagerTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    /** @test */
    public function it_configures_the_key()
    {
        Smsa::key('foo bar');
        $this->assertEquals(Smsa::getKey(), 'foo bar');
    }

    /** @test */
    public function set_the_default_testing_key_on_setup()
    {
        Smsa::refresh();
        Smsa::setUp();

        $this->assertEquals(Smsa::getKey(), Config::get('smsa_testing_key'));

        Smsa::key(null)->setUp(['key'=>'foo bar']);
        $this->assertEquals(Smsa::getKey(), 'foo bar');
    }

    /** @test */
    public function it_throws_exception_if_method_isnot_defined()
    {
        Smsa::refresh();
        $this->expectException(UndefinedMethodException::class);
        $this->expectExceptionMessage('the method [fooBar] is not defined, there is no matching class handler at: SmsaSDK\\Methods\\fooBar');
        Smsa::fooBar([]);
    }

    /** @test */
    public function it_throws_exception_if_arguments_are_missing()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('calling the method [getStatus] some arguments are missing: [awbNo]. required arguments: [awbNo, passkey].');
        Smsa::getStatus([]);
    }

    /** @test */
    public function it_throws_exception_if_arguments_are_undefined()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument passed to the method [getStatus] is not expected to this method. unknown arguments: [foo]. required arguments: [awbNo, passkey].');
        Smsa::getStatus(['awbNo' => '', 'foo'=>'bar']);
    }
}
