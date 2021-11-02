<?php

namespace SmsaSDK\Methods;

class getStatusResponse
{
    /**
     * @var string
     */
    protected $getStatusResult = null;

    /**
     * @param string $getStatusResult
     */
    public function __construct($getStatusResult = null)
    {
        $this->getStatusResult = $getStatusResult;
    }

    /**
     * @return string
     */
    public function getGetStatusResult()
    {
        return $this->getStatusResult;
    }

    /**
     * @param string $getStatusResult
     *
     * @return \SmsaSDK\Methods\getStatusResponse
     */
    public function setGetStatusResult($getStatusResult)
    {
        $this->getStatusResult = $getStatusResult;

        return $this;
    }
}
