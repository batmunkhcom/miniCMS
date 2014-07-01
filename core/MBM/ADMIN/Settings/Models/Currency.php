<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * admind currency-uudiin jagsaaltiig haruulna
 *
 * @package    miniCMS
 * @subpackage -
 * @author     JAVKHLANTUR Ganbaatar <javkhlantur.g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\Settings\Models;

class Currency extends \MBM\Lib\Model {

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
    
    public function getCurrencyList() {
        
        $res = $this->db->createQuery("select c from \MBM\Entity\Currencies c");
        //var_dump($res); die;
        return $res->getArrayResult();
    }

   public function find($id = 0){
        $res = $this->db->find("\MBM\Entity\Currencies", $id);
        return $res;
    }

}
