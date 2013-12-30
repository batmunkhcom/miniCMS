<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('setting_comment_action', '/setting/save');
$router->with('/setting', function () use ($router) {

    //comment home
    $router->respond('GET', '/?', function ($request, $response) {

    });

    //comment save
    $router->respond('POST', '/save', function ($request, $response, $service) {

        //form invalid bol
        if (!comment_form(post('form_name'), post('code'))) {
            //umnuh huudas ruu shidne
            $service->back();
        } else {

        }
    });

    //comment update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_get_parameter('id', $request->id);
    });
});

