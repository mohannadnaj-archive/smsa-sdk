<?php

namespace SmsaSDK\Methods;

class getRTLRetailsTimingResponse
{

    /**
     * @var getRTLRetailsTimingResult $getRTLRetailsTimingResult
     */
    protected $getRTLRetailsTimingResult = null;

    /**
     * @param getRTLRetailsTimingResult $getRTLRetailsTimingResult
     */
    public function __construct($getRTLRetailsTimingResult = null)
    {
      $this->getRTLRetailsTimingResult = $getRTLRetailsTimingResult;
    }

    /**
     * @return getRTLRetailsTimingResult
     */
    public function getGetRTLRetailsTimingResult()
    {
      return $this->getRTLRetailsTimingResult;
    }

    /**
     * @param getRTLRetailsTimingResult $getRTLRetailsTimingResult
     * @return \SmsaSDK\Methods\getRTLRetailsTimingResponse
     */
    public function setGetRTLRetailsTimingResult($getRTLRetailsTimingResult)
    {
      $this->getRTLRetailsTimingResult = $getRTLRetailsTimingResult;
      return $this;
    }

}
