<?php

namespace SmsaSDK\Methods;

class addShipPDFResponse
{

    /**
     * @var addShipPDFResp $addShipPDFResult
     */
    protected $addShipPDFResult = null;

    /**
     * @param addShipPDFResp $addShipPDFResult
     */
    public function __construct($addShipPDFResult = null)
    {
      $this->addShipPDFResult = $addShipPDFResult;
    }

    /**
     * @return addShipPDFResp
     */
    public function getAddShipPDFResult()
    {
      return $this->addShipPDFResult;
    }

    /**
     * @param addShipPDFResp $addShipPDFResult
     * @return \SmsaSDK\Methods\addShipPDFResponse
     */
    public function setAddShipPDFResult($addShipPDFResult)
    {
      $this->addShipPDFResult = $addShipPDFResult;
      return $this;
    }

}
