<?php

namespace SmsaSDK\Methods;

class getAllRetailsTimingResponse
{
    /**
     * @var getAllRetailsTimingResult
     */
    protected $getAllRetailsTimingResult = null;

    /**
     * @param getAllRetailsTimingResult $getAllRetailsTimingResult
     */
    public function __construct($getAllRetailsTimingResult = null)
    {
        $this->getAllRetailsTimingResult = $getAllRetailsTimingResult;
    }

    /**
     * @return getAllRetailsTimingResult
     */
    public function getGetAllRetailsTimingResult()
    {
        return $this->getAllRetailsTimingResult;
    }

    /**
     * @param getAllRetailsTimingResult $getAllRetailsTimingResult
     *
     * @return \SmsaSDK\Methods\getAllRetailsTimingResponse
     */
    public function setGetAllRetailsTimingResult($getAllRetailsTimingResult)
    {
        $this->getAllRetailsTimingResult = $getAllRetailsTimingResult;

        return $this;
    }
}
