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
 * Setting Model iin Mapper n .
 */
class SettingMapper extends AbstractDataMapper {

protected $entityTable = "m_settings";

    protected function loadEntity(array $row) {
        return new \D\Model\Setting(
                array(
                
"id" => $row["id"],
"setting_name" => $row["setting_name"],
"setting_value" => $row["setting_value"],
"setting_type" => $row["setting_type"]
            )
        );
    }

}