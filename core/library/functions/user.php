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
function get_user_avatar($user_id) {

    global $session;

    return '/assets/flatlab/admin/img/profile-avatar.jpg';
}

/**
 * Nevterch orson hereglegchiin id -g butsaana
 */
function get_logged_user_id() {

    global $session;

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
 *
 */
function check_authorization($required = array('user'), $condition = 'any') {

    if (in_array($condition, $required)) {

        return true;
    }

    return false;
}

/**
 * check logged user authorization
 *
 * $session->get('roles')
 */
function check_logged_user_authorization($roles = array()) {

    $user_roles = get_user_roles(get_logged_user_id());

    if (!$user_roles) {

        return false;
    }
    foreach ($roles as $role => $value) {
        if (in_array($value, $user_roles)) {
            return true;
        }
    }

    return false;
}

/**
 *
 */
function get_user_authorization($user_id = 0) {
    if ($user_id == 0) {
        $user_id = get_logged_user_id();
    }
}

/**
 * get user roles
 *
 * @param integer $user_id User iin id
 *
 * @return boolean|array Roles bval array bhgui bol false butsaana
 */
function get_user_roles($user_id = 0) {

    global $session;

    $user = $session->get('user');

    if (isset($user[$user_id]['roles'])) {

        return $user[$user_id]['roles'];
    } else {

        return false;
    }
}
