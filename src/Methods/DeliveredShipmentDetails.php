<?php

namespace SmsaSDK\Methods;

class DeliveredShipmentDetails
{

    /**
     * @var string $awbNo
     */
    protected $awbNo = null;

    /**
     * @var string $refNo
     */
    protected $refNo = null;

    /**
     * @var string $shipDate
     */
    protected $shipDate = null;

    /**
     * @var string $cName
     */
    protected $cName = null;

    /**
     * @var string $delvTo
     */
    protected $delvTo = null;

    /**
     * @var string $delvDate
     */
    protected $delvDate = null;

    /**
     * @var string $cMobile
     */
    protected $cMobile = null;

    /**
     * @var string $codAmt
     */
    protected $codAmt = null;

    /**
     * @var string $itemDesc
     */
    protected $itemDesc = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAwbNo()
    {
      return $this->awbNo;
    }

    /**
     * @param string $awbNo
     * @return \SmsaSDK\Methods\DeliveredShipmentDetails
     */
    public function setAwbNo($awbNo)
    {
      $this->awbNo = $awbNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefNo()
    {
      return $this->refNo;
    }

    /**
     * @param string $refNo
     * @return \SmsaSDK\Methods\DeliveredShipmentDetails
     */
    public function setRefNo($refNo)
    {
      $this->refNo = $refNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipDate()
    {
      return $this->shipDate;
    }

    /**
     * @param string $shipDate
     * @return \SmsaSDK\Methods\DeliveredShipmentDetails
     */
    public function setShipDate($shipDate)
    {
      $this->shipDate = $shipDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCName()
    {
      return $this->cName;
    }

    /**
     * @param string $cName
     * @return \SmsaSDK\Methods\DeliveredShipmentDetails
     */
    public function setCName($cName)
    {
      $this->cName = $cName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDelvTo()
    {
      return $this->delvTo;
    }

    /**
     * @param string $delvTo
     * @return \SmsaSDK\Methods\DeliveredShipmentDetails
     */
    public function setDelvTo($delvTo)
    {
      $this->delvTo = $delvTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDelvDate()
    {
      return $this->delvDate;
    }

    /**
     * @param string $delvDate
     * @return \SmsaSDK\Methods\DeliveredShipmentDetails
     */
    public function setDelvDate($delvDate)
    {
      $this->delvDate = $delvDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCMobile()
    {
      return $this->cMobile;
    }

    /**
     * @param string $cMobile
     * @return \SmsaSDK\Methods\DeliveredShipmentDetails
     */
    public function setCMobile($cMobile)
    {
      $this->cMobile = $cMobile;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodAmt()
    {
      return $this->codAmt;
    }

    /**
     * @param string $codAmt
     * @return \SmsaSDK\Methods\DeliveredShipmentDetails
     */
    public function setCodAmt($codAmt)
    {
      $this->codAmt = $codAmt;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDesc()
    {
      return $this->itemDesc;
    }

    /**
     * @param string $itemDesc
     * @return \SmsaSDK\Methods\DeliveredShipmentDetails
     */
    public function setItemDesc($itemDesc)
    {
      $this->itemDesc = $itemDesc;
      return $this;
    }

}
