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
 * ObjectCategory Model iin Mapper n .
 */
class ObjectCategoryMapper extends AbstractDataMapper {

    protected $entityTable = "m_object_categories";

    protected function loadEntity(array $row) {
        return new \D\Model\ObjectCategory(
                array(
            "id" => (int) $row["id"],
            "category_id" => $row["category_id"],
            "object_id" => $row["object_id"]
                )
        );
    }

}
