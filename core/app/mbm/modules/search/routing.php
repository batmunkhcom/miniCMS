<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_search_list', '/admin/search');
/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/search', function () use ($router) {

    //search home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('search');
        set_action('admin_search_list');
    });

    //search create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('search');
        set_action('admin_search_new');
    });

    //search save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('search');
        set_action('admin_search_save');
    });

    //search update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_action('admin_search_edit');
        set_get_parameter('id', $request->id);
        set_module('search');
    });
});
