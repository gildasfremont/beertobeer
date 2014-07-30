<?php

namespace BeerToBeer\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BeerToBeer\CoreBundle\Entity\BeerRepository")
 */
class Beer
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="degree", type="integer")
     */
    private $degree;


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
     * Set name
     *
     * @param string $name
     * @return Beer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set degree
     *
     * @param integer $degree
     * @return Beer
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * Get degree
     *
     * @return integer 
     */
    public function getDegree()
    {
        return $this->degree;
    }
}
