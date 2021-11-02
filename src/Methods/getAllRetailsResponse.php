<?php

namespace SmsaSDK\Methods;

class getAllRetailsResponse
{

    /**
     * @var getAllRetailsResult $getAllRetailsResult
     */
    protected $getAllRetailsResult = null;

    /**
     * @param getAllRetailsResult $getAllRetailsResult
     */
    public function __construct($getAllRetailsResult = null)
    {
      $this->getAllRetailsResult = $getAllRetailsResult;
    }

    /**
     * @return getAllRetailsResult
     */
    public function getGetAllRetailsResult()
    {
      return $this->getAllRetailsResult;
    }

    /**
     * @param getAllRetailsResult $getAllRetailsResult
     * @return \SmsaSDK\Methods\getAllRetailsResponse
     */
    public function setGetAllRetailsResult($getAllRetailsResult)
    {
      $this->getAllRetailsResult = $getAllRetailsResult;
      return $this;
    }

}
