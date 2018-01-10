<?php

namespace SmsaSDK\Methods;

class getShipUpdatesResponse
{
    /**
     * @var getShipUpdatesResult
     */
    protected $getShipUpdatesResult = null;

    /**
     * @param getShipUpdatesResult $getShipUpdatesResult
     */
    public function __construct($getShipUpdatesResult = null)
    {
        $this->getShipUpdatesResult = $getShipUpdatesResult;
    }

    /**
     * @return getShipUpdatesResult
     */
    public function getGetShipUpdatesResult()
    {
        return $this->getShipUpdatesResult;
    }

    /**
     * @param getShipUpdatesResult $getShipUpdatesResult
     *
     * @return \SmsaSDK\Methods\getShipUpdatesResponse
     */
    public function setGetShipUpdatesResult($getShipUpdatesResult)
    {
        $this->getShipUpdatesResult = $getShipUpdatesResult;

        return $this;
    }
}
