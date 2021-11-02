<?php

namespace SmsaSDK\Methods;

class getTrackingwithRefResponse
{

    /**
     * @var getTrackingwithRefResult $getTrackingwithRefResult
     */
    protected $getTrackingwithRefResult = null;

    /**
     * @param getTrackingwithRefResult $getTrackingwithRefResult
     */
    public function __construct($getTrackingwithRefResult = null)
    {
      $this->getTrackingwithRefResult = $getTrackingwithRefResult;
    }

    /**
     * @return getTrackingwithRefResult
     */
    public function getGetTrackingwithRefResult()
    {
      return $this->getTrackingwithRefResult;
    }

    /**
     * @param getTrackingwithRefResult $getTrackingwithRefResult
     * @return \SmsaSDK\Methods\getTrackingwithRefResponse
     */
    public function setGetTrackingwithRefResult($getTrackingwithRefResult)
    {
      $this->getTrackingwithRefResult = $getTrackingwithRefResult;
      return $this;
    }

}
