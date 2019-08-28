<?php
$reqArtiste = $bdd->prepare('SELECT * FROM Personnes WHERE statut="Artiste"');
$reqArtiste->execute();

?>
