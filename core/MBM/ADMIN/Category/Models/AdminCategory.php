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

namespace MBM\ADMIN\Category\Models;

class AdminCategory extends \MBM\Lib\Model {

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
     * Zuvhun category.iin jagsaalt butsaana.
     * @return array
     */
    public function getList() {
        $res = $this->db->createQuery("select c from \MBM\Entity\Categories c");
        return $res->getArrayResult();
    }
    
    /**
     * Category.giin jagsaaltiig parent categorygiin ner bolon module nertein
     * tsug butsaana.
     * @return Array
     */
    public function getCategoryList() {
        
        $res = $this->db->createQuery("select c,c1.name parentName,m.name moduleName from \MBM\Entity\Categories c left join \MBM\Entity\Categories c1 WHERE c.parentId = c1.id left join \MBM\Entity\Modules m WHERE c.module=m.id");
        //var_dump($res); die;
        return $res->getArrayResult();
    }

    /**
     * Module.uudiin jagsaaltiig butsaana.
     * @return array
     */
    public function getListModule() {
        $res = $this->db->createQuery("select m from \MBM\Entity\Modules m");
        return $res->getArrayResult();
    }

    /**
     * Ugugdsun ID.tai category.giin medeelliig butsaana.
     * @param integer $categoryId
     * @return object
     */
    public function getCategory($categoryId) {
        $res = $this->db->find("\MBM\Entity\Categories", $categoryId);
        return $res;
    }

}
