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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
}
