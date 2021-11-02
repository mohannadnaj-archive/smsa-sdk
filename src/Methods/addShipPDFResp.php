<?php

namespace SmsaSDK\Methods;

class addShipPDFResp
{

    /**
     * @var string $Response
     */
    protected $Response = null;

    /**
     * @var base64Binary $aPDF
     */
    protected $aPDF = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getResponse()
    {
      return $this->Response;
    }

    /**
     * @param string $Response
     * @return \SmsaSDK\Methods\addShipPDFResp
     */
    public function setResponse($Response)
    {
      $this->Response = $Response;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getAPDF()
    {
      return $this->aPDF;
    }

    /**
     * @param base64Binary $aPDF
     * @return \SmsaSDK\Methods\addShipPDFResp
     */
    public function setAPDF($aPDF)
    {
      $this->aPDF = $aPDF;
      return $this;
    }

}
