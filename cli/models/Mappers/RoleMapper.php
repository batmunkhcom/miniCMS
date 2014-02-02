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
 * Role Model iin Mapper n .
 */
class RoleMapper extends AbstractDataMapper {

protected $entityTable = "m_roles";

    protected function loadEntity(array $row) {
        return new \D\Model\Role(
                array(
                
"id" => (int)$row["id"],
"name" => $row["name"],
"comment" => $row["comment"],
"date_created" => $row["date_created"]
            )
        );
    }

}