<?php

namespace SmsaSDK\Methods;

class getPDFResponse
{
    /**
     * @var base64Binary
     */
    protected $getPDFResult = null;

    /**
     * @param base64Binary $getPDFResult
     */
    public function __construct($getPDFResult = null)
    {
        $this->getPDFResult = $getPDFResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetPDFResult()
    {
        return $this->getPDFResult;
    }

    /**
     * @param base64Binary $getPDFResult
     *
     * @return \SmsaSDK\Methods\getPDFResponse
     */
    public function setGetPDFResult($getPDFResult)
    {
        $this->getPDFResult = $getPDFResult;

        return $this;
    }
}
