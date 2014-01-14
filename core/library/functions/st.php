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

/**
 * List-d status iig hevlehed ashiglana
 *
 * @param string $st inactive,active,pending ii negiig avna
 */
function printSt($st = '', $url = '') {

    $buf = '';

    $st_class = 'label ';
    switch ($st) {
        case 'inactive':
            $st_class .= 'label-danger';
            break;
        case 'active':
            $st_class .= 'label-success';
            break;
        case 'pending':
            $st_class .= 'label-warning';
            break;
    }

    $buf .= ' <span class="' . $st_class . '" style="font-weight: normal !important;">';
    if (strlen($url) > 0) {
        $buf .= '<a href="' . $url . '">' . __($st) . '</a>';
    } else {
        $buf .= __($st);
    }
    $buf .= '</span>';

    return $buf;
}

/**
 * Content-iin toroliig hewleh
 *
 * @param string $st inactive,active,pending ii negiig avna
 */
function printType($type = '') {

    $buf = '';

    $type_class = 'badge ';
    $type_icon = 'fa ';
    switch ($type) {
        case 'article':
            $type_class .= 'bg-warning';
            $type_icon .= 'fa-edit';
            break;
        case 'photo':
            $type_class .= 'bg-important';
            $type_icon .= 'fa-picture-o';
            break;
        case 'video':
            $type_class .= 'bg-success';
            $type_icon .= 'fa-film';
            break;
    }

    $buf .= ' <span class="' . $type_class . '">';
    $buf .= '<i class="' . $type_icon . '"></i>';
    $buf .= '</span>';

    return $buf;
}
