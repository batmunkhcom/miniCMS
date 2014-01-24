<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_photo_list', '/admin/photo');
set_route('admin_photo_new', '/admin/photo/new');
set_route('admin_photo_save', '/admin/photo/save');
set_route('admin_photo_edit', '/admin/photo/edit/{id}');
/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/photo', function () use ($router) {

    //photo home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('photo');
        set_action('admin_photo_list');
    });

    //photo create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('photo');
        set_action('admin_photo_new');
    });

    //photo save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('photo');
        set_action('admin_photo_save');
    });

    //photo update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_action('admin_photo_edit');
        set_get_parameter('id', $request->id);
        set_module('photo');
    });
});
