<?php

define('APP_ENABLED', 'mbm');
define('APPMODE', 'prod');

$disable_load_actions = 1;

require_once ('../../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../../core/bootstrap.php';

compress_js();
