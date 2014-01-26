<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Module config file
 */
$is_enabled_module['object'] = 1;

//object save hiideg action file path
define("OBJECT_SAVE_ACTION_FILEPATH", DIR_MODULE . 'object' . DS . 'action' . DS . 'admin_object_save.php');
define("OBJECT_NEW_ACTION_FILEPATH", DIR_MODULE . 'object' . DS . 'action' . DS . 'admin_object_new.php');
define("OBJECT_NEW_TEMPLATE_FILEPATH", DIR_MODULE . 'object' . DS . 'templates' . DS . 'admin_object_new.php');
