<?php

namespace SmsaSDK\Methods;

class getRTLRetails
{

    /**
     * @var string $cityCode
     */
    protected $cityCode = null;

    /**
     * @var string $passkey
     */
    protected $passkey = null;

    /**
     * @param string $cityCode
     * @param string $passkey
     */
    public function __construct($cityCode = null, $passkey = null)
    {
        $this->cityCode = $cityCode;
        $this->passkey = $passkey;
    }

    /**
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param string $cityCode
     * @return \SmsaSDK\Methods\getRTLRetails
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasskey()
    {
        return $this->passkey;
    }

    /**
     * @param string $passkey
     * @return \SmsaSDK\Methods\getRTLRetails
     */
    public function setPasskey($passkey)
    {
        $this->passkey = $passkey;
        return $this;
    }

}
