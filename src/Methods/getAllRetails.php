<?php

namespace SmsaSDK\Methods;

class getAllRetails
{
    /**
     * @var string
     */
    protected $passkey = null;

    /**
     * @param string $passkey
     */
    public function __construct($passkey = null)
    {
        $this->passkey = $passkey;
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
     *
     * @return \SmsaSDK\Methods\getAllRetails
     */
    public function setPasskey($passkey)
    {
        $this->passkey = $passkey;

        return $this;
    }
}
