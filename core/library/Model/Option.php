<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Option extends D\Model\Option {

    public static function fetchAll() {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $options = $mapper_db->fetchAll();

        return $options;
    }

    public static function getById($id) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $object = $mapper_db->fetchById($id);

        return $object;
    }

    public static function toArrayOptionsByModule($module = '', $group_name = '') {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $options = $mapper_db->select(array(
            'module' => $module,
            'group_name' => $group_name
                ), 'module=:module AND group_name=:group_name');

        $buf = array();

        foreach ($options as $option) {
            $option[$option->id] = $option->title;
        }

        return $buf;
    }

    /**
     * Ugugdsun module iin option uudiig avah
     *
     * @param string $module Module iin ner
     *
     * @return array $buf[group_name][form_tag][id] = title; gej butsaana
     */
    public static function getAllGroupNamesToArray($module = '') {
        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        if ($module == '') {
            $group_names = self::fetchAll();
        } else {
            $group_names = $mapper_db->select(array(
                'module' => $module
                    ), 'module=:module');
        }
        $buf = array();
        foreach ($group_names as $g_name) {
            $buf[$g_name->group_name][$g_name->form_tag][$g_name->id] = $g_name->title;
        }

        return $buf;
    }

    /**
     * Id aar n avah
     */
    public static function getFieldById($id = '', $field = 'title') {

        $option = self::getById($id);

        return $option->$field;
    }

}
