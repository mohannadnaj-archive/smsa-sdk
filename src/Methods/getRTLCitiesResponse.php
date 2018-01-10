<?php

namespace SmsaSDK\Methods;

class getRTLCitiesResponse
{
    /**
     * @var getRTLCitiesResult
     */
    protected $getRTLCitiesResult = null;

    /**
     * @param getRTLCitiesResult $getRTLCitiesResult
     */
    public function __construct($getRTLCitiesResult = null)
    {
        $this->getRTLCitiesResult = $getRTLCitiesResult;
    }

    /**
     * @return getRTLCitiesResult
     */
    public function getGetRTLCitiesResult()
    {
        return $this->getRTLCitiesResult;
    }

    /**
     * @param getRTLCitiesResult $getRTLCitiesResult
     *
     * @return \SmsaSDK\Methods\getRTLCitiesResponse
     */
    public function setGetRTLCitiesResult($getRTLCitiesResult)
    {
        $this->getRTLCitiesResult = $getRTLCitiesResult;

        return $this;
    }
}
