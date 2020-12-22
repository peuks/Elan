<?php
//CECI EST LE FRONT CONTROLLER ! 
//c'est le seul fichier en dialogue avec l'utilisateur
require "vendor/autoload.php";

use App\Service\RouterService;

session_start();

/*
        $response est le retour du contrôleur nécessaire à la requète du client
        [
            "view" => la vue à afficher au client,
            "data" => les données pour remplir la vue
        ]
    */
$response = RouterService::handleRequest($_GET);

/*-----CHARGEMENT DE LA REPONSE AU CLIENT-----*/
ob_start(); // temporisation de sortie  - output buffer

//tous les affichages à partir de çb_start() se stockent dans un tampon de sortie 
include "template/store/" . $response["view"];
echo "kikoo";
print 2 + 1;

// Ici je récupère ce qu'il y a dans le tampon et le met dans nue variable 
//  (au lieu de l'afficher directement)
$page = ob_get_contents();


//  je vide la tampon qui ne me sert plus à rien depuis qu'on a stocké dans une variable
//  le contenu de celui ci 
ob_end_clean();

include "template/layout.php";
