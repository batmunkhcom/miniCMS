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
 * User model. users table.
 */
class User extends AbstractEntity {

    /**
     * users table iin baganuud n UserMapper deer davhar zaaj ugnu
     */
    protected $allowedFields = array(
        'id',
        'parent_id',
        'depth',
        'lft',
        'rgt',
        'code',
        'st',
        'role',
        'email',
        'username',
        'password',
        'password_tmp',
        'firstname',
        'lastname',
        'phone',
        'gender',
        'birthday',
        'city_birth',
        'city_living',
        'address_living',
        'address_billing',
        'address_shipping',
        'website',
        'profile_hits',
        'token',
        'secret_key',
        'default_timezone',
        'default_lang',
        'default_layout',
        'date_created',
        'date_password_reset');

    /**
     * field info:
     *    name:       id
     *    type:       int(11) unsigned
     *    null:       NO
     *    default:
     *    extra:      auto_increment
     *    generated:  2013-12-28 07:34:15 am
     * @param $id int User iin id
     * @return object
     */
    public function setId($id) {
        $id = (int) $id;
        if (isset($this->fields["id"])) {
            throw new \BadMethodCallException(__("The ID has been set already."));
        }

        if (!is_int($id) || $id < 1) {
            throw new \InvalidArgumentException(__("The ID is invalid."));
        }$this->fields["id"] = $id;

        return $this;
    }

    /**
     * field info:
     *    name:       parent_id
     *    type:       int(11)
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $parent_id int User iin parent_id
     * @return object
     */
    public function setUserId($parent_id) {
        $parent_id = (int) $parent_id;

        if (!isset($parent_id) || $parent_id == "") {
            $parent_id = "0";
        }
        $this->fields["parent_id"] = $parent_id;

        return $this;
    }

    /**
     * field info:
     *    name:       depth
     *    type:       int(11)
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $depth int User iin depth
     * @return object
     */
    public function setDepth($depth) {
        $depth = (int) $depth;

        if (!isset($depth) || $depth == "") {
            $depth = "0";
        }
        $this->fields["depth"] = $depth;

        return $this;
    }

    /**
     * field info:
     *    name:       lft
     *    type:       int(11)
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $lft int User iin lft
     * @return object
     */
    public function setLft($lft) {
        $lft = (int) $lft;

        if (!isset($lft) || $lft == "") {
            $lft = "0";
        }
        $this->fields["lft"] = $lft;

        return $this;
    }

    /**
     * field info:
     *    name:       rgt
     *    type:       int(11)
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $rgt int User iin rgt
     * @return object
     */
    public function setRgt($rgt) {
        $rgt = (int) $rgt;

        if (!isset($rgt) || $rgt == "") {
            $rgt = "0";
        }
        $this->fields["rgt"] = $rgt;

        return $this;
    }

    /**
     * field info:
     *    name:       code
     *    type:       varchar(255)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $code string User iin code
     * @return object
     */
    public function setCode($code) {
        $code = (string) $code;
        $this->fields["code"] = $code;

        return $this;
    }

    /**
     * field info:
     *    name:       st
     *    type:       varchar(20)
     *    null:       NO
     *    default:    inactive
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $st string User iin st
     * @return object
     */
    public function setSt($st) {
        $st = (string) $st;

        if (!isset($st) || $st == "") {
            $st = "inactive";
        }
        $this->fields["st"] = $st;

        return $this;
    }

    /**
     * field info:
     *    name:       role
     *    type:       varchar(20)
     *    null:       NO
     *    default:    guest
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $role string User iin role
     * @return object
     */
    public function setRole($role) {
        $role = (string) $role;

        if (!isset($role) || $role == "") {
            $role = "guest";
        }
        $this->fields["role"] = $role;

        return $this;
    }

    /**
     * field info:
     *    name:       email
     *    type:       varchar(50)
     *    null:       NO
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $email string User iin email
     * @return object
     */
    public function setEmail($email) {
        $email = (string) $email;

        if (strlen($email) < 10 && substr_count('.', $email) > 2 && substr_count('@', $email) != 1) {
            throw new \InvalidArgumentException(
            "The user email is invalid.");
        }

        $this->fields["email"] = $email;

        return $this;
    }

