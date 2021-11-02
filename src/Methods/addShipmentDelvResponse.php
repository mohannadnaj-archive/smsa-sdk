<?php

namespace SmsaSDK\Methods;

class addShipmentDelvResponse
{

    /**
     * @var string $addShipmentDelvResult
     */
    protected $addShipmentDelvResult = null;

    /**
     * @param string $addShipmentDelvResult
     */
    public function __construct($addShipmentDelvResult = null)
    {
      $this->addShipmentDelvResult = $addShipmentDelvResult;
    }

    /**
     * @return string
     */
    public function getAddShipmentDelvResult()
    {
      return $this->addShipmentDelvResult;
    }

    /**
     * @param string $addShipmentDelvResult
     * @return \SmsaSDK\Methods\addShipmentDelvResponse
     */
    public function setAddShipmentDelvResult($addShipmentDelvResult)
    {
      $this->addShipmentDelvResult = $addShipmentDelvResult;
      return $this;
    }

}
