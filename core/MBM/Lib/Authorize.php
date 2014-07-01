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
 * @author     TUGSBAYAR Buyadaa <tgs19g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\Lib;

class Authorize  {

    /**
     * @var Auth Singleton instance
     */
    protected static $_instance;

    /**
     * Singleton pattern
     * @staticvar Auth $instance
     * @return \static
     */
    public static function instance() {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * handah erhtei esehiig shalgana.
     * @param array $params
     * @return boolean
     */
    public function Authorize($permission) 
    {
        if(Auth::instance()->checkPermission($permission)){
            return;
        }
        
        Error::instance()->_403();
        exit();
    }

}
