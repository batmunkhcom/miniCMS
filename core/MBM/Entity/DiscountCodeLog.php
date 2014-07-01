<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * DiscountCodeLog
 *
 * @ORM\Table(name="m_discount_code_log")
 * @ORM\Entity
 */
class DiscountCodeLog
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
     * @var integer
     *
     * @ORM\Column(name="discount_code_id", type="integer", nullable=false)
     */
    private $discountCodeId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var float
     *
     * @ORM\Column(name="used_amount", type="float", precision=11, scale=2, nullable=false)
     */
    private $usedAmount;


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
     * @return DiscountCodeLog
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
     * Set discountCodeId
     *
     * @param integer $discountCodeId
     *
     * @return DiscountCodeLog
     */
    public function setDiscountCodeId($discountCodeId)
    {
        $this->discountCodeId = $discountCodeId;
    
        return $this;
    }

    /**
     * Get discountCodeId
     *
     * @return integer
     */
    public function getDiscountCodeId()
    {
        return $this->discountCodeId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return DiscountCodeLog
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
     * Set usedAmount
     *
     * @param float $usedAmount
     *
     * @return DiscountCodeLog
     */
    public function setUsedAmount($usedAmount)
    {
        $this->usedAmount = $usedAmount;
    
        return $this;
    }

    /**
     * Get usedAmount
     *
     * @return float
     */
    public function getUsedAmount()
    {
        return $this->usedAmount;
    }
}

