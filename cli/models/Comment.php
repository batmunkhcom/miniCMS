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
                            * Comment model. Comments table.
                            */
class Comment extends AbstractEntity {
/**
* Comments table iin baganuud n CommentMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'parent_id',
'lft',
'rgt',
'depth',
'user_id',
'code',
'name',
'content',
'date_created',
'ip',
'browser');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-17 12:37:04 am
     * @param $id  Comment iin id
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
     * @param $parent_id  Comment iin parent_id
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
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $lft  Comment iin lft
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
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $rgt  Comment iin rgt
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
           *    null:       YES
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $depth  Comment iin depth
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
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $user_id  Comment iin user_id
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
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $code  Comment iin code
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
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 12:37:04 am
     * @param $name  Comment iin name
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
           *    generated:  2014-01-17 12:37:04 am
     * @param $content  Comment iin content
     * @return object
     */
	public function setContent($content) {
$this->fields["content"] = $content;

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
     * @param $date_created  Comment iin date_created
     * @return object
     */
	public function setDateCreated($date_created) {
$date_created = \M\Carbon::now();
    
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
     * @param $ip  Comment iin ip
     * @return object
     */
	public function setIp($ip) {
$this->fields["ip"] = $ip;

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
     * @param $browser  Comment iin browser
     * @return object
     */
	public function setBrowser($browser) {
$this->fields["browser"] = $browser;

return $this;

    }



}
