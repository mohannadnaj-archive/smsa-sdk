<?php

namespace SmsaSDK\Methods;

class getShipChargesResponse
{
    /**
     * @var getShipChargesResp
     */
    protected $getShipChargesResult = null;

    /**
     * @param getShipChargesResp $getShipChargesResult
     */
    public function __construct($getShipChargesResult = null)
    {
        $this->getShipChargesResult = $getShipChargesResult;
    }

    /**
     * @return getShipChargesResp
     */
    public function getGetShipChargesResult()
    {
        return $this->getShipChargesResult;
    }

    /**
     * @param getShipChargesResp $getShipChargesResult
     *
     * @return \SmsaSDK\Methods\getShipChargesResponse
     */
    public function setGetShipChargesResult($getShipChargesResult)
    {
        $this->getShipChargesResult = $getShipChargesResult;

        return $this;
    }
}
