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
                            * ObjectCategory model. ObjectCategories table.
                            */
class ObjectCategory extends AbstractEntity {
/**
* ObjectCategories table iin baganuud n ObjectCategoryMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'category_id',
'object_id');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-02-03 01:06:06 am
     * @param $id  ObjectCategory iin id
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
           *    default:    0
           *    extra:      
           *    generated:  2014-02-03 01:06:06 am
     * @param $category_id  ObjectCategory iin category_id
     * @return object
     */
	public function setCategoryId($category_id) {

            if(!isset($category_id) || $category_id == ""){
            $category_id = "0";
            }
    $this->fields["category_id"] = $category_id;

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
     * @param $object_id  ObjectCategory iin object_id
     * @return object
     */
	public function setObjectId($object_id) {

            if(!isset($object_id) || $object_id == ""){
            $object_id = "0";
            }
    $this->fields["object_id"] = $object_id;

return $this;

    }



}
