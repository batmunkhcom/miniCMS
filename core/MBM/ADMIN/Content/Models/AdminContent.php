<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * admind categry-uudiin jagsaaltiig haruulna
 *
 * @package    miniCMS
 * @subpackage -
 * @author     TUGSBAYAR Buyadaa <tgs19g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\Content\Models;

class AdminContent extends \MBM\Lib\Model {

    /**
     * Uuriin Object.iig butsaana. SINGLETON PATTERN.
     * @staticvar null $instance
     * @return \static
     */
    public static function instance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }
    
    /**
     * Content.iin EntityManager.iig butsaana.
     * @return Object
     */
    public function db() {
        return $this->db;
    }
    
    /**
     * Buh Content.iin jasgaaltiig butsaana.
     * @return array
     */
    public function getList() {
        $res = $this->db->createQuery("select c from \MBM\Entity\Contents c");
        return $res->getArrayResult();
    }
    
    /**
     * Ugugdsun content ID.tai category.iin jagsaaltiig
     * butsaana.
     * @param integer $contentID
     * @return Object
     */
    public function getContentCategoriesList($contentID){
        return $this->db->getRepository('\MBM\Entity\ContentCategories')->findBy(array('contentId'=>$contentID));
    }
    
    /**
     * Ugugdsun content ID.tai photo.iin jagsaaltiig
     * butsaana.
     * @param integer $contentID
     * @return Object
     */
    public function getContentPhotosList($contentID){
        return $this->db->getRepository('\MBM\Entity\ContentPhoto')->findBy(array('contentId'=>$contentID));
    }
    
    /**
     * Ugugdsun ID.tai content.iig awna.
     * @param integer $id
     * @return Object
     */
    public function getcontent($id){
        return $this->db->getRepository('\MBM\Entity\Contents')->find($id);
    }
    
    /**
     * Content.iin category.iig hadgalana.
     * @param array $categories
     */
    public function saveCategories($categories){
        foreach($categories as $key => $value){
            $this->db->persist($value);
        }
        $this->db->flush();
    }
    
     /**
     * Content.iin photos.iig hadgalana.
     * @param array $categories
     */
    public function savePhotos($photos){
        foreach($photos as $key => $value){
            $this->db->persist($value);
        }
        $this->db->flush();
    }
    
    /**
     * Category.giin shine jagsaalt ni huuchin jagsaaltad baigaa
     * esehiin shalgah.
     * @param array $categories
     * @param integer $catId
     * @return boolean
     */
    private function isExistCategoryList($categories, $catId){
        foreach($categories as $key => $value){
            if($value == $catId){
                return true;
            }
        }
        return false;
    }
    
    /**
     * Photo.giin shine jagsaalt ni huuchin jagsaaltad baigaa
     * esehiin shalgah.
     * @param array $photos
     * @param integer $catId
     * @return boolean
     */
    private function isExistPhotoList($photos, $photoId){
        foreach($photos as $key => $value){
            if($value == $photoId){
                return true;
            }
        }
        return false;
    }
    
    public function deleteData($entity, $field, $id){
        $q = $this->db->createQuery('delete from '.$entity.' cp where cp.'.$field.' ='.$id);
        $numDeleted = $q->execute();
    }
    
    /**
     * Ugugdsun ID.tai content.in category.iig zasvariig hadgalana.
     * @param Object $contentID
     * @param Object $categories
     */
    public function updateCategories($contentID, $categories){
        $this->deleteData('\MBM\Entity\ContentCategories', 'contentId',  $contentID);
        foreach($categories as $key => $value){
            $this->db->persist($value); // shineer nemegdsen elemntuudiig end nemj ugnu.
        }
        $this->db->flush();
    }
    
     /**
     * Ugugdsun ID.tai content.in photo.iig zasvariig hadgalana.
     * @param Object $contentID
     * @param Object $photos
     */
    public function updatePhotos($contentID, $photos){
      $this->deleteData('\MBM\Entity\ContentPhoto', 'contentId', $contentID);
      $this->savePhotos($photos);
    }
}
