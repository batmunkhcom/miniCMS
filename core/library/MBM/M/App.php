<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace M;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class App {

    public $app = 'dd';

    public function __construct() {
        
    }

    /**
     * bgaa buh app iig avna
     */
    static function getAllApps() {

        $dirs = Dir::getAllDirectories(DIR_APP);
        Config::set('apps',$dirs);
        
        return $dirs;
    }

}
