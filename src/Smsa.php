<?php

namespace SmsaSDK;

/**
 * Smsa
 * Smsa Web Services (SECOM) Facade.
 */
class Smsa
{
    use MethodsRedirector;
    /**
     * The base Smsa manager instance.
     *
     * @var \SmsaSDK\SmsaManager|null
     */
    private static $smsaManager = null;

    /**
     * setUp
     * Set up Smsa Configuration by the given config array
     * The array has 'key' and 'uri' as keys to it's values.
     *
     * @param array|null $config
     *
     * @return static
     */
    public static function setUp($config = [])
    {
        static::handleStaticCalls('setUp', [$config]);

        return new static();
    }

    /**
     * nullValues
     * Set the default value of the empty values that shall be sent to SECOM.
     *
     * @return static
     */
    public static function nullValues($value)
    {
        static::handleStaticCalls('nullValues', [$value]);

        return new static();
    }

    /**
     * uri
     * Set the WSDL uri.
     *
     * @return static
     */
    public static function uri($uri)
    {
        static::handleStaticCalls('uri', [$uri]);

        return new static();
    }

    /**
     * key
     * Set the SMSA Key.
     *
     * @return static
     */
    public static function key($passkey)
    {
        static::handleStaticCalls('key', [$passkey]);

        return new static();
    }

    /**
     * __callStatic
     * Calling static methods.
     *
     * @param string $method
     * @param array  $arguments
     *
     * @return
     */
    public static function __callStatic($method, $arguments)
    {
        return static::handleStaticCalls($method, $arguments);
    }

    /**
     * handleStaticCalls.
     *
     * @param string $method
     * @param array  $arguments
     *
     * @return
     */
    public static function handleStaticCalls($method, $arguments)
    {
        if (empty(static::$smsaManager)) {
            static::setManager();
        }

        return static::$smsaManager->{$method}(...$arguments);
    }

    /**
     * setManager
     * Set the base Smsa manager.
     *
     * @param SmsaSDK\SmsaManager|null|mixed $smsaManager
     *
     * @return void
     */
    protected static function setManager($smsaManager = null)
    {
        static::$smsaManager = $smsaManager ?: new SmsaManager();
    }

    /**
     * refresh
     * Refresh the Smsa manager instance by providing alternative instance if possible.
     *
     * @param SmsaSDK\SmsaManager|null|mixed $altSmsaManagaer
     *
     * @return void
     */
    public static function refresh($altSmsaManagaer = null)
    {
        static::setManager($altSmsaManagaer);
    }
}
