<?php

define('APP_ENABLED', 'mbm');
define('APPMODE', 'dev');

require_once ('../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../core/bootstrap.php';

load_layout();

echo \M\Config::get('layout');
echo '<hr>';
print_r(\M\Config::get('routes'));
//print_r(\M\Config::$data['router']);
unset(\M\Config::$data['router']);
print_r(\M\Config::$data['routes']);
