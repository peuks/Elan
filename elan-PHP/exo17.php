<?php
include "Account.php";
include "Owner.php";
?>

<p>
    Pour créer un compte 
</p>
<ul>
    <li>
        Il faut d'abord créer l'utilisateur
    </li>

    <li>
        Maintenant on peut créer un compte
    </li>
    
    <li>
        Quand le compte est créer, il faut le rajouter à la liste des comptes de l'utilisateur
    </li>
</ul>

<h2>Création de l'utilisateur David </h2>
<?php
$David = new Owner("David", "Vanamk", "25/01/1990", "Strasbourg");
$compteBoursorama = new Account("Compte pour les putes", 350, "€", $David);
$compteRevolut = new Account("Compte secret", 120, "€", $David);
?>

<?php
// echo $David->getAccounts();
// echo $David->getAccounts();
$compteBoursorama->setAmount(50);
var_dump($David);
?>

