<?php

class Controller
{
    // Une requête par fonction
    public function gauloisParLieu()
    {
        $user = "root";
        $pass = "password";

        $pdo = new PDO("mysql:host=localhost;dbname=gaulois", $user, $pass);
        $requete1 = $pdo->query("
        SELECT NOM, NOM_SPECIALITE, NOM_LIEU
        FROM villageois v, specialite s, lieu l
        WHERE v.ID_LIEU = l.ID_LIEU
        AND v.ID_SPECIALITE = s.ID_SPECIALITE
        ORDER BY NOM");
        require "./src/view/gauloisParLieu.php";
    }

    public function gauloisSpecialiteParVillage()
    {
        $user = "root";
        $pass = "password";

        $pdo = new PDO("mysql:host=localhost;dbname=gaulois", $user, $pass);
        $requete1 = $pdo->query("
        SELECT NOM, NOM_SPECIALITE, NOM_LIEU
        FROM villageois v, specialite s, lieu l
        WHERE v.ID_LIEU = l.ID_LIEU
        AND v.ID_SPECIALITE = s.ID_SPECIALITE
        ORDER BY NOM");
        require "./src/view/gauloisSpecialiteParVillage.php";
    }
    public function nombreDeGauloisParSpecialite()
    {
        $user = "root";
        $pass = "password";

        $pdo = new PDO("mysql:host=localhost;dbname=gaulois", $user, $pass);
        $requete1 = $pdo->query("
        SELECT COUNT(villageois.ID_SPECIALITE) AS TOTAL, specialite.NOM_SPECIALITE AS SPECIALITE FROM villageois, specialite 
        WHERE villageois.ID_SPECIALITE = specialite.ID_SPECIALITE 
        GROUP BY SPECIALITE ORDER BY TOTAL DESC");
        require "./src/view/nombreDeGauloisParSpecialite.php";
    }

    //  SELECT DATE_FORMAT("2017-06-15", "%Y"); 
    public function histortiqueBatailles()
    {
        $user = "root";
        $pass = "password";

        $pdo = new PDO("mysql:host=localhost;dbname=gaulois", $user, $pass);
        $requete1 = $pdo->query("
        SELECT DATE_FORMAT(bataille.DATE_BATAILLE,'%d %m %Y')  as 'DATE BATAILLE',bataille.NOM_BATAILLE as 'BATAILLE 1', lieu.NOM_LIEU AS 'LIEU 1'
        FROM bataille,lieu
        WHERE bataille.ID_LIEU = lieu.ID_LIEU
        ORDER BY 'DATE BATAILLE' DESC");
        require "./src/view/histortiqueBatailles.php";
    }

    public function erreurAction()
    {
        $message = "Erreur Action : action inexistante ou absente";
        require "./src/view/erreurAction.php";
    }
}
