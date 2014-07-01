<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$klein->with('/admin/category', function () use ($klein) {

    $klein->respond('GET', '/?', function ($request, $response){
        \MBM\Lib\Auth::instance()->Authenticate($response);
      //  \MBM\Lib\Authorize::instance()->Authorize("/admin/category");
        $category = new MBM\ADMIN\Category\Controllers\AdminCategory(DIR_TEMPLATE_ADMIN);
        $category -> index();
        exit;
    });
   
    $klein->respond('GET', '/add', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/category/add");        
        $category = new MBM\ADMIN\Category\Controllers\AdminCategory(DIR_TEMPLATE_ADMIN);
        $category -> add($request, $response);
        exit;
    });
    
     $klein->respond('GET', '/edit/[:id]', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/category/edit");
        $category = new MBM\ADMIN\Category\Controllers\AdminCategory(DIR_TEMPLATE_ADMIN);
        $category -> edit($request->id);
        exit;
    });
    
    $klein->respond('POST', '/edit', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/category/edit");        
        $category = new MBM\ADMIN\Category\Controllers\AdminCategory(DIR_TEMPLATE_ADMIN);
        $category -> updateMe($request, $response);
        exit;
    });
    
    $klein->respond('POST', '/add', function($request, $response){
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/category/add");
        $saveCat = new MBM\ADMIN\Category\Controllers\AdminCategory(DIR_TEMPLATE_ADMIN);
        $saveCat->saveMe($request, $response);
        exit;
    });

    $klein->respond('POST', '/delete', function($request, $response){
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/category/delete");
        $delCat = new MBM\ADMIN\Category\Controllers\AdminCategory(DIR_TEMPLATE_ADMIN);
        echo $delCat->deleteMe($request, $response);
        exit;
    });
});
