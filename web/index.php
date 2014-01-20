<?php

define('APP_ENABLED', 'mbm');
define('APPMODE', 'dev');

require_once ('../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../core/bootstrap.php';


load_layout();
echo \M\Carbon::now()->addYears(10);
//lang file -d bhgui ugsiig track hiih
M\Language::log();
