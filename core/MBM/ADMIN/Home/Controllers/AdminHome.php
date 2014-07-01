<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * admin.ii home huudas
 *
 * @package    miniCMS
 * @subpackage -
 * @author     TUGSBAYAR Buyadaa <tgs19g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\Home\Controllers;

use \MBM\Lib\Language;



class AdminHome extends \MBM\Lib\Controller {
    /*
     * category-iin list
     */

    public function index() {
        $users = \MBM\ADMIN\User\Models\User::instance()->getUserList();
        $contents = \MBM\ADMIN\Content\Models\AdminContent::instance()->getList();
        $categories = \MBM\ADMIN\Category\Models\AdminCategory::instance()->getList();
        $this->view->prependPath(DIR_ADMIN . 'Home' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminHome.twig');
        $this->view->render(array('base_url' => URL, 
            'lang' => Language::instance()->getTranslation(array('home', 'content')), 
            'allUsers' =>  count($users),
            'allContents' => count($contents), 
            'allCategories' => count($categories), 
            'totalProfit' => '956',
            'sessName' => \MBM\Lib\Auth::instance()->getSession()));
    }

    public function shop() {
        $this->view->prependPath(DIR_ADMIN . 'Home' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('ShopList.twig');
        $this->view->render(array('base_url' => URL, 'lang' => Language::instance()->getTranslation(array('home', 'content'))));
    }

}
