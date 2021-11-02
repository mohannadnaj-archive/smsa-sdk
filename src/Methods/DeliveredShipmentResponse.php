<?php

namespace SmsaSDK\Methods;

class DeliveredShipmentResponse
{
    /**
     * @var string
     */
    protected $RequestStatus = null;

    /**
     * @var ArrayOfDeliveredShipmentDetails
     */
    protected $TrackingDetailsList = null;

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
     * @return \SmsaSDK\Methods\DeliveredShipmentResponse
     */
    public function setRequestStatus($RequestStatus)
    {
        $this->RequestStatus = $RequestStatus;

        return $this;
    }

    /**
     * @return ArrayOfDeliveredShipmentDetails
     */
    public function getTrackingDetailsList()
    {
        return $this->TrackingDetailsList;
    }

    /**
     * @param ArrayOfDeliveredShipmentDetails $TrackingDetailsList
     *
     * @return \SmsaSDK\Methods\DeliveredShipmentResponse
     */
    public function setTrackingDetailsList($TrackingDetailsList)
    {
        $this->TrackingDetailsList = $TrackingDetailsList;

        return $this;
    }
}
