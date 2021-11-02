<?php

namespace SmsaSDK\Methods;

class cancelShipment
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
     * @var string $reas
     */
    protected $reas = null;

    /**
     * @param string $awbNo
     * @param string $passkey
     * @param string $reas
     */
    public function __construct($awbNo = null, $passkey = null, $reas = null)
    {
      $this->awbNo = $awbNo;
      $this->passkey = $passkey;
      $this->reas = $reas;
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
     * @return \SmsaSDK\Methods\cancelShipment
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
     * @return \SmsaSDK\Methods\cancelShipment
     */
    public function setPasskey($passkey)
    {
      $this->passkey = $passkey;
      return $this;
    }

    /**
     * @return string
     */
    public function getReas()
    {
      return $this->reas;
    }

    /**
     * @param string $reas
     * @return \SmsaSDK\Methods\cancelShipment
     */
    public function setReas($reas)
    {
      $this->reas = $reas;
      return $this;
    }

}
