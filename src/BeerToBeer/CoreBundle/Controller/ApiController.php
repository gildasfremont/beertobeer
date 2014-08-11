<?php

namespace BeerToBeer\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller
{
    public function searchFromGpsAction($latitude, $longitude)
    {
    	$repo = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:Business');

    	$results = $repo->getClosestBusinesses($latitude, $longitude); // La vérification de la "validité" des nombres est déjà faite par le routeur

        $response = new JsonResponse();
		return $response->setData($results);
    }
}
