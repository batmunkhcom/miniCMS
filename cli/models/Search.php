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
                            * Search model. search table.
                            */
class Search extends AbstractEntity {
/**
* search table iin baganuud n SearchMapper deer davhar zaaj ugnu
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
           *    name:       id
           *    type:       int(11) unsigned
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2013-12-28 07:34:15 am
     * @param $id int Search iin id
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
           *    name:       tags
           *    type:       varchar(255)
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $tags string Search iin tags
     * @return object
     */
	public function setTags($tags) {
$tags = (string) $tags;
$this->fields["tags"] = $tags;

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
     * @param $title string Search iin title
     * @return object
     */
	public function setTitle($title) {
$title = (string) $title;
$this->fields["title"] = $title;

return $this;

    }

/**
     * field info:
           *    name:       descr
           *    type:       text
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $descr string Search iin descr
     * @return object
     */
	public function setDescr($descr) {
$descr = (string) $descr;
$this->fields["descr"] = $descr;

return $this;

    }

/**
     * field info:
           *    name:       url
           *    type:       varchar(255)
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $url string Search iin url
     * @return object
     */
	public function setUrl($url) {
$url = (string) $url;
$this->fields["url"] = $url;

return $this;

    }

/**
     * field info:
           *    name:       hits
           *    type:       int(11)
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $hits int Search iin hits
     * @return object
     */
	public function setHits($hits) {
$hits = (int) $hits;
$this->fields["hits"] = $hits;

return $this;

    }

/**
     * field info:
           *    name:       created_at
           *    type:       datetime
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2013-12-28 07:34:15 am
     * @param $created_at datetime Search iin created_at
     * @return object
     */
	public function setCreatedAt($created_at) {
$this->fields["created_at"] = $created_at;

return $this;

    }



}
