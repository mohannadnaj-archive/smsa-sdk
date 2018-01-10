<?php

namespace SmsaSDK\Methods;

class addShipMPSResponse
{

    /**
     * @var string $addShipMPSResult
     */
    protected $addShipMPSResult = null;

    /**
     * @param string $addShipMPSResult
     */
    public function __construct($addShipMPSResult = null)
    {
        $this->addShipMPSResult = $addShipMPSResult;
    }

    /**
     * @return string
     */
    public function getAddShipMPSResult()
    {
        return $this->addShipMPSResult;
    }

    /**
     * @param string $addShipMPSResult
     * @return \SmsaSDK\Methods\addShipMPSResponse
     */
    public function setAddShipMPSResult($addShipMPSResult)
    {
        $this->addShipMPSResult = $addShipMPSResult;
        return $this;
    }

}
