<?php
/**
 * Created by xiyusullos.
 * Created at 2017-03-22 13:13
 *
 * @author    xiyusullos <i@xy-jit.cc>
 * @copyright Copyright (C) 2017 xiyusullos.
 * @license   MIT
 */

namespace xiyusullos;

trait Nullable
{
    /**
     * Does nothing when invoking a inaccessible method in a static context.
     *
     * @param string $name The name of the method being called.
     * @param mixed[] $arguments The arguments of the method being called.
     *
     * @return Nullable Always returns a new instance of static.
     */
    public static function __callStatic($name, $arguments)
    {
        return new static();
    }

    /**
     * Invokes this class as a function.
     *
     * @return Nullable Always returns $this.
     */
    public function __invoke()
    {
        return $this;
    }

    /**
     * Does nothing when invoking a inaccessible method in an object context.
     *
     * @param string $name The name of the method being called.
     * @param mixed[] $arguments The arguments of the method being called.
     *
     * @return Nullable Always returns $this.
     */
    public function __call($name, $arguments)
    {
        return $this;
    }

    /**
     * Returns the value when reading data from a inaccessible property.
     *
     * @param string $name The property name.
     *
     * @return Nullable Always returns $this.
     */
    public function __get($name)
    {
        return $this;
    }

    /**
     * Does nothing when writing data to a inaccessible property.
     *
     * @param string $name The property name to set the value to.
     * @param mixed $value The value to set.
     */
    public function __set($name, $value)
    {
        // do nothing.
    }

    /**
     * Returns a string representation of this object.
     *
     * @return string Always returns the string representation of null.
     */
    public function __toString()
    {
        return (string) null;
    }

    /**
     * Does nothing with a clone operation.
     */
    public function __clone()
    {
        // do nothing.
    }

    /**
     * Returns the names of variables of this object that should be serialized.
     *
     * @return array Always returns an empty array.
     */
    public function __sleep()
    {
        return [];
    }

    /**
     * Reconstructs resources that this object may have when unserializing.
     *
     * @return Nullable Always returns $this.
     */
    public function __wakeup()
    {
        return $this;
    }

    /**
     * Returns data which should be serialized to JSON.
     *
     * @return \stdClass Always returns \stdClass.
     */
    public function jsonSerialize()
    {
        return new \stdClass();
    }

    /**
     * Returns the current element.
     *
     * @return Nullable Always returns $this.
     */
    public function current()
    {
        return $this;
    }

    /**
     * Moves forward to next element.
     */
    public function next()
    {
        // do nothing.
    }

    /**
     * Returns the key of the current element.
     *
     * @return Nullable Always returns $this.
     */
    public function key()
    {
        return $this;
    }

    /**
     * Checks if current position is valid.
     *
     * @return bool Always returns false.
     */
    public function valid()
    {
        return false;
    }

    /**
     * Rewinds the Iterator to the first element.
     */
    public function rewind()
    {
        // do nothing.
    }

    /**
     * Returns whether an offset exists.
     *
     * @param mixed $offset The offset to check for.
     *
     * @return bool Always returns false.
     */
    public function offsetExists($offset)
    {
        return false;
    }

    /**
     * Retrieves the value of an offset.
     *
     * @param mixed $offset The offset to retrieve.
     *
     * @return Nullable Always returns $this.
     */
    public function offsetGet($offset)
    {
        return $this;
    }

    /**
     * Sets a value to an offset.
     *
     * @param mixed $offset The offset to assign the value to.
     * @param mixed $value The value to set.
     */
    public function offsetSet($offset, $value)
    {
        // do nothing.
    }

    /**
     * Unsets an offset.
     *
     * @param mixed $offset The offset to unset.
     */
    public function offsetUnset($offset)
    {
        // do nothing.
    }

    /**
     * Returns the number of the elements of an object.
     *
     * @return int Always returns 0.
     */
    public function count()
    {
        return 0;
    }
}