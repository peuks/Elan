<?php

namespace Controller;

use Model\Manager\ActeurManager;

class ActeurController
{
    public function allActeurs()
    {
        $manActeur = new ActeurManager();
        $acteurs = $manActeur->findAll();

        return [
            "view" => "acteur/acteurs.php",
            "data" => [
                "acteurs" => $acteurs
            ],
            "titrePage" => "Liste des Acteurs"
        ];
    }
}
