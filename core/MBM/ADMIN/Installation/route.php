<?php

$klein->with('/installation', function () use ($klein) {

    $klein->respond('GET', '/?', function ($request, $response,$service,$app) {
        if($app->isInstalled()){
            return;
        }
        $installer = new \MBM\ADMIN\Installation\Controllers\Installer(DIR_TEMPLATE_ADMIN);
        $installer->index();
        exit;
    });
     $klein->respond('POST', '/?', function ($request, $response, $service, $app) {
         if($app->isInstalled()){
            return;
        }
        $installer = new \MBM\ADMIN\Installation\Controllers\Installer(DIR_TEMPLATE_ADMIN);
        $installer->install($request, $response);
    });
    $klein->respond('GET', '/schema', function ($request, $response, $service, $app) {
        
         if($app->isInstalled()){
            return;
        }
        //\MBM\ADMIN\Installation\Models\CreateSchema::instance()->generateTables();
        \MBM\ADMIN\Installation\Models\CreateSchema::instance()->fillData();
        exit;
    });
});
