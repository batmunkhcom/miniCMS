<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="m_categories")
 * @ORM\Entity
 */
class Categories
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
     * @var integer
     *
     * @ORM\Column(name="depth", type="integer", nullable=true)
     */
    private $depth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=true)
     */
    private $lft = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true)
     */
    private $rgt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="st", type="string", length=20, nullable=false)
     */
    private $st = 'inactive';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pos", type="float", precision=11, scale=2, nullable=false)
     */
    private $pos = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_external", type="boolean", nullable=false)
     */
    private $isExternal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="external_url", type="string", length=255, nullable=true)
     */
    private $externalUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=255, nullable=true)
     */
    private $module = 'content';

    /**
     * @var string
     *
     * @ORM\Column(name="url_slug", type="string", length=50, nullable=false)
     */
    private $urlSlug = 'index';

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=255, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=2, nullable=false)
     */
    private $lang = 'mn';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_last_updated", type="datetime", nullable=true)
     */
    private $dateLastUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_updated_user_id", type="integer", nullable=false)
     */
    private $lastUpdatedUserId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_adult", type="boolean", nullable=false)
     */
    private $isAdult = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=20, nullable=true)
     */
    private $icon = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="added_by", type="integer", nullable=false)
     */
    private $addedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="per_page", type="integer", nullable=true)
     */
    private $perPage = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="view_type", type="string", length=50, nullable=false)
     */
    private $viewType = 'list';


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
     * @return Categories
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
     * @return Categories
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
     * Set depth
     *
     * @param integer $depth
     *
     * @return Categories
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
     * @return Categories
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
     * @return Categories
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
     * Set st
     *
     * @param string $st
     *
     * @return Categories
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Categories
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
     * Set pos
     *
     * @param float $pos
     *
     * @return Categories
     */
    public function setPos($pos)
    {
        $this->pos = $pos;
    
        return $this;
    }

    /**
     * Get pos
     *
     * @return float
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Categories
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Categories
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set isExternal
     *
     * @param boolean $isExternal
     *
     * @return Categories
     */
    public function setIsExternal($isExternal)
    {
        $this->isExternal = $isExternal;
    
        return $this;
    }

    /**
     * Get isExternal
     *
     * @return boolean
     */
    public function getIsExternal()
    {
        return $this->isExternal;
    }

    /**
     * Set externalUrl
     *
     * @param string $externalUrl
     *
     * @return Categories
     */
    public function setExternalUrl($externalUrl)
    {
        $this->externalUrl = $externalUrl;
    
        return $this;
    }

    /**
     * Get externalUrl
     *
     * @return string
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return Categories
     */
    public function setModule($module)
    {
        $this->module = $module;
    
        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set urlSlug
     *
     * @param string $urlSlug
     *
     * @return Categories
     */
    public function setUrlSlug($urlSlug)
    {
        $this->urlSlug = $urlSlug;
    
        return $this;
    }

    /**
     * Get urlSlug
     *
     * @return string
     */
    public function getUrlSlug()
    {
        return $this->urlSlug;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return Categories
     */
    public function setTarget($target)
    {
        $this->target = $target;
    
        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Categories
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
     * Set hits
     *
     * @param integer $hits
     *
     * @return Categories
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
     * @return Categories
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
     * Set dateLastUpdated
     *
     * @param \DateTime $dateLastUpdated
     *
     * @return Categories
     */
    public function setDateLastUpdated($dateLastUpdated)
    {
        $this->dateLastUpdated = $dateLastUpdated;
    
        return $this;
    }

    /**
     * Get dateLastUpdated
     *
     * @return \DateTime
     */
    public function getDateLastUpdated()
    {
        return $this->dateLastUpdated;
    }

    /**
     * Set lastUpdatedUserId
     *
     * @param integer $lastUpdatedUserId
     *
     * @return Categories
     */
    public function setLastUpdatedUserId($lastUpdatedUserId)
    {
        $this->lastUpdatedUserId = $lastUpdatedUserId;
    
        return $this;
    }

    /**
     * Get lastUpdatedUserId
     *
     * @return integer
     */
    public function getLastUpdatedUserId()
    {
        return $this->lastUpdatedUserId;
    }

    /**
     * Set isAdult
     *
     * @param boolean $isAdult
     *
     * @return Categories
     */
    public function setIsAdult($isAdult)
    {
        $this->isAdult = $isAdult;
    
        return $this;
    }

    /**
     * Get isAdult
     *
     * @return boolean
     */
    public function getIsAdult()
    {
        return $this->isAdult;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Categories
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    
        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set addedBy
     *
     * @param integer $addedBy
     *
     * @return Categories
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;
    
        return $this;
    }

    /**
     * Get addedBy
     *
     * @return integer
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * Set perPage
     *
     * @param integer $perPage
     *
     * @return Categories
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    
        return $this;
    }

    /**
     * Get perPage
     *
     * @return integer
     */
    public function getPerPage()
    {
        return $this->perPage;
    }

    /**
     * Set viewType
     *
     * @param string $viewType
     *
     * @return Categories
     */
    public function setViewType($viewType)
    {
        $this->viewType = $viewType;
    
        return $this;
    }

    /**
     * Get viewType
     *
     * @return string
     */
    public function getViewType()
    {
        return $this->viewType;
    }
}

