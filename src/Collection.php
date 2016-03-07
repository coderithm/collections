<?php

/**
 * PHP Collection Library
 * @author      Yuv Joodhisty <locustv@gmail.com>
 * @copyright   Copyright © weblement 2016
 * @license     https://github.com/weblement/collections/blob/master/LICENSE.md
 * @version     v1.0
 */

namespace weblement\collections;
use IteratorAggregate;
use Countable;
use ArrayAccess;

/**
 * A Collection represents a group of objects known as its elements.
 */

interface Collection extends IteratorAggregate, Countable
{
    /**
     * Describes if the collection is indexed or not
     * Child classes should override this method if the elements should be indexed.
     * @return boolean whether the collection is indexed or not
     */
    public function getIsIndexed();

    /**
     * Add elements to the collection.
     * @param   mixed $elements the elements to be added to the collection
     * @return  void
     */
    public function add($element);

    /**
     * Checks if an element is present in the collection
     * @param   mixed $elements the elements that needs to be checked in the collection
     * @param   boolean $strict if the check should be strict (e.g. case sensitive) or not
     * @return  boolean whether the collection contain the element
     */
    public function contains($element, $strict = false);

    /**
     * Removes the first occurence of the element from the collection.
     * @param mixed $elements the elements to be removed from the collection
     * @param boolean $strict if the check should be strict (i.e. use ===)
     * If the element specified is an object, strict will always be true.
     * @param boolean $last whether to remove the element starting from the last element in the collection
     * @return void
     */
    public function remove($elements, $strict = false, $last = true);

    /**
     * Removes all elements from the collection.
     * @return  void
     */
    public function clear();

    /**
     * Returns the elements of the collection
     * @return array the elements of the collection
     */
    public function getElements();

    /**
     * Returns the number of elements in the collection.
     * @return integer the number of elements in the collection.
     */
    public function getCount();

    /**
     * Check if the collection contains elements and returns true if it's empty
     * @return  boolean whether the collection is empty
     */
    public function getIsEmpty();

    /**
     * Returns an array that contains all the elements of the collection.
     * @return  array the array of elements
     */
    public function toArray();
}