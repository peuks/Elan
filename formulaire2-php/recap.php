<?php include "head.php"; ?>

<?php include "navbar.php"; ?>

<body>

  <div class="container">
    <h2 class="white-text">Formulaire</h2>
    <!-- FORM CONTACT -->
    <div class="row ">
      <?php if (!isset($_SESSION["products"]) || empty($_SESSION['products'])) {
        //   !isset($_SESSION(['products']) || empty($_SESSION["products"]))
        echo "<h3> Aucun produit en session...</h3>",
          "<a href=\"/\" class=\"btn waves-effect waves-teal blue\">Ajouter un produit</a>";
      } else {
        echo "
              <div class=\"padding\">
              <table>",
          "<thead>",
          "<tr>",
          "<th>#</th>",
          "<th>X</th>",
          "<th>Nom</th>",
          "<th>Prix</th>",
          "<th>Quantité</th>",
          "<th>Total</th>",
          "</tr>",
          "</thead>",
          "</tbody>";
        foreach ($_SESSION['products'] as $index => $product) {
          echo "<tr>",
            "<td>" . ($index + 1) . "</td>",
            "<td> <a href=\"traitement.php?action=delete&index=$index\">&times</a> </td>",
            // traitement.php?action=add
            "<td>" . $product['name'] . "</td>",
            "<td>" . $product['price'] . " € </td>",
            "<td>" . $product['qtt'] . "</td>",
            "<td>" . $product['total'] . " € </td>";
        }
        echo "</tbody>", "</table>";
      } ?>
    </div>

  </div>
  <?php if (!isset($_SESSION["products"])) {
    echo "<div class=\"row\">",
      "<a action=\"traitement.php?action=add\" class=\"btn waves-effect waves-teal\">Vider le panier</a>",
      "</div>";
  } ?>
  
</body>
<!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="application.js" async defer></script>

</html>