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

    $businesses = $manager->getRepository('BeerToBeerCoreBundle:Business')->findAll();

    foreach ($businesses as $business) {
      for ($i=0; $i <= 6; $i++) { 
        $horaire = new Horaire();
        $horaire->setJour($i);
        $horaire->setOuverture(new \DateTime("9:00"));
        $horaire->setDuree(1080);
        $horaire->setHappyHour(false);

        $horaire->setBusiness($business);

        $manager->persist($horaire);
      }
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
  public function getOrder()
  {
      return 4;
  }
}