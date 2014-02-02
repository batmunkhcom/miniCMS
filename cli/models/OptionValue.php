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
                            * OptionValue model. OptionValues table.
                            */
class OptionValue extends AbstractEntity {
/**
* OptionValues table iin baganuud n OptionValueMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'code',
'option_id',
'option_value',
'is_active');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-02-03 01:06:06 am
     * @param $id  OptionValue iin id
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
           *    default:    default
           *    extra:      
           *    generated:  2014-02-03 01:06:06 am
     * @param $code  OptionValue iin code
     * @return object
     */
	public function setCode($code) {

            if(!isset($code) || $code == ""){
            $code = "default";
            }
    $this->fields["code"] = $code;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-02-03 01:06:06 am
     * @param $option_id  OptionValue iin option_id
     * @return object
     */
	public function setOptionId($option_id) {

            if(!isset($option_id) || $option_id == ""){
            $option_id = "0";
            }
    $this->fields["option_id"] = $option_id;

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
     * @param $option_value  OptionValue iin option_value
     * @return object
     */
	public function setOptionValue($option_value) {

            if(!isset($option_value) || $option_value == ""){
            $option_value = "";
            }
    $this->fields["option_value"] = $option_value;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    1
           *    extra:      
           *    generated:  2014-02-03 01:06:06 am
     * @param $is_active  OptionValue iin is_active
     * @return object
     */
	public function setIsActive($is_active) {

            if(!isset($is_active) || $is_active == ""){
            $is_active = "1";
            }
    $this->fields["is_active"] = $is_active;

return $this;

    }



}
