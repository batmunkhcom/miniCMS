<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Invoices
 *
 * @ORM\Table(name="m_invoices")
 * @ORM\Entity
 */
class Invoices
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
     * @var float
     *
     * @ORM\Column(name="price_total", type="float", precision=11, scale=2, nullable=false)
     */
    private $priceTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="st", type="string", length=20, nullable=false)
     */
    private $st;

    /**
     * @var integer
     *
     * @ORM\Column(name="payment_gateway_id", type="integer", nullable=false)
     */
    private $paymentGatewayId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Invoices
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
     * Set priceTotal
     *
     * @param float $priceTotal
     *
     * @return Invoices
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
     * Set st
     *
     * @param string $st
     *
     * @return Invoices
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
     * Set paymentGatewayId
     *
     * @param integer $paymentGatewayId
     *
     * @return Invoices
     */
    public function setPaymentGatewayId($paymentGatewayId)
    {
        $this->paymentGatewayId = $paymentGatewayId;
    
        return $this;
    }

    /**
     * Get paymentGatewayId
     *
     * @return integer
     */
    public function getPaymentGatewayId()
    {
        return $this->paymentGatewayId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Invoices
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

