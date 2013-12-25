<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/*
 * Idevhtei module uudiig hadgalna
 *   */
$is_enabled_module = array();


//LIB dir dotorhi functions havtast bairlaj bgaa file uudiig include hiiv.
M\File::getAndIncludePHPFiles(DIR_LIB . 'functions' . DS);

//tohirgoog buh gazar shuud ashiglah bolomj olgohiin tuld ehleed duudav
$config = new M\Core($mbm_config);

//error iig uuruu barij avah
$logger = new Gelf\Logger(new \Gelf\Publisher(new \Gelf\Transport\UdpTransport(LOG_SERVER)), LOG_FACILITY);

//$logger iig zarlasnii dara tohiruulna
set_exception_handler("my_exception_handler");
set_error_handler('my_error_handler');
register_shutdown_function('my_error_shutdown');

date_default_timezone_set(TIME_ZONE);

//session handler
$session = new M\Registry\DataHandler(new M\Registry\SessionRegistry());

//load DB
$db = load_db($mbm_config);

//Router tohirguulah
$router = new M\Router();

//lang duudna
$ln = new M\Language('mn');

//app/module/action/tpl file uudiig config-t onoono
$load_file = load_app_action();

//tpl duudah
$template = new M\Template(M\Config::get('tpl_file'));

/*
 * zarim tohioldold module tpl ashiglahgui bh tohioldol garna.
 * $disable_load_actions huvisagch bgaa tohioldold load hiihgui
 *  */
if (!isset($disable_load_actions)) {
    //app/module/action load
    require $load_file;
}


