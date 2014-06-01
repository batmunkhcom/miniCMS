<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
if (post('username')) {
    if (\User::checkLogin(post('username'), post('password')) == 1) {
        header("Location: " . get_url('user_profile'));
    } else {
        header("Location: " . get_url('user_login'));
    }
}