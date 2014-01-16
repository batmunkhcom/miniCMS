<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_route('admin_setting_save', '/admin/setting/save');
set_route('admin_setting_edit', '/admin/setting/edit');
set_route('admin_setting_list', '/admin/setting/list');

//settings admin route
$router->with('/admin/setting', function () use ($router) {

    set_layout('admin');

    //settings home
    $router->respond('GET', '/?', function ($request, $response) {
//        $template->set('aa', '<br>aa variable iin utga n <br>');
//        M\Config::set('action_file', DIR_COMPONENT . 'setting' . DS . 'action' . DS . 'list.php');
        M\Config::set('tmp_file', DIR_COMPONENT . 'setting' . DS . 'templates' . DS . 'list.php');
        echo M\Config::get('tpl_file');
    });

    //settings save
    $router->respond('POST', '/save', function ($request, $response, $service) {

        //form invalid bol
        if (!comment_form(post('form_name'), post('code'))) {
            //umnuh huudas ruu shidne
            $service->back();
        } else {
            echo 'valid form';
        }
    });

    //comment update
    $router->respond('GET', '/edit/[i:id]', function ($request, $response) {

        set_get_parameter('id', $request->id);
    });
});

