<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace A;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class AdminLeftMenu {

    public static $left_menus = array();

    public function __construct($root_menus = array()) {
        self::$left_menus = $root_menus;
    }

    public function AdminLeftMenuRoots() {
        self::$left_menus['root'] = array(
            'dashboard' => __('Dashboard'),
            'category' => __('Category'),
            'content' => __('Content'),
            'object' => __('Object'),
            'tag' => __('Tags'),
            'photo' => __('Photos'),
            'comment' => __('Comments'),
            'survey' => __('Survey'),
            'pano' => __('Pano'),
            'log' => __('Log'),
            'member' => __('Members'),
            'system' => __('System'),
            'report' => __('Reports'),
            'shopping' => __('Shopping'),
            'other' => __('Other')
        );
    }

    public function setSubmenus($key, $values = array()) {
        self::$left_menus[$key] = $values;
    }

}
