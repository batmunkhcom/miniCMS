<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Currencies
 *
 * @ORM\Table(name="m_currencies")
 * @ORM\Entity
 */
class Currencies
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="string", length=3, nullable=false)
     */
    private $prefix;

    /**
     * @var string
     *
     * @ORM\Column(name="suffix", type="string", length=3, nullable=false)
     */
    private $suffix;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=3, nullable=false)
     */
    private $symbol;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=5, nullable=false)
     */
    private $currencyCode;

    /**
     * @var string
     *
     * @ORM\Column(name="one_usd", type="string", length=50, nullable=false)
     */
    private $oneUsd;


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
     * @return Currencies
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
     * Set prefix
     *
     * @param string $prefix
     *
     * @return Currencies
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    
        return $this;
    }

    /**
     * Get prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     *
     * @return Currencies
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
    
        return $this;
    }

    /**
     * Get suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Set symbol
     *
     * @param string $symbol
     *
     * @return Currencies
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    
        return $this;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Set currencyCode
     *
     * @param string $currencyCode
     *
     * @return Currencies
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
     * Set oneUsd
     *
     * @param string $oneUsd
     *
     * @return Currencies
     */
    public function setOneUsd($oneUsd)
    {
        $this->oneUsd = $oneUsd;
    
        return $this;
    }

    /**
     * Get oneUsd
     *
     * @return string
     */
    public function getOneUsd()
    {
        return $this->oneUsd;
    }
}

