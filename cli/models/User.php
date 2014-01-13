<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace \D\Model;

/**
                            * User model. Users table.
                            */
class User extends AbstractEntity {
/**
* Users table iin baganuud n UserMapper deer davhar zaaj ugnu
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
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      auto_increment
           *    generated:  2014-01-13 08:16:56 pm
     * @param $id  User iin id
     * @return object
     */
	public function setId($id) {
if(isset($this->fields[  "id"])) {
            throw new  \  BadMethodCallException(  __

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
           *    generated:  2014-01-13 08:16:56 pm
     * @param $parent_id  User iin parent_id
     * @return object
     */
	public function setParentId($parent_id) {

            if(!isset($parent_id) || $parent_id == ""){
            $parent_id = "0";
            }
    $this->fields["parent_id"] = $parent_id;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $depth  User iin depth
     * @return object
     */
	public function setDepth($depth) {

            if(!isset($depth) || $depth == ""){
            $depth = "0";
            }
    $this->fields["depth"] = $depth;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $lft  User iin lft
     * @return object
     */
	public function setLft($lft) {

            if(!isset($lft) || $lft == ""){
            $lft = "0";
            }
    $this->fields["lft"] = $lft;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $rgt  User iin rgt
     * @return object
     */
	public function setRgt($rgt) {

            if(!isset($rgt) || $rgt == ""){
            $rgt = "0";
            }
    $this->fields["rgt"] = $rgt;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $code  User iin code
     * @return object
     */
	public function setCode($code) {
$this->fields["code"] = $code;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    inactive
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $st  User iin st
     * @return object
     */
	public function setSt($st) {

            if(!isset($st) || $st == ""){
            $st = "inactive";
            }
    $this->fields["st"] = $st;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    guest
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $role  User iin role
     * @return object
     */
	public function setRole($role) {

            if(!isset($role) || $role == ""){
            $role = "guest";
            }
    $this->fields["role"] = $role;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $email  User iin email
     * @return object
     */
	public function setEmail($email) {

            if(!isset($email) || $email == ""){
            $email = "";
            }
    $this->fields["email"] = $email;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $username  User iin username
     * @return object
     */
	public function setUsername($username) {

            if(!isset($username) || $username == ""){
            $username = "";
            }
    $this->fields["username"] = $username;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $password  User iin password
     * @return object
     */
	public function setPassword($password) {
$this->fields["password"] = $password;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $password_tmp  User iin password_tmp
     * @return object
     */
	public function setPasswordTmp($password_tmp) {
$this->fields["password_tmp"] = $password_tmp;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $firstname  User iin firstname
     * @return object
     */
	public function setFirstname($firstname) {
$this->fields["firstname"] = $firstname;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $lastname  User iin lastname
     * @return object
     */
	public function setLastname($lastname) {
$this->fields["lastname"] = $lastname;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $phone  User iin phone
     * @return object
     */
	public function setPhone($phone) {
$this->fields["phone"] = $phone;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    unknown
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $gender  User iin gender
     * @return object
     */
	public function setGender($gender) {

            if(!isset($gender) || $gender == ""){
            $gender = "unknown";
            }
    $this->fields["gender"] = $gender;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $birthday  User iin birthday
     * @return object
     */
	public function setBirthday($birthday) {
$this->fields["birthday"] = $birthday;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $city_birth  User iin city_birth
     * @return object
     */
	public function setCityBirth($city_birth) {
$this->fields["city_birth"] = $city_birth;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $city_living  User iin city_living
     * @return object
     */
	public function setCityLiving($city_living) {
$this->fields["city_living"] = $city_living;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $address_living  User iin address_living
     * @return object
     */
	public function setAddressLiving($address_living) {
$this->fields["address_living"] = $address_living;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $address_billing  User iin address_billing
     * @return object
     */
	public function setAddressBilling($address_billing) {
$this->fields["address_billing"] = $address_billing;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $address_shipping  User iin address_shipping
     * @return object
     */
	public function setAddressShipping($address_shipping) {
$this->fields["address_shipping"] = $address_shipping;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $website  User iin website
     * @return object
     */
	public function setWebsite($website) {
$this->fields["website"] = $website;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    0
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $profile_hits  User iin profile_hits
     * @return object
     */
	public function setProfileHits($profile_hits) {

            if(!isset($profile_hits) || $profile_hits == ""){
            $profile_hits = "0";
            }
    $this->fields["profile_hits"] = $profile_hits;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $token  User iin token
     * @return object
     */
	public function setToken($token) {
$this->fields["token"] = $token;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $secret_key  User iin secret_key
     * @return object
     */
	public function setSecretKey($secret_key) {
$this->fields["secret_key"] = $secret_key;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    Asia/Ulaanbaatar
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $default_timezone  User iin default_timezone
     * @return object
     */
	public function setDefaultTimezone($default_timezone) {

            if(!isset($default_timezone) || $default_timezone == ""){
            $default_timezone = "Asia/Ulaanbaatar";
            }
    $this->fields["default_timezone"] = $default_timezone;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    mn
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $default_lang  User iin default_lang
     * @return object
     */
	public function setDefaultLang($default_lang) {

            if(!isset($default_lang) || $default_lang == ""){
            $default_lang = "mn";
            }
    $this->fields["default_lang"] = $default_lang;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    default
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $default_layout  User iin default_layout
     * @return object
     */
	public function setDefaultLayout($default_layout) {

            if(!isset($default_layout) || $default_layout == ""){
            $default_layout = "default";
            }
    $this->fields["default_layout"] = $default_layout;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       NO
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $date_created  User iin date_created
     * @return object
     */
	public function setDateCreated($date_created) {
$date_created = \M\Carbon::now();
    

            if(!isset($date_created) || $date_created == ""){
            $date_created = "";
            }
    $this->fields["date_created"] = $date_created;

return $this;

    }

/**
     * field info:
           *    name:       
           *    type:       
           *    null:       YES
           *    default:    
           *    extra:      
           *    generated:  2014-01-13 08:16:56 pm
     * @param $date_password_reset  User iin date_password_reset
     * @return object
     */
	public function setDatePasswordReset($date_password_reset) {
$this->fields["date_password_reset"] = $date_password_reset;

return $this;

    }



}
