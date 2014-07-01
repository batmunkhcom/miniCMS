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

namespace MBM\Admin\User\Controllers;

use \MBM\Lib\Auth;

class Logout extends \MBM\Lib\Controller {

    function index($response) {
        Auth::instance()->logout();
        $response->redirect("/login", $code = 200)->send();
    }
}

?>