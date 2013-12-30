<?php

define('APP_ENABLED', 'mbm');
define('APPMODE', 'dev');

require_once ('../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../core/bootstrap.php';

load_layout();

load_component('test', array(
    'code' => 'aaa'
));

$comp = $components;
//print_r($_SESSION);
echo '<hr>';
echo get_route('form_comment_action');
echo '..<hr>all--';
print_r($comp->getAllComponents()->component_all);
echo '..<hr>enabled---';
print_r($comp->getAllEnabledComponents()->component_enabled);
echo '..<hr>config ,enabled---';
print_r(\M\Config::get('component_enabled'));
echo '..<hr>';


echo comment_form('test1', 'dd')->render();
