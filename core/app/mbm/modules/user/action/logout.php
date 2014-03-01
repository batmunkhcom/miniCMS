<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$session->set('user_id', 0);
$session->clearKey('user');
set_flash(__('Successfully logged out'));
header("Location: " . get_url('user_login'));
echo get_url('user_login');
die();
