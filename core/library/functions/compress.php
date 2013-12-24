<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function compress_files($buffer = '', $type = '') {

    switch ($type) {
        case 'js':
            /* remove comments */
            $buffer = preg_replace("/((?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:\/\/.*))/", "", $buffer);
            /* remove tabs, spaces, newlines, etc. */
            $buffer = str_replace(array("\r\n", "\r", "\t", "\n", '  ', '    ', '     '), '', $buffer);
            /* remove other spaces before/after ) */
            $buffer = preg_replace(array('(( )+\))', '(\)( )+)'), ')', $buffer);
            break;
        case 'css':
            /* remove comments */
            $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
            /* remove tabs, spaces, newlines, etc. */
            $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '     '), '', $buffer);
            /* remove other spaces before/after ; */
            $buffer = preg_replace(array('(( )+{)', '({( )+)'), '{', $buffer);
            $buffer = preg_replace(array('(( )+})', '(}( )+)', '(;( )*})'), '}', $buffer);
            $buffer = preg_replace(array('(;( )+)', '(( )+;)'), ';', $buffer);
            break;
    }

    return $buffer;
}

//compress css files and prepare to load to /css/main.php
function compress_css() {

    $css_files = M\Config::get('css_files');
    $file_type = 'css';
    $enabled_modules = \M\Config::get('module_enabled');

    $module_files = array();

//module uudiin $file_type file iig avah
    foreach ($enabled_modules as $k => $v) {
        $module_files[] = \M\Module::getMediaFiles($v, $file_type);
    }


//CSS file uudiig undsen array-d oruul
    $files = array();
    foreach ($module_files as $k => $v) {
        foreach ($module_files[$k] as $kk => $vv) {
            $files[$vv] = $vv;
        }
    }

    ksort($files);

    //nemelt css uudiig beltgeh
    if (is_array($css_files)) {
        foreach ($css_files as $k => $v) {
            $files[] = $v;
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
        header('Cache-Control: max-age=' . $offset);
        header('Content-type: text/css; charset=UTF-8');
        header('Pragma:');
        header("Last-Modified: " . gmdate("D, d M Y H:i:s", $modified) . " GMT");


        ob_start('ob_gzhandler');

        foreach ($files as $file) {

            //minified hiigdeegui file iig avna
            if (substr_count($file, '.min.') == 0) {
                echo compress_files(file_get_contents($file), $file_type);
            } else {
                echo file_get_contents($file);
            }
            echo $file;
        }

        ob_end_flush();
    }
}

//compress js files to /js/main.php

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
