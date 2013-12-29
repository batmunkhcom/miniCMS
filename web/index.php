<?php

define('APP_ENABLED', 'mbm');
define('APPMODE', 'dev');

require_once ('../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../core/bootstrap.php';

load_layout();

load_component('test', array(
    'code' => 'aaa'
));

$comp = new M\Component();

echo get_route('form_comment_action');
echo '..<br>all--';
print_r($comp->getAllComponents()->component_all);
echo '..<br>enabled---';
print_r($comp->getAllEnabledComponents()->component_enabled);
echo '..<br>config ,enabled---';
print_r(\M\Config::get('component_enabled'));
echo '..<br>';
echo comment_form('test1', 'dd')->render();
