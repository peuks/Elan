<?php
session_start();
require_once "MessageService.php";

if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    //ajout de produit
    case "add":
      if (isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $price = filter_input(
          INPUT_POST,
          "price",
          FILTER_SANITIZE_VALIDATE_FLOAT,
          FILTER_FLAG_ALLOW_FRACTION
        );
        $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

        if ($name && $price && $qtt) {
          $product = [
            "name" => $name,
            "price" => $price,
            "qtt" => $qtt,
            "total" => $price * $qtt,
          ];

          $_SESSION['products'][] = $product;
        }
      }
      header("Location:index.php");
      die();

    //supprimer un produit avec son index
case "delete":
      $indexProduit = $_GET['index'];
      unset($_SESSION['products'][$indexProduit]);
      MessageService::setMessage("Succes","Produit supprimé avec succès")
      break;

    //vider la session
    case "clear":
      unset($_SESSION['products']);
      MessageService::setMessage("Succes","List des produits effacée !!")
      break;
  } //fin du switch
  //dans le cas où l'action n'a redirigé nulle part
  header("Location:recap.php");
  die();
}
//on redirige vers index dans ces deux cas de figure :
// - soit on est arrivé ici sans $_GET['action']
// - soit on a une $_GET['action'] qui ne correspond à aucune action prévue
header("Location:index.php");
