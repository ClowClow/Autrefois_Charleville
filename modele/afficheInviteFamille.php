<?php
$reqFamille = $bdd->prepare('SELECT * FROM Personnes WHERE statut="Famille"');
$reqFamille->execute();

?>