    /**
     * field info:
     *    name:       username
     *    type:       varchar(50)
     *    null:       NO
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $username string User iin username
     * @return object
     */
    public function setUsername($username) {
        $username = (string) $username;

        //username n 5-16 temdegt aguulsan useg too dooguur zuraasaas burdene
        if (!preg_match("/^[0-9a-zA-Z_]{5,16}$/", $username)) {
            throw new \InvalidArgumentException(
            "The user username is invalid.");
        }
        $this->fields["username"] = $username;

        return $this;
    }

    /**
     * field info:
     *    name:       password
     *    type:       varchar(50)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $password string User iin password
     * @return object
     */
    public function setPassword($password) {

        $password = (string) $password;
        //nuuts ugiin urt bagadaa 8 temdegtees burdene
        if (strlen($password) < 8) {
            throw new \InvalidArgumentException(
            "Password must consis of at least 8 characters.");
        }
        $this->fields["password"] = $password;

        return $this;
    }

    /**
     * field info:
     *    name:       password_tmp
     *    type:       varchar(50)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $password_tmp string User iin password_tmp
     * @return object
     */
    public function setPasswordTmp($password_tmp) {

        $password_tmp = (string) $password_tmp;
        //password urt bagadaa 8 temdegtees burdene
        if (strlen($password_tmp) < 8) {
            throw new \InvalidArgumentException(
            "Password must consis of at least 8 characters.");
        }
        $this->fields["password_tmp"] = $password_tmp;

        return $this;
    }

    /**
     * field info:
     *    name:       firstname
     *    type:       varchar(50)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $firstname string User iin firstname
     * @return object
     */
    public function setFirstname($firstname) {

        $firstname = (string) $firstname;
        if (strlen($firstname) < 2) {
            throw new \InvalidArgumentException(
            "Short firstname.");
        }
        $this->fields["firstname"] = $firstname;

        return $this;
    }

    /**
     * field info:
     *    name:       lastname
     *    type:       varchar(50)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $lastname string User iin lastname
     * @return object
     */
    public function setLastname($lastname) {

        $lastname = (string) $lastname;
        if (strlen($lastname) < 2) {
            throw new \InvalidArgumentException(
            "Short lastname.");
        }
        $this->fields["lastname"] = $lastname;

        return $this;
    }

    /**
     * field info:
     *    name:       phone
     *    type:       varchar(30)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $phone string User iin phone
     * @return object
     */
    public function setPhone($phone) {
        $phone = (string) $phone;
        $this->fields["phone"] = $phone;

        return $this;
    }

    /**
     * field info:
     *    name:       gender
     *    type:       varchar(20)
     *    null:       NO
     *    default:    unknown
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $gender string User iin gender
     * @return object
     */
    public function setGender($gender) {

        $gender = (string) $gender;

        switch ($gender) {
            case 'Male':
                $gender = 'Male';
                break;
            case 'Female':
                $gender = 'Female';
                break;
            default:
                $gender = 'Unknown';
                break;
        }
        $this->fields["gender"] = $gender;

        return $this;
    }

    /**
     * field info:
     *    name:       birthday
     *    type:       date
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $birthday date User iin birthday
     * @return object
     */
    public function setBirthday($birthday) {

        $this->fields["birthday"] = convert_date($birthday);

        $this->fields["birthday"] = $birthday;

        return $this;
    }

    /**
     * field info:
     *    name:       city_birth
     *    type:       varchar(50)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $city_birth string User iin city_birth
     * @return object
     */
    public function setCityBirth($city_birth) {

        $city_birth = (string) $city_birth;
        $this->fields["city_birth"] = htmlspecialchars(trim($city_birth), ENT_QUOTES);

        $this->fields["city_birth"] = $city_birth;

        return $this;
    }

    /**
     * field info:
     *    name:       city_living
     *    type:       varchar(50)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $city_living string User iin city_living
     * @return object
     */
    public function setCityLiving($city_living) {

        $city_living = (string) $city_living;
        $this->fields["city_living"] = htmlspecialchars(trim($city_living), ENT_QUOTES);

        return $this;
    }

    /**
     * field info:
     *    name:       address_living
     *    type:       varchar(255)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $address_living string User iin address_living
     * @return object
     */
    public function setAddressLiving($address_living) {
        $address_living = (string) $address_living;
        $this->fields["address_living"] = htmlspecialchars(trim($address_living), ENT_QUOTES);

        return $this;
    }

