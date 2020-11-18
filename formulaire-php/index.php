<?php
session_start(); ?>
<?php $_SESSION["test"] = "Variable de session"; ?>



<h2>Formulaire avec POST</h2>

<form action="traitement.php" method="POST">
<label for="Produit1">
	Produit:<br>
    <input type="text" id="Produit1" name="name" placeholder="Nom du produit"><br>
    Prix:<br>
    <input type="number" id="Produit1" name="price" placeholder="Quel est son prix ? "><br>
	Quantite:<br>
    <input type="number" id="Produit1" name="quantity" placeholder="Quantité souhaité ?"><br>
</label> <br>


<input type="submit" value="Valider!">
</form>

<?php  ?>
<h4>Nom du produit</h4>
<p>

<?php if (isset($_POST["nom1"])) {
  echo $_POST["nom1"];
} ?>
</p> 
<h4>Prix du produit</h4>
<p> 
<?php if (isset($_POST["prix1"])) {
  echo $_POST["prix1"];
} ?></p>
<h4>Quantité</h4>
<p>
<?php if (isset($_POST["nom1"])) {
  echo $_POST["nom1"];
} ?>
</p>

<h4>Total</h4>
<p>
<?php if (isset($_POST["nom1"]) and isset($_POST["quantite1"])) {
  echo $_POST["prix1"] * $_POST["quantite1"];
} ?>€
</p>;