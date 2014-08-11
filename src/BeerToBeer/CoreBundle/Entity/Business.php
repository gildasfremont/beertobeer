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
    private $typeInt;

    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     * 
     * La correspondance entre le type et sa valeur numérale
     */
    private $typeArray;

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

    public function __construct() {
        $this->typeArray = array(
            "Bar" => 1
        );
        foreach ($this->typeArray as $key => $value) {
            if ($this->typeInt == $value)
                $this->type = $key;
        }
    }


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
     * Set type
     *
     * @param string $type
     * @return Business
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->typeInt = $this->typeArray[$type];

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
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
     * Set typeInt
     *
     * @param integer $typeInt
     * @return Business
     */
    public function setTypeInt($typeInt)
    {
        $this->typeInt = $typeInt;

        return $this;
    }

    /**
     * Get typeInt
     *
     * @return integer 
     */
    public function getTypeInt()
    {
        return $this->typeInt;
    }
}
