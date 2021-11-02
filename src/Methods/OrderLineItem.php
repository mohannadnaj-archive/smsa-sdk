<?php

namespace SmsaSDK\Methods;

class OrderLineItem
{
    /**
     * @var string
     */
    protected $iSKU = null;

    /**
     * @var string
     */
    protected $iQty = null;

    /**
     * @var string
     */
    protected $iSerial = null;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getISKU()
    {
        return $this->iSKU;
    }

    /**
     * @param string $iSKU
     *
     * @return \SmsaSDK\Methods\OrderLineItem
     */
    public function setISKU($iSKU)
    {
        $this->iSKU = $iSKU;

        return $this;
    }

    /**
     * @return string
     */
    public function getIQty()
    {
        return $this->iQty;
    }

    /**
     * @param string $iQty
     *
     * @return \SmsaSDK\Methods\OrderLineItem
     */
    public function setIQty($iQty)
    {
        $this->iQty = $iQty;

        return $this;
    }

    /**
     * @return string
     */
    public function getISerial()
    {
        return $this->iSerial;
    }

    /**
     * @param string $iSerial
     *
     * @return \SmsaSDK\Methods\OrderLineItem
     */
    public function setISerial($iSerial)
    {
        $this->iSerial = $iSerial;

        return $this;
    }
}
