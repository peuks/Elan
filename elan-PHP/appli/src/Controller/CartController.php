<?php

namespace App\Controller;

use App\Entity\Product;
use App\Manager\ProductManager;
use App\Service\CartHandlerService as CHS;
use App\Service\RouterService;

class CartController
{
    public function indexAction()
    {
        return [
            "view" => "car/cart.php",
        ];
    }

    public function incardAction($idproduit)
    {
        $manager = new ProductManager();
        $product = $manager->getOneById($idproduit);

        $cart = CHS::getCart(); // On récupère le panier en session
        $cart->addProduct($product); // On lui ajoute le produit commandé
        CHS::setCart($cart); // On met à jour le panier en session

        return Router::redirect("cart");
    }

    public function removeAction()
    {
    }

    public function clearAction()
    {
    }
}
// switch ($_GET['action']) {
// //ajout d'un produit choisi en session (dans le panier)
// case "incart":
// //on récupère le bon produit dans la base de données
// $product = $manager->getOneById($_GET['id']);
// //on créé une ligne de panier avec :
// // - le produit complet
// // - la quantité à 1 (pour l'instant)
// // - et un total égal au prix du produit vu que la quantité est à 1
// $order = [
// "product" => $product,
// "qtt" => 1,
// "total" => $product->getPrice()
// ];
// //on insère la ligne panier dans le panier en session
// $_SESSION['cart'][] = $order;
// //un petit message de succès avec un lien pour aller au panier
// MS::setMessage(
// "success",
// "Produit ajouté au panier - <a href='recap.php'>Voir mon panier</a>"
// );
// //on redirige vers la liste des produits
// header("Location:index.php");
// die;

// //supprimer un produit avec son index
// case "delete":
// if (isset($_SESSION['cart'][$_GET['index']])) {
// $indexProduit = $_GET['index'];
// unset($_SESSION['cart'][$indexProduit]);
// MS::setMessage("success", "Produit supprimé avec succès !!");
// } else MS::setMessage("error", "Le produit demandé n'existe pas...");
// break;

// //vider la session
// case "clear":
// if (!empty($_SESSION['cart'])) {
// unset($_SESSION['cart']);
// MS::setMessage("success", "Liste des produits effacée !!");
// }
// break;
// } //fin du switch
// //dans le cas où l'action n'a redirigé nulle part
// header("Location:recap.php");
?>
<h1>coucou</h1>