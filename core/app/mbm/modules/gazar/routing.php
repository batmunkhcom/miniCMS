<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_gazar_list', '/admin/gazar');
set_route('admin_gazar_new', '/admin/gazar/new');
set_route('admin_gazar_save', '/admin/gazar/save');
set_route('admin_gazar_edit', '/admin/gazar/edit/{id}');
/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/gazar', function () use ($router) {

    //gazar home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('gazar');
        set_action('admin_gazar_list');
    });

    //gazar create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('gazar');
        set_action('admin_gazar_new');
    });

    //gazar save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('gazar');
        set_action('admin_gazar_save');
    });

    //gazar update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_action('admin_gazar_edit');
        set_get_parameter('id', $request->id);
        set_module('gazar');
    });
});
