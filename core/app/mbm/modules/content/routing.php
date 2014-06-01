<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_content_list', '/admin/content');
set_route('admin_content_new', '/admin/content/new');
set_route('admin_content_save', '/admin/content/save');
set_route('admin_content_edit', '/admin/content/edit/{id}');
set_route('admin_content_delete_category', '/admin/content/delete/category');

/* * *****FRONTEND ROUTING****** */
$router->respond('GET', '/r.*/[i:id].*', function ($request, $response, $service, $app) {

    set_application(APP_ENABLED);
    set_module('content');
    set_action('index');

    return '';
});


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

        set_module('content');
        set_action('admin_content_edit');
        set_get_parameter('id', $request->id);
    });

    //content category iig ustgah
    $router->respond('POST', '/delete/category', function ($request, $response) {

        set_module('content');
        set_action('admin_content_delete_category');
        set_get_parameter('content_id', $request->content_id);
        set_get_parameter('category_id', $request->category_id);
    });
});
