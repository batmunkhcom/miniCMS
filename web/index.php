<?php

define('APP_ENABLED', 'mbm');
define('APPMODE', 'dev');

require_once ('../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../core/bootstrap.php';

load_layout();


foreach (Category::fetchAll() as $k => $user) {
    echo $user->id . '. ' . $user->title . ', ' . $user->date_created;
    echo '<br />';
}
echo '..';
