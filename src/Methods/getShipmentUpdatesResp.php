<?php

namespace SmsaSDK\Methods;

class getShipmentUpdatesResp
{
    /**
     * @var string
     */
    protected $RequestStatus = null;

    /**
     * @var ArrayOfShipUpdates
     */
    protected $ShipUpdatesList = null;

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
     * @return \SmsaSDK\Methods\getShipmentUpdatesResp
     */
    public function setRequestStatus($RequestStatus)
    {
        $this->RequestStatus = $RequestStatus;

        return $this;
    }

    /**
     * @return ArrayOfShipUpdates
     */
    public function getShipUpdatesList()
    {
        return $this->ShipUpdatesList;
    }

    /**
     * @param ArrayOfShipUpdates $ShipUpdatesList
     *
     * @return \SmsaSDK\Methods\getShipmentUpdatesResp
     */
    public function setShipUpdatesList($ShipUpdatesList)
    {
        $this->ShipUpdatesList = $ShipUpdatesList;

        return $this;
    }
}
