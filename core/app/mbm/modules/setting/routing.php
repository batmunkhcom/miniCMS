<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_setting_list', '/admin/setting');
/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/setting', function () use ($router) {

    //setting home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('setting');
        set_action('admin_setting_list');
    });

    //setting create
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('setting');
        set_action('admin_setting_new');
    });

    //setting save
    $router->respond('POST', '/save', function ($request, $response) {

        set_module('setting');
        set_action('admin_setting_save');
    });

    //setting update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_action('admin_setting_edit');
        set_get_parameter('id', $request->id);
        set_module('setting');
    });
});
