<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * adminii content moduliin zamchlal
 * @package    miniCMS
 * @subpackage -
 * @author     JAMIYANDORJ Purevdorj <jamian1018@gmail.com>
 * @version    SVN: $Id
 */
$klein->with('/admin/content', function () use ($klein) {

    $klein->respond('GET', '/?', function ($request, $response) use ($klein) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/content");
        $content = new MBM\ADMIN\Content\Controllers\AdminContent(DIR_TEMPLATE_ADMIN);
        $content->index();
        exit();
    });

    $klein->respond('GET', '/add', function ($request, $response) {     
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/content/add");       
        $content = new MBM\ADMIN\Content\Controllers\AdminContent(DIR_TEMPLATE_ADMIN);
        $content->add($request, $response);
        exit();
    });
    
    $klein->respond('POST', '/add', function($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/content/add"); 
        $saveCat = new MBM\ADMIN\Content\Controllers\AdminContent(DIR_TEMPLATE_ADMIN);
        $saveCat->save($request, $response);
        $response->send();
    });

    $klein->respond('GET', '/edit/[:id]', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/content/edit");  
        $content = new MBM\ADMIN\Content\Controllers\AdminContent(DIR_TEMPLATE_ADMIN);
        $content->edit($request->id, $response);
        exit();
    });

    $klein->respond('POST', '/edit', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/content/edit"); 
        $content = new MBM\ADMIN\Content\Controllers\AdminContent(DIR_TEMPLATE_ADMIN);
        $content->update($request, $response);
    });

    $klein->respond('POST', '/delete', function($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/content/edit"); 
        $delCat = new MBM\ADMIN\Content\Controllers\AdminContent(DIR_TEMPLATE_ADMIN);
        echo $delCat->delete($request, $response);
        exit();
    });
});
