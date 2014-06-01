<?php

namespace D\Model\Collection;

class EntityCollection implements EntityCollectionInterface {

    protected $entities = array();

    public function __construct(array $entities = array()) {
        if (!empty($entities)) {
            $this->entities = $entities;
        }
    }

    public function add(\D\Model\EntityInterface $entity) {
        $this->offsetSet($entity);
    }

    public function remove(\D\Model\EntityInterface $entity) {
        $this->offsetUnset($entity);
    }

    public function get($key) {
        $this->offsetGet($key);
    }

    public function exists($key) {
        return $this->offsetExists($key);
    }

    public function clear() {
        $this->entities = array();
    }

    public function toArray() {
        return $this->entities;
    }

    public function count() {
        return count($this->entities);
    }

    public function offsetSet($key, $entity) {
        if (!$entity instanceof \D\Model\EntityInterface) {
            throw new \InvalidArgumentException(
            "Could not add the entity to the collection.");
        }
        if (!isset($key)) {
            $this->entities[] = $entity;
        } else {
            $this->entities[$key] = $entity;
        }
    }

    public function offsetUnset($key) {
        if ($key instanceof \D\Model\EntityInterface) {
            $this->entities = array_filter($this->entities, function ($v) use ($key) {
                return $v !== $key;
            });
        } else if (isset($this->entities[$key])) {
            unset($this->entities[$key]);
        }
    }

    public function offsetGet($key) {
        if (isset($this->entities[$key])) {
            return $this->entities[$key];
        }
    }

    public function offsetExists($key) {
        return $key instanceof \D\Model\EntityInterface ? array_search($key, $this->entities) : isset($this->entities[$key]);
    }

    public function getIterator() {
        return new \ArrayIterator($this->entities);
    }

}
