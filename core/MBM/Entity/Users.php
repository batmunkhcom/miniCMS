<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="m_users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="integer", nullable=false)
     */
    private $depth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=false)
     */
    private $lft = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false)
     */
    private $rgt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="st", type="string", length=20, nullable=false)
     */
    private $st = 'inactive';

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="password_tmp", type="string", length=50, nullable=true)
     */
    private $passwordTmp;

    /**
     * @var integer
     *
     * @ORM\Column(name="photo_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $photoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=30, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=20, nullable=false)
     */
    private $gender = 'unknown';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="city_birth", type="string", length=50, nullable=true)
     */
    private $cityBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="city_living", type="string", length=50, nullable=true)
     */
    private $cityLiving;

    /**
     * @var string
     *
     * @ORM\Column(name="address_living", type="string", length=255, nullable=true)
     */
    private $addressLiving;

    /**
     * @var string
     *
     * @ORM\Column(name="address_billing", type="string", length=255, nullable=true)
     */
    private $addressBilling;

    /**
     * @var string
     *
     * @ORM\Column(name="address_shipping", type="string", length=255, nullable=true)
     */
    private $addressShipping;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var integer
     *
     * @ORM\Column(name="profile_hits", type="integer", nullable=false)
     */
    private $profileHits = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=128, nullable=true)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="secret_key", type="string", length=128, nullable=true)
     */
    private $secretKey;

    /**
     * @var string
     *
     * @ORM\Column(name="default_timezone", type="string", length=50, nullable=false)
     */
    private $defaultTimezone = 'Asia/Ulaanbaatar';

    /**
     * @var string
     *
     * @ORM\Column(name="default_lang", type="string", length=2, nullable=false)
     */
    private $defaultLang = 'mn';

    /**
     * @var string
     *
     * @ORM\Column(name="default_layout", type="string", length=30, nullable=false)
     */
    private $defaultLayout = 'default';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_password_reset", type="datetime", nullable=true)
     */
    private $datePasswordReset;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Users
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    
        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     *
     * @return Users
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    
        return $this;
    }

    /**
     * Get depth
     *
     * @return integer
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     *
     * @return Users
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
    
        return $this;
    }

    /**
     * Get lft
     *
     * @return integer
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     *
     * @return Users
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;
    
        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Users
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set st
     *
     * @param string $st
     *
     * @return Users
     */
    public function setSt($st)
    {
        $this->st = $st;
    
        return $this;
    }

    /**
     * Get st
     *
     * @return string
     */
    public function getSt()
    {
        return $this->st;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return Users
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    
        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set passwordTmp
     *
     * @param string $passwordTmp
     *
     * @return Users
     */
    public function setPasswordTmp($passwordTmp)
    {
        $this->passwordTmp = $passwordTmp;
    
        return $this;
    }

    /**
     * Get passwordTmp
     *
     * @return string
     */
    public function getPasswordTmp()
    {
        return $this->passwordTmp;
    }

    /**
     * Set photoId
     *
     * @param integer $photoId
     *
     * @return Users
     */
    public function setPhotoId($photoId)
    {
        $this->photoId = $photoId;
    
        return $this;
    }

    /**
     * Get photoId
     *
     * @return integer
     */
    public function getPhotoId()
    {
        return $this->photoId;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Users
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Users
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Users
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set cityBirth
     *
     * @param string $cityBirth
     *
     * @return Users
     */
    public function setCityBirth($cityBirth)
    {
        $this->cityBirth = $cityBirth;
    
        return $this;
    }

    /**
     * Get cityBirth
     *
     * @return string
     */
    public function getCityBirth()
    {
        return $this->cityBirth;
    }

    /**
     * Set cityLiving
     *
     * @param string $cityLiving
     *
     * @return Users
     */
    public function setCityLiving($cityLiving)
    {
        $this->cityLiving = $cityLiving;
    
        return $this;
    }

    /**
     * Get cityLiving
     *
     * @return string
     */
    public function getCityLiving()
    {
        return $this->cityLiving;
    }

    /**
     * Set addressLiving
     *
     * @param string $addressLiving
     *
     * @return Users
     */
    public function setAddressLiving($addressLiving)
    {
        $this->addressLiving = $addressLiving;
    
        return $this;
    }

    /**
     * Get addressLiving
     *
     * @return string
     */
    public function getAddressLiving()
    {
        return $this->addressLiving;
    }

    /**
     * Set addressBilling
     *
     * @param string $addressBilling
     *
     * @return Users
     */
    public function setAddressBilling($addressBilling)
    {
        $this->addressBilling = $addressBilling;
    
        return $this;
    }

    /**
     * Get addressBilling
     *
     * @return string
     */
    public function getAddressBilling()
    {
        return $this->addressBilling;
    }

    /**
     * Set addressShipping
     *
     * @param string $addressShipping
     *
     * @return Users
     */
    public function setAddressShipping($addressShipping)
    {
        $this->addressShipping = $addressShipping;
    
        return $this;
    }

    /**
     * Get addressShipping
     *
     * @return string
     */
    public function getAddressShipping()
    {
        return $this->addressShipping;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Users
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set profileHits
     *
     * @param integer $profileHits
     *
     * @return Users
     */
    public function setProfileHits($profileHits)
    {
        $this->profileHits = $profileHits;
    
        return $this;
    }

    /**
     * Get profileHits
     *
     * @return integer
     */
    public function getProfileHits()
    {
        return $this->profileHits;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Users
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set secretKey
     *
     * @param string $secretKey
     *
     * @return Users
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    
        return $this;
    }

    /**
     * Get secretKey
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Set defaultTimezone
     *
     * @param string $defaultTimezone
     *
     * @return Users
     */
    public function setDefaultTimezone($defaultTimezone)
    {
        $this->defaultTimezone = $defaultTimezone;
    
        return $this;
    }

    /**
     * Get defaultTimezone
     *
     * @return string
     */
    public function getDefaultTimezone()
    {
        return $this->defaultTimezone;
    }

    /**
     * Set defaultLang
     *
     * @param string $defaultLang
     *
     * @return Users
     */
    public function setDefaultLang($defaultLang)
    {
        $this->defaultLang = $defaultLang;
    
        return $this;
    }

    /**
     * Get defaultLang
     *
     * @return string
     */
    public function getDefaultLang()
    {
        return $this->defaultLang;
    }

    /**
     * Set defaultLayout
     *
     * @param string $defaultLayout
     *
     * @return Users
     */
    public function setDefaultLayout($defaultLayout)
    {
        $this->defaultLayout = $defaultLayout;
    
        return $this;
    }

    /**
     * Get defaultLayout
     *
     * @return string
     */
    public function getDefaultLayout()
    {
        return $this->defaultLayout;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Users
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set datePasswordReset
     *
     * @param \DateTime $datePasswordReset
     *
     * @return Users
     */
    public function setDatePasswordReset($datePasswordReset)
    {
        $this->datePasswordReset = $datePasswordReset;
    
        return $this;
    }

    /**
     * Get datePasswordReset
     *
     * @return \DateTime
     */
    public function getDatePasswordReset()
    {
        return $this->datePasswordReset;
    }
}

