<?php
require "./src/controller/Controller.php";

$ctrl = new Controller();



if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "gauloisParLieu":
            $ctrl->gauloisParLieu();
            break;

        case "gauloisSpecialiteParVillage":
            $ctrl->gauloisSpecialiteParVillage();
            break;

        case "nombreDeGauloisParSpecialite":
            $ctrl->nombreDeGauloisParSpecialite();
            break;
        case "histortiqueBatailles":
            $ctrl->histortiqueBatailles();
            break;
        default:
            echo '<h1>ERREUR</h1>';
            $ctrl->erreurAction();
    }
} else {
    $ctrl->erreurAction();
}
