<?php

namespace SmsaSDK\Methods;

class addShipmentResponse
{

    /**
     * @var string $addShipmentResult
     */
    protected $addShipmentResult = null;

    /**
     * @param string $addShipmentResult
     */
    public function __construct($addShipmentResult = null)
    {
        $this->addShipmentResult = $addShipmentResult;
    }

    /**
     * @return string
     */
    public function getAddShipmentResult()
    {
        return $this->addShipmentResult;
    }

    /**
     * @param string $addShipmentResult
     * @return \SmsaSDK\Methods\addShipmentResponse
     */
    public function setAddShipmentResult($addShipmentResult)
    {
        $this->addShipmentResult = $addShipmentResult;
        return $this;
    }

}
