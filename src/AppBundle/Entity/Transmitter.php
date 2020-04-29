<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transmitter
 *
 * @ORM\Table(name="transmitter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransmitterRepository")
 */
class Transmitter
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
     * @ORM\Column(name="fullname", type="string", length=600, nullable=true)
     */
    private $fullname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phonenumber", type="string", length=255, nullable=true)
     */
    private $phonenumber;

    /**
     * @var int|null
     * 
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumn (name="status", referencedColumnName="id")
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="addedby", type="string", length=500, nullable=true)
     */
    private $addedby;


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
     * Set fullname.
     *
     * @param string|null $fullname
     *
     * @return Transmitter
     */
    public function setFullname($fullname = null)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname.
     *
     * @return string|null
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set phonenumber.
     *
     * @param string|null $phonenumber
     *
     * @return Transmitter
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
     * Set status.
     *
     * @param \AppBundle\Entity\Status $status
     *
     * @return Transmitter
     */
    public function setStatus(\AppBundle\Entity\Status $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return \AppBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set addedby.
     *
     * @param string|null $addedby
     *
     * @return Transmitter
     */
    public function setAddedby($addedby = null)
    {
        $this->addedby = $addedby;

        return $this;
    }

    /**
     * Get addedby.
     *
     * @return string|null
     */
    public function getAddedby()
    {
        return $this->addedby;
    }
}
