<?php

namespace SmsaSDK;

/**
 * Config
 * Configuration Repository for Smsa.
 */
class Config
{
    public static $config = [
        'wsdl_file_path'   => __DIR__.'/data/SMSA.wsdl',
        'smsa_testing_key' => 'my-smsa-test-key',
        'smsa_uri'         => 'http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?wsdl',
    ];

    public static $commonData = [];

    /**
     * get
     * Get a configuration by it's key name.
     *
     * @param string $name
     *
     * @return
     */
    public static function get(string $name)
    {
        return static::$config[$name];
    }

    /**
     * set
     * Set a configuration name and value.
     *
     * @param string $name
     * @param mixed  $name
     *
     * @return $this
     */
    public static function set(string $name, $value)
    {
        static::$config[$name] = $value;

        return $this;
    }

    /**
     * getCommonData
     * Get common key-value pairs that's used as arguments in Smsa methods.
     *
     * @return array
     */
    public static function getCommonData()
    {
        return static::$commonData + [
            'passkey' => Smsa::getKey(),
            'passKey' => Smsa::getKey(),
        ];
    }
}
