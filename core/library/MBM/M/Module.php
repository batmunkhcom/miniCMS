<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace M;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 *
 *
 * @property array $modules buh module uud
 * @property array $module_enabled zuvhun idevhjsen module uud
 */
class Module {

    public static $current_app_dir = '';
    public static $module_all = array();
    public static $module_enabled = array();
    public static $module_current_dir = '';

    public function __construct() {
        self::setAppDir();
    }

    /**
     * buh module iig avna
     */
    static function getAllModules() {

        self::setAppDir();
        $module_current_dir = self::$current_app_dir . 'modules' . DS;
        $module_all = Dir::getAllDirectories($module_current_dir);

        self::$module_current_dir = $module_current_dir;
        self::$module_all = $module_all;

        Config::set('module_all', $module_all);
        Config::set('module_current_dir', $module_current_dir);

        return $module_all;
    }

    /**
     * buh idevhtei module iig avna
     */
    public static function getAllEnabledModules() {

        $module_all = self::getAllModules();
        $_enabled_modules = array();

        if (is_array($module_all)) {
            foreach ($module_all as $k => $v) {
                if (file_exists(self::$current_app_dir . 'modules' . DS . $v . DS . 'config.php')) {
                    include_once self::$current_app_dir . 'modules' . DS . $v . DS . 'config.php';
                    if ($is_enabled_module[$v] == 1) {
                        $_enabled_modules[$v] = $v;
                    }
                }
            }
        }

        self::setModuleEnabled($_enabled_modules);

        return $_enabled_modules;
    }

    public static function getAllModuleRouters($router) {

        $modules = self::getAllEnabledModules();

        foreach ($modules as $k => $v) {
            if (file_exists(self::$current_app_dir . "modules" . DS . $v . DS . 'routing.php')) {
                include_once(self::$current_app_dir . "modules" . DS . $v . DS . 'routing.php');
            }
        }
    }

    public static function setModuleEnabled($_enabled_modules = array()) {

        Config::set('module_enabled', $_enabled_modules);
        self::$module_enabled = $_enabled_modules;
        $GLOBALS['is_enabled_module'] = $_enabled_modules;
    }

    public static function getAppDir() {

        return self::$current_app_dir;
    }

    public static function setAppDir() {

        self::$current_app_dir = DIR_APP . APP_ENABLED . DS;
    }

    /*
     * Module iin JS,CSS file uudiig avah.
     * @param $module_name string Module iin ner
     * @param $file_type string File iin urgutgul. Ex: js,css
     * @return array
     *      */

    public static function getMediaFiles($module_name = '', $file_type = '') {

        $files = \M\File::getFiles(DIR_MODULE . $module_name . DS . $file_type . DS, $file_type);

        return $files;
    }

}
