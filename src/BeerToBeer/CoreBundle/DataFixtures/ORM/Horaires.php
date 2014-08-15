<?php

namespace BeerToBeer\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BeerToBeer\CoreBundle\Entity\Horaire;

class Horaires implements FixtureInterface, OrderedFixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $items = array(
        array(
          "business" => "Le Timbre Poste",
          "jour" => 5,
          "ouverture" => new \DateTime("9:00"),
          "duree" => 840,
          "happyHour" => false
        ),
        array(
          "business" => "Le Timbre Poste",
          "jour" => 5,
          "ouverture" => new \DateTime("16:00"),
          "duree" => 120,
          "happyHour" => true
        ),
      );

    foreach($items as $i => $item)
    {
      $liste_items[$i] = new Horaire();
      $liste_items[$i]->setJour($item["jour"]);
      $liste_items[$i]->setOuverture($item["ouverture"]);
      $liste_items[$i]->setDuree($item["duree"]);
      $liste_items[$i]->setHappyHour($item["happyHour"]);

      $business = $manager->getRepository('BeerToBeerCoreBundle:Business')->findBy(array("nom" => $item["business"]));
      $business = $business[0];
      $liste_items[$i]->setBusiness($business);

      $manager->persist($liste_items[$i]);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
  public function getOrder()
  {
      return 4;
  }
}