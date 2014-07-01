<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Settings
 *
 * @ORM\Table(name="m_settings")
 * @ORM\Entity
 */
class Settings
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
     * @ORM\Column(name="setting_name", type="string", length=255, nullable=false)
     */
    private $settingName;

    /**
     * @var string
     *
     * @ORM\Column(name="setting_value", type="text", nullable=false)
     */
    private $settingValue;

    /**
     * @var string
     *
     * @ORM\Column(name="setting_type", type="string", length=255, nullable=false)
     */
    private $settingType = 'default';


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
     * Set settingName
     *
     * @param string $settingName
     *
     * @return Settings
     */
    public function setSettingName($settingName)
    {
        $this->settingName = $settingName;
    
        return $this;
    }

    /**
     * Get settingName
     *
     * @return string
     */
    public function getSettingName()
    {
        return $this->settingName;
    }

    /**
     * Set settingValue
     *
     * @param string $settingValue
     *
     * @return Settings
     */
    public function setSettingValue($settingValue)
    {
        $this->settingValue = $settingValue;
    
        return $this;
    }

    /**
     * Get settingValue
     *
     * @return string
     */
    public function getSettingValue()
    {
        return $this->settingValue;
    }

    /**
     * Set settingType
     *
     * @param string $settingType
     *
     * @return Settings
     */
    public function setSettingType($settingType)
    {
        $this->settingType = $settingType;
    
        return $this;
    }

    /**
     * Get settingType
     *
     * @return string
     */
    public function getSettingType()
    {
        return $this->settingType;
    }
}

