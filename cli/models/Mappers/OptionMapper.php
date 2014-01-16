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
 * Option Model iin Mapper n .
 */
class OptionMapper extends AbstractDataMapper {

protected $entityTable = "m_options";

    protected function loadEntity(array $row) {
        return new \D\Model\Option(
                array(
                
"id" => $row["id"],
"code" => $row["code"],
"user_id" => $row["user_id"],
"st" => $row["st"],
"type" => $row["type"],
"name" => $row["name"],
"comment" => $row["comment"],
"date_created" => $row["date_created"]
            )
        );
    }

}