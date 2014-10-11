<?php

namespace BeerToBeer\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use BeerToBeer\CoreBundle\Entity\Business;

class ApiController extends Controller
{
	public function businessAction() {
		$request = $this->getRequest();

        if ($request->query->get('forAdd') == "true")
            $forAdd = true;
        else
            $forAdd = false;

		if ($request->query->get('latitude') != null && $request->query->get('longitude') != null)
			return $this->searchFromGpsAction($request->query->get('latitude'), $request->query->get('longitude'), $forAdd, $request->query->get('offset'));

		throw new HttpException(404, "Page introuvable.");
	}

    public function proposeBusinessAction() {
        $request = $this->getRequest();
        $email = $request->request->get("proposerEmail");
        $proposition = $request->request->get("proposerProposition");
        if (strlen($proposition) < 10 || (strlen($email) > 0 && !preg_match("/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/", $email)))
            throw new HttpException(400, "Votre proposition est trop courte ou vous semblez vous être trompé dans votre adresse e-mail.");

        $message = \Swift_Message::newInstance()
            ->setSubject('Nouvelle proposition !')
            ->setFrom('admin@beertobeer.fr')
            ->setTo($this->container->getParameter('dev_mail'))
            ->setContentType('text/html')
            ->setBody($this->renderView('BeerToBeerCoreBundle:Emails:businessProposition.html.twig', array('email' => $email, 'proposition' => $proposition)))
        ;
        $this->get('mailer')->send($message);

        $response = new Response();
        $response->setContent('Votre proposition a bien été envoyée !');
        $response->setStatusCode(200);
        return $response;
    }

    public function searchFromGpsAction($latitude, $longitude, $forAdd = false, $offset = 0)
    {
    	if (!is_numeric($latitude) || !is_numeric($longitude)) {
    		// Throw 400 BAD REQUEST puisqu'il manque des informations ou qu'elles sont mal données
    		throw new HttpException(400, "Vos coordonnées GPS sont absentes ou mal données.");
    	}

    	$repo = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:Business');

    	$results = $repo->getClosestBusinessesForApi(floatval($latitude), floatval($longitude), $forAdd, $offset);

        $response = new JsonResponse();
		return $response->setData($results);
    }

    public function getBusinessFromIdAction($id) {
        $repoBusiness = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:Business');

        $result = $repoBusiness->getBusinessForApi(intval($id));

        $response = new JsonResponse();
        return $response->setData($result);
    }

    public function updateBusinessAction($id) {
        $request = $this->getRequest();
        if ($request->cookies->has("identifier"))
            $identifier = $request->cookies->get("identifier");
        else {
            $identifier = uniqid($request->getClientIp()."_")."_".$request->headers->get('User-Agent');
            $request->cookies->set("identifier", $identifier);
        }
        $this->container->get('simplethings_entityaudit.config')->setCurrentUsername($identifier);

        // Récupération des paramètres PUT
        $requestContent = $this->getRequest()->getContent();
        $businessFromApi = json_decode($requestContent, true);
        
        if($id != $businessFromApi["id"])
            throw new HttpException(400, "L'entité donnée est différente de celle décrite par la requête.");

        $repoBusiness = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:Business');

        $return = $repoBusiness->updateBusinessFromApi($businessFromApi);
        if (gettype($return) == "string")
           throw new HttpException(400, $return);

        // On renvoie l'entité pour qu'elle soit actualisée
        $response = new JsonResponse();
        return $response->setData($return);
    }

    public function getAllBeersAction() {
        $beers = $this->getDoctrine()->getManager()->getRepository('BeerToBeerCoreBundle:Beer')->getAllBeersArray();

        $response = new JsonResponse();
        return $response->setData($beers);
    }
}
