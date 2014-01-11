<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Zuuniig avah
 *
 * @param string $model Model iin ner
 * @param array $fields Fielduud
 * @param array $options Options
 */
function get_left($model, $fields, $options = array()) {

    global $db;

    $mapper_db = db_unit($db, $model);



    return $mapper_db->lft;
}

/**
 * Zuuniig avah
 *
 * @param string $model Model iin ner
 * @param array $fields Fielduud ('lft','rgt','parent_id','depth')
 * @param array $options Options
 */
function get_max_left($model, $parent_id, $options = array()) {

    global $db;

    $mapper_db = db_unit($db, $model);

    $mapper_db->fetchAll(array(
        'parent_id' => $parent_id
            ), 'parent_id=:parent_id');

    return $mapper_db->lft;
}

/**
 * Baruuniig avah
 *
 * @param string $model Model iin ner
 * @param array $fields Fielduud
 * @param array $options Options
 */
function get_right($model, $fields, $options = array()) {

    global $db;

    $mapper_db = db_unit($db, $model);

    $mapper_db->fetchById($fields['parent_id']);

    return $mapper_db->rgt;
}

/**
 * Baruuniig avah
 *
 * @param string $model Model iin ner
 * @param array $fields lft,rgt field iin utga
 * @param array $options Options
 *
 * @return $data object
 */
function save_left_right($model, $fields = array(
    'lft' => '',
    'rgt' => ''
), $options = array()) {

    global $db;

    $mapper_db = db_unit($db, $model);

    $data = $mapper_db->fetchById($fields['parent_id']);
    $data->lft = $fields['lft'];
    $data->rgt = $fields['rgt'];

    $data_update_left = $mapper_db->update(array('lft' => '>' . $fields['lft']), 'lft>:lft');

    $mapper_db->commit();

    return $data;
}
