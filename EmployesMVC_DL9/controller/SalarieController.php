<?php

namespace Controller;

use Model\Manager\SalarieManager;

class SalarieController
{

    public function allSalaries()
    {

        $manSalarie = new SalarieManager();
        $salaries = $manSalarie->findAll(); // tableau d'objets de la classe Salarie

        return [
            "view" => "salarie/salaries.php",
            "data" => [
                "salaries" => $salaries
            ],
            "titrePage" => "Employes MVC / Liste des salariés"
        ];
    }

    public function detailSalarie($id)
    {

        return [
            "view" => "salarie/detailSalarie.php",
            "titrePage" => "Détail salarié"
        ];
    }
}
