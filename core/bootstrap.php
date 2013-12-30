<?php

/*
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

define('DS', DIRECTORY_SEPARATOR);
define('DIR_ABS', __DIR__ . DS . '../');

//Folder configuration
define('DIR_CORE', DIR_ABS . 'core' . DS);
define('DIR_LIB', DIR_CORE . 'library' . DS);
define('DIR_APP', DIR_CORE . 'app' . DS);
define('DIR_MODULE', DIR_APP . APP_ENABLED . DS . 'modules' . DS);
define('DIR_WEB', DIR_ABS . 'web' . DS);
define('DIR_CLI', DIR_CORE . 'cli');
define('DIR_WWW', '');
define('DIR_TEMPLATE', DIR_CORE . 'templates' . DS);
define('DIR_PLUGIN', DIR_CORE . 'plugins' . DS);
define('DIR_COMPONENT', DIR_CORE . 'components' . DS);
define('DIR_TMP', DIR_CORE . 'tmp' . DS);
define('DIR_CACHE', DIR_CORE . 'cache' . DS);
define('DIR_LOG', DIR_CORE . 'log' . DS);
define('DIR_DOCS', DIR_ABS . 'docs' . DS);
//session_save_path(DIR_TMP.'sessions'.DS);
//media folders. relative to domain.. DIR_WEB.DS.DIR_WWW.DS -nd bairlah zam.
define('DIR_UPLOAD', 'upload' . DS);
define('DIR_CSS', 'css' . DS);
define('DIR_JS', 'js' . DS);
define('DIR_IMAGE', 'images' . DS);

/**
 * System APP iin tohirgoo
 */
//system iin undsen APP
define('SYSTEM_APP_NAME', 'system');
define('SYSTEM_APP_DIR', DIR_APP . SYSTEM_APP_NAME . DS);
//system iin undsen APP-d hamaaragdah aldaa medeeleh module
define('ERROR_MODULE_NAME', 'error');
define('ERROR_MODULE_DIR', SYSTEM_APP_DIR . 'modules' . DS . ERROR_MODULE_NAME . DS);
//system iin undsen APP-d hamaaragdah error module iin action
define('PAGE_NOT_FOUND_ACTION', '404');

//load autoloader
require DIR_CORE . 'library/vendor/autoload.php';

require_once (DIR_LIB . 'includes' . DS . 'common.php');

require_once (DIR_LIB . 'includes' . DS . 'subloader.php');
