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

/* * *****KLEIN ROUTING****** */
$router->respond('GET', '/r.*/[i:id].*', function ($request, $response, $service, $app) {

    set_application(APP_ENABLED);
    set_module('content');
    set_action('index');

    /* testing---------
     *
      echo $request->id;
      echo '<hr />';
      print_r($request->paramsNamed());
      echo '<hr />';
      print_r($request->pathname());
      echo '<hr />';
      print_r($request->method());
      echo '<hr />';
      print_r($request->query('/r'));
      echo '<hr />';
      print_r($request->uri());
      echo '<hr />';
     */
    return '';
});


/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/content', function () use ($router) {

    set_module('content');

    //content home
    $router->respond('GET', '/?', function ($request, $response) {
        set_action('admin_content_list');
    });

    //content create
    $router->respond('GET', '/new', function ($request, $response) {

        set_action('admin_content_new');
    });

    //content save
    $router->respond('POST', '/save', function ($request, $response) {

        set_action('admin_content_save');
    });

    //content update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {
        set_action('admin_content_edit');

        set_get_parameter('id', $request->id);
    });
});
