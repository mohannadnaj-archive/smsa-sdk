<?php

namespace SmsaSDK\Methods;

class stoShipmentResponse
{

    /**
     * @var string $stoShipmentResult
     */
    protected $stoShipmentResult = null;

    /**
     * @param string $stoShipmentResult
     */
    public function __construct($stoShipmentResult = null)
    {
        $this->stoShipmentResult = $stoShipmentResult;
    }

    /**
     * @return string
     */
    public function getStoShipmentResult()
    {
        return $this->stoShipmentResult;
    }

    /**
     * @param string $stoShipmentResult
     * @return \SmsaSDK\Methods\stoShipmentResponse
     */
    public function setStoShipmentResult($stoShipmentResult)
    {
        $this->stoShipmentResult = $stoShipmentResult;
        return $this;
    }

}
