<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_flatroom_list', '/admin/flatroom');
set_route('admin_flatroom_new', '/admin/flatroom/new');
set_route('admin_flatroom_save', '/admin/flatroom/save');
set_route('admin_flatroom_edit', '/admin/flatroom/edit/{id}');
/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/flatroom', function () use ($router) {

    //flatroom home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('flatroom');
        set_action('admin_flatroom_list');
    });

    //flatroom create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('flatroom');
        set_action('admin_flatroom_new');
    });

    //flatroom save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('flatroom');
        set_action('admin_flatroom_save');
    });

    //flatroom update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_action('admin_flatroom_edit');
        set_get_parameter('id', $request->id);
        set_module('flatroom');
    });
});
