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
                            * Option model. Options table.
                            */
class Option extends AbstractEntity {
/**
* Options table iin baganuud n OptionMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'code',
'user_id',
'st',
'type',
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $id  Option iin id
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $code  Option iin code
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $user_id  Option iin user_id
     * @return object
     */
	public function setUserId($user_id) {

            if(!isset($user_id) || $user_id == ""){
            $user_id = "0";
            }
    $this->fields["user_id"] = $user_id;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    inactive
           *    extra:      
           *    generated:  2014-01-17 02:17:00 am
     * @param $st  Option iin st
     * @return object
     */
	public function setSt($st) {

            if(!isset($st) || $st == ""){
            $st = "inactive";
            }
    $this->fields["st"] = $st;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 02:17:00 am
     * @param $type  Option iin type
     * @return object
     */
	public function setType($type) {
$this->fields["type"] = $type;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 02:17:00 am
     * @param $name  Option iin name
     * @return object
     */
	public function setName($name) {
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $comment  Option iin comment
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $date_created  Option iin date_created
     * @return object
     */
	public function setDateCreated($date_created) {
$date_created = \M\Carbon::now();
    
$this->fields["date_created"] = $date_created;

return $this;

    }



}
