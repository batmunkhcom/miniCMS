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
class Core {

    public function __construct($config) {

        //buh app uudiin jagsaalt
        App::getAllApps();
//        $config = new Config($config);
        foreach ($config as $k => $v) {
            define(strtoupper($k), $v);
        }

        //$_POST parameter uudiig onooj uguh
        Config::set('POST', $_POST);

        //$_GET parameter uudiig onooj uguh
        Config::set('GET', $_GET);

        Config::set('layout', DEFAULT_LAYOUT);

        return $config;
    }

    static function getSession() {

    }

}
