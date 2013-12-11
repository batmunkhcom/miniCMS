<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Users {

    public $firstname;
    public $username;
    public $password;

    public function __construct($firstname, $username, $password) {
        $this->firstname = $firstname;
        $this->username = $username;
        $this->password = $password;
    }

}
