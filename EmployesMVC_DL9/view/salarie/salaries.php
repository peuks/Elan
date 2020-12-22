<?php 
    $salaries = $data["salaries"];
?>

<a href="index.php?ctrl=home&method=index">Retour accueil</a>
<h1>Liste des salariés</h1>

<table class="minimalistBlack">
    <thead>
        <tr>
            <th>SALARIE</th>
            <th>VILLE</th>
            <th>DATE NAISSANCE</th>
            <th>ENTREPRISE</th>
            <th>DATE EMBAUCHE</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($salaries as $salarie) { ?>
                <tr>
                    <td><a href=""><?= $salarie ?></a></td>
                    <td><?= $salarie->getVille() ?></td>
                    <td><?= $salarie->getDateNaissance() ?></td>
                    <td><?= $salarie->getEntreprise() ?></td>
                    <td><?= $salarie->getDateEntree() ?></td>
                    <td></td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>

