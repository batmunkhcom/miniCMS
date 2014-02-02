<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class User extends D\Model\User {

    public static function fetchAll() {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $user = $mapper_db->fetchAll();

//        $this->username = $user->username;

        return $user;
    }

    public static function getById($id) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $user = $mapper_db->fetchById($id);

//        $this->username = $user->username;

        return $user;
    }

    /**
     * User login check
     *
     * @param string $username Hereglegchiin nevtreh ner
     * @param string $password Hereglegchiin nevtreh nuuts ug. $password = md5(CLEAR_TEXT_PASSWORD)
     *
     */
    public static function checkLogin($username, $password) {

        global $db, $session;

        $is_logged = 0;

        $mapper_db = db_unit($db, __CLASS__);

        $users = $mapper_db->select(
                array(
            'username' => $username
                ), 'username=:username'
        );
        $active_user = '';
        foreach ($users as $user) {
            $active_user = $user;
        }
        if ($user->count() > 0) {

            if (md5($user->username . $password) == $user->password) {

                set_flash(__('Successfully logged in'), 'success');

                //hereglegchiin role iig todorhoiloh
                $roles = array();
                $user_roles = \UserRole::getByUserId($user->id);
                foreach ($user_roles as $urole) {
                    $roles [$urole->id] = $urole->name;
                }

                $user_data = array();
                $user_data['user'] = array(
                    $user->id => array(
                        'id' => $user->id,
                        'username' => $user->username,
                        'email' => $user->email,
                        'token' => $user->token,
                        'secret_key' => $user->secret_key,
                        'password' => $user->password,
                        'password_tmp' => $user->password_tmp,
                        'firstname' => $user->firstname,
                        'email' => $user->email,
                        'gender' => $user->gender,
                        'phone' => $user->phone,
                        'birthday' => $user->birthday,
                        'city_birth' => $user->city_birth,
                        'city_living' => $user->city_living,
                        'address_living' => $user->address_living,
                        'address_billing' => $user->address_billing,
                        'website' => $user->website,
                        'default_timezone' => $user->default_timezone,
                        'default_lang' => $user->default_lang,
                        'default_layout' => $user->default_layout,
                        'date_created' => $user->date_created,
                        'date_password_reset' => $user->date_password_reset,
                        'parent_id' => $user->parent_id
                    )
                );
                $session->set('user', $user_data['user']);
                $session->set('roles', $roles);
                $is_logged = 1;
            } else {
                set_flash(__('Invalid password'), 'error');
            }
        } else {
            set_flash(__('No such user found'), 'error');
        }
        return $is_logged;
    }

}
