<?php

namespace SmsaSDK\Methods;

class ArrayOfDeliveredShipmentDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeliveredShipmentDetails[] $DeliveredShipmentDetails
     */
    protected $DeliveredShipmentDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeliveredShipmentDetails[]
     */
    public function getDeliveredShipmentDetails()
    {
      return $this->DeliveredShipmentDetails;
    }

    /**
     * @param DeliveredShipmentDetails[] $DeliveredShipmentDetails
     * @return \SmsaSDK\Methods\ArrayOfDeliveredShipmentDetails
     */
    public function setDeliveredShipmentDetails(array $DeliveredShipmentDetails = null)
    {
      $this->DeliveredShipmentDetails = $DeliveredShipmentDetails;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->DeliveredShipmentDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeliveredShipmentDetails
     */
    public function offsetGet($offset)
    {
      return $this->DeliveredShipmentDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeliveredShipmentDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DeliveredShipmentDetails[] = $value;
      } else {
        $this->DeliveredShipmentDetails[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DeliveredShipmentDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeliveredShipmentDetails Return the current element
     */
    public function current()
    {
      return current($this->DeliveredShipmentDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DeliveredShipmentDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DeliveredShipmentDetails);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->DeliveredShipmentDetails);
    }

    /**
     * Countable implementation
     *
     * @return DeliveredShipmentDetails Return count of elements
     */
    public function count()
    {
      return count($this->DeliveredShipmentDetails);
    }

}
