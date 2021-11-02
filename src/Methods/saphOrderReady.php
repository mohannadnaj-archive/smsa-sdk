<?php

namespace SmsaSDK\Methods;

class saphOrderReady
{

    /**
     * @var string $passKey
     */
    protected $passKey = null;

    /**
     * @var string $refId
     */
    protected $refId = null;

    /**
     * @var ArrayOfOrderLineItem $orderLineItems
     */
    protected $orderLineItems = null;

    /**
     * @param string $passKey
     * @param string $refId
     * @param ArrayOfOrderLineItem $orderLineItems
     */
    public function __construct($passKey = null, $refId = null, $orderLineItems = null)
    {
      $this->passKey = $passKey;
      $this->refId = $refId;
      $this->orderLineItems = $orderLineItems;
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
     * @return \SmsaSDK\Methods\saphOrderReady
     */
    public function setPassKey($passKey)
    {
      $this->passKey = $passKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefId()
    {
      return $this->refId;
    }

    /**
     * @param string $refId
     * @return \SmsaSDK\Methods\saphOrderReady
     */
    public function setRefId($refId)
    {
      $this->refId = $refId;
      return $this;
    }

    /**
     * @return ArrayOfOrderLineItem
     */
    public function getOrderLineItems()
    {
      return $this->orderLineItems;
    }

    /**
     * @param ArrayOfOrderLineItem $orderLineItems
     * @return \SmsaSDK\Methods\saphOrderReady
     */
    public function setOrderLineItems($orderLineItems)
    {
      $this->orderLineItems = $orderLineItems;
      return $this;
    }

}
