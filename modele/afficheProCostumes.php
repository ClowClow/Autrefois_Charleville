<?php
$reqCostume = $bdd->prepare('SELECT * FROM Personnes WHERE statut="Costumes"');
$reqCostume->execute();

?>
