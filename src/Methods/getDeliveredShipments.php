<?php

namespace SmsaSDK\Methods;

class getDeliveredShipments
{
    /**
     * @var string
     */
    protected $passKey = null;

    /**
     * @var string
     */
    protected $fromDate = null;

    /**
     * @var string
     */
    protected $ToDate = null;

    /**
     * @param string $passKey
     * @param string $fromDate
     * @param string $ToDate
     */
    public function __construct($passKey = null, $fromDate = null, $ToDate = null)
    {
        $this->passKey = $passKey;
        $this->fromDate = $fromDate;
        $this->ToDate = $ToDate;
    }

    /**
     * @return string
     */
    public function getPassKey()
    {
        return $this->passKey;
    }

    /**
     * @param string $passKey
     *
     * @return \SmsaSDK\Methods\getDeliveredShipments
     */
    public function setPassKey($passKey)
    {
        $this->passKey = $passKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * @param string $fromDate
     *
     * @return \SmsaSDK\Methods\getDeliveredShipments
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
        return $this->ToDate;
    }

    /**
     * @param string $ToDate
     *
     * @return \SmsaSDK\Methods\getDeliveredShipments
     */
    public function setToDate($ToDate)
    {
        $this->ToDate = $ToDate;

        return $this;
    }
}
