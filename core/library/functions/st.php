<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Tulviin select tag-d zoriulsan option
 *
 * @param string $activee Songogdson bh tuluv n
 */
function st_dropdown_options($active = 'inactive') {

    $st = array(
        'inactive' => __('Inactive'),
        'active' => __('Active'),
        'pending' => __('Pending')
    );

    $buf = '';
    foreach ($st as $k => $v) {
        $buf .= '<option value="' . $k . '" ';
        if ($k == $active) {
            $buf .= 'selected ';
        }
        $buf .= '>';
        $buf .= $v;
        $buf .= '</option>';
    }

    return $buf;
}

/**
 * Tulviin select tag-d zoriulsan option
 *
 * @param string $activee Songogdson bh tuluv n
 */
function st_array() {

    $st = array(
        'inactive' => __('Inactive'),
        'active' => __('Active'),
        'pending' => __('Pending')
    );

    return $st;
}
