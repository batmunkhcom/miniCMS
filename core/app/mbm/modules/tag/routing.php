<?php

/** 
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

set_route('admin_tag_list', '/admin/tag');
set_route('admin_tag_new', '/admin/tag/new');
/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/tag', function () use ($router) {

    //tag home
    $router->respond('GET', '/?', function ($request, $response) {

        set_module('tag');
        set_action('admin_tag_list');
    });
    //tag new
    $router->respond('GET', '/new', function ($request, $response) {

        set_module('tag');
        set_action('admin_tag_new');
    });
});