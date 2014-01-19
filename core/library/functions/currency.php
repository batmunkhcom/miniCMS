<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Ashiglagdah buh mungun temdegt
 */
function get_all_currencies() {

    return array(
        'MNT' => array(
            'name' => __('MNT'),
            'prefix' => 'T',
            'suffix' => 'MNT'
        ),
        'USD' => array(
            'name' => __('USD'),
            'prefix' => 'T',
            'suffix' => 'MNT'
        ),
    );
}

function get_all_currencies_name() {
    $c = get_all_currencies();

    $buf = array();

    foreach ($c as $k => $v) {
        $buf[$k] = $c[$k]['name'];
    }

    return $buf;
}

/**
 * Mungun temdegtiin urd haragdah temdegt
 */
function get_currency_prefix($currency_code = 'MNT') {

    $currency = get_all_currencies();

    if (isset($currency[$currency_code]['prefix'])) {

        return $currency[$currency_code]['prefix'];
    }

    return null;
}

/**
 * Mungun temdegtiin ard haragdah temdegt
 */
function get_currency_suffix($currency_code = 'MNT') {

    $currency = get_all_currencies();

    if (isset($currency[$currency_code]['suffix'])) {

        return $currency[$currency_code]['suffix'];
    }

    return null;
}
