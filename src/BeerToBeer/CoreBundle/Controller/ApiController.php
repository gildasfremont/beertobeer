<?php

namespace BeerToBeer\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use BeerToBeer\CoreBundle\Entity\Business;

class ApiController extends Controller
{
	public function businessAction() {
		$request = $this->getRequest();

		if ($request->query->get('latitude') != null && $request->query->get('longitude') != null)
			return $this->searchFromGpsAction($request->query->get('latitude'), $request->query->get('longitude'));

		throw new HttpException(404, "Page introuvable.");
	}

    public function searchFromGpsAction($latitude, $longitude)
    {
    	if (!is_numeric($latitude) || !is_numeric($longitude)) {
    		// Throw 400 BAD REQUEST puisqu'il manque des informations ou qu'elles sont mal données
    		throw new HttpException(400, "Vos coordonnées GPS sont absentes ou mal données.");
    	}

    	$repo = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:Business');

    	$results = $repo->getClosestBusinesses(floatval($latitude), floatval($longitude));

        $response = new JsonResponse();
		return $response->setData($results);
    }

    public function beerAction() {
        $request = $this->getRequest();

        if ($request->query->get('businessId') != null)
            return $this->getBeersWithBusinessAction($request->query->get('businessId'));

        throw new HttpException(404, "Page introuvable.");
    }

    public function getBeersWithBusinessAction($businessId)
    {
        if (!is_numeric($businessId)) {
            // Throw 400 BAD REQUEST puisqu'il manque des informations ou qu'elles sont mal données
            throw new HttpException(400, "Vous devez fournir l'ID d'un établissement.");
        }

        $repoBusiness = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:Business');

        $business = $repoBusiness->find(intval($businessId));

        $repoBeerBusiness = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:BeerBusiness');

        $results = $repoBeerBusiness->getBeersWithBusiness($business);

        $response = new JsonResponse();
        return $response->setData($results);
    }

    public function getBusinessFromIdAction($id) {
        $repoBusiness = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:Business');

        $result = $repoBusiness->getBusiness(intval($id));

        $response = new JsonResponse();
        return $response->setData($result[0]);
    }
}
