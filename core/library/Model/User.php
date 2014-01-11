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
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class User extends D\Model\User {

    public function User() {

    }

    public static function getById($id) {
        $mapper_db = db_unit($db, __CLASS__);

        $user = $mapper_db->fetchById($id);

        $this->username = $user->username;

        return $this;
    }

}
