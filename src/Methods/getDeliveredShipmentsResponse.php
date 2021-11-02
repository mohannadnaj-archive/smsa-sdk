<?php

namespace SmsaSDK\Methods;

class getDeliveredShipmentsResponse
{

    /**
     * @var DeliveredShipmentResponse $getDeliveredShipmentsResult
     */
    protected $getDeliveredShipmentsResult = null;

    /**
     * @param DeliveredShipmentResponse $getDeliveredShipmentsResult
     */
    public function __construct($getDeliveredShipmentsResult = null)
    {
      $this->getDeliveredShipmentsResult = $getDeliveredShipmentsResult;
    }

    /**
     * @return DeliveredShipmentResponse
     */
    public function getGetDeliveredShipmentsResult()
    {
      return $this->getDeliveredShipmentsResult;
    }

    /**
     * @param DeliveredShipmentResponse $getDeliveredShipmentsResult
     * @return \SmsaSDK\Methods\getDeliveredShipmentsResponse
     */
    public function setGetDeliveredShipmentsResult($getDeliveredShipmentsResult)
    {
      $this->getDeliveredShipmentsResult = $getDeliveredShipmentsResult;
      return $this;
    }

}
