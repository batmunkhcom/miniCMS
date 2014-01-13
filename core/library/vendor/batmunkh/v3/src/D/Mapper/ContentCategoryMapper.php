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
 * ContentCategory Model iin Mapper n .
 */
class ContentCategoryMapper extends AbstractDataMapper {

    protected $entityTable = "m_content_categories";

    protected function loadEntity(array $row) {
        return new \D\Model\ContentCategory(
                array(
            "id" => $row["id"],
            "content_id" => $row["content_id"],
            "category_id" => $row["category_id"]
                )
        );
    }

}
