<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$is_enabled_module = array();

//LIB dir dotorhi functions havtast bairlaj bgaa file uudiig include hiiv.
M\File::getAndIncludePHPFiles(DIR_LIB . 'functions' . DS);

//tohirgoog buh gazar shuud ashiglah bolomj olgohiin tuld ehleed duudav
$config = new M\Core($mbm_config);

//session handler
$session = new M\Registry\DataHandler(new M\Registry\SessionRegistry());


//load DB
$db = load_db();

//Router tohirguulah
$router = new M\Router();

//app/module/action/tpl file uudiig config-t onoono
$load_file = load_app_action();

//tpl duudah
$template = new M\Template(M\Config::get('tpl_file'));

//app/module/action load
require $load_file;