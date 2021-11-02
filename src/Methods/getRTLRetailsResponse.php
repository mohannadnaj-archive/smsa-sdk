<?php

namespace SmsaSDK\Methods;

class getRTLRetailsResponse
{

    /**
     * @var getRTLRetailsResult $getRTLRetailsResult
     */
    protected $getRTLRetailsResult = null;

    /**
     * @param getRTLRetailsResult $getRTLRetailsResult
     */
    public function __construct($getRTLRetailsResult = null)
    {
      $this->getRTLRetailsResult = $getRTLRetailsResult;
    }

    /**
     * @return getRTLRetailsResult
     */
    public function getGetRTLRetailsResult()
    {
      return $this->getRTLRetailsResult;
    }

    /**
     * @param getRTLRetailsResult $getRTLRetailsResult
     * @return \SmsaSDK\Methods\getRTLRetailsResponse
     */
    public function setGetRTLRetailsResult($getRTLRetailsResult)
    {
      $this->getRTLRetailsResult = $getRTLRetailsResult;
      return $this;
    }

}
