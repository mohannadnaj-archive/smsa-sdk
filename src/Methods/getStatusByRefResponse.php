<?php

namespace SmsaSDK\Methods;

class getStatusByRefResponse
{

    /**
     * @var string $getStatusByRefResult
     */
    protected $getStatusByRefResult = null;

    /**
     * @param string $getStatusByRefResult
     */
    public function __construct($getStatusByRefResult = null)
    {
        $this->getStatusByRefResult = $getStatusByRefResult;
    }

    /**
     * @return string
     */
    public function getGetStatusByRefResult()
    {
        return $this->getStatusByRefResult;
    }

    /**
     * @param string $getStatusByRefResult
     * @return \SmsaSDK\Methods\getStatusByRefResponse
     */
    public function setGetStatusByRefResult($getStatusByRefResult)
    {
        $this->getStatusByRefResult = $getStatusByRefResult;
        return $this;
    }

}
