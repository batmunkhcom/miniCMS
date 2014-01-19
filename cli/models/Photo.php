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
                            * Photo model. Photos table.
                            */
class Photo extends AbstractEntity {
/**
* Photos table iin baganuud n PhotoMapper deer davhar zaaj ugnu
*/
protected $allowedFields = array(
'id',
'user_id',
'st',
'code',
'type',
'path',
'domain',
'height',
'width',
'mimetype',
'filesize',
'views',
'hits',
'downloads',
'date_created',
'date_expire');

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-19 12:40:14 pm
     * @param $id  Photo iin id
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
           *    generated:  2014-01-19 12:40:14 pm
     * @param $user_id  Photo iin user_id
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
           *    default:    inactive
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $st  Photo iin st
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
           *    default:    default
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $code  Photo iin code
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
           *    default:    default
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $type  Photo iin type
     * @return object
     */
	public function setType($type) {

            if(!isset($type) || $type == ""){
            $type = "default";
            }
    $this->fields["type"] = $type;

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
     * @param $path  Photo iin path
     * @return object
     */
	public function setPath($path) {
$this->fields["path"] = $path;

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
     * @param $domain  Photo iin domain
     * @return object
     */
	public function setDomain($domain) {
$this->fields["domain"] = $domain;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $height  Photo iin height
     * @return object
     */
	public function setHeight($height) {

            if(!isset($height) || $height == ""){
            $height = "0";
            }
    $this->fields["height"] = $height;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $width  Photo iin width
     * @return object
     */
	public function setWidth($width) {

            if(!isset($width) || $width == ""){
            $width = "0";
            }
    $this->fields["width"] = $width;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    unknown
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $mimetype  Photo iin mimetype
     * @return object
     */
	public function setMimetype($mimetype) {

            if(!isset($mimetype) || $mimetype == ""){
            $mimetype = "unknown";
            }
    $this->fields["mimetype"] = $mimetype;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $filesize  Photo iin filesize
     * @return object
     */
	public function setFilesize($filesize) {

            if(!isset($filesize) || $filesize == ""){
            $filesize = "0";
            }
    $this->fields["filesize"] = $filesize;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $views  Photo iin views
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
           *    generated:  2014-01-19 12:40:14 pm
     * @param $hits  Photo iin hits
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
           *    default:    0
           *    extra:      
           *    generated:  2014-01-19 12:40:14 pm
     * @param $downloads  Photo iin downloads
     * @return object
     */
	public function setDownloads($downloads) {

            if(!isset($downloads) || $downloads == ""){
            $downloads = "0";
            }
    $this->fields["downloads"] = $downloads;

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
     * @param $date_created  Photo iin date_created
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
           *    generated:  2014-01-19 12:40:14 pm
     * @param $date_expire  Photo iin date_expire
     * @return object
     */
	public function setDateExpire($date_expire) {
$this->fields["date_expire"] = $date_expire;

return $this;

    }



}
