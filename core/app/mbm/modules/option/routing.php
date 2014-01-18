<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_option_list', '/admin/option');
set_route('admin_option_new', '/admin/option/new');
set_route('admin_option_save', '/admin/option/save');
set_route('admin_option_edit', '/admin/option/edit/{id}');
/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/option', function () use ($router) {

    //option home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('option');
        set_action('admin_option_list');
    });

    //option create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('option');
        set_action('admin_option_new');
    });

    //option save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('option');
        set_action('admin_option_save');
    });

    //option update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_action('admin_option_edit');
        set_get_parameter('id', $request->id);
        set_module('option');
    });
});
