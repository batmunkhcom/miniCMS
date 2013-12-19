<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * tuhain idevhtei module action abs file path iig butsaana
 */
function load_app_action() {

    $app = APP_ENABLED;
    $module = \M\Config::get('module_current');
    $action = \M\Config::get('action_current');

    $module_dir = \M\Config::get('module_current_dir');

    $action_file = $module_dir
            . $module . DS
            . 'action' . DS .
            $action . '.php';

    //template file iig action-d zaaj uguugui bol tohiruulna
    $tpl_file = $module_dir
            . $module . DS
            . 'templates' . DS .
            $action . '.php';


    //action file bgaa esehiig shalgah
    if (!file_exists($action_file)) {
        $action_file = get_error_page('404');
    }

    //templte file bgaa esehiig shalgah
    if (!file_exists($action_file)) {
        $tpl_file = ERROR_MODULE_DIR . 'templates' . DS . '404_no_template_file.php';
    }
    
    //yamar template duudah n onoogdoogui bol tohiruulah
    if (!\M\Config::get('tpl_file') || \M\Config::get('tpl_file') == '') {
        \M\Config::set('tpl_file', $tpl_file);
    }
    
    //action file iig config-d onooh
    \M\Config::set('action_file', $action_file);
    
    return $action_file;
}
