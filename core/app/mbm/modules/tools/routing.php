<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_tools_list', '/admin/tools/{action}');

/*
 * admin route tohiruulah
 */
//admin routes

$router->with('/admin/tools', function () use ($router) {

    //tools home
    $router->respond('GET', '/[:action]', function ($request, $response) {

        set_module('tools');
        set_action($request->action);
        set_get_parameter('action', $request->action);
    });
});
