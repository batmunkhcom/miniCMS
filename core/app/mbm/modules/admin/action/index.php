<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$template->set('test', '...admin..index.... action.....loaded......');
$template->set('is_admin', \M\Config::get('is_admin'));
