<?php

namespace SmsaSDK\Methods;

class getTrackResp
{

    /**
     * @var string $RequestStatus
     */
    protected $RequestStatus = null;

    /**
     * @var ArrayOfTrackDetails $TrackDetailsList
     */
    protected $TrackDetailsList = null;

    
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
     * @return \SmsaSDK\Methods\getTrackResp
     */
    public function setRequestStatus($RequestStatus)
    {
      $this->RequestStatus = $RequestStatus;
      return $this;
    }

    /**
     * @return ArrayOfTrackDetails
     */
    public function getTrackDetailsList()
    {
      return $this->TrackDetailsList;
    }

    /**
     * @param ArrayOfTrackDetails $TrackDetailsList
     * @return \SmsaSDK\Methods\getTrackResp
     */
    public function setTrackDetailsList($TrackDetailsList)
    {
      $this->TrackDetailsList = $TrackDetailsList;
      return $this;
    }

}
