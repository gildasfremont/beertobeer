<?php

namespace BeerToBeer\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BeerToBeer\CoreBundle\Entity\Beer;

class Beers implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $items = array(
        array(
          "name" => "1664",
          "degree" => 5.5
        ),
        array(
          "name" => "Killkenny",
          "degree" => 4.3
        ),
        array(
          "name" => "Stella Artois",
          "degree" => 5.2
        ),

      );

    foreach($items as $i => $item)
    {
      $liste_items[$i] = new Beer();
      $liste_items[$i]->setName($item["name"]);
      $liste_items[$i]->setDegree($item["degree"]);

      $manager->persist($liste_items[$i]);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
  public function getOrder()
  {
      return 2;
  }
}