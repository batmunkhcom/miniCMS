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
                            * Role model. Roles table.
                            */
class Role extends AbstractEntity {
/**
* Roles table iin baganuud n RoleMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'name',
'comment',
'date_created');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-02-03 01:06:06 am
     * @param $id  Role iin id
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
     * @param $name  Role iin name
     * @return object
     */
	public function setName($name) {

            if(!isset($name) || $name == ""){
            $name = "";
            }
    $this->fields["name"] = $name;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-02-03 01:06:06 am
     * @param $comment  Role iin comment
     * @return object
     */
	public function setComment($comment) {
$this->fields["comment"] = $comment;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-02-03 01:06:06 am
     * @param $date_created  Role iin date_created
     * @return object
     */
	public function setDateCreated($date_created) {
$date_created = \M\Carbon::now();
    
$this->fields["date_created"] = $date_created;

return $this;

    }



}
