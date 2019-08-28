<?php
$reqVoisin = $bdd->prepare('SELECT * FROM Personnes WHERE statut="Voisin"');
$reqVoisin->execute();

?>
