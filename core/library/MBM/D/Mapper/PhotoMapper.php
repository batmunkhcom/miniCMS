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
 * Photo Model iin Mapper n .
 */
class PhotoMapper extends AbstractDataMapper {

    protected $entityTable = "m_photos";

    protected function loadEntity(array $row) {
        return new \D\Model\Photo(
                array(
            "id" => (int) $row["id"],
            "user_id" => $row["user_id"],
            "st" => $row["st"],
            "code" => $row["code"],
            "type" => $row["type"],
            "path" => $row["path"],
            "domain" => $row["domain"],
            "height" => $row["height"],
            "width" => $row["width"],
            "mimetype" => $row["mimetype"],
            "filesize" => $row["filesize"],
            "views" => $row["views"],
            "hits" => $row["hits"],
            "downloads" => $row["downloads"],
            "date_created" => $row["date_created"],
            "date_expire" => $row["date_expire"]
                )
        );
    }

}
