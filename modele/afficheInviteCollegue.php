<?php
$reqCollegue = $bdd->prepare('SELECT * FROM Personnes WHERE statut="Collegue"');
$reqCollegue->execute();

?>
