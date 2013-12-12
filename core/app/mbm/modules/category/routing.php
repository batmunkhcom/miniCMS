<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$router->respond('/c/[:id]/[*]', function ($request) {
    
//    dump($request->params(),true);
    return 'Hello ' . $request->id.'. '.$request->name.' - Category module loaded<hr />';
});
