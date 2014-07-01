<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="m_products")
 * @ORM\Entity
 */
class Products
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=2, nullable=false)
     */
    private $lang = 'mn';

    /**
     * @var string
     *
     * @ORM\Column(name="st", type="string", length=20, nullable=false)
     */
    private $st;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_featured", type="boolean", nullable=false)
     */
    private $isFeatured;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_highlighted", type="boolean", nullable=false)
     */
    private $isHighlighted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_sticky", type="boolean", nullable=false)
     */
    private $isSticky;

    /**
     * @var string
     *
     * @ORM\Column(name="use_comment", type="string", length=50, nullable=false)
     */
    private $useComment;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=11, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="price_sale", type="float", precision=11, scale=2, nullable=false)
     */
    private $priceSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_id", type="integer", nullable=false)
     */
    private $currencyId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_digital", type="boolean", nullable=false)
     */
    private $isDigital;

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=false)
     */
    private $filepath;

    /**
     * @var integer
     *
     * @ORM\Column(name="downloaded", type="integer", nullable=false)
     */
    private $downloaded;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="measure_value", type="string", length=255, nullable=false)
     */
    private $measureValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="measure_id", type="integer", nullable=false)
     */
    private $measureId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text", nullable=false)
     */
    private $descr;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_at", type="datetime", nullable=false)
     */
    private $expireAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_time", type="datetime", nullable=false)
     */
    private $sessionTime;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Products
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Products
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    
        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set st
     *
     * @param string $st
     *
     * @return Products
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
     * Set isFeatured
     *
     * @param boolean $isFeatured
     *
     * @return Products
     */
    public function setIsFeatured($isFeatured)
    {
        $this->isFeatured = $isFeatured;
    
        return $this;
    }

    /**
     * Get isFeatured
     *
     * @return boolean
     */
    public function getIsFeatured()
    {
        return $this->isFeatured;
    }

    /**
     * Set isHighlighted
     *
     * @param boolean $isHighlighted
     *
     * @return Products
     */
    public function setIsHighlighted($isHighlighted)
    {
        $this->isHighlighted = $isHighlighted;
    
        return $this;
    }

    /**
     * Get isHighlighted
     *
     * @return boolean
     */
    public function getIsHighlighted()
    {
        return $this->isHighlighted;
    }

    /**
     * Set isSticky
     *
     * @param boolean $isSticky
     *
     * @return Products
     */
    public function setIsSticky($isSticky)
    {
        $this->isSticky = $isSticky;
    
        return $this;
    }

    /**
     * Get isSticky
     *
     * @return boolean
     */
    public function getIsSticky()
    {
        return $this->isSticky;
    }

    /**
     * Set useComment
     *
     * @param string $useComment
     *
     * @return Products
     */
    public function setUseComment($useComment)
    {
        $this->useComment = $useComment;
    
        return $this;
    }

    /**
     * Get useComment
     *
     * @return string
     */
    public function getUseComment()
    {
        return $this->useComment;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set priceSale
     *
     * @param float $priceSale
     *
     * @return Products
     */
    public function setPriceSale($priceSale)
    {
        $this->priceSale = $priceSale;
    
        return $this;
    }

    /**
     * Get priceSale
     *
     * @return float
     */
    public function getPriceSale()
    {
        return $this->priceSale;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     *
     * @return Products
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
    
        return $this;
    }

    /**
     * Get currencyId
     *
     * @return integer
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set isDigital
     *
     * @param boolean $isDigital
     *
     * @return Products
     */
    public function setIsDigital($isDigital)
    {
        $this->isDigital = $isDigital;
    
        return $this;
    }

    /**
     * Get isDigital
     *
     * @return boolean
     */
    public function getIsDigital()
    {
        return $this->isDigital;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     *
     * @return Products
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;
    
        return $this;
    }

    /**
     * Get filepath
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set downloaded
     *
     * @param integer $downloaded
     *
     * @return Products
     */
    public function setDownloaded($downloaded)
    {
        $this->downloaded = $downloaded;
    
        return $this;
    }

    /**
     * Get downloaded
     *
     * @return integer
     */
    public function getDownloaded()
    {
        return $this->downloaded;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Products
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set measureValue
     *
     * @param string $measureValue
     *
     * @return Products
     */
    public function setMeasureValue($measureValue)
    {
        $this->measureValue = $measureValue;
    
        return $this;
    }

    /**
     * Get measureValue
     *
     * @return string
     */
    public function getMeasureValue()
    {
        return $this->measureValue;
    }

    /**
     * Set measureId
     *
     * @param integer $measureId
     *
     * @return Products
     */
    public function setMeasureId($measureId)
    {
        $this->measureId = $measureId;
    
        return $this;
    }

    /**
     * Get measureId
     *
     * @return integer
     */
    public function getMeasureId()
    {
        return $this->measureId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Products
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set descr
     *
     * @param string $descr
     *
     * @return Products
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
    
        return $this;
    }

    /**
     * Get descr
     *
     * @return string
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Products
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return Products
     */
    public function setViews($views)
    {
        $this->views = $views;
    
        return $this;
    }

    /**
     * Get views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     *
     * @return Products
     */
    public function setHits($hits)
    {
        $this->hits = $hits;
    
        return $this;
    }

    /**
     * Get hits
     *
     * @return integer
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Products
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set expireAt
     *
     * @param \DateTime $expireAt
     *
     * @return Products
     */
    public function setExpireAt($expireAt)
    {
        $this->expireAt = $expireAt;
    
        return $this;
    }

    /**
     * Get expireAt
     *
     * @return \DateTime
     */
    public function getExpireAt()
    {
        return $this->expireAt;
    }

    /**
     * Set sessionTime
     *
     * @param \DateTime $sessionTime
     *
     * @return Products
     */
    public function setSessionTime($sessionTime)
    {
        $this->sessionTime = $sessionTime;
    
        return $this;
    }

    /**
     * Get sessionTime
     *
     * @return \DateTime
     */
    public function getSessionTime()
    {
        return $this->sessionTime;
    }
}

