<?php

namespace SmsaSDK\Methods;

class ArrayOfOrderLineItem implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var OrderLineItem[]
     */
    protected $OrderLineItem = null;

    public function __construct()
    {
    }

    /**
     * @return OrderLineItem[]
     */
    public function getOrderLineItem()
    {
        return $this->OrderLineItem;
    }

    /**
     * @param OrderLineItem[] $OrderLineItem
     *
     * @return \SmsaSDK\Methods\ArrayOfOrderLineItem
     */
    public function setOrderLineItem(array $OrderLineItem = null)
    {
        $this->OrderLineItem = $OrderLineItem;

        return $this;
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset An offset to check for
     *
     * @return bool true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->OrderLineItem[$offset]);
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return OrderLineItem
     */
    public function offsetGet($offset)
    {
        return $this->OrderLineItem[$offset];
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed         $offset The offset to assign the value to
     * @param OrderLineItem $value  The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->OrderLineItem[] = $value;
        } else {
            $this->OrderLineItem[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation.
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->OrderLineItem[$offset]);
    }

    /**
     * Iterator implementation.
     *
     * @return OrderLineItem Return the current element
     */
    public function current()
    {
        return current($this->OrderLineItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element.
     *
     * @return void
     */
    public function next()
    {
        next($this->OrderLineItem);
    }

    /**
     * Iterator implementation.
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->OrderLineItem);
    }

    /**
     * Iterator implementation.
     *
     * @return bool Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element.
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->OrderLineItem);
    }

    /**
     * Countable implementation.
     *
     * @return OrderLineItem Return count of elements
     */
    public function count()
    {
        return count($this->OrderLineItem);
    }
}
