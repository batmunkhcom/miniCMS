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
                            * Content model. Contents table.
                            */
class Content extends AbstractEntity {
/**
* Contents table iin baganuud n ContentMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'parent_id',
'lft',
'rgt',
'depth',
'user_id',
'code',
'st',
'content_type',
'photo',
'title',
'content_brief',
'content_body',
'use_comment',
'date_created',
'date_publish',
'total_updated',
'views',
'hits',
'session_id',
'session_time',
'is_adult');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-19 12:11:35 pm
     * @param $id  Content iin id
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $parent_id  Content iin parent_id
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $lft  Content iin lft
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $rgt  Content iin rgt
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $depth  Content iin depth
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $user_id  Content iin user_id
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $code  Content iin code
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
           *    null:       NO
           *    default:    inactive
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $st  Content iin st
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
           *    default:    article
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $content_type  Content iin content_type
     * @return object
     */
	public function setContentType($content_type) {

            if(!isset($content_type) || $content_type == ""){
            $content_type = "article";
            }
    $this->fields["content_type"] = $content_type;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $photo  Content iin photo
     * @return object
     */
	public function setPhoto($photo) {
$this->fields["photo"] = $photo;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $title  Content iin title
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $content_brief  Content iin content_brief
     * @return object
     */
	public function setContentBrief($content_brief) {
$this->fields["content_brief"] = $content_brief;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $content_body  Content iin content_body
     * @return object
     */
	public function setContentBody($content_body) {
$this->fields["content_body"] = $content_body;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $use_comment  Content iin use_comment
     * @return object
     */
	public function setUseComment($use_comment) {

            if(!isset($use_comment) || $use_comment == ""){
            $use_comment = "0";
            }
    $this->fields["use_comment"] = $use_comment;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $date_created  Content iin date_created
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $date_publish  Content iin date_publish
     * @return object
     */
	public function setDatePublish($date_publish) {
$this->fields["date_publish"] = $date_publish;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $total_updated  Content iin total_updated
     * @return object
     */
	public function setTotalUpdated($total_updated) {

            if(!isset($total_updated) || $total_updated == ""){
            $total_updated = "0";
            }
    $this->fields["total_updated"] = $total_updated;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $views  Content iin views
     * @return object
     */
	public function setViews($views) {

            if(!isset($views) || $views == ""){
            $views = "0";
            }
    $this->fields["views"] = $views;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $hits  Content iin hits
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
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $session_id  Content iin session_id
     * @return object
     */
	public function setSessionId($session_id) {
$this->fields["session_id"] = $session_id;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $session_time  Content iin session_time
     * @return object
     */
	public function setSessionTime($session_time) {
$this->fields["session_time"] = $session_time;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $is_adult  Content iin is_adult
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
