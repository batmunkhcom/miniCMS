<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$klein->respond('GET', '/login', function ($request, $response) {
    if (MBM\Lib\Auth::instance()->islogged()) {
        $response->redirect("/admin", $code = 200)->send();
    } else {
        $login = new MBM\ADMIN\User\Controllers\Login(DIR_TEMPLATE_ADMIN);
        $login->index();
        exit;
    }
});


$klein->respond('POST', '/login', function ($request, $response) {
    if (MBM\Lib\Auth::instance()->islogged()) {
        $response->redirect("/admin", $code = 200)->send();
    } else {
        $login = new MBM\ADMIN\User\Controllers\Login(DIR_TEMPLATE_ADMIN);
        $login->loginCheck($response);
        //exit;
    }
});

$klein->respond('GET', '/logout', function ($request, $response) {
    \MBM\Lib\Auth::instance()->Authenticate($response);
    $logout = new MBM\ADMIN\User\Controllers\Logout(DIR_TEMPLATE_ADMIN);
    $logout->index($response);
});


// USER CONTROL MODULE
$klein->with('/admin/user', function () use ($klein) {

    $klein->respond('GET', '/?', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/user");
        $user = new \MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        $user->index($request, $response);
        exit;
    });

    $klein->respond('GET', '/add', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/user/add");
        $user = new \MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        $user->add($request, $response);
        exit;
    });

    $klein->respond('POST', '/add', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/user/add");
        $user = new \MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        $user->save($request, $response);
    });

    $klein->respond('GET', '/edit/[:id]', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/user/edit");
        $user = new \MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        $user->edit($request, $response);
        exit;
    });

    $klein->respond('POST', '/edit', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/user/edit");
        $user = new \MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        $user->update($request, $response);
        $response->redirect("/admin/user", $code = 200)->send();
    });

    $klein->respond('POST', '/delete', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/user/edit");
        $user = new \MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        echo $user->delete($request, $response);
        $response->send();
    });

    $klein->respond('GET', '/profile', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        $user = new \MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        $user->profile($request, $response);
        exit;
    });

    $klein->respond('GET', '/role', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/user/role");
        $user = new MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        $user->role($request, $response);
        exit;
    });

    $klein->respond('POST', '/role', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/user/role");
        $user = new MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        $user->roleSave($request, $response);
        exit;
    });

    $klein->respond('POST', '/role/delete', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/user/role/delete");
        $user = new MBM\ADMIN\User\Controllers\AdminUser(DIR_TEMPLATE_ADMIN);
        echo $user->deleteMe($request, $response);
        exit;
    });
});

$klein->respond('GET', '/admin/user/permission/[:id]', function ($request, $response) {
    \MBM\Lib\Auth::instance()->Authenticate($response);
    \MBM\Lib\Authorize::instance()->Authorize("/admin/user/permission");
    $permission = new \MBM\ADMIN\User\Controllers\RolePermission(DIR_TEMPLATE_ADMIN);
    $permission->edit($request, $response);
    exit;
});

$klein->respond('POST', '/admin/user/permission/[:id]', function ($request, $response) {
    \MBM\Lib\Auth::instance()->Authenticate($response);
    \MBM\Lib\Authorize::instance()->Authorize("/admin/user/permission");
    $authorization = new \MBM\ADMIN\User\Controllers\RolePermission(DIR_TEMPLATE_ADMIN);
    $authorization->update($request, $response);
});
