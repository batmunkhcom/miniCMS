<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * RolePermission
 *
 * @ORM\Table(name="m_role_permission")
 * @ORM\Entity
 */
class RolePermission
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
     * @ORM\Column(name="permission_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $permissionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $roleId = '0';

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
     * Set permissionId
     *
     * @param integer $permissionId
     *
     * @return RolePermission
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    
        return $this;
    }

    /**
     * Get permissionId
     *
     * @return integer
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return RolePermission
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
     * Set addedBy
     *
     * @param integer $addedBy
     *
     * @return RolePermission
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
     * @return RolePermission
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

