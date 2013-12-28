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

$router->with('/admin', function () use ($router) {
    set_layout('admin');
    \M\Config::set('is_admin', 1);

    //admin home
    $router->respond('GET', '/?', function ($request, $response) {
        set_module('admin');
        set_action('index');
    });
});
