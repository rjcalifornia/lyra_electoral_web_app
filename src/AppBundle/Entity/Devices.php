<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devices
 *
 * @ORM\Table(name="devices")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DevicesRepository")
 */
class Devices
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deviceid", type="string", length=400, nullable=true)
     */
    private $deviceid; 

    /**
     * @var string|null
     *
     * @ORM\Column(name="phonenumber", type="string", length=255, nullable=true)
     */
    private $phonenumber;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="Transmitter")
     * @ORM\JoinColumn (name="authid", referencedColumnName="id")
     */
    private $authid;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set deviceid.
     *
     * @param string|null $deviceid
     *
     * @return Devices
     */
    public function setDeviceid($deviceid = null)
    {
        $this->deviceid = $deviceid;

        return $this;
    }

    /**
     * Get deviceid.
     *
     * @return string|null
     */
    public function getDeviceid()
    {
        return $this->deviceid;
    }

    /**
     * Set phonenumber.
     *
     * @param string|null $phonenumber
     *
     * @return Devices
     */
    public function setPhonenumber($phonenumber = null)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber.
     *
     * @return string|null
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set authid.
     *
     * @param \AppBundle\Entity\Transmitter $authid
     *
     * @return Devices
     */
    public function setAuthid(\AppBundle\Entity\Transmitter $authid)
    {
        $this->authid = $authid;

        return $this;
    }

    /**
     * Get authid.
     *
     * @return int|null
     */
    public function getAuthid()
    {
        return $this->authid;
    }
}
