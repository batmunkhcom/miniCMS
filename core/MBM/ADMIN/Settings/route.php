<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$klein->with('/admin/currency', function () use ($klein) {

    $klein->respond('GET', '/?', function ($request, $response) use ($klein){
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/currency");  
        $currency = new MBM\ADMIN\Settings\Controllers\AdminCurrency(DIR_TEMPLATE_ADMIN);
        $currency->index();
        exit;
    });

    $klein->respond('GET', '/add', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/add");  
        $currency = new MBM\ADMIN\Settings\Controllers\AdminCurrency(DIR_TEMPLATE_ADMIN);
        $currency->add($request, $response);
        exit;
    });

    $klein->respond('POST', '/add', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/add");  
        $currency = new MBM\ADMIN\Settings\Controllers\AdminCurrency(DIR_TEMPLATE_ADMIN);
        $currency->save($request, $response);
        exit;
    });

    $klein->respond('POST', '/delete', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/delete");  
        $currency = new MBM\ADMIN\Settings\Controllers\AdminCurrency(DIR_TEMPLATE_ADMIN);
        echo $currency->delete($request, $response);
        exit;
    });

    $klein->respond('POST', '/edit/[:id]', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/edit");  
        $currency = new MBM\ADMIN\Settings\Controllers\AdminCurrency(DIR_TEMPLATE_ADMIN);
        $currency->update($request, $response);
        exit;
    });

    $klein->respond('GET', '/edit/[:id]', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/edit"); 
        $currency = new MBM\ADMIN\Settings\Controllers\AdminCurrency(DIR_TEMPLATE_ADMIN);
        $currency->edit($request, $response);
        exit;
    });
});
