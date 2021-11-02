<?php

namespace SmsaSDK\Methods;

class addShipResponse
{

    /**
     * @var string $addShipResult
     */
    protected $addShipResult = null;

    /**
     * @param string $addShipResult
     */
    public function __construct($addShipResult = null)
    {
      $this->addShipResult = $addShipResult;
    }

    /**
     * @return string
     */
    public function getAddShipResult()
    {
      return $this->addShipResult;
    }

    /**
     * @param string $addShipResult
     * @return \SmsaSDK\Methods\addShipResponse
     */
    public function setAddShipResult($addShipResult)
    {
      $this->addShipResult = $addShipResult;
      return $this;
    }

}
