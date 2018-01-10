<?php

namespace SmsaSDK;

/**
 * SoapClient
 * Insert description here
 */
class SoapClient extends \SoapClient
{
    public static $testing = false;
    public static $lastException = null;
    public static $client = null;
    public static $lastCall = null;

    /**
     * __soapCall
     * Insert description here
     *
     * @param $function_name
     * @param $arguments
     * @param $options
     * @param $input_headers
     * @param $output_headers
     *
     * @return
     */
    public function __soapCall($function_name, $arguments, $options = null, $input_headers = null, &$output_headers = null) 
    {
        static::$lastCall = compact('function_name', 'arguments', 'options', 'input_headers', 'output_headers');

        // if the alternative client was set, for testing or customization for example
        if(static::$client ) {
            return static::$client->$function_name($arguments);
        }

        return $this->soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
    }

    /**
     * soapCall
     * Insert description here
     *
     * @param $function_name
     * @param $arguments
     * @param $options
     * @param $input_headers
     * @param $output_headers
     *
     * @return
     */
    private function soapCall($function_name, $arguments, $options = null, $input_headers = null, &$output_headers = null) 
    {
        try {
            return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
        } catch (\Exception $e) {
            static::$lastException = $e;
            if(! static::$testing) {
                throw $e;
            }
        }
    }

    /**
     * setTestingClient
     * Insert description here
     *
     * @param $client
     *
     * @return
     */
    public static function setTestingClient($client = null) 
    {
        static::$testing = true;
        static::$client = $client;
    }

    /**
     * getTestingClient
     * Insert description here
     *
     * @return
     */
    public static function getTestingClient() 
    {
        return static::$client;
    }

    /**
     * turnOffTestingClient
     * Insert description here
     *
     * @return
     */
    public static function turnOffTestingClient() 
    {
        static::$testing = false;
        static::$client = null;
    }
}
