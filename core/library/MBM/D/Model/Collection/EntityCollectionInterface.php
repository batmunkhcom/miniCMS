<?php

namespace D\Model\Collection;

interface EntityCollectionInterface extends \Countable, \ArrayAccess, \IteratorAggregate {

    public function add(\D\Model\EntityInterface $entity);

    public function remove(\D\Model\EntityInterface $entity);

    public function get($key);

    public function exists($key);

    public function clear();

    public function toArray();
}
