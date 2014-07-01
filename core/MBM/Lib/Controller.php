<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MBM\Lib;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Controller {

    /**
     * 
     * @param string $template_dir erunhii template-uudiig aguulj bgaa hawtasiig zaana
     */
    function __construct($template_dir) {

        $this->model = new Model();
        $this->view = new View($template_dir);
    }
    
}
