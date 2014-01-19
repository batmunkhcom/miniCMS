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
                            * Object model. Objects table.
                            */
class Object extends AbstractEntity {
/**
* Objects table iin baganuud n ObjectMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'user_id',
'lft',
'rgt',
'depth',
'parent_id',
'code',
'st',
'is_featured',
'is_sale',
'photo',
'name',
'measure_value',
'measure_name',
'price_per_measure',
'price_sale',
'price_total',
'currency_code',
'content_brief',
'content_body',
'views',
'hits',
'date_created',
'date_publish',
'date_expire');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-19 12:11:35 pm
     * @param $id  Object iin id
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $user_id  Object iin user_id
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
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $lft  Object iin lft
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
     * @param $rgt  Object iin rgt
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
     * @param $depth  Object iin depth
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $parent_id  Object iin parent_id
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $code  Object iin code
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
     * @param $st  Object iin st
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
           *    generated:  2014-01-19 12:11:35 pm
     * @param $is_featured  Object iin is_featured
     * @return object
     */
	public function setIsFeatured($is_featured) {

            if(!isset($is_featured) || $is_featured == ""){
            $is_featured = "0";
            }
    $this->fields["is_featured"] = $is_featured;

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
     * @param $is_sale  Object iin is_sale
     * @return object
     */
	public function setIsSale($is_sale) {

            if(!isset($is_sale) || $is_sale == ""){
            $is_sale = "0";
            }
    $this->fields["is_sale"] = $is_sale;

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
     * @param $photo  Object iin photo
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
     * @param $name  Object iin name
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
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $measure_value  Object iin measure_value
     * @return object
     */
	public function setMeasureValue($measure_value) {
$this->fields["measure_value"] = $measure_value;

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
     * @param $measure_name  Object iin measure_name
     * @return object
     */
	public function setMeasureName($measure_name) {
$this->fields["measure_name"] = $measure_name;

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
     * @param $price_per_measure  Object iin price_per_measure
     * @return object
     */
	public function setPricePerMeasure($price_per_measure) {
$this->fields["price_per_measure"] = $price_per_measure;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0.00
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $price_sale  Object iin price_sale
     * @return object
     */
	public function setPriceSale($price_sale) {

            if(!isset($price_sale) || $price_sale == ""){
            $price_sale = "0.00";
            }
    $this->fields["price_sale"] = $price_sale;

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
     * @param $price_total  Object iin price_total
     * @return object
     */
	public function setPriceTotal($price_total) {
$this->fields["price_total"] = $price_total;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    MNT
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $currency_code  Object iin currency_code
     * @return object
     */
	public function setCurrencyCode($currency_code) {

            if(!isset($currency_code) || $currency_code == ""){
            $currency_code = "MNT";
            }
    $this->fields["currency_code"] = $currency_code;

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
     * @param $content_brief  Object iin content_brief
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
     * @param $content_body  Object iin content_body
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
     * @param $views  Object iin views
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
     * @param $hits  Object iin hits
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
     * @param $date_created  Object iin date_created
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
     * @param $date_publish  Object iin date_publish
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
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:11:35 pm
     * @param $date_expire  Object iin date_expire
     * @return object
     */
	public function setDateExpire($date_expire) {
$this->fields["date_expire"] = $date_expire;

return $this;

    }



}
