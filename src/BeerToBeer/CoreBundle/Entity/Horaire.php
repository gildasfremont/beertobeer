<?php

namespace BeerToBeer\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BeerToBeer\CoreBundle\Entity\HoraireRepository")
 */
class Horaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="jour", type="integer")
     */
    private $jour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ouverture", type="time")
     */
    private $ouverture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="time")
     */
    private $duree;

    /**
     * @var boolean
     *
     * @ORM\Column(name="happyHour", type="boolean")
     */
    private $happyHour;

    /**
     * @ORM\ManyToOne(targetEntity="Business")
     */
    private $business;


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
     * Set jour
     *
     * @param integer $jour
     * @return Horaire
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return integer 
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set ouverture
     *
     * @param \DateTime $ouverture
     * @return Horaire
     */
    public function setOuverture($ouverture)
    {
        $this->ouverture = $ouverture;

        return $this;
    }

    /**
     * Get ouverture
     *
     * @return \DateTime 
     */
    public function getOuverture()
    {
        return $this->ouverture;
    }

    /**
     * Set duree
     *
     * @param \DateTime $duree
     * @return Horaire
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set happyHour
     *
     * @param boolean $happyHour
     * @return Horaire
     */
    public function setHappyHour($happyHour)
    {
        $this->happyHour = $happyHour;

        return $this;
    }

    /**
     * Get happyHour
     *
     * @return boolean 
     */
    public function getHappyHour()
    {
        return $this->happyHour;
    }

    /**
     * Set business
     *
     * @param \BeerToBeer\CoreBundle\Entity\Business $business
     * @return Horaire
     */
    public function setBusiness(\BeerToBeer\CoreBundle\Entity\Business $business = null)
    {
        $this->business = $business;

        return $this;
    }

    /**
     * Get business
     *
     * @return \BeerToBeer\CoreBundle\Entity\Business 
     */
    public function getBusiness()
    {
        return $this->business;
    }
}
