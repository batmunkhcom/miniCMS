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
class Role {

    /**
     * user_id aar avah
     */
    public static function getByUserId($user_id) {

        global $db;

        $userRoles = new \D\Mapper\UserRoleMapper($db, new \D\Model\Collection\EntityCollection);
//        $mapper_db = db_mapper($db, 'ContentCategory');
        $mapper_db = db_mapper($db, __CLASS__);
        $all_user_roles = $mapper_db->select(array(
            'user_id' => $user_id
                ), ' id IN (SELECT role_id FROM ' . $userRoles->getTableName() . ' WHERE user_id=:user_id)');

        return $all_user_roles;
    }

}
