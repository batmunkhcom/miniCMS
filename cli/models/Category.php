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
                            * Category model. Categories table.
                            */
class Category extends AbstractEntity {
/**
* Categories table iin baganuud n CategoryMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'parent_id',
'code',
'depth',
'lft',
'rgt',
'st',
'user_id',
'pos',
'name',
'is_external',
'external_url',
'module',
'action',
'target',
'lang',
'hits',
'date_created',
'date_last_updated',
'last_updated_user_id',
'is_adult');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-17 12:37:04 am
     * @param $id  Category iin id
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
           *    null:       YES
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $parent_id  Category iin parent_id
     * @return object
     */
	public function setParentId($parent_id) {
$this->fields["parent_id"] = $parent_id;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $code  Category iin code
     * @return object
     */
	public function setCode($code) {
$this->fields["code"] = $code;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $depth  Category iin depth
     * @return object
     */
	public function setDepth($depth) {
$this->fields["depth"] = $depth;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $lft  Category iin lft
     * @return object
     */
	public function setLft($lft) {
$this->fields["lft"] = $lft;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $rgt  Category iin rgt
     * @return object
     */
	public function setRgt($rgt) {
$this->fields["rgt"] = $rgt;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    inactive
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $st  Category iin st
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
           *    generated:  2014-01-17 12:37:04 am
     * @param $user_id  Category iin user_id
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
           *    default:    0.00
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $pos  Category iin pos
     * @return object
     */
	public function setPos($pos) {

            if(!isset($pos) || $pos == ""){
            $pos = "0.00";
            }
    $this->fields["pos"] = $pos;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $name  Category iin name
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
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $is_external  Category iin is_external
     * @return object
     */
	public function setIsExternal($is_external) {

            if(!isset($is_external) || $is_external == ""){
            $is_external = "0";
            }
    $this->fields["is_external"] = $is_external;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $external_url  Category iin external_url
     * @return object
     */
	public function setExternalUrl($external_url) {
$this->fields["external_url"] = $external_url;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    content
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $module  Category iin module
     * @return object
     */
	public function setModule($module) {
$this->fields["module"] = $module;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    index
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $action  Category iin action
     * @return object
     */
	public function setAction($action) {
$this->fields["action"] = $action;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $target  Category iin target
     * @return object
     */
	public function setTarget($target) {
$this->fields["target"] = $target;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    mn
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $lang  Category iin lang
     * @return object
     */
	public function setLang($lang) {

            if(!isset($lang) || $lang == ""){
            $lang = "mn";
            }
    $this->fields["lang"] = $lang;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $hits  Category iin hits
     * @return object
     */
	public function setHits($hits) {

            if(!isset($hits) || $hits == ""){
            $hits = "0";
            }
    $this->fields["hits"] = $hits;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $date_created  Category iin date_created
     * @return object
     */
	public function setDateCreated($date_created) {
$date_created = \M\Carbon::now();
    

            if(!isset($date_created) || $date_created == ""){
            $date_created = "";
            }
    $this->fields["date_created"] = $date_created;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $date_last_updated  Category iin date_last_updated
     * @return object
     */
	public function setDateLastUpdated($date_last_updated) {
$this->fields["date_last_updated"] = $date_last_updated;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $last_updated_user_id  Category iin last_updated_user_id
     * @return object
     */
	public function setLastUpdatedUserId($last_updated_user_id) {

            if(!isset($last_updated_user_id) || $last_updated_user_id == ""){
            $last_updated_user_id = "0";
            }
    $this->fields["last_updated_user_id"] = $last_updated_user_id;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $is_adult  Category iin is_adult
     * @return object
     */
	public function setIsAdult($is_adult) {

            if(!isset($is_adult) || $is_adult == ""){
            $is_adult = "0";
            }
    $this->fields["is_adult"] = $is_adult;

return $this;

    }



}
