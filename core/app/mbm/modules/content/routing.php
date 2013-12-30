<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/* * *****KLEIN ROUTING****** */
$router->respond('GET', '/r.*/[i:id].*', function ($request, $response, $service, $app) {

    set_application(APP_ENABLED);
    set_module('content');
    set_action('index');

    /* testing---------
     *
      echo $request->id;
      echo '<hr />';
      print_r($request->paramsNamed());
      echo '<hr />';
      print_r($request->pathname());
      echo '<hr />';
      print_r($request->method());
      echo '<hr />';
      print_r($request->query('/r'));
      echo '<hr />';
      print_r($request->uri());
      echo '<hr />';
     */
    return '';
});
