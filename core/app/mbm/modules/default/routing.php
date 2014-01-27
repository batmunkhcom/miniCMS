<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_default_list', '/admin/default');
set_route('admin_default_new', '/admin/default/new');
set_route('admin_default_save', '/admin/default/save');
set_route('admin_default_edit', '/admin/default/edit/{id}');
set_route('admin_default_delete_category', '/admin/default/delete/category');

/* * *****FRONTEND ROUTING****** */
$router->respond('GET', '/r.*/[i:id].*', function ($request, $response, $service, $app) {

    set_application(APP_ENABLED);
    set_module('default');
    set_action('index');

    return '';
});


/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/default', function () use ($router) {

    //default home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('default');
        set_action('index');
        set_layout('empty');
    });

    //default create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('default');
        set_action('admin_default_new');
    });

    //default save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('default');
        set_action('admin_default_save');
    });

    //default update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_module('default');
        set_action('admin_default_edit');
        set_get_parameter('id', $request->id);
    });

    //default category iig ustgah
    $router->respond('POST', '/delete/category', function ($request, $response) {

        set_module('default');
        set_action('admin_default_delete_category');
        set_get_parameter('default_id', $request->default_id);
        set_get_parameter('category_id', $request->category_id);
    });
});
