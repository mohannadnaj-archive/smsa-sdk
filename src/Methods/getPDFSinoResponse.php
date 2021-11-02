<?php

namespace SmsaSDK\Methods;

class getPDFSinoResponse
{

    /**
     * @var base64Binary $getPDFSinoResult
     */
    protected $getPDFSinoResult = null;

    /**
     * @param base64Binary $getPDFSinoResult
     */
    public function __construct($getPDFSinoResult = null)
    {
      $this->getPDFSinoResult = $getPDFSinoResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetPDFSinoResult()
    {
      return $this->getPDFSinoResult;
    }

    /**
     * @param base64Binary $getPDFSinoResult
     * @return \SmsaSDK\Methods\getPDFSinoResponse
     */
    public function setGetPDFSinoResult($getPDFSinoResult)
    {
      $this->getPDFSinoResult = $getPDFSinoResult;
      return $this;
    }

}
