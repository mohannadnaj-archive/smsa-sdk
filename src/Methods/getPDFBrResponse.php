<?php

namespace SmsaSDK\Methods;

class getPDFBrResponse
{

    /**
     * @var base64Binary $getPDFBrResult
     */
    protected $getPDFBrResult = null;

    /**
     * @param base64Binary $getPDFBrResult
     */
    public function __construct($getPDFBrResult = null)
    {
      $this->getPDFBrResult = $getPDFBrResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetPDFBrResult()
    {
      return $this->getPDFBrResult;
    }

    /**
     * @param base64Binary $getPDFBrResult
     * @return \SmsaSDK\Methods\getPDFBrResponse
     */
    public function setGetPDFBrResult($getPDFBrResult)
    {
      $this->getPDFBrResult = $getPDFBrResult;
      return $this;
    }

}
