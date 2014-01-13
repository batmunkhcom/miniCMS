<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace D\Mapper;

/**
 * User Model iin Mapper n .
 */
class UserMapper extends AbstractDataMapper {

protected $entityTable = "m_users";

    protected function loadEntity(array $row) {
        return new \D\Model\User(
                array(
                
"id" => $row["id"],
"parent_id" => $row["parent_id"],
"depth" => $row["depth"],
"lft" => $row["lft"],
"rgt" => $row["rgt"],
"code" => $row["code"],
"st" => $row["st"],
"role" => $row["role"],
"email" => $row["email"],
"username" => $row["username"],
"password" => $row["password"],
"password_tmp" => $row["password_tmp"],
"firstname" => $row["firstname"],
"lastname" => $row["lastname"],
"phone" => $row["phone"],
"gender" => $row["gender"],
"birthday" => $row["birthday"],
"city_birth" => $row["city_birth"],
"city_living" => $row["city_living"],
"address_living" => $row["address_living"],
"address_billing" => $row["address_billing"],
"address_shipping" => $row["address_shipping"],
"website" => $row["website"],
"profile_hits" => $row["profile_hits"],
"token" => $row["token"],
"secret_key" => $row["secret_key"],
"default_timezone" => $row["default_timezone"],
"default_lang" => $row["default_lang"],
"default_layout" => $row["default_layout"],
"date_created" => $row["date_created"],
"date_password_reset" => $row["date_password_reset"]
            )
        );
    }

}