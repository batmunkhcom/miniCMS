<?php

/*
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * huvisagch iin iluu dutuu attack temdegtuudiig tseverleh
 *
 * @param String $txt Ugugduh utga
 * @return string
 */
function _clean($txt = '') {

    $txt = escapeshellcmd($txt);
    $txt = escapeshellarg($txt);

    return $txt;
}

function load_function($function_name = '') {

    $filepath = DIR_LIB . 'functions' . DS . $function_name . '.function.php';

    if (is_file($filepath)) {
        require_once($filepath);
    }
}

//text iig boginsgoh
function shrink_text($text = '', $max_length = 32) {

    if (strlen($text) > $max_length) {
        $text = substr($text, 0, 12) . '...' . substr($text, -20);
    }

    return $text;
}

//debug hiih
function dump($item, $die = false) {

    $printString = '<pre>' . print_r($item, true) . '</pre>';

    if ($die) {
        die($printString);
    } else {
        echo $printString;
    }
}
