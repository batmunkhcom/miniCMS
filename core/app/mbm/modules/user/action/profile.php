<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
set_layout('user_profile');

$template->set('user', $session->get('user'));
$template->set('user_id', $session->get('user_id'));
