<?php

define('APP_ENABLED', 'mbm');
define('APPMODE', 'dev');

require_once ('../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../core/bootstrap.php';


load_layout();

echo '<hr>';
echo \M\Config::get('module_current');
echo '.....';
echo \M\Config::get('action_current');
echo '<hr>';
apc_clear_cache();

echo http_response('http://log.dc02.vdc.mn', 200, 1);
