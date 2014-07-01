<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     JAMIYANDORJ Purevdorj <jamian1018@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\Lib;

class MBMFactory {
    
    /**
     * @var Auth Singleton instance
     */
    protected static $_instance;
    
   public static function instance()
        {
        if (null === self::$_instance) {
            self::$_instance = new self();
            
        }
        return self::$_instance;
    }
    
    /**
     * 
     * @param string $Class class-in ner
     * @return object
     */
    public function getObject($Class){
        
        return $Class::instance();
    }
}
