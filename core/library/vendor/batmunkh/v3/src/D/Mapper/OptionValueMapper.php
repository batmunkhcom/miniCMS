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
 * OptionValue Model iin Mapper n .
 */
class OptionValueMapper extends AbstractDataMapper {

    protected $entityTable = "m_option_values";

    protected function loadEntity(array $row) {
        return new \D\Model\OptionValue(
                array(
            "id" => $row["id"],
            "option_id" => $row["option_id"],
            "code" => $row["code"],
            "is_active" => $row["is_active"]
                )
        );
    }

}
