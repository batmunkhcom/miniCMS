<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Content extends D\Model\Content {

    public static function fetchAll() {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $contents = $mapper_db->fetchAll(array(), "id!=0 ORDER BY id DESC");

        return $contents;
    }

    public static function fetchByParentId($parent_id = 0) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $contents = $mapper_db->fetchAll(array(
            'parent_id' => $parent_id
                ), "parent_id=:parent_id ORDER BY pos ASC");

        return $contents;
    }

    public static function getById($id) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $content = $mapper_db->fetchById($id);

        return $content;
    }

    public static function getCategories($content_id) {

        global $db;

        $cc = new \D\Mapper\ContentCategoryMapper($db, new \D\Model\Collection\EntityCollection);
//        $mapper_db = db_mapper($db, 'ContentCategory');
        $mapper_db = db_mapper($db, 'Category');
        $categories = $mapper_db->select(array(
            'content_id' => $content_id
                ), ' id IN (SELECT category_id FROM ' . $cc->getTableName() . ' WHERE content_id=:content_id)');
//SELECT * FROM categories WHERE id IN( SELECT category_id FROM content_categories WHERE content_id=)

        return $categories;
    }

}
