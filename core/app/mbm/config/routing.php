<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 *
 * *                    - yu ch bj bolno
 * [i]                  - buhel too bna
 * [i:id]               - 'id' huvisagchid hargalzah buhel too bna
 * [a:action]           - 'action' huvisagchid hargalzah alphanumaric bna
 * [h:key]              - 'key' character buhii hexadecimal
 * [:action]            - / iin ard buig esvel URI iin hamgiin tugsguliig  'action' gej avna
 * [create|edit:action] - Match either 'create' or 'edit' as 'action'
 * [*]                  - Catch all (lazy)
 * [*:trailing]         - Catch all as 'trailing' (lazy)
 * [**:trailing]        - Catch all (possessive - will match the rest of the URI)
 * .[:format]?          - 'format' - a / or . duriin format. optional
 * /?                   - / -r tugsuj bolno tugsuhgui bsan ch bolno
 */
/**
 * Route tohiruulj bna. suuld haa negteei shuud get_route('admin_home') gej ashiglaj link zaaj bolno.
 */
set_route('admin_home', '/admin');
set_route('home_page', '/');
set_route('homepage', '/');
set_route('home', '/');

//user default routes
set_route('user_login', '/login');
set_route('user_register', '/register');
set_route('user_profile', '/profile');

/**
 * buh route iin huvid
 */
$router->respond(function ($request, $response, $service, $app) {
    foreach ($request->paramsGet() as $k => $v) {
        set_get_parameter($k, $v);
    }

    foreach ($request->paramsPost() as $k => $v) {
        set_post_parameter($k, $v);
    }
});

/* * *****FRONTEND ROUTING****** */
$router->respond('GET', '/', function ($request, $response, $service, $app) use($router) {
    set_application(APP_ENABLED);
    set_module(DEFAULT_MODULE);
    set_action(DEFAULT_ACTION);
});

//default module/action route
// odoogoor zuvhun /m/module/ buyu slash aar tugssun utgiig avch bgaa
$router->with('/m', function () use ($router) {

    $router->respond('/[:module]/.[:action]?[.*]?', function($request, $response, $service, $app) use($router) {
        set_module($request->module);
        if (!$request->action) {
            set_action('index');
            set_get_parameter('action', 'index');
        } else {
            set_action($request->action);
            set_get_parameter('action', $request->action);
        }
        set_get_parameter('module', $request->module);
    });
});

//user login route
$router->respond('GET', '/login', function ($request, $response, $service, $app) {

    set_application(APP_ENABLED);
    set_module('user');
    set_action('login');
});

//user login check
$router->respond('POST', '/login', function ($request, $response, $service, $app) {

    set_application(APP_ENABLED);
    set_module('user');
    set_action('login_check');
});

//user profile page
$router->respond('GET', '/profile', function ($request, $response, $service, $app) {

    set_application(APP_ENABLED);
    set_module('user');
    set_action('profile');
});
$router->respond('GET', '/register', function ($request, $response, $service, $app) {

    set_layout('empty');
    set_application(APP_ENABLED);
    set_module('user');
    set_action('register');
});

//admin gej ehleegui buh huudsuud
$router->respond('!@^/admin', function() {
    set_layout(DEFAULT_LAYOUT);
});

//admin gej ehlesen tohioldold buh huudsuud
$router->respond('@^/admin', function($request, $response, $service, $app) {
    $response->noCache();
    set_layout('admin');

    //handah erhiig shalgah
    if (check_logged_user_authorization(array('admin', 'manager'))) {
        M\Config::set('is_admin', 1);
    } else {
        set_flash(__('Not enough privilege'), 'warn');
        header("Location: " . get_url('user_login'));
    }
});

//admin ii route
$router->with('/admin', function () use ($router, $session) {

    //admin home
    $router->respond('GET', '/?', function ($request, $response) {
        set_module('admin');
        set_action('index');
    });
});
