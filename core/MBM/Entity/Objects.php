<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Objects
 *
 * @ORM\Table(name="m_objects")
 * @ORM\Entity
 */
class Objects
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $lft = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $rgt = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $depth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $parentId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="st", type="string", length=255, nullable=false)
     */
    private $st = 'inactive';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_featured", type="boolean", nullable=false)
     */
    private $isFeatured = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_sale", type="boolean", nullable=false)
     */
    private $isSale = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="measure_value", type="integer", nullable=true)
     */
    private $measureValue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="measure_name", type="string", length=255, nullable=true)
     */
    private $measureName;

    /**
     * @var float
     *
     * @ORM\Column(name="price_per_measure", type="float", precision=11, scale=2, nullable=true)
     */
    private $pricePerMeasure;

    /**
     * @var float
     *
     * @ORM\Column(name="price_sale", type="float", precision=11, scale=2, nullable=false)
     */
    private $priceSale = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="price_total", type="float", precision=11, scale=2, nullable=true)
     */
    private $priceTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=255, nullable=false)
     */
    private $currencyCode = 'MNT';

    /**
     * @var string
     *
     * @ORM\Column(name="content_brief", type="text", nullable=true)
     */
    private $contentBrief;

    /**
     * @var string
     *
     * @ORM\Column(name="content_body", type="text", nullable=true)
     */
    private $contentBody;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $views = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $hits = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publish", type="datetime", nullable=true)
     */
    private $datePublish;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expire", type="datetime", nullable=true)
     */
    private $dateExpire;

    /**
     * @var string
     *
     * @ORM\Column(name="module_name", type="string", length=255, nullable=false)
     */
    private $moduleName = 'object';


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
     * @return Objects
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
     * Set lft
     *
     * @param integer $lft
     *
     * @return Objects
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
     * @return Objects
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
     * Set depth
     *
     * @param integer $depth
     *
     * @return Objects
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
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Objects
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
     * Set code
     *
     * @param string $code
     *
     * @return Objects
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
     * @return Objects
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
     * @return Objects
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
     * Set isSale
     *
     * @param boolean $isSale
     *
     * @return Objects
     */
    public function setIsSale($isSale)
    {
        $this->isSale = $isSale;
    
        return $this;
    }

    /**
     * Get isSale
     *
     * @return boolean
     */
    public function getIsSale()
    {
        return $this->isSale;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Objects
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Objects
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
     * Set measureValue
     *
     * @param integer $measureValue
     *
     * @return Objects
     */
    public function setMeasureValue($measureValue)
    {
        $this->measureValue = $measureValue;
    
        return $this;
    }

    /**
     * Get measureValue
     *
     * @return integer
     */
    public function getMeasureValue()
    {
        return $this->measureValue;
    }

    /**
     * Set measureName
     *
     * @param string $measureName
     *
     * @return Objects
     */
    public function setMeasureName($measureName)
    {
        $this->measureName = $measureName;
    
        return $this;
    }

    /**
     * Get measureName
     *
     * @return string
     */
    public function getMeasureName()
    {
        return $this->measureName;
    }

    /**
     * Set pricePerMeasure
     *
     * @param float $pricePerMeasure
     *
     * @return Objects
     */
    public function setPricePerMeasure($pricePerMeasure)
    {
        $this->pricePerMeasure = $pricePerMeasure;
    
        return $this;
    }

    /**
     * Get pricePerMeasure
     *
     * @return float
     */
    public function getPricePerMeasure()
    {
        return $this->pricePerMeasure;
    }

    /**
     * Set priceSale
     *
     * @param float $priceSale
     *
     * @return Objects
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
     * Set priceTotal
     *
     * @param float $priceTotal
     *
     * @return Objects
     */
    public function setPriceTotal($priceTotal)
    {
        $this->priceTotal = $priceTotal;
    
        return $this;
    }

    /**
     * Get priceTotal
     *
     * @return float
     */
    public function getPriceTotal()
    {
        return $this->priceTotal;
    }

    /**
     * Set currencyCode
     *
     * @param string $currencyCode
     *
     * @return Objects
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    
        return $this;
    }

    /**
     * Get currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set contentBrief
     *
     * @param string $contentBrief
     *
     * @return Objects
     */
    public function setContentBrief($contentBrief)
    {
        $this->contentBrief = $contentBrief;
    
        return $this;
    }

    /**
     * Get contentBrief
     *
     * @return string
     */
    public function getContentBrief()
    {
        return $this->contentBrief;
    }

    /**
     * Set contentBody
     *
     * @param string $contentBody
     *
     * @return Objects
     */
    public function setContentBody($contentBody)
    {
        $this->contentBody = $contentBody;
    
        return $this;
    }

    /**
     * Get contentBody
     *
     * @return string
     */
    public function getContentBody()
    {
        return $this->contentBody;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return Objects
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
     * @return Objects
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Objects
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
     * Set datePublish
     *
     * @param \DateTime $datePublish
     *
     * @return Objects
     */
    public function setDatePublish($datePublish)
    {
        $this->datePublish = $datePublish;
    
        return $this;
    }

    /**
     * Get datePublish
     *
     * @return \DateTime
     */
    public function getDatePublish()
    {
        return $this->datePublish;
    }

    /**
     * Set dateExpire
     *
     * @param \DateTime $dateExpire
     *
     * @return Objects
     */
    public function setDateExpire($dateExpire)
    {
        $this->dateExpire = $dateExpire;
    
        return $this;
    }

    /**
     * Get dateExpire
     *
     * @return \DateTime
     */
    public function getDateExpire()
    {
        return $this->dateExpire;
    }

    /**
     * Set moduleName
     *
     * @param string $moduleName
     *
     * @return Objects
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
    
        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }
}

