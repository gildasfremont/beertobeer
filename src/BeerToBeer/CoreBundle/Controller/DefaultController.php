<?php

namespace BeerToBeer\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BeerToBeerCoreBundle:Default:index.html.twig');
    }
}
