<?php

namespace SmsaSDK\Concerns;

use SmsaSDK\Config;

trait Configurable
{
    /**
     * setUp
     * Set up Smsa Configuration by the given config array
     * The array has 'key' and 'uri' as keys to it's values.
     *
     * @param array|null $config
     *
     * @return $this
     */
    public function setUp($config = [])
    {
        if (empty($this->getKey())) {
            $this->passkey = empty($config['key']) ? Config::get('smsa_testing_key') : $config['key'];
        }

        if (empty($this->uri)) {
            $this->uri = empty($config['uri']) ? Config::get('smsa_uri') : $config['uri'];
        }

        if (empty($this->wsdlFilePath)) {
            $this->setWsdlFilePath();
        }

        return $this;
    }

    /**
     * nullValues
     * Set the default value of the empty values that shall be sent to SECOM.
     *
     * @param $value
     *
     * @return $this
     */
    public function nullValues($value)
    {
        $this->nullValues = $value;

        return $this;
    }

    /**
     * uri
     * Set the WSDL uri.
     *
     * @param $uri
     *
     * @return $this
     */
    public function uri($uri)
    {
        if (is_null($uri)) {
            return $this->uri;
        }

        $this->uri = $uri;

        return $this;
    }

    /**
     * key
     * Set the SMSA Key.
     *
     * @param $passkey
     *
     * @return $this
     */
    public function key($passkey)
    {
        $this->passkey = $passkey;

        return $this;
    }

    /**
     * getKey
     * Get SMSA Key.
     *
     * @return
     */
    public function getKey()
    {
        return $this->passkey;
    }
}
