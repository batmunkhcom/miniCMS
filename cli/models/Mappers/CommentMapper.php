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
 * Comment Model iin Mapper n .
 */
class CommentMapper extends AbstractDataMapper {

protected $entityTable = "m_comments";

    protected function loadEntity(array $row) {
        return new \D\Model\Comment(
                array(
                
"id" => $row["id"],
"comment_id" => $row["comment_id"],
"user_id" => $row["user_id"],
"code" => $row["code"],
"name" => $row["name"],
"content" => $row["content"],
"date_created" => $row["date_created"],
"ip" => $row["ip"],
"browser" => $row["browser"]
            )
        );
    }

}