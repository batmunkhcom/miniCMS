<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace D\Model;

/**
 * UserRole model. UserRoles table.
 */
class UserRole extends AbstractEntity {

    /**
     * UserRoles table iin baganuud n UserRoleMapper deer davhar zaaj ugnu
     */
    protected $allowedFields = array(
        'id',
        'user_id',
        'role_id');

    /**
     * field info:
     *    name:
     *    type:
     *    null:       NO
     *    default:
     *    extra:      auto_increment
     *    generated:  2014-02-03 01:06:06 am
     * @param $id  UserRole iin id
     * @return object
     */
    public function setId($id) {
        if (isset($this->fields["id"])) {
            throw new \ BadMethodCallException(__
                    ("The ID has been set already."));
        }

        if (!is_int($id) || $id < 1) {
            throw new \InvalidArgumentException(__("The ID is invalid."));
        }$this->fields["id"] = $id;

        return $this;
    }

    /**
     * field info:
     *    name:
     *    type:
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2014-02-03 01:06:06 am
     * @param $user_id  UserRole iin user_id
     * @return object
     */
    public function setUserId($user_id) {

        if (!isset($user_id) || $user_id == "") {
            $user_id = "0";
        }
        $this->fields["user_id"] = $user_id;

        return $this;
    }

    /**
     * field info:
     *    name:
     *    type:
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2014-02-03 01:06:06 am
     * @param $role_id  UserRole iin role_id
     * @return object
     */
    public function setRoleId($role_id) {

        if (!isset($role_id) || $role_id == "") {
            $role_id = "0";
        }
        $this->fields["role_id"] = $role_id;

        return $this;
    }

}
