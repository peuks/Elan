<?php

ob_start(); // démarrer la temporisation
foreach ($requete1 as $value) {
    echo "Il y a " . $value["TOTAL"] . " " . $value["SPECIALITE"] . "(s)" . "</br>";
}
$titre = "Gaulois par Spécialité";
$contenu = ob_get_clean();

require "template.php";
