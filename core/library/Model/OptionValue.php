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
class OptionValue {

    /**
     * code oor n shuuh
     */
    public static function getAllByCode($code = '') {
        global $db;

        $mapper_db = db_mapper($db, __CLASS__);
        $option_values = $mapper_db->select(
                array(
            'code' => $code
                ), 'code=:code AND option_id!=0'
        );

        return $option_values;
    }

    /**
     * code oor n shuuh
     */
    public static function getAllByCodeToArray($code = '') {
        global $db;

        $mapper_db = db_mapper($db, __CLASS__);
        $option_values = $mapper_db->select(
                array(
            'code' => $code
                ), 'code=:code AND option_id!=0'
        );

        $buf = array();
        foreach ($option_values as $option) {
            $buf[\Option::getFieldById($option->option_id, 'title')] = $option->option_value;
        }
        return $buf;
    }

}
