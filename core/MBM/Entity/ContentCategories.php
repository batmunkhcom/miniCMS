<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * ContentCategories
 *
 * @ORM\Table(name="m_content_categories")
 * @ORM\Entity
 */
class ContentCategories
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
     * @ORM\Column(name="content_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $contentId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $categoryId = '0';


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
     * @return ContentCategories
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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return ContentCategories
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    
        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}

