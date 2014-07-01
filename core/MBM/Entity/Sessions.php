<?php

namespace MBM\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Sessions
 *
 * @ORM\Table(name="m_sessions")
 * @ORM\Entity
 */
class Sessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="session_expires", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sessionExpires = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="session_data", type="text", nullable=true)
     */
    private $sessionData;


    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionExpires
     *
     * @param integer $sessionExpires
     *
     * @return Sessions
     */
    public function setSessionExpires($sessionExpires)
    {
        $this->sessionExpires = $sessionExpires;
    
        return $this;
    }

    /**
     * Get sessionExpires
     *
     * @return integer
     */
    public function getSessionExpires()
    {
        return $this->sessionExpires;
    }

    /**
     * Set sessionData
     *
     * @param string $sessionData
     *
     * @return Sessions
     */
    public function setSessionData($sessionData)
    {
        $this->sessionData = $sessionData;
    
        return $this;
    }

    /**
     * Get sessionData
     *
     * @return string
     */
    public function getSessionData()
    {
        return $this->sessionData;
    }
}

