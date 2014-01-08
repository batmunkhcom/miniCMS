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
die();
foreach (Category::fetchAll() as $k => $user) {
    echo $user->id . '. ' . $user->title . ', ' . $user->date_created;
    echo '<br />';
}
echo '..';
