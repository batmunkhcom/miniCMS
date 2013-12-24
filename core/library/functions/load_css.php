<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/*
 * CSS file uudiig duudahad beltgene
 */

/*
 * Nemelteer css file uud duudaj bolno
 *
 * @param $additional_files array Nemelteer duudah file uudiig array helbereer oruulj ugnu
 * @return $buf string  duudah file uudiin html tag helberiig butsaana.
 */
function load_css($addidtional_files = array()) {

    $files = array();

    if (is_array($addidtional_files)) {
        foreach ($addidtional_files as $k => $v) {
            $files[$v] = DIR_CSS . $v;
        }
    }


    $files[] = PROTOCOL . DOMAIN . DS . 'css/main.css';
    $files[] = PROTOCOL . DOMAIN . DS . 'css/style.css';

    $buf = '';
    foreach ($files as $k => $v) {
        $buf .= '<link rel="stylesheet" type="text/css" href="' . $v . '"  />' . "\n";
    }

    return $buf;
}
