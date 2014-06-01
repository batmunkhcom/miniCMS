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
                            * Setting model. Settings table.
                            */
class Setting extends AbstractEntity {
/**
* Settings table iin baganuud n SettingMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'setting_name',
'setting_value',
'setting_type');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-02-03 01:06:06 am
     * @param $id  Setting iin id
     * @return object
     */
	public function setId($id) {
if(isset($this->fields[  "id"])) {
            throw new  \  BadMethodCallException(  __

    ("The ID has been set already."));
        }

                if (!is_int($id) || $id < 1) {
                throw new \InvalidArgumentException(__("The ID is invalid."));
                }$this->fields["id"] = $id;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      
           *    generated:  2014-02-03 01:06:06 am
     * @param $setting_name  Setting iin setting_name
     * @return object
     */
	public function setSettingName($setting_name) {

            if(!isset($setting_name) || $setting_name == ""){
            $setting_name = "";
            }
    $this->fields["setting_name"] = $setting_name;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      
           *    generated:  2014-02-03 01:06:06 am
     * @param $setting_value  Setting iin setting_value
     * @return object
     */
	public function setSettingValue($setting_value) {

            if(!isset($setting_value) || $setting_value == ""){
            $setting_value = "";
            }
    $this->fields["setting_value"] = $setting_value;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    default
           *    extra:      
           *    generated:  2014-02-03 01:06:06 am
     * @param $setting_type  Setting iin setting_type
     * @return object
     */
	public function setSettingType($setting_type) {

            if(!isset($setting_type) || $setting_type == ""){
            $setting_type = "default";
            }
    $this->fields["setting_type"] = $setting_type;

return $this;

    }



}
