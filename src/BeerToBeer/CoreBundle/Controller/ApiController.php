<?php

namespace BeerToBeer\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function searchFromGpsAction()
    {
        $response = new JsonResponse();
		return $response->setData(array(
		    'data' => 123
		));
    }
}
