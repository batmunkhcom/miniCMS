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
                            * Search model. Search table.
                            */
class Search extends AbstractEntity {
/**
* Search table iin baganuud n SearchMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'tags',
'title',
'descr',
'url',
'hits',
'created_at');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-19 12:40:14 pm
     * @param $id  Search iin id
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
           *    default:    
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $tags  Search iin tags
     * @return object
     */
	public function setTags($tags) {
$this->fields["tags"] = $tags;

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
     * @param $title  Search iin title
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
     * @param $descr  Search iin descr
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
     * @param $url  Search iin url
     * @return object
     */
	public function setUrl($url) {
$this->fields["url"] = $url;

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
     * @param $hits  Search iin hits
     * @return object
     */
	public function setHits($hits) {
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
           *    generated:  2014-01-19 12:40:14 pm
     * @param $created_at  Search iin created_at
     * @return object
     */
	public function setCreatedAt($created_at) {
$this->fields["created_at"] = $created_at;

return $this;

    }



}
