<?php
session_start();
if (isset($_GET["action"])) {
  switch ($_GET["action"]) {
    case "add":
      if (isset($_POST["submit"])) {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $price = filter_input(
          INPUT_POST,
          "price",
          FILTER_SANITIZE_NUMBER_FLOAT,
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
      break;
    case "delete":
      $indexProduit = $_GET['index'];
      unset($_SESSION['products'][$indexProduit]);
      $_SESSION["products"] = array_values($_SESSION["products"]);
      header("Location:recap.php");
      die();
    // break;
    case "clear":
      unset($_SESSION["products"]);
      // header("Location:recap.php");
      break;
  }
  // header("Location:recap.php");
  // die();
}

header("Location:../index.php");
?>
