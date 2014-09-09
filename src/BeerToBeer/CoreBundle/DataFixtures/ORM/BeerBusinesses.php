<?php

namespace BeerToBeer\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BeerToBeer\CoreBundle\Entity\BeerBusiness;

class BeerBusinesses implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $items = array(
        array(
          "business" => "Le Timbre Poste",
          "beer" => "Stella Artois",
          "prixNormal" => 4.5,
          "prixHappyHour" => 4.5,
          "volume" => 50,
          "pression" => true
        ),
        array(
          "business" => "Le Timbre Poste",
          "beer" => "Stella Artois",
          "prixNormal" => 2.8,
          "prixHappyHour" => 2.8,
          "volume" => 25,
          "pression" => true
        ),
        array(
          "business" => "Le Timbre Poste",
          "beer" => "Killkenny",
          "prixNormal" => 5,
          "prixHappyHour" => 5,
          "volume" => 50,
          "pression" => true
        ),
        array(
          "business" => "Le Timbre Poste",
          "beer" => "Stella Artois",
          "prixNormal" => 4.5,
          "prixHappyHour" => 4.5,
          "volume" => 33,
          "pression" => false
        ),
        array(
          "business" => "Le Timbre Poste",
          "beer" => "Killkenny",
          "prixNormal" => 5,
          "prixHappyHour" => 5,
          "volume" => 33,
          "pression" => false
        ),

      );

    $businesses = $manager->getRepository('BeerToBeerCoreBundle:Business')->findAll();

    foreach($items as $i => $item)
    {

      $beer = $manager->getRepository('BeerToBeerCoreBundle:Beer')->findBy(array("name" => $item["beer"]));
      $beer = $beer[0];

      foreach ($businesses as $i2 => $business) {
        $id = $i.":".$i2;
        $liste_items[$id] = new BeerBusiness();
        $liste_items[$id]->setBeer($beer);
        $liste_items[$id]->setBusiness($business);
        $liste_items[$id]->setPrixNormal($item["prixNormal"]);
        $liste_items[$id]->setPrixHappyHour($item["prixHappyHour"]);
        $liste_items[$id]->setVolume($item["volume"]);
        $liste_items[$id]->setPression($item["pression"]);
        $manager->persist($liste_items[$id]);
      }

    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
  public function getOrder()
  {
      return 3;
  }
}