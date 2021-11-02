<?php

namespace SmsaSDK\Methods;

class getShipmentUpdatesResponse
{
    /**
     * @var getShipmentUpdatesResp
     */
    protected $getShipmentUpdatesResult = null;

    /**
     * @param getShipmentUpdatesResp $getShipmentUpdatesResult
     */
    public function __construct($getShipmentUpdatesResult = null)
    {
        $this->getShipmentUpdatesResult = $getShipmentUpdatesResult;
    }

    /**
     * @return getShipmentUpdatesResp
     */
    public function getGetShipmentUpdatesResult()
    {
        return $this->getShipmentUpdatesResult;
    }

    /**
     * @param getShipmentUpdatesResp $getShipmentUpdatesResult
     *
     * @return \SmsaSDK\Methods\getShipmentUpdatesResponse
     */
    public function setGetShipmentUpdatesResult($getShipmentUpdatesResult)
    {
        $this->getShipmentUpdatesResult = $getShipmentUpdatesResult;

        return $this;
    }
}
