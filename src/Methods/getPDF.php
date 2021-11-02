<?php

namespace SmsaSDK\Methods;

class getPDF
{
    /**
     * @var string
     */
    protected $awbNo = null;

    /**
     * @var string
     */
    protected $passKey = null;

    /**
     * @param string $awbNo
     * @param string $passKey
     */
    public function __construct($awbNo = null, $passKey = null)
    {
        $this->awbNo = $awbNo;
        $this->passKey = $passKey;
    }

    /**
     * @return string
     */
    public function getAwbNo()
    {
        return $this->awbNo;
    }

    /**
     * @param string $awbNo
     *
     * @return \SmsaSDK\Methods\getPDF
     */
    public function setAwbNo($awbNo)
    {
        $this->awbNo = $awbNo;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassKey()
    {
        return $this->passKey;
    }

    /**
     * @param string $passKey
     *
     * @return \SmsaSDK\Methods\getPDF
     */
    public function setPassKey($passKey)
    {
        $this->passKey = $passKey;

        return $this;
    }
}
