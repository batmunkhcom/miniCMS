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
 * @author     ULAMBAYAR CHULUUNBAATAR <ulmbrsos@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\Photo\Models;
use \MBM\Entity\Photos;

class AdminPhoto extends \MBM\Lib\Model {

    public static function instance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    public function db() {
        return $this->db;
    }
   /**
    * photo-g bugdiig awna
    * @return type
    */
    public function getList() {
        $res = $this->db->createQuery("select c from \MBM\Entity\Photos c where c.type = :type");
        $res->setParameter('type','photo');
        return $res->getArrayResult();
    }
    
    /**
     * query butsaana
     * @param string $query
     * @return array photo
     */
    public function query($query) {
        $res = $this->db->createQuery($query);
        return $res->getArrayResult();
    }
    
    /**
     * photo-g hadgalna
     * @param string $name ner
     * @param string $size bit-n hemjee
     * @param string $url  url
     * @param string $mimType png, jpeg, gif geh met
     * @return int muriin id-g butsaana
     */
    public function savePhoto($param){
        
            $newPhoto = new Photos();           
            $newPhoto->setName($param['name']);
            $newPhoto->setFilesize($param['size']);
            $newPhoto->setPath($param['url']);
            $newPhoto->setUserId(\MBM\Lib\Auth::instance()->getId());
            $newPhoto->setSt('active');
            $newPhoto->setMimetype($param['mimeType']);
            $newPhoto->setDateCreated(new \Datetime("now"));
            $newPhoto->setType($param['type']);
            return parent::save($newPhoto);
           
    }
    
    public function getById($id)
    {
        return $this->db->find('\MBM\Entity\Photos',$id);
    }

}
