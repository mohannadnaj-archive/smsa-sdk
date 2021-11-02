<?php

namespace SmsaSDK\Methods;

class getShipmentUpdates
{

    /**
     * @var int $rowId
     */
    protected $rowId = null;

    /**
     * @var string $passKey
     */
    protected $passKey = null;

    /**
     * @param int $rowId
     * @param string $passKey
     */
    public function __construct($rowId = null, $passKey = null)
    {
      $this->rowId = $rowId;
      $this->passKey = $passKey;
    }

    /**
     * @return int
     */
    public function getRowId()
    {
      return $this->rowId;
    }

    /**
     * @param int $rowId
     * @return \SmsaSDK\Methods\getShipmentUpdates
     */
    public function setRowId($rowId)
    {
      $this->rowId = $rowId;
      return $this;
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
     * @return \SmsaSDK\Methods\getShipmentUpdates
     */
    public function setPassKey($passKey)
    {
      $this->passKey = $passKey;
      return $this;
    }

}