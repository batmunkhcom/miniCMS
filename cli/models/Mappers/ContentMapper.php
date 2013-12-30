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
 * Content Model iin Mapper n .
 */
class ContentMapper extends AbstractDataMapper {

protected $entityTable = "m_contents";

    protected function loadEntity(array $row) {
        return new \D\Model\Content(
                array(
                
"id" => $row["id"],
"content_id" => $row["content_id"],
"user_id" => $row["user_id"],
"code" => $row["code"],
"st" => $row["st"],
"content_type" => $row["content_type"],
"title" => $row["title"],
"content_brief" => $row["content_brief"],
"content_body" => $row["content_body"],
"use_comment" => $row["use_comment"],
"date_created" => $row["date_created"],
"total_updated" => $row["total_updated"],
"views" => $row["views"],
"hits" => $row["hits"],
"session_id" => $row["session_id"],
"session_time" => $row["session_time"],
"is_adult" => $row["is_adult"]
            )
        );
    }

}