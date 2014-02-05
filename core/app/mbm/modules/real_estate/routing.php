<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_real_estate_list', '/admin/real_estate');
set_route('admin_real_estate_new', '/admin/real_estate/new');
set_route('admin_real_estate_save', '/admin/real_estate/save');
set_route('admin_real_estate_edit', '/admin/real_estate/edit/{id}');
set_route('real_estate_list', '/z/real_estate/list/{category_id}');
set_route('real_estate_readmore', '/z/real_estate/{id}');


$router->with('/z', function () use ($router) {

    //real_estate home
    $router->respond('GET', '/real_estate/[i:id]', function ($request, $response) {

        set_module('real_estate');
        set_action('readmore');

        set_get_parameter('id', $request->id);
    });
    //real_estate list
    $router->respond('GET', '/real_estate/list/[i:category_id].*', function ($request, $response) {

        set_layout('z');
        set_module('real_estate');
        set_action('list');

        set_get_parameter('category_id', $request->category_id);
    });
});

/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/real_estate', function () use ($router) {

    //real_estate home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('real_estate');
        set_action('admin_real_estate_list');
    });

    //real_estate create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('real_estate');
        set_action('admin_real_estate_new');
    });

    //real_estate save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('real_estate');
        set_action('admin_real_estate_save');
    });

    //real_estate update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_module('real_estate');
        set_action('admin_real_estate_edit');
        set_get_parameter('id', $request->id);
    });
});
