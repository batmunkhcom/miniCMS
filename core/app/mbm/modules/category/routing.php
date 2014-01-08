<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_category_list', '/admin/category');
set_route('admin_category_new', '/admin/category/new');
set_route('admin_category_save', '/admin/category/save');
set_route('admin_category_edit', '/admin/category/edit/{id}');

$router->respond('GET', '/c.*', function () {
//    set_application(APP_ENABLED);
    set_module('category');
    set_action('index');

//    return "category module page...";
});


/*
 * admin route tohiruulah
 */

$router->with('/admin/category', function () use ($router) {

    //category home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('category');
        set_action('admin_category_list');
    });

    //category create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('category');
        set_action('admin_category_new');
    });

    //category save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('category');
        set_action('admin_category_save');
    });

    //category update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_module('category');
        set_action('admin_category_edit');
        set_get_parameter('id', $request->id);
    });
});

