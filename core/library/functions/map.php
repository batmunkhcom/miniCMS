<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * latitude, longitude iin utgiig yanzlah
 */
function map_fix_value($val) {

    if (substr_count($val, '°') > 0) {
        $val = str_replace(
                array(' ', '.', '°'), array('', '', '.'), $val);
    } else {

    }

    return $val;
}
