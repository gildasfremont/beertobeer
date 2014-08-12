<?php

namespace BeerToBeer\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeerBusiness
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BeerToBeer\CoreBundle\Entity\BeerBusinessRepository")
 */
class BeerBusiness
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prixNormal", type="integer")
     */
    private $prixNormal;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixHappyHour", type="integer")
     */
    private $prixHappyHour;

    /**
     * @var integer
     *
     * Le volume de la bière servie, en cl
     *
     * @ORM\Column(name="volume", type="integer")
     */
    private $volume;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Beer")
     */
    private $beer;

    /**
     * @ORM\Id
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
     * Set prixNormal
     *
     * @param integer $prixNormal
     * @return BeerBusiness
     */
    public function setPrixNormal($prixNormal)
    {
        $this->prixNormal = $prixNormal;

        return $this;
    }

    /**
     * Get prixNormal
     *
     * @return integer 
     */
    public function getPrixNormal()
    {
        return $this->prixNormal;
    }

    /**
     * Set prixHappyHour
     *
     * @param integer $prixHappyHour
     * @return BeerBusiness
     */
    public function setPrixHappyHour($prixHappyHour)
    {
        $this->prixHappyHour = $prixHappyHour;

        return $this;
    }

    /**
     * Get prixHappyHour
     *
     * @return integer 
     */
    public function getPrixHappyHour()
    {
        return $this->prixHappyHour;
    }

    /**
     * Set beer
     *
     * @param \BeerToBeer\CoreBundle\Entity\Beer $beer
     * @return BeerBusiness
     */
    public function setBeer(\BeerToBeer\CoreBundle\Entity\Beer $beer)
    {
        $this->beer = $beer;

        return $this;
    }

    /**
     * Get beer
     *
     * @return \BeerToBeer\CoreBundle\Entity\Beer 
     */
    public function getBeer()
    {
        return $this->beer;
    }

    /**
     * Set business
     *
     * @param \BeerToBeer\CoreBundle\Entity\Business $business
     * @return BeerBusiness
     */
    public function setBusiness(\BeerToBeer\CoreBundle\Entity\Business $business)
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

    /**
     * Set volume
     *
     * @param integer $volume
     * @return BeerBusiness
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return integer 
     */
    public function getVolume()
    {
        return $this->volume;
    }
}
