<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$router->respond('GET', '/c', function () {
    set_application(APP_ENABLED);
    set_module('category');
    set_action('index');

//    return "category module page...";
});

//
//
//$router->route('/c/<string>', function($router) {
//    set_application(APP_ENABLED);
//    set_module('search');
//    set_action('index');
//    
//    $router->render('/home/index.php', array('a'=>'1','b'=>2));
//    
////    return "category module page...";
//});


