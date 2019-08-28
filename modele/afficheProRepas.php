<?php
$reqRepas = $bdd->prepare('SELECT * FROM Personnes WHERE statut="Repas"');
$reqRepas->execute();

?>
