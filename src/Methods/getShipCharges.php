<?php

namespace SmsaSDK\Methods;

class getShipCharges
{

    /**
     * @var string $passKey
     */
    protected $passKey = null;

    /**
     * @var string $shipCity
     */
    protected $shipCity = null;

    /**
     * @var string $shipCntry
     */
    protected $shipCntry = null;

    /**
     * @var string $destCity
     */
    protected $destCity = null;

    /**
     * @var string $destCntry
     */
    protected $destCntry = null;

    /**
     * @var string $shipType
     */
    protected $shipType = null;

    /**
     * @var float $codAmt
     */
    protected $codAmt = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @param string $passKey
     * @param string $shipCity
     * @param string $shipCntry
     * @param string $destCity
     * @param string $destCntry
     * @param string $shipType
     * @param float $codAmt
     * @param float $weight
     */
    public function __construct($passKey = null, $shipCity = null, $shipCntry = null, $destCity = null, $destCntry = null, $shipType = null, $codAmt = null, $weight = null)
    {
      $this->passKey = $passKey;
      $this->shipCity = $shipCity;
      $this->shipCntry = $shipCntry;
      $this->destCity = $destCity;
      $this->destCntry = $destCntry;
      $this->shipType = $shipType;
      $this->codAmt = $codAmt;
      $this->weight = $weight;
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
     * @return \SmsaSDK\Methods\getShipCharges
     */
    public function setPassKey($passKey)
    {
      $this->passKey = $passKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipCity()
    {
      return $this->shipCity;
    }

    /**
     * @param string $shipCity
     * @return \SmsaSDK\Methods\getShipCharges
     */
    public function setShipCity($shipCity)
    {
      $this->shipCity = $shipCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipCntry()
    {
      return $this->shipCntry;
    }

    /**
     * @param string $shipCntry
     * @return \SmsaSDK\Methods\getShipCharges
     */
    public function setShipCntry($shipCntry)
    {
      $this->shipCntry = $shipCntry;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestCity()
    {
      return $this->destCity;
    }

    /**
     * @param string $destCity
     * @return \SmsaSDK\Methods\getShipCharges
     */
    public function setDestCity($destCity)
    {
      $this->destCity = $destCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestCntry()
    {
      return $this->destCntry;
    }

    /**
     * @param string $destCntry
     * @return \SmsaSDK\Methods\getShipCharges
     */
    public function setDestCntry($destCntry)
    {
      $this->destCntry = $destCntry;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipType()
    {
      return $this->shipType;
    }

    /**
     * @param string $shipType
     * @return \SmsaSDK\Methods\getShipCharges
     */
    public function setShipType($shipType)
    {
      $this->shipType = $shipType;
      return $this;
    }

    /**
     * @return float
     */
    public function getCodAmt()
    {
      return $this->codAmt;
    }

    /**
     * @param float $codAmt
     * @return \SmsaSDK\Methods\getShipCharges
     */
    public function setCodAmt($codAmt)
    {
      $this->codAmt = $codAmt;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return \SmsaSDK\Methods\getShipCharges
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

}
