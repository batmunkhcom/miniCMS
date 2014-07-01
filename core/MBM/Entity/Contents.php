<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Contents
 *
 * @ORM\Table(name="m_contents")
 * @ORM\Entity
 */
class Contents
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
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId = '0';

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
     * @var string
     *
     * @ORM\Column(name="content_type", type="string", length=20, nullable=false)
     */
    private $contentType = 'article';

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

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
     * @var boolean
     *
     * @ORM\Column(name="use_comment", type="boolean", nullable=false)
     */
    private $useComment = '0';

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
     * @var integer
     *
     * @ORM\Column(name="total_updated", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $totalUpdated = '0';

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
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=50, nullable=true)
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="session_time", type="string", length=50, nullable=true)
     */
    private $sessionTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_adult", type="boolean", nullable=false)
     */
    private $isAdult = '0';


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
     * @return Contents
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
     * Set lft
     *
     * @param integer $lft
     *
     * @return Contents
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
     * @return Contents
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
     * @return Contents
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Contents
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
     * Set code
     *
     * @param string $code
     *
     * @return Contents
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
     * @return Contents
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
     * Set contentType
     *
     * @param string $contentType
     *
     * @return Contents
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    
        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Contents
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
     * Set title
     *
     * @param string $title
     *
     * @return Contents
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set contentBrief
     *
     * @param string $contentBrief
     *
     * @return Contents
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
     * @return Contents
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
     * Set useComment
     *
     * @param boolean $useComment
     *
     * @return Contents
     */
    public function setUseComment($useComment)
    {
        $this->useComment = $useComment;
    
        return $this;
    }

    /**
     * Get useComment
     *
     * @return boolean
     */
    public function getUseComment()
    {
        return $this->useComment;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Contents
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
     * @return Contents
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
     * Set totalUpdated
     *
     * @param integer $totalUpdated
     *
     * @return Contents
     */
    public function setTotalUpdated($totalUpdated)
    {
        $this->totalUpdated = $totalUpdated;
    
        return $this;
    }

    /**
     * Get totalUpdated
     *
     * @return integer
     */
    public function getTotalUpdated()
    {
        return $this->totalUpdated;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return Contents
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
     * @return Contents
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
     * Set sessionId
     *
     * @param string $sessionId
     *
     * @return Contents
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    
        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionTime
     *
     * @param string $sessionTime
     *
     * @return Contents
     */
    public function setSessionTime($sessionTime)
    {
        $this->sessionTime = $sessionTime;
    
        return $this;
    }

    /**
     * Get sessionTime
     *
     * @return string
     */
    public function getSessionTime()
    {
        return $this->sessionTime;
    }

    /**
     * Set isAdult
     *
     * @param boolean $isAdult
     *
     * @return Contents
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
}

