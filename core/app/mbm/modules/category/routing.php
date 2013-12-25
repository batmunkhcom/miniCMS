<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$router->respond('GET', '/c.*', function () {
//    set_application(APP_ENABLED);
    set_module('category');
    set_action('index');

//    return "category module page...";
});

//admin route tohiruulah
$router->respond('GET', '/admin/category', function () {
//    set_application(APP_ENABLED);
    set_module('category');
    set_action('admin_category_list');
});


