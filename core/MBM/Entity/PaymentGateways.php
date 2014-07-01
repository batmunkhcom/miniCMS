<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentGateways
 *
 * @ORM\Table(name="m_payment_gateways")
 * @ORM\Entity
 */
class PaymentGateways
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="secret_key", type="string", length=255, nullable=false)
     */
    private $secretKey;

    /**
     * @var string
     *
     * @ORM\Column(name="secret_code", type="string", length=255, nullable=false)
     */
    private $secretCode;

    /**
     * @var string
     *
     * @ORM\Column(name="url_back", type="string", length=255, nullable=false)
     */
    private $urlBack;


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
     * Set name
     *
     * @param string $name
     *
     * @return PaymentGateways
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
     * Set secretKey
     *
     * @param string $secretKey
     *
     * @return PaymentGateways
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    
        return $this;
    }

    /**
     * Get secretKey
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Set secretCode
     *
     * @param string $secretCode
     *
     * @return PaymentGateways
     */
    public function setSecretCode($secretCode)
    {
        $this->secretCode = $secretCode;
    
        return $this;
    }

    /**
     * Get secretCode
     *
     * @return string
     */
    public function getSecretCode()
    {
        return $this->secretCode;
    }

    /**
     * Set urlBack
     *
     * @param string $urlBack
     *
     * @return PaymentGateways
     */
    public function setUrlBack($urlBack)
    {
        $this->urlBack = $urlBack;
    
        return $this;
    }

    /**
     * Get urlBack
     *
     * @return string
     */
    public function getUrlBack()
    {
        return $this->urlBack;
    }
}

