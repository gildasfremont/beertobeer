<?php

namespace BeerToBeer\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Business
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BeerToBeer\CoreBundle\Entity\BusinessRepository")
 */
class Business
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
     * @ORM\Column(name="osm_id", type="integer", nullable=true)
     */
    private $osmId;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer
     *
     * Le "type" de l'établissement : 1 si c'est un bar et... c'est tout pour l'instant
     * 
     * @ORM\Column(name="type", type="smallint")
     */
    private $type;

    const TYPE_BAR = 1;
    const TYPE_RESTAURANT = 2;
    const TYPE_CAFE = 3;
    const TYPE_PUB = 4;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=60)
     */
    private $ville;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @ORM\OneToMany(targetEntity="BeerBusiness", mappedBy="business")
     */
    private $beerBusinesses;

    /**
     * @ORM\OneToMany(targetEntity="Horaire", mappedBy="business")
     */
    private $horaires;


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
     * Set nom
     *
     * @param string $nom
     * @return Business
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Business
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Get adresse complète
     *
     * @return string 
     */
    public function getAdresseComplete()
    {
        return $this->adresse + ",  " + $this->codePostal + " " + $this->ville;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Business
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Business
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Business
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Business
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Business
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->beerBusinesses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add beerBusinesses
     *
     * @param \BeerToBeer\CoreBundle\Entity\BeerBusiness $beerBusinesses
     * @return Business
     */
    public function addBeerBusiness(\BeerToBeer\CoreBundle\Entity\BeerBusiness $beerBusinesses)
    {
        $this->beerBusinesses[] = $beerBusinesses;

        return $this;
    }

    /**
     * Remove beerBusinesses
     *
     * @param \BeerToBeer\CoreBundle\Entity\BeerBusiness $beerBusinesses
     */
    public function removeBeerBusiness(\BeerToBeer\CoreBundle\Entity\BeerBusiness $beerBusinesses)
    {
        $this->beerBusinesses->removeElement($beerBusinesses);
    }

    /**
     * Get beerBusinesses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBeerBusinesses()
    {
        return $this->beerBusinesses;
    }

    /**
     * Add horaires
     *
     * @param \BeerToBeer\CoreBundle\Entity\Horaire $horaires
     * @return Business
     */
    public function addHoraire(\BeerToBeer\CoreBundle\Entity\Horaire $horaires)
    {
        $this->horaires[] = $horaires;

        return $this;
    }

    /**
     * Remove horaires
     *
     * @param \BeerToBeer\CoreBundle\Entity\Horaire $horaires
     */
    public function removeHoraire(\BeerToBeer\CoreBundle\Entity\Horaire $horaires)
    {
        $this->horaires->removeElement($horaires);
    }

    /**
     * Get horaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Set osmId
     *
     * @param integer $osmId
     * @return Business
     */
    public function setOsmId($osmId)
    {
        $this->osmId = $osmId;

        return $this;
    }

    /**
     * Get osmId
     *
     * @return integer 
     */
    public function getOsmId()
    {
        return $this->osmId;
    }
}
