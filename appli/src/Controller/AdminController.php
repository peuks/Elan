<?php

namespace App\Controller;

use App\Manager\ProductManager;
use App\Service\MessageService as MS;
use App\Service\RouterService as Router;

class AdminController
{
    public function indexAction()
    {

        $manager = new ProductManager();
        $products = $manager->getAll();

        return [
            "view" => "admin/panel.php",
            "data" => $products
        ];
    }

    public function addAction()
    {

        if (isset($_POST['submit'])) {

            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
            $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            if ($name && $price) {

                $manager = new ProductManager;
                $manager->insert($name, $price);    //ajout en base de données
                MS::setMessage("success", "Produit ajouté avec succès !!");
                return Router::redirect("admin");
            } else MS::setMessage("error", "Formulaire mal rempli, réessayez !");
        }
        // header("Location:index.php");
        return [
            "view" => "admin/form.php"
        ];
    }
    public function deleteAction($id)
    {
        $manager = new ProductManager();
        $manager->delete($id);
        MS::setMessage("success", "Produit supprimé avec succès !");
        header("Location:?ctrl=admin&action=index");
        return Router::redirect("admin");
    }
}
