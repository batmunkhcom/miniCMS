<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
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

\M\Config::set('FILES', $_FILES);
\M\Config::set('POST', $_POST);

if (check_host_status('udp://' . LOG_SERVER, 12201, 1) == 'online' && ENABLE_LOG == 1) {
    //error iig uuruu barij avah
    $logger = new Gelf\Logger(new \Gelf\Publisher(new \Gelf\Transport\UdpTransport(LOG_SERVER)), LOG_FACILITY);
    //$logger iig zarlasnii dara tohiruulna
    set_exception_handler("my_exception_handler");
    set_error_handler('my_error_handler');
    register_shutdown_function('my_error_shutdown');
}

date_default_timezone_set(TIME_ZONE);

//session handler
$session = new M\Registry\DataHandler(new M\Registry\SessionRegistry());

//date time. Carbon library
$date_time = new M\Carbon();

//load DB
$db = load_db($mbm_config);
//$db = new \D\Adapter\PdoAdapter(DB_TYPE . ":dbname=" . $config['db_name'], $config['db_user'], $config['db_pass'], array(
//    'db_name' => $config['db_name']
//        ));

/**
 * Component uud achaallah
 */
$components = new M\Component();
//component uudiin file uudiig include hiih
M\File::includePHPFiles($components->getAllComponents()->component_files);

/**
 * Router tohirguulah
 */
$router = new M\Router();

/**
 * lang duudna
 */
$ln = new M\Language(DEFAULT_LANG);

/**
 * app/module/action/tpl file uudiig config-t onoono
 */
$load_file = load_app_action();

/**
 * Template
 */
$template = new M\Template(M\Config::get('tpl_file'));

/**
 * zarim tohioldold module tpl ashiglahgui bh tohioldol garna.
 * $disable_load_actions huvisagch bgaa tohioldold load hiihgui
 *  */
if (!isset($disable_load_actions)) {
    //app/module/action load
    require $load_file;
}


