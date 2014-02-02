<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Object extends D\Model\Object {

    /**
     * Buh object iih avah
     *
     * @return object Objects iig butsaana
     */
    public static function fetchAll() {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $objects = $mapper_db->fetchAll();

        return $objects;
    }

    /**
     * Ugugdsun module iin object uudiig avah
     *
     * @param string $module Module iin ner
     */
    public static function fetchByModule($module = '') {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $objects = $mapper_db->select(array(
            'module' => $module . '%'
//            'module' => "'" . $module . "%'"
                ), "code LIKE :module");

        return $objects;
    }

    /**
     * id aar n object iig avah
     *
     * @param integer $id object iin id
     *
     * @return object Object iig butsaana
     */
    public static function getById($id) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $object = $mapper_db->fetchById($id);

        return $object;
    }

    /**
     * ugugdsun object id aar category uudiig avah
     *
     * @param integer $object_id Object iin id
     * @return object Category object iig butsaana
     */
    public static function getCategories($object_id) {

        global $db;

        $oc = new \D\Mapper\ObjectCategoryMapper($db, new \D\Model\Collection\EntityCollection);
        $mapper_db = db_mapper($db, 'Category');
        $categories = $mapper_db->select(array(
            'object_id' => $object_id
                ), ' id IN (SELECT category_id FROM ' . $oc->getTableName() . ' WHERE object_id=:object_id)');

        return $categories;
    }

    /**
     * ugugdsun object id aar category uudiig avah
     *
     * @param integer $object_id Object iin id
     * @return object Category object iig butsaana
     */
    public static function getByCategory($category_id) {

        global $db;

        $oc = new \D\Mapper\ObjectCategoryMapper($db, new \D\Model\Collection\EntityCollection);
        $mapper_db = db_mapper($db, 'Object');
        $objects = $mapper_db->select(array(
            'category_id' => $category_id
                ), ' id IN (SELECT object_id FROM ' . $oc->getTableName() . ' WHERE category_id=:category_id)');

        return $objects;
    }

}
