<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/*
 * JS file uudiig duudahad beltgene
 */

/*
 * Nemelteer js file uud duudaj bolno
 *
 * @param $additional_files array Nemelteer duudah file uudiig array helbereer oruulj ugnu
 * @return $buf string  duudah file uudiin html tag helberiig butsaana.
 */
function load_js($addidtional_files = array()) {

    //nemelt file uudiig tohirgoond oruulj ugnu
    $js_files = M\Config::get('js_files');
    if (is_array($addidtional_files)) {
        foreach ($addidtional_files as $k => $v) {
            $js_files[] = $v;
        }
    }

    $files = array();

    $files[] = PROTOCOL . DOMAIN . DS . 'js/main.js';

    $buf = '';
    foreach ($files as $k => $v) {
        $buf .= '<script src="' . $v . '" ></script>' . "\n";
    }

    return $buf;
}
