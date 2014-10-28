<?php

namespace BeerToBeer\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BeerToBeerCoreBundle:Default:index.html.twig');
    }

    /* Cette action permet de récupérer une adresse à partir des coordonnées, on la conserve elle pourra nous être utile */
    public function reverseGeocodeAction()
    {
        $response = new JsonResponse();
        $return = array();
        $manager = $this->getDoctrine()->getManager();
        $repoBusiness = $manager->getRepository('BeerToBeerCoreBundle:Business');

        // On sélectionne les business qui ont besoin d'une adresse
        $businesses = $repoBusiness->findBy(array("adresse" => ""));

        foreach ($businesses as $i => $business) {
            $lat = $business->getLatitude();
            $lng = $business->getLongitude();

            $ch = curl_init();
            $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&sensor=false&key=AIzaSyA8f7_iudMUZO6Mrbf8Rywz2QuIm3kgUgM";
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            $result = curl_exec($ch);
            echo curl_error($ch);
            $json = json_decode($result, TRUE);

            if (isset($json['results']) && $json['status'] == "OK") {
                $result = $json['results'][0];
                foreach ($result['address_components'] as $address_component) {
                    $types = $address_component['types'];
                    if (in_array('postal_code', $types) && sizeof($types) == 1) {
                        $business->setCodePostal($address_component['short_name']);
                    }
                    else if (in_array('street_number', $types) && sizeof($types) == 1) {
                        $streetNumber = $address_component['short_name'];
                    }
                    else if (in_array('route', $types) && sizeof($types) == 1) {
                        $route = $address_component['long_name'];
                    }
                    else if (in_array('locality', $types)) {
                        $business->setVille($address_component['short_name']);
                    }
                }
                if (@isset($streetNumber))
                    $business->setAdresse($streetNumber . " " . $route);
                else
                    $business->setAdresse($route);
                $return[] = $business->getNom() . " : ". $result["formatted_address"] . " VS " . $business->getAdresse().", ". $business->getCodePostal() . " " . $business->getVille();
                
            }
            else
                $return[] = $json;
        }
        
        $manager->flush();
        return $response->setData($return);
    }
}
