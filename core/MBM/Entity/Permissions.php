<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Permissions
 *
 * @ORM\Table(name="m_permissions")
 * @ORM\Entity
 */
class Permissions
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
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=100, nullable=false)
     */
    private $slug = '/admin/';

    /**
     * @var string
     *
     * @ORM\Column(name="slug_desc", type="string", length=255, nullable=false)
     */
    private $slugDesc = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="added_by", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $addedBy = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;


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
     * Set slug
     *
     * @param string $slug
     *
     * @return Permissions
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
     * Set slugDesc
     *
     * @param string $slugDesc
     *
     * @return Permissions
     */
    public function setSlugDesc($slugDesc)
    {
        $this->slugDesc = $slugDesc;
    
        return $this;
    }

    /**
     * Get slugDesc
     *
     * @return string
     */
    public function getSlugDesc()
    {
        return $this->slugDesc;
    }

    /**
     * Set addedBy
     *
     * @param integer $addedBy
     *
     * @return Permissions
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Permissions
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
}

