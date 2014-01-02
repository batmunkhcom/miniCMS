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

    public static function fetchAll($category_id = 0) {
        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $all_contents = $mapper_db->fetchAll(array(
            'category_id' => $category_id
                ), 'id asc');

        return $all_contents;
    }

    public static function toArray($category_id = 0) {
        $contents = self::fetchAll($category_id);
        $contents_array = array();
        foreach ($contents as $content) {
            $contents_array[$content->id] = array(
                'title' => $content->title,
                'code' => $content->code,
                'content_brief' => $content->content_brief,
                'content_body' => $content->content_body
            );
        }

        return $contents_array;
    }

}
