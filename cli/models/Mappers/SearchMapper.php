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
 * Search Model iin Mapper n .
 */
class SearchMapper extends AbstractDataMapper {

protected $entityTable = "m_search";

    protected function loadEntity(array $row) {
        return new \D\Model\Search(
                array(
                
"id" => (int)$row["id"],
"tags" => $row["tags"],
"title" => $row["title"],
"descr" => $row["descr"],
"url" => $row["url"],
"hits" => $row["hits"],
"created_at" => $row["created_at"]
            )
        );
    }

}