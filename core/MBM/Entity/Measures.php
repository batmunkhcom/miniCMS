<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Measures
 *
 * @ORM\Table(name="m_measures")
 * @ORM\Entity
 */
class Measures
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
     * @ORM\Column(name="name_short", type="string", length=50, nullable=false)
     */
    private $nameShort;

    /**
     * @var string
     *
     * @ORM\Column(name="name_long", type="string", length=50, nullable=false)
     */
    private $nameLong;


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
     * Set nameShort
     *
     * @param string $nameShort
     *
     * @return Measures
     */
    public function setNameShort($nameShort)
    {
        $this->nameShort = $nameShort;
    
        return $this;
    }

    /**
     * Get nameShort
     *
     * @return string
     */
    public function getNameShort()
    {
        return $this->nameShort;
    }

    /**
     * Set nameLong
     *
     * @param string $nameLong
     *
     * @return Measures
     */
    public function setNameLong($nameLong)
    {
        $this->nameLong = $nameLong;
    
        return $this;
    }

    /**
     * Get nameLong
     *
     * @return string
     */
    public function getNameLong()
    {
        return $this->nameLong;
    }
}

