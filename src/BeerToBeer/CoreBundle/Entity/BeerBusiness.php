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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="prixNormal", type="float")
     */
    private $prixNormal;

    /**
     * @var float
     *
     * @ORM\Column(name="prixHappyHour", type="float")
     */
    private $prixHappyHour;

    /**
     * @var float
     *
     * Le volume de la bière servie, en cl
     *
     * @ORM\Column(name="volume", type="float")
     */
    private $volume;

    /**
     * @var boolean
     *
     * Savoir si la bière est servie en pression ou non
     *
     * @ORM\Column(name="pression", type="boolean")
     */
    private $pression;

    /**
     * @ORM\ManyToOne(targetEntity="Beer")
     */
    private $beer;

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
     * Set prixNormal
     *
     * @param float $prixNormal
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
     * @return float 
     */
    public function getPrixNormal()
    {
        return $this->prixNormal;
    }

    /**
     * Set prixHappyHour
     *
     * @param float $prixHappyHour
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
     * @return float 
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

    /**
     * Set pression
     *
     * @param boolean $pression
     * @return BeerBusiness
     */
    public function setPression($pression)
    {
        $this->pression = $pression;

        return $this;
    }

    /**
     * Get pression
     *
     * @return boolean 
     */
    public function getPression()
    {
        return $this->pression;
    }
}
