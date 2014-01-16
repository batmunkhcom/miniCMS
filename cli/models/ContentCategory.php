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
                            * ContentCategory model. ContentCategories table.
                            */
class ContentCategory extends AbstractEntity {
/**
* ContentCategories table iin baganuud n ContentCategoryMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'content_id',
'category_id');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-17 02:17:00 am
     * @param $id  ContentCategory iin id
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
     * @param $content_id  ContentCategory iin content_id
     * @return object
     */
	public function setContentId($content_id) {
$this->fields["content_id"] = $content_id;

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
     * @param $category_id  ContentCategory iin category_id
     * @return object
     */
	public function setCategoryId($category_id) {
$this->fields["category_id"] = $category_id;

return $this;

    }



}
