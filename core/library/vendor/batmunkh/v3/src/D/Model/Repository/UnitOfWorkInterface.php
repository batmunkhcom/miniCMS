<?php

namespace D\Model\Repository;

interface UnitOfWorkInterface {

    public function fetchById($id);

    public function fetchAll($bind = array(), $where = "", $options = array());

    public function select($bind = array(), $where = "", $options = array());

    public function registerNew(\D\Model\EntityInterface $entity);

    public function registerClean(\D\Model\EntityInterface $entity);

    public function registerDirty(\D\Model\EntityInterface $entity);

    public function registerDeleted(\D\Model\EntityInterface $entity);

    public function commit();

    public function rollback();

    public function clear();
}
