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
                            * TagValue model. TagValues table.
                            */
class TagValue extends AbstractEntity {
/**
* TagValues table iin baganuud n TagValueMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'code',
'tag_id',
'hits');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-02-03 01:06:06 am
     * @param $id  TagValue iin id
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
           *    generated:  2014-02-03 01:06:06 am
     * @param $code  TagValue iin code
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
           *    generated:  2014-02-03 01:06:06 am
     * @param $tag_id  TagValue iin tag_id
     * @return object
     */
	public function setTagId($tag_id) {

            if(!isset($tag_id) || $tag_id == ""){
            $tag_id = "0";
            }
    $this->fields["tag_id"] = $tag_id;

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
     * @param $hits  TagValue iin hits
     * @return object
     */
	public function setHits($hits) {

            if(!isset($hits) || $hits == ""){
            $hits = "0";
            }
    $this->fields["hits"] = $hits;

return $this;

    }



}
