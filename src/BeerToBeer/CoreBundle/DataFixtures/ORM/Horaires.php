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
  {/*

    $businesses = $manager->getRepository('BeerToBeerCoreBundle:Business')->findAll();

    foreach ($businesses as $business) {
      for ($i=0; $i <= 6; $i++) { 
        $horaire = new Horaire();
        $horaire->setJour($i);
        $horaire->setOuverture(new \DateTime("9:00"));
        $horaire->setDuree(1080);
        if ($i == 1) {
          $horaire->setDuree(0);
        }
        if ($i == 3) {
          $horaire->setDuree(330);
          $horaire2 = new Horaire();
          $horaire2->setJour($i);
          $horaire2->setOuverture(new \DateTime("19:00"));
          $horaire2->setDuree(240);
          $horaire2->setHappyHour(false);
          $horaire2->setBusiness($business);
          $manager->persist($horaire2);
        }
        $horaire->setHappyHour(false);

        $horaire->setBusiness($business);

        $manager->persist($horaire);

        if ($i == 2 || $i == 4) {
          $horaire = new Horaire();
          $horaire->setJour($i);
          $horaire->setOuverture(new \DateTime("17:00"));
          $horaire->setDuree(210);
          $horaire->setHappyHour(true);

          $horaire->setBusiness($business);

          $manager->persist($horaire);
        }
      }
    }

    // On déclenche l'enregistrement
    $manager->flush();*/
  }
  public function getOrder()
  {
      return 4;
  }
}