<?php
/*
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
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

/**
 * undsen core uudad hereglegdej bgaa tul tusad n gargaj hadgalav. mun tusad include hiij bgaa bolno
 */
function __($txt = '') {

    return Language::get($txt);
}

function load_function($function_name = '') {

    $filepath = DIR_LIB . 'functions' . DS . $function_name . '.function.php';

    if (is_file($filepath)) {
        require_once($filepath);
    }
}

function http_load_file($filetype = 'txt') {

    switch ($filetype) {
        case 'css':
            echo M\File\LoadFiles::loadFiles('css');
            break;
        case 'js':
            echo M\File\LoadFiles::loadFiles('js');
            break;
        default;
            break;
    }
}

/**
 *  ugugdsun dir ees file include hiih
 * 
 * @param string Absolute path. / aar tugsunu
 */
function include_files($dir) {
    M\File::getAndIncludePHPFiles($dir);
    M\Log::save('testing.... loaded...');
}

function load_css($filepath) {
    M\Config::$css_files[$filepath] = $filepath;
}

function load_js($filepath) {
    M\Config::$js_files[$filepath] = $filepath;
}

function shrink_text($text = '', $max_length = 32) {

    if (strlen($text) > $max_length) {
        $text = substr($text, 0, 12) . '...' . substr($text, -20);
    }

    return $text;
}

