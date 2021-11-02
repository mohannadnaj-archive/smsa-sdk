<?php

namespace SmsaSDK\Methods;

class getPDFBr
{

    /**
     * @var string $awbNo
     */
    protected $awbNo = null;

    /**
     * @var string $passKey
     */
    protected $passKey = null;

    /**
     * @var string $forwrdr
     */
    protected $forwrdr = null;

    /**
     * @param string $awbNo
     * @param string $passKey
     * @param string $forwrdr
     */
    public function __construct($awbNo = null, $passKey = null, $forwrdr = null)
    {
      $this->awbNo = $awbNo;
      $this->passKey = $passKey;
      $this->forwrdr = $forwrdr;
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
     * @return \SmsaSDK\Methods\getPDFBr
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
     * @return \SmsaSDK\Methods\getPDFBr
     */
    public function setPassKey($passKey)
    {
      $this->passKey = $passKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getForwrdr()
    {
      return $this->forwrdr;
    }

    /**
     * @param string $forwrdr
     * @return \SmsaSDK\Methods\getPDFBr
     */
    public function setForwrdr($forwrdr)
    {
      $this->forwrdr = $forwrdr;
      return $this;
    }

}
