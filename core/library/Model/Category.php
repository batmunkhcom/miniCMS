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
class Category extends D\Model\Category {

    public static function fetchAll($category_id = 0) {
        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $all_categories = $mapper_db->fetchAll(array(
            'category_id' => $category_id
                ), 'st');

        return $all_categories;
    }

}
