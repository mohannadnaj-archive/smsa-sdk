<?php

namespace SmsaSDK\Methods;

class getStatusByRef
{
    /**
     * @var string
     */
    protected $refNo = null;

    /**
     * @var string
     */
    protected $passkey = null;

    /**
     * @param string $refNo
     * @param string $passkey
     */
    public function __construct($refNo = null, $passkey = null)
    {
        $this->refNo = $refNo;
        $this->passkey = $passkey;
    }

    /**
     * @return string
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * @param string $refNo
     *
     * @return \SmsaSDK\Methods\getStatusByRef
     */
    public function setRefNo($refNo)
    {
        $this->refNo = $refNo;

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
     *
     * @return \SmsaSDK\Methods\getStatusByRef
     */
    public function setPasskey($passkey)
    {
        $this->passkey = $passkey;

        return $this;
    }
}
