<?php

namespace D\Model\Repository;

class UnitOfWork implements UnitOfWorkInterface {

    const STATE_NEW = "NEW";
    const STATE_CLEAN = "CLEAN";
    const STATE_DIRTY = "DIRTY";
    const STATE_REMOVED = "REMOVED";

    protected $dataMapper;
    protected $storage;

    public function __construct(\D\Mapper\DataMapperInterface $dataMapper, \D\Storage\ObjectStorageInterface $storage) {
        $this->dataMapper = $dataMapper;
        $this->storage = $storage;
    }

    public function getDataMapper() {
        return $this->dataMapper;
    }

    public function getObjectStorage() {
        return $this->storage;
    }

    public function fetchById($id) {
        $entity = $this->dataMapper->fetchById($id);
        if ($entity) {
            $this->registerClean($entity);
            return $entity;
        }
    }

    public function registerNew(\D\Model\EntityInterface $entity) {
        $this->registerEntity($entity, self::STATE_NEW);
        return $this;
    }

    public function registerClean(\D\Model\EntityInterface $entity) {
        $this->registerEntity($entity, self::STATE_CLEAN);
        return $this;
    }

    public function registerDirty(\D\Model\EntityInterface $entity) {
        $this->registerEntity($entity, self::STATE_DIRTY);
        return $this;
    }

    public function registerDeleted(\D\Model\EntityInterface $entity) {
        $this->registerEntity($entity, self::STATE_REMOVED);
        return $this;
    }

    protected function registerEntity($entity, $state = self::STATE_CLEAN) {
        $this->storage->attach($entity, $state);
    }

    public function commit() {
        foreach ($this->storage as $entity) {
            switch ($this->storage[$entity]) {
                case self::STATE_NEW:
                case self::STATE_DIRTY:
                    $this->dataMapper->save($entity);
                    break;
                case self::STATE_REMOVED:
                    $this->dataMapper->delete($entity);
            }
        }
        $this->clear();
    }

    public function rollback() {
        // custom rollback implementation goes here
    }

    public function clear() {
        $this->storage->clear();
        return $this;
    }

    public function fetchAll($conditions = array(), $order_by = '', $group_by = '', $boolOperator = 'AND') {
        $entity = $this->dataMapper->fetchAll($conditions, $order_by, $group_by, $boolOperator);
        if ($entity) {
            $this->registerClean($entity);
            return $entity;
        }
    }

    /**
     * eniig shalgah heregtei!!!!!
     */
    public function fetchToArray($conditions = array(), $order_by = '', $group_by = '', $boolOperator = 'AND') {
        $entity = $this->dataMapper->fetchToArray($conditions, $order_by, $group_by, $boolOperator);
        if ($entity) {
            $this->registerClean($entity);
            return $entity;
        }
    }

}
