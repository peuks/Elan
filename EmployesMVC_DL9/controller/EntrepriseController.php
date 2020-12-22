<?php

namespace Controller;

class EntrepriseController {
    
    public function allEntreprises(){

        return [
            "view" => "entreprise/entreprises.php",
            "titrePage" => "Employes MVC / Liste des entreprises"
        ];
    }
}