<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace \D\Model;

/**
                            * Category model. categories table.
                            */
class Category extends AbstractEntity {
/**
* categories table iin baganuud n CategoryMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'category_id',
'code',
'depth',
'lft',
'rgt',
'st',
'user_id',
'pos',
'title',
'is_external',
'external_url',
'lang',
'hits',
'date_created',
'date_last_updated',
'last_updated_user_id',
'is_adult');

/**
     * field info:
           *    name:       id
           *    type:       int(11) unsigned
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2013-12-28 07:34:15 am
     * @param $id int Category iin id
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
           *    name:       category_id
           *    type:       int(11) unsigned
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $category_id int Category iin category_id
     * @return object
     */
	public function setCategoryId($category_id) {
$category_id = (int) $category_id;

                if(!isset($category_id) || $category_id == ""){
                    $category_id="0";
                }
            $this->fields["category_id"] = $category_id;

return $this;

    }

/**
     * field info:
           *    name:       code
           *    type:       varchar(255)
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $code string Category iin code
     * @return object
     */
	public function setCode($code) {
$code = (string) $code;
$this->fields["code"] = $code;

return $this;

    }

/**
     * field info:
           *    name:       depth
           *    type:       int(11)
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $depth int Category iin depth
     * @return object
     */
	public function setDepth($depth) {
$depth = (int) $depth;

                if(!isset($depth) || $depth == ""){
                    $depth="0";
                }
            $this->fields["depth"] = $depth;

return $this;

    }

/**
     * field info:
           *    name:       lft
           *    type:       int(11)
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $lft int Category iin lft
     * @return object
     */
	public function setLft($lft) {
$lft = (int) $lft;

                if(!isset($lft) || $lft == ""){
                    $lft="0";
                }
            $this->fields["lft"] = $lft;

return $this;

    }

/**
     * field info:
           *    name:       rgt
           *    type:       int(11)
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $rgt int Category iin rgt
     * @return object
     */
	public function setRgt($rgt) {
$rgt = (int) $rgt;

                if(!isset($rgt) || $rgt == ""){
                    $rgt="0";
                }
            $this->fields["rgt"] = $rgt;

return $this;

    }

/**
     * field info:
           *    name:       st
           *    type:       varchar(20)
           *    null:       NO
           *    default:    inactive
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $st string Category iin st
     * @return object
     */
	public function setSt($st) {
$st = (string) $st;

                if(!isset($st) || $st == ""){
                    $st="inactive";
                }
            $this->fields["st"] = $st;

return $this;

    }

/**
     * field info:
           *    name:       user_id
           *    type:       int(11)
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $user_id int Category iin user_id
     * @return object
     */
	public function setUserId($user_id) {
$user_id = (int) $user_id;

                if(!isset($user_id) || $user_id == ""){
                    $user_id="0";
                }
            $this->fields["user_id"] = $user_id;

return $this;

    }

/**
     * field info:
           *    name:       pos
           *    type:       float(11,2)
           *    null:       NO
           *    default:    0.00
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $pos  Category iin pos
     * @return object
     */
	public function setPos($pos) {

                if(!isset($pos) || $pos == ""){
                    $pos="0.00";
                }
            $this->fields["pos"] = $pos;

return $this;

    }

/**
     * field info:
           *    name:       title
           *    type:       varchar(255)
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $title string Category iin title
     * @return object
     */
	public function setTitle($title) {
$title = (string) $title;
$this->fields["title"] = $title;

return $this;

    }

/**
     * field info:
           *    name:       is_external
           *    type:       tinyint(1)
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $is_external  Category iin is_external
     * @return object
     */
	public function setIsExternal($is_external) {

                if(!isset($is_external) || $is_external == ""){
                    $is_external="0";
                }
            $this->fields["is_external"] = $is_external;

return $this;

    }

/**
     * field info:
           *    name:       external_url
           *    type:       varchar(255)
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $external_url string Category iin external_url
     * @return object
     */
	public function setExternalUrl($external_url) {
$external_url = (string) $external_url;
$this->fields["external_url"] = $external_url;

return $this;

    }

/**
     * field info:
           *    name:       lang
           *    type:       varchar(2)
           *    null:       NO
           *    default:    mn
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $lang string Category iin lang
     * @return object
     */
	public function setLang($lang) {
$lang = (string) $lang;

                if(!isset($lang) || $lang == ""){
                    $lang="mn";
                }
            $this->fields["lang"] = $lang;

return $this;

    }

/**
     * field info:
           *    name:       hits
           *    type:       int(11)
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $hits int Category iin hits
     * @return object
     */
	public function setHits($hits) {
$hits = (int) $hits;

                if(!isset($hits) || $hits == ""){
                    $hits="0";
                }
            $this->fields["hits"] = $hits;

return $this;

    }

/**
     * field info:
           *    name:       date_created
           *    type:       datetime
           *    null:       NO
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $date_created datetime Category iin date_created
     * @return object
     */
	public function setDateCreated($date_created) {
if(!isset($date_created)){$date_created = \M\Carbon::now();}

                if(!isset($date_created) || $date_created == ""){
                    $date_created="";
                }
            $this->fields["date_created"] = $date_created;

return $this;

    }

/**
     * field info:
           *    name:       date_last_updated
           *    type:       datetime
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $date_last_updated datetime Category iin date_last_updated
     * @return object
     */
	public function setDateLastUpdated($date_last_updated) {
$this->fields["date_last_updated"] = $date_last_updated;

return $this;

    }

/**
     * field info:
           *    name:       last_updated_user_id
           *    type:       int(11)
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $last_updated_user_id int Category iin last_updated_user_id
     * @return object
     */
	public function setLastUpdatedUserId($last_updated_user_id) {
$last_updated_user_id = (int) $last_updated_user_id;

                if(!isset($last_updated_user_id) || $last_updated_user_id == ""){
                    $last_updated_user_id="0";
                }
            $this->fields["last_updated_user_id"] = $last_updated_user_id;

return $this;

    }

/**
     * field info:
           *    name:       is_adult
           *    type:       tinyint(1)
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $is_adult  Category iin is_adult
     * @return object
     */
	public function setIsAdult($is_adult) {

                if(!isset($is_adult) || $is_adult == ""){
                    $is_adult="0";
                }
            $this->fields["is_adult"] = $is_adult;

return $this;

    }



}
