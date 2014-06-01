<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace D\Mapper;

/**
 * UserRole Model iin Mapper n .
 */
class UserRoleMapper extends AbstractDataMapper {

protected $entityTable = "m_user_roles";

    protected function loadEntity(array $row) {
        return new \D\Model\UserRole(
                array(
                
"id" => (int)$row["id"],
"user_id" => $row["user_id"],
"role_id" => $row["role_id"]
            )
        );
    }

}