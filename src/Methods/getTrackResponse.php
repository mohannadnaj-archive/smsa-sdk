<?php

namespace SmsaSDK\Methods;

class getTrackResponse
{

    /**
     * @var getTrackResp $getTrackResult
     */
    protected $getTrackResult = null;

    /**
     * @param getTrackResp $getTrackResult
     */
    public function __construct($getTrackResult = null)
    {
      $this->getTrackResult = $getTrackResult;
    }

    /**
     * @return getTrackResp
     */
    public function getGetTrackResult()
    {
      return $this->getTrackResult;
    }

    /**
     * @param getTrackResp $getTrackResult
     * @return \SmsaSDK\Methods\getTrackResponse
     */
    public function setGetTrackResult($getTrackResult)
    {
      $this->getTrackResult = $getTrackResult;
      return $this;
    }

}
