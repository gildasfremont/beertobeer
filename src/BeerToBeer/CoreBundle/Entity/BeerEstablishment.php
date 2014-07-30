<?php

namespace BeerToBeer\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeerEstablishment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BeerToBeer\CoreBundle\Entity\BeerEstablishmentRepository")
 */
class BeerEstablishment
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
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Beer")
     */
    private $beer;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Establishment")
     */
    private $establishment;



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
     * @return BeerEstablishment
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
     * @return BeerEstablishment
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
     * @return BeerEstablishment
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
     * Set establishment
     *
     * @param \BeerToBeer\CoreBundle\Entity\Establishment $establishment
     * @return BeerEstablishment
     */
    public function setEstablishment(\BeerToBeer\CoreBundle\Entity\Establishment $establishment)
    {
        $this->establishment = $establishment;

        return $this;
    }

    /**
     * Get establishment
     *
     * @return \BeerToBeer\CoreBundle\Entity\Establishment 
     */
    public function getEstablishment()
    {
        return $this->establishment;
    }
}
