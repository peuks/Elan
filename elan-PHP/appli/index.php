<?php
session_start();
require_once "MessageService.php";

// $MessageService::getMessage("error", "Je vous aime");
// $MessageService::getMessage("succes", "Et je vous kiffe !");
// $MessageService::getMessage("error", "Et je vous admire, en plus");

// var_dump(MessageService::getMessage());

// J"intègre le code présent dans MessageService.php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Ajout produit</title>
    </head>
    <body>
        <?php include "menu.php"; ?>
        <?php
        if (MessageService::getMessage("error")) {
          echo "<ul id='error'>";
        }
        foreach (MessageServic::getMessage("error") as $msg) {
          echo "<li>$msg</li>";
        }
        echo "</ul>";

        if (MessageService::getMessage("succes")) {
          echo "<ul id='succes'>";
        }
        foreach (MessageServic::getMessage("succes") as $msg) {
          echo "<li>$msg</li>";
        }
        echo "</ul>";
        ?>
    
        <form action="traitement.php?action=add" method="post">
            <h1>Ajouter un produit</h1>
            <p>
                <label>Nom du produit&nbsp;: </label>
                <input type="text" name="name">
            </p>
            <p>
                <label>Prix du produit&nbsp;: </label>
                <input type="number" step="any" name="price">
            </p>
            <p>
                <label>Quantité désirée&nbsp;:  </label>
                <input type="number" name="qtt" value="1">
            </p>
            <p class="submit-row">
                <input type="submit" name="submit" value="Ajouter le produit">
            </p>
        </form>
        
    </body>
</html>