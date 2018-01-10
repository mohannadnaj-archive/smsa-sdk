<?php

namespace SmsaSDKTests;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
    public function setUp()
    {
        parent::setUp();
        // for some reason I have to set the error handler to catch notices and warnings
        // it's setup in phpunit.xml somehow is not working. Instruction copied from:
        // https://coderwall.com/p/ka6o8a/catch-php-warnings-and-notices-when-unit-testing
        // and a related issue: https://github.com/sebastianbergmann/phpunit/issues/2675
        set_error_handler(function ($errno, $errstr, $errfile, $errline) {
            throw new \RuntimeException($errstr.' on line '.$errline.' in file '.$errfile);
        });
    }

    public function tearDown()
    {
        parent::tearDown();
        restore_error_handler();
    }
}
