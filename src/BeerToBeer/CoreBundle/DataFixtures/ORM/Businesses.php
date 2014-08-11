<?php

namespace BeerToBeer\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BeerToBeer\CoreBundle\Entity\Business;

class Businesses implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $items = array(
        array(
          "nom" => "Dirty Dick",
          "adresse" => "10 rue Frochot",
          "lat" => 48.881546,
          "long" => 2.3375950
        ),
        array(
          "nom" => "Le Cabaret Michou",
          "adresse" => "78 rue des Martyrs",
          "lat" => 48.883005,
          "long" => 2.339812
        ),
        array(
          "nom" => "Le Timbre Poste",
          "adresse" => "1 rue Rouget de Lisle",
          "lat" => 48.823832,
          "long" => 2.304364
        ),
        array(
          "nom" => "James Hetfeeld's Pub",
          "adresse" => "17 bd Poissonière",
          "lat" => 48.8708337,
          "long" => 2.3448435
        ),
        array(
          "nom" => "Les tonneaux parisiens",
          "adresse" => "12 Rue de Mazagran",
          "lat" => 48.8705101,
          "long" => 2.3518564
        ),

      );

    foreach($items as $i => $item)
    {
      $liste_items[$i] = new Business();
      $liste_items[$i]->setNom($item["nom"]);
      $liste_items[$i]->setAdresse($item["adresse"]);
      $liste_items[$i]->setVille("Paris");
      $liste_items[$i]->setCodePostal("75009");
      if ($item["nom"] == "Le Timbre Poste") {
        $liste_items[$i]->setVille("Malakoff");
        $liste_items[$i]->setCodePostal("92240");
      }
      $liste_items[$i]->setLatitude($item["lat"]);
      $liste_items[$i]->setLongitude($item["long"]);
      $liste_items[$i]->setType(Business::TYPE_BAR);

      $manager->persist($liste_items[$i]);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
  public function getOrder()
  {
      return 1;
  }
}