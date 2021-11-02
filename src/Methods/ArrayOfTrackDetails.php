<?php

namespace SmsaSDK\Methods;

class ArrayOfTrackDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TrackDetails[] $TrackDetails
     */
    protected $TrackDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TrackDetails[]
     */
    public function getTrackDetails()
    {
      return $this->TrackDetails;
    }

    /**
     * @param TrackDetails[] $TrackDetails
     * @return \SmsaSDK\Methods\ArrayOfTrackDetails
     */
    public function setTrackDetails(array $TrackDetails = null)
    {
      $this->TrackDetails = $TrackDetails;
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
      return isset($this->TrackDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TrackDetails
     */
    public function offsetGet($offset)
    {
      return $this->TrackDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TrackDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TrackDetails[] = $value;
      } else {
        $this->TrackDetails[$offset] = $value;
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
      unset($this->TrackDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TrackDetails Return the current element
     */
    public function current()
    {
      return current($this->TrackDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TrackDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TrackDetails);
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
      reset($this->TrackDetails);
    }

    /**
     * Countable implementation
     *
     * @return TrackDetails Return count of elements
     */
    public function count()
    {
      return count($this->TrackDetails);
    }

}
