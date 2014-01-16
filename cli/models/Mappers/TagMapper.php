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
 * Tag Model iin Mapper n .
 */
class TagMapper extends AbstractDataMapper {

protected $entityTable = "m_tags";

    protected function loadEntity(array $row) {
        return new \D\Model\Tag(
                array(
                
"id" => $row["id"],
"lft" => $row["lft"],
"rgt" => $row["rgt"],
"parent_id" => $row["parent_id"],
"depth" => $row["depth"],
"tag_value" => $row["tag_value"],
"score" => $row["score"],
"date_created" => $row["date_created"],
"date_updated" => $row["date_updated"]
            )
        );
    }

}