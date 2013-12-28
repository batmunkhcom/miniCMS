<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Tuhain uyiin app iig onooj ugnu
 *
 * @param string $app Onooj uguh app iin ner
 *
 * @return ''
 */
function set_application($app) {

    \M\Config::set('app_current', $app);
}

/**
 * Tuhain uyiin module iig onooj ugnu
 *
 * @param string $module Onooj uguh app iin ner
 *
 * @return ''
 */
function set_module($module) {

    \M\Config::set('module_current', $module);
}

/**
 * Tuhain uyiin action iig onooj ugnu
 *
 * @param string $action Onooj uguh app iin ner
 *
 * @return ''
 */
function set_action($action) {

    \M\Config::set('action_current', $action);
}
