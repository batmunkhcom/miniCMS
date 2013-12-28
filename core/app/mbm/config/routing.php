<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 *
 * *                    - yu ch bj bolno
 * [i]                  - Match an integer
 * [i:id]               - Match an integer as 'id'
 * [a:action]           - Match alphanumeric characters as 'action'
 * [h:key]              - Match hexadecimal characters as 'key'
 * [:action]            - Match anything up to the next / or end of the URI as 'action'
 * [create|edit:action] - Match either 'create' or 'edit' as 'action'
 * [*]                  - Catch all (lazy)
 * [*:trailing]         - Catch all as 'trailing' (lazy)
 * [**:trailing]        - Catch all (possessive - will match the rest of the URI)
 * .[:format]?          - Match an optional parameter 'format' - a / or . before the block is also optional
 */
$router->respond('GET', '/', function ($request, $response, $service, $app) use($router) {
    set_application(APP_ENABLED);
    set_module(DEFAULT_MODULE);
    set_action(DEFAULT_ACTION);
});

$router->respond('GET', '/test.php', function ($request, $response, $service, $app) use($router) {
    set_application(APP_ENABLED);
    set_module(DEFAULT_MODULE);
    set_action(DEFAULT_ACTION);
});

$router->respond('GET', '/admin.*', function ($request, $response, $service, $app) use($router) {
    set_layout('admin');
    \M\Config::set('is_admin', 1);
});
$router->respond('GET', '/admin/home', function ($request, $response, $service, $app) use($router) {
    set_module('admin');
    set_action('index');
});
set_route('admin_home', '/admin/home');



/*

//daraa module tus bur deer uur uur code bichigdeh shaardlaga garch magadgui uchir daraahi baidlaar hiihee boliv

$routes_modules = array(
    'home' => array(
        '/' => array(
            'app' => APP_ENABLED,
            'module' => DEFAULT_MODULE,
            'action' => DEFAULT_ACTION
        )
    ),
    'category' => array(
        '/c/[i:id]/*' => array(
            'app' => APP_ENABLED,
            'module' => 'category',
            'action' => 'index',
            'var' => array(
                'id' => 'id',
                'title' => 'title'
            )
        )
    ),
    'content' => array(
        '/r/[i:cid]/*' => array(
            'app' => APP_ENABLED,
            'module' => 'content',
            'action' => 'list',
            'var' => array(
                'cid'
            )
        ),
        '/r/[i:cid]/[i:id].*' => array(
            'app' => APP_ENABLED,
            'module' => 'content',
            'action' => 'readmore',
            'var' => array(
                'id',
                'title'
            )
        )
    )
);

  */