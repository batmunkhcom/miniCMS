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
'module',
'user_id',
'st',
'is_active',
'form_tag',
'group_name',
'title',
'descr',
'date_created');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-19 12:40:14 pm
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
           *    generated:  2014-01-19 12:40:14 pm
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
           *    default:    default
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $module  Option iin module
     * @return object
     */
	public function setModule($module) {

            if(!isset($module) || $module == ""){
            $module = "default";
            }
    $this->fields["module"] = $module;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
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
           *    generated:  2014-01-19 12:40:14 pm
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
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $is_active  Option iin is_active
     * @return object
     */
	public function setIsActive($is_active) {

            if(!isset($is_active) || $is_active == ""){
            $is_active = "0";
            }
    $this->fields["is_active"] = $is_active;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    input
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $form_tag  Option iin form_tag
     * @return object
     */
	public function setFormTag($form_tag) {

            if(!isset($form_tag) || $form_tag == ""){
            $form_tag = "input";
            }
    $this->fields["form_tag"] = $form_tag;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $group_name  Option iin group_name
     * @return object
     */
	public function setGroupName($group_name) {
$this->fields["group_name"] = $group_name;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $title  Option iin title
     * @return object
     */
	public function setTitle($title) {
$this->fields["title"] = $title;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $descr  Option iin descr
     * @return object
     */
	public function setDescr($descr) {
$this->fields["descr"] = $descr;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $date_created  Option iin date_created
     * @return object
     */
	public function setDateCreated($date_created) {
$date_created = \M\Carbon::now();
    
$this->fields["date_created"] = $date_created;

return $this;

    }



}
