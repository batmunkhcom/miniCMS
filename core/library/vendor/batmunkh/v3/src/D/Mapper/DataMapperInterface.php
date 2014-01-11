<?php

namespace D\Mapper;

interface DataMapperInterface {

    /**
     * id aar songono
     */
    public function fetchById($id);

    /**
     * bugdiig songono
     */
    public function fetchAll($bind = array(), $where = "");

    /**
     * songoh uildel
     */
    public function select($bind = array(), $where = "");

    /**
     * nemeh uildel
     */
    public function insert(\D\Model\EntityInterface $entity);

    /**
     * shinechileh uildel
     */
    public function update(\D\Model\EntityInterface $entity);

    /**
     * hadgalah uildel
     */
    public function save(\D\Model\EntityInterface $entity);

    /**
     * ustgah uildel
     */
    public function delete(\D\Model\EntityInterface $entity);
}
