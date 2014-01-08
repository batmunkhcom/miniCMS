<?php

$offset = 60 * 60 * 24 * 7; // Cache for 1 weeks
header('Expires: ' . gmdate("D, d M Y H:i:s", time() + $offset) . ' GMT');

if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $modified) {
    header("HTTP/1.0 304 Not Modified");
    header('Cache-Control:');
} else {
    header("HTTP/1.0 200 OK");
    header('Cache-Control: max-age=' . $offset);
    header('Content-type: text/css; charset=UTF-8');
    header('Pragma:');
    header("Last-Modified: " . gmdate("D, d M Y H:i:s", $modified) . " GMT");
}

define('APP_ENABLED', 'mbm');
define('APPMODE', 'prod');

$disable_load_actions = 1;

require_once ('../../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../../core/bootstrap.php';

compress_css();
