<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Nemelteer js file uud duudaj bolno. nemelt file uud shuud load hiigdene. compress hiigdehguigeer
 *
 * @return $buf string  duudah file uudiin html tag helberiig butsaana.
 */
function js_load() {

    //shuud duudah file uud.
    $files = \M\Config::get('js_loadfile');

    ksort($files);

    $files[5] = PROTOCOL . DOMAIN . DS . 'js/main.js';

    $buf = '';
    foreach ($files as $k => $v) {
        $buf .= '<script src="' . $v . '" ></script>' . "\n";
    }

    return $buf;
}

/**
 * @param $file string web_root ees hoishhi haygiig ugnu
 * ugugdsun file iig compress hiihgui load hiine
 * Ex: /js/filename.js
 *
 * @return ''
 */
function js_set_loadfile($file, $pos = 10) {

    $js_load_files = \M\Config::get('js_loadfile');
    $js_load_files[$pos . '_' . substr(base64_encode($file), 0, 8)] = $file;

    \M\Config::set('js_loadfile', $js_load_files);
}

/**
 * compress js files to /js/main.php
 */
function compress_js() {

    $js_files = M\Config::get('js_files');

    $file_type = 'js';
    $enabled_modules = \M\Config::get('module_enabled');

    $module_files = array();

    //module uudiin $file_type file iig avah
    foreach ($enabled_modules as $k => $v) {
        $module_files[$v] = \M\Module::getMediaFiles($v, $file_type);
    }

    //Module iin JS file uudiig undsen array-d oruul
    $files = array();
    foreach ($module_files as $k => $v) {
        foreach ($module_files[$k] as $kk => $vv) {
            $files[$vv] = $vv;
        }
    }

    ksort($files);

    //nemelt js uudiig beltgeh
    if (is_array($js_files)) {
        foreach ($js_files as $k => $v) {
            $files[$v] = $v;
        }
    }

    $modified = 0;

    foreach ($files as $file) {
        $age = filemtime($file);
        if ($age > $modified) {
            $modified = $age;
        }
    }

    $offset = 60 * 60 * 24 * 7; // Cache for 1 weeks
    header('Expires: ' . gmdate("D, d M Y H:i:s", time() + $offset) . ' GMT');

    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $modified) {
        header("HTTP/1.0 304 Not Modified");
        header('Cache-Control:');
    } else {
        header("HTTP/1.0 200 OK");
        header('Cache-Control: max-age=' . $offset);
        header('Content-type: application/javascript; charset=UTF-8');
        header('Pragma:');
        header("Last-Modified: " . gmdate("D, d M Y H:i:s", $modified) . " GMT");

        ob_start('ob_gzhandler');

        foreach ($files as $file) {

            //minified hiigdeegui file iig compress hiine
            if (substr_count($file, '.min.') == 0) {
                echo compress_files(file_get_contents($file), $file_type);
            } else {
                echo file_get_contents($file);
            }
        }

        ob_end_flush();
    }
}
