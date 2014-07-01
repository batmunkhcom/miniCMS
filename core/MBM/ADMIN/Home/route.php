<?php

$klein->with('/admin', function () use ($klein) {

    $klein->respond('GET', '/?', function ($request, $response) {
        \MBM\Lib\Auth::instance()->Authenticate($response);
        \MBM\Lib\Authorize::instance()->Authorize("/admin");
        $home = new MBM\ADMIN\Home\Controllers\AdminHome(DIR_TEMPLATE_ADMIN);
        $home -> index();
        exit;
    });
});