    /**
     * field info:
     *    name:       address_billing
     *    type:       varchar(255)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $address_billing string User iin address_billing
     * @return object
     */
    public function setAddressBilling($address_billing) {

        $address_billing = (string) $address_billing;
        $this->fields["address_billing"] = htmlspecialchars(trim($address_billing), ENT_QUOTES);

        return $this;
    }

    /**
     * field info:
     *    name:       address_shipping
     *    type:       varchar(255)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $address_shipping string User iin address_shipping
     * @return object
     */
    public function setAddressShipping($address_shipping) {

        $address_shipping = (string) $address_shipping;
        $this->fields["address_shipping"] = htmlspecialchars(trim($address_shipping), ENT_QUOTES);

        return $this;
    }

    /**
     * field info:
     *    name:       website
     *    type:       varchar(255)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $website string User iin website
     * @return object
     */
    public function setWebsite($website) {

        $website = (string) $website;
//        if (strlen($website) < 10) {
//            throw new \InvalidArgumentException(
//            "Invalid website.");
//        }
        $this->fields["website"] = $website;

        return $this;
    }

    /**
     * field info:
     *    name:       profile_hits
     *    type:       int(11)
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $profile_hits int User iin profile_hits
     * @return object
     */
    public function setProfileHits($profile_hits) {

        $profile_hits = $this->fields["profile_hits"];

        $profile_hits++;

        $this->fields["profile_hits"] = $profile_hits;

        return $this;
    }

    /**
     * field info:
     *    name:       token
     *    type:       varchar(128)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $token string User iin token
     * @return object
     */
    public function setToken($token) {

        $token = (string) $token;
        //token urt bagadaa 32 temdegtees burdene
//        if (strlen($token) < 32) {
//            throw new \InvalidArgumentException(
//            "Token must consis of at least 32 characters.");
//        }
        $this->fields["token"] = $token;

        return $this;
    }

    /**
     * field info:
     *    name:       secret_key
     *    type:       varchar(128)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $secret_key string User iin secret_key
     * @return object
     */
    public function setSecretKey($secret_key) {
        $secret_key = (string) $secret_key;
        $this->fields["secret_key"] = $secret_key;

        return $this;
    }

    /**
     * field info:
     *    name:       default_timezone
     *    type:       varchar(50)
     *    null:       NO
     *    default:    Asia/Ulaanbaatar
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $default_timezone string User iin default_timezone
     * @return object
     */
    public function setDefaultTimezone($default_timezone) {
        $default_timezone = (string) $default_timezone;

        if (!isset($default_timezone) || $default_timezone == "") {
            $default_timezone = "Asia/Ulaanbaatar";
        }
        $this->fields["default_timezone"] = $default_timezone;

        return $this;
    }

    /**
     * field info:
     *    name:       default_lang
     *    type:       varchar(2)
     *    null:       NO
     *    default:    mn
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $default_lang string User iin default_lang
     * @return object
     */
    public function setDefaultLang($default_lang) {
        $default_lang = (string) $default_lang;

        if (!isset($default_lang) || $default_lang == "") {
            $default_lang = "mn";
        }
        $this->fields["default_lang"] = $default_lang;

        return $this;
    }

    /**
     * field info:
     *    name:       default_layout
     *    type:       varchar(30)
     *    null:       NO
     *    default:    default
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $default_layout string User iin default_layout
     * @return object
     */
    public function setDefaultLayout($default_layout) {
        $default_layout = (string) $default_layout;

        if (!isset($default_layout) || $default_layout == "") {
            $default_layout = "default";
        }
        $this->fields["default_layout"] = $default_layout;

        return $this;
    }

    /**
     * field info:
     *    name:       date_created
     *    type:       datetime
     *    null:       NO
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $date_created datetime User iin date_created
     * @return object
     */
    public function setDateCreated($date_created) {

        $date_created = \M\Carbon::now();
        $this->fields["date_created"] = $date_created;

        return $this;
    }

    /**
     * field info:
     *    name:       date_password_reset
     *    type:       datetime
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $date_password_reset datetime User iin date_password_reset
     * @return object
     */
    public function setDatePasswordReset($date_password_reset) {
        $this->fields["date_password_reset"] = $date_password_reset;

        return $this;
    }

}
