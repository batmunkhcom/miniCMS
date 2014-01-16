<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_content_list', '/admin/user/list');
/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/content', function () use ($router) {

    //content home
    $router->respond('GET', '/?', function ($request, $response) {

        set_action('admin_content_list');
        set_module('content');
    });

    //content create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('content');
        set_action('admin_content_new');
    });

    //content save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('content');
        set_action('admin_content_save');
    });

    //content update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_action('admin_content_edit');
        set_get_parameter('id', $request->id);
        set_module('content');
    });
});
