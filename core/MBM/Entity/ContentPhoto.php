<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * ContentPhoto
 *
 * @ORM\Table(name="m_content_photo")
 * @ORM\Entity
 */
class ContentPhoto
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
     * @ORM\Column(name="content_id", type="integer", nullable=false)
     */
    private $contentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="photo_id", type="integer", nullable=false)
     */
    private $photoId;


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
     * Set contentId
     *
     * @param integer $contentId
     *
     * @return ContentPhoto
     */
    public function setContentId($contentId)
    {
        $this->contentId = $contentId;
    
        return $this;
    }

    /**
     * Get contentId
     *
     * @return integer
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * Set photoId
     *
     * @param integer $photoId
     *
     * @return ContentPhoto
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
}

