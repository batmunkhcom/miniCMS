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
class UserRole {

    /**
     * User iin role iig hereglegchiin id aar avah
     *
     * @param integer $user_id Hereglegchiin id
     *
     */
    public static function getByUserId($user_id) {

        $user_roles = \Role::getByUserId($user_id);

        return $user_roles;
    }

}
