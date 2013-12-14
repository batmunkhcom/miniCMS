<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$router->with('/c', function () use($router) {

    set_module('category');

    echo '<h2>Category module loaded</h2>';

    $router->respond('GET', '/[:id]', function ($request, $response) {
        echo 'Hello ' . $request->id . '. ' . $request->name . ' ardaa utgagui<hr />';
        print_r($response);
        die();
    });
    $router->respond('GET', '/[:id][*]', function ($request, $response) {
        echo 'ardaa utguudtai' . $request->id . '. ' . $request->name . '<hr />';
    });
//    dump($request->params(),true);
});
