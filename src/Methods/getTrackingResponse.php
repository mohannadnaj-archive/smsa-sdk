<?php

namespace SmsaSDK\Methods;

class getTrackingResponse
{
    /**
     * @var getTrackingResult
     */
    protected $getTrackingResult = null;

    /**
     * @param getTrackingResult $getTrackingResult
     */
    public function __construct($getTrackingResult = null)
    {
        $this->getTrackingResult = $getTrackingResult;
    }

    /**
     * @return getTrackingResult
     */
    public function getGetTrackingResult()
    {
        return $this->getTrackingResult;
    }

    /**
     * @param getTrackingResult $getTrackingResult
     *
     * @return \SmsaSDK\Methods\getTrackingResponse
     */
    public function setGetTrackingResult($getTrackingResult)
    {
        $this->getTrackingResult = $getTrackingResult;

        return $this;
    }
}
