# Sets

A set is a collection of distinct elements, i.e. a collection that contains no duplicate elements. Sets contain no pair of elements `element1` and `element2` such that `element1 === element2`.


## Basic Operations

There are many operations that can be used when working with sets. The most fundamental operations are:
* Unions
* Intersections
* Complements


#### Unions
Unions are made by the addition of two or more sets together. The *union* of `SetA` and `SetB` is the set of all elements that are members of either `SetA` or `SetB`.

![The union of two sets](https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Venn0111.svg/220px-Venn0111.svg.png)

#### Intersections
The intersection of two sets `SetA` and `SetB` is the set of all elements that are members of both `SetA` and `SetB`.

![The union of two sets](https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Venn0001.svg/220px-Venn0001.svg.png)

#### Complements
The complement of two sets `SetA` and `SetB` can also be called the difference of `SetA` and `SetB`. The complement of `SetB` in `SetA` is the set of all elements that are members of `SetA` but not members of `SetB`.

![The complement of SetB in SetA](https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Venn0100.svg/220px-Venn0100.svg.png)


## API Documentation

#### Class weblement\collections\Set
|                   |                                                                                                                                                                                   |
|-----------------  |-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------    |
| **Implements**    | [IteratorAggregate](http://php.net/manual/en/class.iteratoraggregate.php), [Countable](http://php.net/manual/en/class.countable.php), weblement\collections\Collection            |
| **Inheritance**   | weblement\collections\Object » weblement\collections\CollectionObject                                                                                                             |
| **Uses Traits**   | N/A                                                                                                                                                                               |
| **Source Code**   | https://github.com/weblement/collections/blob/master/src/Set.php                                                                                                                  |


#### Public Properties

| Property      | Type              | Description                                                           | Defined By                                |
|-----------    |---------------    |--------------------------------------------------------------------   |----------------------------------------   |
| count         | integer           | The number of elements in the collection.                             | weblement\collections\CollectionObject    |
| elements      | array             | The elements that belong to the collection.                           | weblement\collections\CollectionObject    |
| isEmpty       | boolean           | Whether this collection is empty.                                     | weblement\collections\CollectionObject    |
| isIndexed     | boolean           | Whether the collection is indexed and index of an element matters.    | weblement\collections\CollectionObject    |
| itereator     | ArrayIterator     | An iterator for traversing the cookies in the collection.             | weblement\collections\CollectionObject    |


#### Public Methods

| Method            | Description                                                                                               | Defined By                                |
|------------------ |--------------------------------------------------------------------------------------------------------   |----------------------------------------   |
| __call()          | Calls the named method which is not a class method.                                                       | weblement\collections\Collection          |
| __construct()     | Constructor.                                                                                              | weblement\collections\CollectionObject    |
| __debugInfo()     | Returns the public properties of the collection for debugging.                                            | weblement\collections\Object              |
| __get()           | Returns the value of an object property.                                                                  | weblement\collections\Object              |
| __isset()         | Checks if a property is set, i.e. defined and not null.                                                   | weblement\collections\Object              |
| __set()           | Sets value of an object property.                                                                         | weblement\collections\Object              |
| __unset()         | Sets an object property to null.                                                                          | weblement\collections\Object              |
| add()             | Add an element or multiple elements to the collection.                                                    | weblement\collections\CollectionObject    |
| canGetProperty()  | Returns a value indicating whether a property can be set.                                                 | weblement\collections\Object              |
| canSetProperty()  | Returns a value indicating whether a method is defined.                                                   | weblement\collections\Object              |
| className()       | Returns the fully qualified name of this class.                                                           | weblement\collections\Object              |
| clear()           | Removes all elements from the collection.                                                                 | weblement\collections\CollectionObject    |
| complement()      | Returns the difference between the collection and specified elements.                                     | weblement\collections\Set                 |
| contains()        | Checks whether the collection contains an element or multiple elements.                                   | weblement\collections\CollectionObject    |
| count()           | Returns the number of elements in the collection.                                                         | weblement\collections\CollectionObject    |
| getCount()        | Returns the number of elements in the collection.                                                         | weblement\collections\CollectionObject    |
| getElements()     | Returns an array with all the elements of the collection.                                                 | weblement\collections\CollectionObject    |
| getIsEmpty()      | Returns whether the collection is empty.                                                                  | weblement\collections\CollectionObject    |
| getIsIndexed()    | Returns whether the collection is indexed.                                                                | weblement\collections\CollectionObject    |
| getIterator()     | Returns an iterator for traversing the elements in the collection.                                        | weblement\collections\CollectionObject    |
| hasMethod()       | Returns a value indicating whether a method is defined.                                                   | weblement\collections\Object              |
| hasProperty()     | Returns a value indicating whether a property is defined.                                                 | weblement\collections\Object              |
| init()            | Initialize the collection.                                                                                | weblement\collections\Object              |
| intersect()       | Checks and returns elements which are present in both the collection and a specified group of elements    | weblement\collections\Set                 |
| remove()          | Remove an element or multiple elements from the collection.                                               | weblement\collections\CollectionObject    |
| toArray()         | Returns an array with all the elements of the collection.                                                 | weblement\collections\CollectionObject    |
| union()           | Merge the collection with a set of elements.                                                              | weblement\collections\Set                 |


## Examples