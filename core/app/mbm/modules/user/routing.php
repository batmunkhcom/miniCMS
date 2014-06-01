<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_user_list', '/admin/user');

/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/user', function () use ($router) {

    //user home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('user');
        set_action('admin_user_list');
    });

    //user create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('user');
        set_action('admin_user_new');
    });

    //user save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('user');
        set_action('admin_user_save');
    });

    //user update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_action('admin_user_edit');
        set_get_parameter('id', $request->id);
        set_module('user');
    });
});
