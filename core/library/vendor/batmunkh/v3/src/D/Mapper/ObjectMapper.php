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
 * Object Model iin Mapper n .
 */
class ObjectMapper extends AbstractDataMapper {

    protected $entityTable = "m_objects";

    protected function loadEntity(array $row) {
        return new \D\Model\Object(
                array(
            "id" => (int) $row["id"],
            "user_id" => $row["user_id"],
            "lft" => $row["lft"],
            "rgt" => $row["rgt"],
            "depth" => $row["depth"],
            "parent_id" => $row["parent_id"],
            "code" => $row["code"],
            "st" => $row["st"],
            "is_featured" => $row["is_featured"],
            "is_sale" => $row["is_sale"],
            "photo" => $row["photo"],
            "name" => $row["name"],
            "measure_value" => $row["measure_value"],
            "measure_name" => $row["measure_name"],
            "price_per_measure" => $row["price_per_measure"],
            "price_sale" => $row["price_sale"],
            "price_total" => $row["price_total"],
            "currency_code" => $row["currency_code"],
            "content_brief" => $row["content_brief"],
            "content_body" => $row["content_body"],
            "views" => $row["views"],
            "hits" => $row["hits"],
            "date_created" => $row["date_created"],
            "date_publish" => $row["date_publish"],
            "date_expire" => $row["date_expire"]
                )
        );
    }

}
