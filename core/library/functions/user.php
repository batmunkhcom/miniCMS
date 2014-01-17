<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Nevterch orson hereglegchiin id -g butsaana
 */
function get_logged_user_id() {

    global $session;

    //demo oor set hiiv
    $session->set('user_id', 1);

    return $session->get('user_id');
}

/**
 * Tuhain hereglegchiig nevtersen esehiig shalgana
 */
function is_logged_user() {

    return true;
}

/**
 * Tuhain hereglegchiig nevtersen esehiig shalgana
 */
function get_logged_username() {

    return 'Administrator';
}

/**
 * Hereglegchiin handah erhiig shalgana
 */
function check_authorization($required = array(), $condition = 'any') {
    foreach ($required as $k => $v) {

    }
}

/**
 *
 */
function get_user_authorization($user_id = 0) {
    if ($user_id == 0) {
        $user_id = get_logged_user_id();
    }
}
