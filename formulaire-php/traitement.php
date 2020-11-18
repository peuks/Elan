<?php session_start(); ?>


<!-- Créer un variable produit qui contient comme paramètre Nom prix et le total  -->
<!-- Si il y a quelque chose dans les inputs du formulaires -->
<?php if (!empty($_POST)) {
  $quantite = filter_input(INPUT_POST, "quantity", FILTER_SANITIZE_NUMBER_INT);
  $prix = filter_input(INPUT_POST, "price", FILTER_SANITIZE_NUMBER_INT);
  $nom = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
  $total = $prix * $quantite;

  // Regarder les Filters Inputs

  // Si j'ai bien $quantite, $nom et $prix, je peux créer un tableau/ ash
  $product = [
    "name" => $nom,
    "quantity" => $quantite,
    "price" => $prix,
    "total" => $prix * $quantite,
  ];
  // Créer le tableau ( vérifier qu'il n'existe pas déjà )
  if (!isset($_SESSION["products"])) {
    $_SESSION["products"] = [];
  }
  $_SESSION["products"][] = $product;

  header("Location:recap.php");
}

?>
