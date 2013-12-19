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
$mbm_config ['port'] = $_SERVER['SERVER_PORT'];


/****************Default utguud*********************/
$mbm_config ['default_charset'] = 'utf8';
$mbm_config ['default_lang'] = 'mn';
$mbm_config ['default_app'] = 'mbm';
$mbm_config ['default_module'] = 'home';
$mbm_config ['default_action'] = 'index';
$mbm_config ['default_layout'] = 'default';

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

