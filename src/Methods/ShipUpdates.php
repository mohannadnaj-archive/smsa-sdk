<?php

namespace SmsaSDK\Methods;

class ShipUpdates
{

    /**
     * @var string $rowId
     */
    protected $rowId = null;

    /**
     * @var string $awbNo
     */
    protected $awbNo = null;

    /**
     * @var string $evtDate
     */
    protected $evtDate = null;

    /**
     * @var string $Activity
     */
    protected $Activity = null;

    /**
     * @var string $Details
     */
    protected $Details = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRowId()
    {
      return $this->rowId;
    }

    /**
     * @param string $rowId
     * @return \SmsaSDK\Methods\ShipUpdates
     */
    public function setRowId($rowId)
    {
      $this->rowId = $rowId;
      return $this;
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
     * @return \SmsaSDK\Methods\ShipUpdates
     */
    public function setAwbNo($awbNo)
    {
      $this->awbNo = $awbNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getEvtDate()
    {
      return $this->evtDate;
    }

    /**
     * @param string $evtDate
     * @return \SmsaSDK\Methods\ShipUpdates
     */
    public function setEvtDate($evtDate)
    {
      $this->evtDate = $evtDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getActivity()
    {
      return $this->Activity;
    }

    /**
     * @param string $Activity
     * @return \SmsaSDK\Methods\ShipUpdates
     */
    public function setActivity($Activity)
    {
      $this->Activity = $Activity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
      return $this->Details;
    }

    /**
     * @param string $Details
     * @return \SmsaSDK\Methods\ShipUpdates
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \SmsaSDK\Methods\ShipUpdates
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
