<?php

namespace SmsaSDK\Methods;

class getShipChargesResp
{
    /**
     * @var string
     */
    protected $RequestStatus = null;

    /**
     * @var string
     */
    protected $ShipCharges = null;

    /**
     * @var string
     */
    protected $ShipChargesCurr = null;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getRequestStatus()
    {
        return $this->RequestStatus;
    }

    /**
     * @param string $RequestStatus
     *
     * @return \SmsaSDK\Methods\getShipChargesResp
     */
    public function setRequestStatus($RequestStatus)
    {
        $this->RequestStatus = $RequestStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipCharges()
    {
        return $this->ShipCharges;
    }

    /**
     * @param string $ShipCharges
     *
     * @return \SmsaSDK\Methods\getShipChargesResp
     */
    public function setShipCharges($ShipCharges)
    {
        $this->ShipCharges = $ShipCharges;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipChargesCurr()
    {
        return $this->ShipChargesCurr;
    }

    /**
     * @param string $ShipChargesCurr
     *
     * @return \SmsaSDK\Methods\getShipChargesResp
     */
    public function setShipChargesCurr($ShipChargesCurr)
    {
        $this->ShipChargesCurr = $ShipChargesCurr;

        return $this;
    }
}
