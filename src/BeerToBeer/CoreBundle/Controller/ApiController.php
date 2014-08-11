<?php

namespace BeerToBeer\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller
{
	public function businessAction() {
	}

    public function searchFromGpsAction()
    {
    	$request = $this->getRequest();
    	$latitude = $request->query->get('latitude');
    	$longitude = $request->query->get('longitude');
    	if ($latitude == null || $longitude == null){
    		// Throw 400 BAD REQUEST puisqu'il manque des informations ou qu'elles sont mal données
    		throw new HttpException(400, "Vos coordonnées GPS sont absentes ou mal données.");
    	}

    	$repo = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:Business');

    	$results = $repo->getClosestBusinesses(floatval($latitude), floatval($longitude)); // La vérification de la "validité" des nombres est déjà faite par le routeur

        $response = new JsonResponse();
		return $response->setData($results);
    }
}
