<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$router->get('/', function () {
    set_application('default');
    set_module('home');
    set_action('index');
});

$router->get('/movies/(\d+)', function ($id) {
    set_application('default');
    set_module('home');
    set_action('index');
    echo 'Movie id:'.$id;
});

// Custom 404 Handler
$router->set404(function() {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '<h1>404, route not found!</h1>';
    die();
});
