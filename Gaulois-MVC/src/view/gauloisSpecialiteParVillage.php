<?php

ob_start(); // démarrer la temporisation
foreach ($requete1 as $value) {
    echo $value["NOM"] . " est " . $value["NOM_SPECIALITE"] . "et est originaire de" . $value["NOM_LIEU"] . "</br>";
}
$titre = "Specialité des Villageois";
$contenu = ob_get_clean();

require "template.php";
