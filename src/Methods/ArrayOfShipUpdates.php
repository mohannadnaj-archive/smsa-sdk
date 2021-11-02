<?php

namespace SmsaSDK\Methods;

class ArrayOfShipUpdates implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ShipUpdates[] $ShipUpdates
     */
    protected $ShipUpdates = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipUpdates[]
     */
    public function getShipUpdates()
    {
      return $this->ShipUpdates;
    }

    /**
     * @param ShipUpdates[] $ShipUpdates
     * @return \SmsaSDK\Methods\ArrayOfShipUpdates
     */
    public function setShipUpdates(array $ShipUpdates = null)
    {
      $this->ShipUpdates = $ShipUpdates;
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
      return isset($this->ShipUpdates[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShipUpdates
     */
    public function offsetGet($offset)
    {
      return $this->ShipUpdates[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShipUpdates $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ShipUpdates[] = $value;
      } else {
        $this->ShipUpdates[$offset] = $value;
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
      unset($this->ShipUpdates[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShipUpdates Return the current element
     */
    public function current()
    {
      return current($this->ShipUpdates);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ShipUpdates);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ShipUpdates);
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
      reset($this->ShipUpdates);
    }

    /**
     * Countable implementation
     *
     * @return ShipUpdates Return count of elements
     */
    public function count()
    {
      return count($this->ShipUpdates);
    }

}
