<?php

namespace SmsaSDK\Methods;

class cancelShipmentResponse
{

    /**
     * @var string $cancelShipmentResult
     */
    protected $cancelShipmentResult = null;

    /**
     * @param string $cancelShipmentResult
     */
    public function __construct($cancelShipmentResult = null)
    {
      $this->cancelShipmentResult = $cancelShipmentResult;
    }

    /**
     * @return string
     */
    public function getCancelShipmentResult()
    {
      return $this->cancelShipmentResult;
    }

    /**
     * @param string $cancelShipmentResult
     * @return \SmsaSDK\Methods\cancelShipmentResponse
     */
    public function setCancelShipmentResult($cancelShipmentResult)
    {
      $this->cancelShipmentResult = $cancelShipmentResult;
      return $this;
    }

}
