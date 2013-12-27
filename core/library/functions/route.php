<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function load_router($name = 'ham') {


    switch ($name) {
        case 'ham':
            $router = new Ham('miniCMSv3');
            //current app iin router
            require_once DIR_CORE . 'app/' . APP_ENABLED . '/config/routing.php';


            //module iin router uudiig duudah
            \M\Module::getAllModuleRouters($router);

            $router->run();

            break;
        default:
            $router = new \Klein\Klein();
            require_once DIR_CORE . 'app/' . APP_ENABLED . '/config/routing.php';

            //module iin router uudiig duudah
            \M\Module::getAllModuleRouters($router);

            // Run it!
            $router->dispatch();
            break;
    }

    return $router;
}

/*
 * @param $route_name string tuhain route iin ner. Ex: category_new
 * @param $target string route iin hayag. Ex /admin/category/new
 */

function set_route($route_name, $target) {

    $routes = \M\Config::get('routes');
    $routes[$route_name] = $target;

    \M\Config::set('routes', $routes);

    return true;
}

/*
 * @param $route_name string tuhain route iin ner. Ex: category_new
 * @param $var array nemelt utguud. Ex: array('id'=>15)
 */

function get_route($route_name, $var = array()) {

    $routes = \M\Config::get('routes');

    if (!isset($routes[$route_name])) {
        log_send($route_name . ' not found', 1);

        return false;
    }
    foreach ($var as $k => $v) {
        $routes[$route_name] = str_replace('{' . $k . '}', $v, $routes[$route_name]);
    }

    return $routes[$route_name];
}
