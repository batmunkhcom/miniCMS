<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function set_application($app){
    
    \M\Config::set('app_current', $app);
}

function set_module($module){
    
    \M\Config::set('module_current', $module);
}

function set_action($action){
    \M\Config::set('action_current', $action);
}