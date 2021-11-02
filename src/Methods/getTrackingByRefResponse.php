<?php

namespace SmsaSDK\Methods;

class getTrackingByRefResponse
{

    /**
     * @var getTrackingByRefResult $getTrackingByRefResult
     */
    protected $getTrackingByRefResult = null;

    /**
     * @param getTrackingByRefResult $getTrackingByRefResult
     */
    public function __construct($getTrackingByRefResult = null)
    {
      $this->getTrackingByRefResult = $getTrackingByRefResult;
    }

    /**
     * @return getTrackingByRefResult
     */
    public function getGetTrackingByRefResult()
    {
      return $this->getTrackingByRefResult;
    }

    /**
     * @param getTrackingByRefResult $getTrackingByRefResult
     * @return \SmsaSDK\Methods\getTrackingByRefResponse
     */
    public function setGetTrackingByRefResult($getTrackingByRefResult)
    {
      $this->getTrackingByRefResult = $getTrackingByRefResult;
      return $this;
    }

}
