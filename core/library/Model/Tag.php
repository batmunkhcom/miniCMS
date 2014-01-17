<?php

/** 
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Tag extends D\Model\Tag {

    public static function fetchAll() {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $tags = $mapper_db->fetchAll();

        return $tags;
    }

    public static function getById($id) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $tag = $mapper_db->fetchById($id);

        return $tag;
    }
    
    public static function getMaxScore() {
        
        $cc = new \D\Mapper\TagMapper($db, new \D\Model\Collection\EntityCollection);
        $mapper = new \D\Mapper\TagMapper($db, new \D\Model\Collection\EntityCollection);
        $score = $mapper->select('', 'MAX(score) FROM '.$cc->getTableName());
        return $score;
    }

}