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
 * TagValue Model iin Mapper n .
 */
class TagValueMapper extends AbstractDataMapper {

    protected $entityTable = "m_tag_values";

    protected function loadEntity(array $row) {
        return new \D\Model\TagValue(
                array(
            "id" => (int) $row["id"],
            "code" => $row["code"],
            "tag_id" => $row["tag_id"],
            "hits" => $row["hits"]
                )
        );
    }

}
