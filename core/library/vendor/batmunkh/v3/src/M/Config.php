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
 * Buh tohirgoonuudiig aguulna
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 *
 * @property array $data Config iin set,get utguudiig aguulna
 * @property array $data[is_admin] admin heseg esehiig todorhoilno
 * @property array $data[apps] buh application uud
 * @property array $data[app_enabled] Tuhain idevhtei app
 * @property array $data[module_all] buh module uud
 * @property array $data[module_enabled] zuvhun idevhjsen module uud
 * @property array $data[module_current] yag odoogiin module
 * @property array $data[module_current_dir] yag odoogiin module dir
 * @property array $data[action_enabled] zuvhun idevhjsen action uud
 * @property array $data[action_current] yag odoogiin action
 * @property array $data[tpl_file] yag odoogiin duudah tpl file. ene template iig duudaj haruulna
 * @property array $data[css_files] ashiglagdah nemelt css file uud. compress hiigdene
 * @property array $data[css_loadfile] ashiglagdah nemelt css file uud. compress hiigdehgui shuud achaalagdana
 * @property array $data[js_files] ashiglagdah nemelt js file uud. compress hiigdene.
 * @property array $data[js_loadfile] ashiglagdah nemelt js file uud. compress hiigdehgui shuud achaalagdana.
 * @property array $data[routes] ali module/action haash zaagdsan route iin tohirgoo
 * @property array $data[GET] $_GET huvisagchuud
 * @property array $data[POST] $_POST huvisagchuud
 * @property array $data[FILES] $_FILES huvisagchuud
 * @property array $data[component_all] buh component uud
 * @property array $data[component_enabled] buh component uud
 */
class Config extends Core {

    public static $data = array();

    public function __construct($config = array()) {

        global $session;
        $roles = $session->get('roles');
        Config::set('roles', $roles);
        //site admin
        if (in_array('admin', $roles)) {
            Config::set('is_admin', 1);
        }
        //site manager
        if (in_array('manager', $roles)) {
            Config::set('is_manager', 1);
        }
        //site operator
        if (in_array('operator', $roles)) {
            Config::set('is_operator', 1);
        }
        //ul hudluhiin agent
        if (in_array('agent', $roles)) {
            Config::set('is_agent', 1);
        }
        //undsen tohirgoonii utguud
        Config::$data = $config;
        foreach ($config as $k => $v) {
            define(strtoupper($k), $v);
        }
    }

    static function get($key = '', $value = null) {

        if (!is_null($value) && $value != '') {
            self::set($key, $value);
        }

        if (isset(self::$data[$key])) {

            return self::$data[$key];
        } else {

            return null;
        }
    }

    static function set($key = '', $value = '') {

//        if ($key != 'router') {
//            echo $key . '---' . $value . '..<br>';
//        }
        self::$data[$key] = $value;
        return;
    }

}
