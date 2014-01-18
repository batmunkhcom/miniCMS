<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


class Object extends D\Model\Object {

    public static function fetchAll() {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $objects = $mapper_db->fetchAll();

        return $objects;
    }

    public static function getById($id) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $object = $mapper_db->fetchById($id);

        return $object;
    }

}
