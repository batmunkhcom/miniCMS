<?php

$time_start = microtime();

define('APP_ENABLED', 'mbm');
define('APPMODE', 'dev');

require_once ('../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../core/bootstrap.php';

echo "\n-------------CLI ehlev--------------";
echo "\nCommand : " . $argv [1] . "";
if (isset($argv[1])) {
    if (file_exists(DIR_ABS . 'cli' . DS . 'commands' . DS . $argv[1] . '.php')) {
        require DIR_ABS . 'cli' . DS . 'commands' . DS . $argv[1] . '.php';
    } else {
        echo "\n------------ERROR--------------\n";
        echo $argc[1] . " command not found!!!\n";
    }
}

echo "Script execution time: " . abs(microtime() - $time_start) . "\n\n";
