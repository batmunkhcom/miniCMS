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
    $left = 1;

    return $left;
}

/**
 * Baruuniig avah
 *
 * @param string $model Model iin ner
 * @param array $fields Fielduud
 * @param array $options Options
 */
function get_right($model, $fields, $options = array()) {

    $right = 2;

    return $right;
}
