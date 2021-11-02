<?php

namespace SmsaSDK\Methods;

class getTrackingwithRef
{

    /**
     * @var string $awbNo
     */
    protected $awbNo = null;

    /**
     * @var string $passkey
     */
    protected $passkey = null;

    /**
     * @param string $awbNo
     * @param string $passkey
     */
    public function __construct($awbNo = null, $passkey = null)
    {
      $this->awbNo = $awbNo;
      $this->passkey = $passkey;
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
     * @return \SmsaSDK\Methods\getTrackingwithRef
     */
    public function setAwbNo($awbNo)
    {
      $this->awbNo = $awbNo;
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
     * @return \SmsaSDK\Methods\getTrackingwithRef
     */
    public function setPasskey($passkey)
    {
      $this->passkey = $passkey;
      return $this;
    }

}
