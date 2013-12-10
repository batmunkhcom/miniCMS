<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */
/****************Webiin undsen tohirgoo*********************/
$mbm_config ['protocol'] = 'http://';
$mbm_config ['domain'] = $_SERVER['SERVER_NAME'];

//Folder configuration
$mbm_config ['dir_abs']     = '/home/web.me/';
$mbm_config ['dir_web']     = 'web'.DS; //Ex: ABS_DIR.'public_html/'
$mbm_config ['dir_www']     = ''; // http://www.mng.cc/www_dir/ helberteigeer suuriluulalt hiivel hereglene. : Ex: www_dir/ 
$mbm_config ['dir_app']     = $mbm_config ['dir_core'].'app'.DS; 
$mbm_config ['dir_core']    = $mbm_config ['dir_abs'].'core'.DS; 
$mbm_config ['dir_cache']   = $mbm_config ['dir_core'].'cache'.DS; 
$mbm_config ['dir_cli']   = $mbm_config ['dir_core'].'cli'.DS; 
$mbm_config ['dir_config']   = $mbm_config ['dir_core'].'config'.DS; 
$mbm_config ['dir_data']    = $mbm_config ['dir_core'].'data'.DS; 
$mbm_config ['dir_lang']     = $mbm_config ['dir_core'].'lang'.DS; 
$mbm_config ['dir_lib']     = $mbm_config ['dir_core'].'library'.DS; 
$mbm_config ['dir_log']     = $mbm_config ['dir_core'].'log'.DS; 
$mbm_config ['dir_template']     = $mbm_config ['dir_core'].'templates'.DS; 
$mbm_config ['dir_tmp']     = $mbm_config ['dir_core'].'tmp'.DS; 
$mbm_config ['dir_upload']     = $mbm_config ['dir_web'].'media'.DS; 

/****************Default utguud*********************/
$mbm_config ['default_charset'] = 'utf8';
$mbm_config ['default_lang'] = 'mn';
$mbm_config ['default_app'] = 'default';
$mbm_config ['default_module'] = 'default';
$mbm_config ['default_action'] = 'index';

/****************htaccess ashiglah eseh*********************/
$mbm_config ['use_htaccess'] = 1;

/****************Tsagnii tohirgoo*********************/
$mbm_config ['time_zone'] = 'Asia/Ulaanbaatar';
$mbm_config ['date_format'] = "Y/m/d H:i:s";


/****************CACHE tohirgoo*********************/
$mbm_config ['use_cache'] = 1;
$mbm_config ['use_type'] = 'APC'; //APC, memcached
$mbm_config ['cache_name'] = 'memcached';
$mbm_config ['cache_host'] = 'localhost';
$mbm_config ['cache_port'] = 11218;

/****************Busad tohirgoo*********************/
$mbm_config ['enable_debug'] = 1;
$mbm_config ['enable_log'] = 1;













/**
 * End of configuration - Tohirgoonii tugsgul
 */

/**
 * DO NOT CHANGE BELOW - Doorhiig zasah shaardlagagui
 */

if($_SERVER['SERVER_PORT'] != 80){
    $mbm_config['domain'] .= ':'.$_SERVER['SERVER_PORT'];
}

