<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('form_comment_action', '/comment/save');
$router->with('/comment', function () use ($router) {

    //comment home
    $router->respond('GET', '/?', function ($request, $response) {

    });

    //comment save
    $router->respond('POST', '/save', function ($request, $response, $service) {

        comment_save($request->comment_form_name, $request->code);

        //umnuh huudas ruu shidne
        $service->back();
    });

    //comment update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_get_parameter('id', $request->id);
    });
});

