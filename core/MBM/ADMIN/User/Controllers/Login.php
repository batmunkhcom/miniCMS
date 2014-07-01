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

namespace MBM\Admin\User\Controllers;

use \MBM\Lib\Auth;
use \MBM\Lib\Language;

class Login extends \MBM\Lib\Controller {

    function index() {
        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminLogin.twig');
        $this->view->render(array('loginError' => '', 'lang' => Language::instance()->getTranslation(array('login'))));
    }

    function loginCheck($response) {
        if (Auth::instance()->check($_POST["username"], $_POST["password"])) {
            $response->redirect("/admin", $code = 200)->send();
        } else {
            $lang = Language::instance()->getTranslation(array('login', 'error'));
            $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
            $this->view->loadTemplate('AdminLogin.twig');
            $this->view->render(array('loginError' => $lang['loginError'], 'lang' => $lang));
            exit;
        }
    }

}

?>