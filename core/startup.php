<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
define('DS', DIRECTORY_SEPARATOR);

//Absolute path
//define('DIR_ABS', str_replace('core', '', __DIR__));
define('DIR_ABS', realpath('../') . DS);

/* * ***********Folder configuration************** */

//CORE folder 
define('DIR_CORE', DIR_ABS . 'core' . DS);
define('DIR_LIB', DIR_CORE . 'MBM' . DS);
define('DIR_CONFIG', DIR_CORE . 'config' . DS);
define('DIR_CLI', DIR_CORE . 'cli');
define('DIR_LANG', DIR_CORE . 'lang');

/**
 * Layout bolon busad niitleg template dir 
 */
define('DIR_TEMPLATE', DIR_CORE . 'templates' . DS);

/**
 * Plugins directory 
 */
define('DIR_PLUGIN', DIR_CORE . 'Plugins' . DS);

/**
 * Components directory 
 */
define('DIR_COMPONENT', DIR_CORE . 'Components' . DS);

/**
 * Temp directory. chmod 777
 */
define('DIR_TMP', DIR_CORE . 'tmp' . DS);

/**
 * Cache directory. chmod 777
 */
define('DIR_CACHE', DIR_CORE . 'cache' . DS);


/**
 * Log file directory. chmod 777
 */
define('DIR_LOG', DIR_CORE . 'log' . DS);

/**
 * Documentation, guides, manual pdf files geh met buh 
 * documentation bairlana
 */
define('DIR_DOCS', DIR_ABS . 'docs' . DS);

/**
 * Desgin psd file bolon busad system iig hugjuulehed ashiglagdsan 
 * item uudiin original huvilbariig end hadgalah
 */
define('DIR_DATA', DIR_ABS . 'data' . DS);

//session_save_path(DIR_TMP.'sessions'.DS);

/**
 * Media directory. relative to domain.. DIR_WEB.DIR_WWW -nd bairlah zam.
 * hereglegchiin zugees oruulj bui buil file, data zereg server ruu 
 * huulagdaj bui file uudiig dotor n angilj hadgalna
 * 
 * chmod -R 777
 */
define('DIR_MEDIA', 'media' . DS);

/**
 * CSS Folder
 */
define('DIR_CSS', 'css' . DS);

/**
 * JS folder
 */
define('DIR_JS', 'js' . DS);

/**
 * Image folder
 */
define('DIR_IMAGE', 'images' . DS);

//Composer autoloader
$loader = require DIR_CORE . 'vendor/autoload.php';

//Dir app configs
define('DIR_ADMIN', DIR_LIB . DS . 'ADMIN' . DS);
define('DIR_APP', DIR_LIB . DS . strtoupper(\MBM\Lib\Loader::instance()->config['app']['name']) . DS);
/**
 * base url
 */
define('URL', \MBM\Lib\Loader::instance()->config['system']['protocol'] . '://' . $_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']);

define('DIR_WEB', DIR_ABS . \MBM\Lib\Loader::instance()->config['dir']['web'] . DS);
if (isset(\MBM\Lib\Loader::instance()->config['dir']['www'])) {
    define('DIR_WWW', DIR_ABS . \MBM\Lib\Loader::instance()->config['dir']['www'] . DS);
}
/**
 * Default APP
 */
define('APP_NAME', \MBM\Lib\Loader::instance()->config['app']['name'] . DS);
/**
 * template iin tohirgoo
 */
define('TEMPLATE_ADMIN', \MBM\Lib\Loader::instance()->config['template']['admin']);
define('TEMPLATE_APP', \MBM\Lib\Loader::instance()->config['template']['app']);
define('DIR_TEMPLATE_ADMIN', DIR_TEMPLATE . TEMPLATE_ADMIN);
define('DIR_TEMPLATE_APP', DIR_TEMPLATE . TEMPLATE_APP);


//$installer = new \MBM\ADMIN\Installation\Controllers\Installer(DIR_TEMPLATE_ADMIN);
// $installer->writeDBConfig();
//twig autoloader
//require_once DIR_CORE .'vendor/';
 //Undsen route iig achaallah 
  \MBM\Lib\Loader::instance()->route();
  