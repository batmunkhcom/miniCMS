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
 */
class Component {

    public $component_all = array();
    public $component_enabled = array();
    public $component_files = array();

    public function __construct() {
        $this->getAllEnabledComponents();

        return $this;
    }

    /**
     * bgaa buh component uudiig avna
     *
     * @return object $this
     */
    public function getAllComponents() {

        $dirs = Dir::getAllDirectories(DIR_COMPONENT);
        Config::set('component_all', $dirs);

        $this->component_all = $dirs;

        return $this;
    }

    /**
     * Idevhtei Component uudiig avah
     *
     * @return object $this
     */
    public function getAllEnabledComponents() {

        $components_all = $this->getAllComponents()->component_all;
        $components_enabled = array();

        if (is_array($components_all)) {
            foreach ($components_all as $k => $v) {
                $this->component_files[] = File::getFiles(DIR_COMPONENT . $k . DS . 'includes' . DS, 'php');
                require(DIR_COMPONENT . $k . DS . 'config.php');
                if ((int) $is_enabled_component[$k] == 1) {
                    $components_enabled[$k] = $k;
                }
            }
        }
        $this->component_enabled = $components_enabled;
        Config::set('component_enabled', $components_enabled);

        return $this;
    }

    /**
     * Component route ashigladag bol havsargana
     *
     * @param object $router Router object
     *
     * @return
     */
    public function getAllComponentRouters($router) {

        $components = $this->getAllEnabledComponents()->component_enabled;

        foreach ($components as $k => $v) {
            if (file_exists(DIR_COMPONENT . $k . DS . 'routing.php')) {
                include_once(DIR_COMPONENT . $k . DS . 'routing.php');
            }
        }
    }

}
