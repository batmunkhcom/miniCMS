<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace D\Model;

/**
 * Setting model. settings table.
 */
class Setting extends AbstractEntity {

    /**
     * settings table iin baganuud n SettingMapper deer davhar zaaj ugnu
     */
    protected $allowedFields = array(
        'id',
        'setting_name',
        'setting_value',
        'setting_type');

    /**
     * field info:
     *    name:       id
     *    type:       int(11) unsigned
     *    null:       NO
     *    default:
     *    extra:      auto_increment
     *    generated:  2013-12-28 07:34:15 am
     * @param $id int Setting iin id
     * @return object
     */
    public function setId($id) {
        $id = (int) $id;
        if (isset($this->fields["id"])) {
            throw new \BadMethodCallException(__("The ID has been set already."));
        }

        if (!is_int($id) || $id < 1) {
            throw new \InvalidArgumentException(__("The ID is invalid."));
        }$this->fields["id"] = $id;

        return $this;
    }

    /**
     * field info:
     *    name:       setting_name
     *    type:       varchar(255)
     *    null:       NO
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $setting_name string Setting iin setting_name
     * @return object
     */
    public function setSettingName($setting_name) {
        $setting_name = (string) $setting_name;

        if (!isset($setting_name) || $setting_name == "") {
            $setting_name = "";
        }
        $this->fields["setting_name"] = $setting_name;

        return $this;
    }

    /**
     * field info:
     *    name:       setting_value
     *    type:       text
     *    null:       NO
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $setting_value string Setting iin setting_value
     * @return object
     */
    public function setSettingValue($setting_value) {
        $setting_value = (string) $setting_value;

        if (!isset($setting_value) || $setting_value == "") {
            $setting_value = "";
        }
        $this->fields["setting_value"] = $setting_value;

        return $this;
    }

    /**
     * field info:
     *    name:       setting_type
     *    type:       text
     *    null:       NO
     *    default:    default
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $setting_type string Setting iin setting_value
     * @return object
     */
    public function setSettingValue($setting_type) {
        $setting_type = (string) $setting_type;

        if (!isset($setting_type) || $setting_type == "") {
            $setting_type = "default";
        }
        $this->fields["setting_value"] = $setting_type;

        return $this;
    }

}
