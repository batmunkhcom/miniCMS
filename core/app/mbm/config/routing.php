<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$router->respond('GET', '/', function ($request, $response, $service, $app) use($router) {
    set_application(APP_ENABLED);
    set_module(DEFAULT_MODULE);
    set_action(DEFAULT_ACTION);
    
//    $router->render('/home/index.php', array('a'=>'1','b'=>2));
    
//    return "category module page...";
});


// HAM
//$router->route('/', function($router) {
//    set_application('mbm');
//    set_module(DEFAULT_MODULE);
//    set_action(DEFAULT_ACTION);
//    
////    return "Home page...";
//});
