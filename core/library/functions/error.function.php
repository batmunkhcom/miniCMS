<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Error page uudiin file iin abs zamiig butsaana
 */
function get_error_page($type = '404') {

    set_application('system');
    set_module('error');
    set_action($type);
    
    //tuhain error action bhgui bol.....
    if (!file_exists(ERROR_MODULE_DIR . 'action' . DS . \M\Config::get('action_file').'.php')) {
        $file = ERROR_MODULE_DIR . 'action' . DS .'404.php';
        $tpl_file = ERROR_MODULE_DIR . 'templates' . DS . '404.php';
        \M\Config::set('action_file',$file);
        \M\Config::set('tpl_file',$tpl_file);
    }
    
    return $file;
}
