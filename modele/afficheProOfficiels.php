<?php
$reqOfficiel = $bdd->prepare('SELECT * FROM Personnes WHERE statut="Officiel"');
$reqOfficiel->execute();

?>
