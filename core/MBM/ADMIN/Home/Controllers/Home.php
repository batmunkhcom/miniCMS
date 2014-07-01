<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * undsen home
 *
 * @package    miniCMS
 * @subpackage -
 * @author     TUGSBAYAR Buyadaa <tgs19g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\Home\Controllers;
use \MBM\Lib\Language;

class Home extends \MBM\Lib\Controller {
    
    /*
     * home-iin get
     */
    public function index() {
                
        $this->view->prependPath(DIR_ADMIN.'Home'.DS.'Views'.DS. TEMPLATE_ADMIN);
        $this->view->loadTemplate('Home.twig');
        $this->view->render(array('base_url' => URL, 'lang' => Language::instance()->getTranslation()));
    }

}
