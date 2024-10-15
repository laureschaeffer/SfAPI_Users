<?php

namespace App\HttpClient;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiHttpClient extends AbstractController{

    private $httpClient;

    public function __construct(HttpClientInterface $jph){
        $this->httpClient = $jph;
    } 

    //récupère depuis l'api les utilisateurs
    public function getUsers(){
        //utilise le service httpclient pour une requete get avec un nbmax de resultats à 15 et désactivation de la vérification SSL
        $response = $this->httpClient->request('GET', "?results=15", [
            'verify_peer' => false,
        ]);

        //tableau associatif
        return $response->toArray();
    }
}