<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace D\Mapper;

/**
 * Category Model iin Mapper n .
 */
class CategoryMapper extends AbstractDataMapper {

    protected $entityTable = "m_categories";

    protected function loadEntity(array $row) {
        return new \D\Model\Category(
                array(
            "id" => $row["id"],
            "category_id" => $row["category_id"],
            "code" => $row["code"],
            "depth" => $row["depth"],
            "lft" => $row["lft"],
            "rgt" => $row["rgt"],
            "st" => $row["st"],
            "user_id" => $row["user_id"],
            "pos" => $row["pos"],
            "title" => $row["title"],
            "is_external" => $row["is_external"],
            "external_url" => $row["external_url"],
            "lang" => $row["lang"],
            "hits" => $row["hits"],
            "date_created" => $row["date_created"],
            "date_last_updated" => $row["date_last_updated"],
            "last_updated_user_id" => $row["last_updated_user_id"]
                )
        );
    }

}
