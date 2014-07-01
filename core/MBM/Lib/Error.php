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

class Error {

    /**
     * @var Error Singleton instance
     */
    protected static $_instance;
    
    public function __construct() {
        
        $this->view = new View(DIR_TEMPLATE_APP);
    }
    
    /**
     * Singleton pattern
     * @staticvar Error $instance
     * @return \static
     */
    public static function instance() {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    
    public function _404(){
        
                $this->view->loadTemplate('404.twig');
                $this->view->render(array('lang' => Language::instance()->getTranslation(array('error'))));
    }

    public function _403(){
        
                $this->view->loadTemplate('403.twig');
                $this->view->render(array('lang' => Language::instance()->getTranslation(array('error'))));
    }
}
