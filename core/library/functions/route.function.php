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
        case 'klein':
            $router = new \Klein\Klein();
            require_once DIR_CORE . 'app/' . APP_ENABLED . '/config/routing.php';

            //module iin router uudiig duudah
           \M\Module::getAllModuleRouters($router);

            // Run it!
            $router->dispatch();
            
            break;
        default:
            $router = new Ham('miniCMSv3');
            //current app iin router
            require_once DIR_CORE . 'app/' . APP_ENABLED . '/config/routing.php';


            //module iin router uudiig duudah
            \M\Module::getAllModuleRouters($router);

            $router->run();
            break;
    }

    return $router;
}
