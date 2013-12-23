<?php

define('APP_ENABLED', 'mbm');
define('APPMODE', 'prod');

$disable_load_actions = 1;

require_once ('../../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../../core/bootstrap.php';

$file_type = 'js';
$enabled_modules = \M\Config::get('module_enabled');

$module_files = array();

//module uudiin $file_type file iig avah
foreach ($enabled_modules as $k => $v) {
    $module_files[] = \M\Module::getMediaFiles($v, $file_type);
}

//JS file uudiig undsen array-d oruul
$files = array();
foreach ($module_files as $k => $v) {
    foreach ($module_files[$k] as $kk => $vv) {
        $files[] = $vv;
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
