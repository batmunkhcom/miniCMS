<?php
error_reporting(E_ALL ^ E_NOTICE);
define('APP_ENABLED', 'mbm');
define('APPMODE', 'dev');

require_once ('../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../core/bootstrap.php';

load_layout();
M\Language::log();