<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$klein->with('/admin/photo', function () use ($klein) {

    $klein->respond('GET', '/?', function ($request, $response) use ($klein) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo");
        $photo = new MBM\ADMIN\Photo\Controllers\AdminPhoto(DIR_TEMPLATE_ADMIN);
        $photo->index();
        exit;
    });
    
   
    $klein->respond('GET', '/list', function ($request, $response) use ($klein) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/list");
        $photo = new MBM\ADMIN\Photo\Controllers\AdminPhoto(DIR_TEMPLATE_ADMIN);
        $photo->lists();
        exit;
    });
    
    $klein->respond('GET', '/ajax', function ($request, $response) use ($klein) {
    //  \MBM\Lib\Auth::instance()->Authenticate($response);
    //  \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/ajax");        
        $photo = new MBM\ADMIN\Photo\Controllers\AdminPhoto(DIR_TEMPLATE_ADMIN);
        $photo->get();
        exit;
    });
    
     $klein->respond('POST', '/ajax', function ($request, $response) use ($klein) {
//        \MBM\Lib\Auth::instance()->Authenticate($response);
//        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/ajax");        
        $photo = new MBM\ADMIN\Photo\Controllers\AdminPhoto(DIR_TEMPLATE_ADMIN);
        $photo->post();
        exit;
    });
    
     $klein->respond('DELETE', '/delete/[:id]', function ($request, $response) use ($klein) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/delete");  
        $photo = new MBM\ADMIN\Photo\Controllers\AdminPhoto(DIR_TEMPLATE_ADMIN);
        $photo->delete($request->id);
        exit;
    });
    
    
     $klein->respond('GET', '/add', function ($request, $response) use ($klein) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/add");  
        $photo = new MBM\ADMIN\Photo\Controllers\AdminPhoto(DIR_TEMPLATE_ADMIN);
        $photo->add();
        exit;
    });

    $klein->respond('POST', '/delete', function ($request, $response) use ($klein) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin/photo/delete");  
        $photo = new MBM\ADMIN\Photo\Controllers\AdminPhoto(DIR_TEMPLATE_ADMIN);
        $photo->deleteMe($request, $response);
        exit;
    });    
});




