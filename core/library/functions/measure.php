<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * get all measure
 */
function get_all_measure() {

    return array(
        'kg' => 'kg', 'm' => 'm', 'mkb' => 'm<sup>2</sup>', 'gr' => 'gr', 'pcs' => 'pcs', 'unit' => 'unit'
    );
}

/**
 * ugugdsun measure iin utgiig butsaana
 */
function get_measure($key = '') {

    $measures = get_all_measure();
    if (isset($measures[$key])) {

        return $measures[$key];
    }

    return false;
}
