<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/*
 * API route tohiruulah
 */

set_route('index_to_search', '/api/index_to_search');
$router->with('/api', function () use ($router) {

    set_layout('empty');
    set_module('api');

    //API home
    $router->respond('GET', '/index_to_search', function ($request, $response) {
        set_action('index_to_search');
    });
});

