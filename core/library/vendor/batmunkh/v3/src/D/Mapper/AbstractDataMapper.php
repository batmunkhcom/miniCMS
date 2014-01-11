<?php

namespace D\Mapper;

abstract class AbstractDataMapper implements DataMapperInterface {

    protected $adapter;
    protected $collection;
    protected $entityTable;

    public function __construct(\D\DB\DatabaseInterface $adapter, \D\Model\Collection\EntityCollectionInterface $collection, $entityTable = null) {
        $this->adapter = $adapter;
        $this->collection = $collection;
        if ($entityTable !== null) {
            $this->setEntityTable($entityTable);
        }
    }

    public function setEntityTable($entityTable) {
        if (!is_string($table) || empty($entityTable)) {
            throw new InvalidArgumentException(
            "The entity table is invalid.");
        }
        $this->entityTable = $entityTable;
        return $this;
    }

    public function fetchById($id) {
        $this->adapter->select($this->entityTable, array("id" => $id));
        if (!$row = $this->adapter->fetch()) {
            return null;
        }
        return $this->loadEntity($row);
    }

    public function fetchAll($bind = array(), $where = "") {
        $this->adapter->select($this->entityTable, $bind, $where);
        $rows = $this->adapter->fetchAll();
        return $this->loadEntityCollection($rows);
    }

    public function select($bind = array(), $where = "") {
        $this->adapter->select($this->entityTable, $bind, $where);
        $rows = $this->adapter->fetchAll();
        return $this->loadEntityCollection($rows);
    }

    public function insert(\D\Model\EntityInterface $entity) {
        return $this->adapter->insert($this->entityTable, $entity->toArray());
    }

    public function update(\D\Model\EntityInterface $entity) {
        return $this->adapter->update($this->entityTable, $entity->toArray(), "id = $entity->id");
    }

    public function save(\D\Model\EntityInterface $entity) {
        return !isset($entity->id) ? $this->adapter->insert($this->entityTable, $entity->toArray()) : $this->adapter->update($this->entityTable, $entity->toArray(), "id = $entity->id");
    }

    public function delete(\D\Model\EntityInterface $entity) {
        return $this->adapter->delete($this->entityTable, "id = $entity->id");
    }

    abstract protected function loadEntity(array $row);
}
