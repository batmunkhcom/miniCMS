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
                            * Tag model. Tags table.
                            */
class Tag extends AbstractEntity {
/**
* Tags table iin baganuud n TagMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'lft',
'rgt',
'parent_id',
'depth',
'tag_value',
'score',
'date_created',
'date_updated');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-17 02:17:00 am
     * @param $id  Tag iin id
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $lft  Tag iin lft
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $rgt  Tag iin rgt
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $parent_id  Tag iin parent_id
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $depth  Tag iin depth
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
           *    default:    
           *    extra:      
           *    generated:  2014-01-17 02:17:00 am
     * @param $tag_value  Tag iin tag_value
     * @return object
     */
	public function setTagValue($tag_value) {

            if(!isset($tag_value) || $tag_value == ""){
            $tag_value = "";
            }
    $this->fields["tag_value"] = $tag_value;

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
     * @param $score  Tag iin score
     * @return object
     */
	public function setScore($score) {
$this->fields["score"] = $score;

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
     * @param $date_created  Tag iin date_created
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
           *    generated:  2014-01-17 02:17:00 am
     * @param $date_updated  Tag iin date_updated
     * @return object
     */
	public function setDateUpdated($date_updated) {
$this->fields["date_updated"] = $date_updated;

return $this;

    }

}
