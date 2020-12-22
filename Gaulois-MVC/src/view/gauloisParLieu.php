<?php

ob_start(); // démarrer la temporisation
foreach ($requete1 as $value) {
    echo $value["NOM"] . "est originaire de" . " " . $value["NOM_LIEU"] . "</br>";
}
$titre = "Affichage d'une image";
$contenu = ob_get_clean();

require "template.php";
