<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Etape 2</title>

  <link href="../public/styles/css/reset.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
  <link href="../public/styles/css/second.css" type="text/css" rel="stylesheet"/>
</head>

<body>

  <!-- CONNEXION BDD -->
    <?php include "../modele/coBdd.php"; ?>
  <!-- FIN CONNEXION BDD -->

  <!-- APPEL FICHIERS  -->
    <?php include "../modele/afficheProOfficiels.php";
          include "../modele/afficheProCostumes.php";
          include "../modele/afficheProRepas.php";
          include "../modele/afficheProArtistes.php";
    ?>
  <!-- FIN APPEL FICHIERS -->

  <!-- NAVBAR -->
    <?php include "navbar.php"; ?>
  <!-- FIN NAVBAR -->

<!-- ENTÊTE -->
<section class="d-inline-flex  flex-row flex-wrap justify-content-around col-md-12 m-5">
  <figure class="d-inline-flex flex-col justify-content-center align-items-center col-md-6" id="listInvit">
    <img src="../public/images/champenoise.jpg" id="lady"
    alt="Illustration représentant un registre notarial"/>
  </figure>
  <div class="jumbotron col-md-6">
    <h1 class="display-3">Etape 2: Trouver les professionnels !</h1>
    <p class="lead">La liste des invités est établie, ils viendront tous.
    Donc il faut à présent trouver les différents professionnels qui leur
    permettront d'avoir une belle cérémonie. Ils ont besoin de toi pour les aider
    à constituer la liste de ces différents prestataires.</p>
    <hr class="my-4">
    <p id="consignes">Tu devras trouver parmi les propositions:<br/>
      <ul>
        <li id="consignes"> > Les officiels pour légaliser le mariage</li>
        <li id="consignes"> > Les personnes qui fabriquent leur costumes</li>
        <li id="consignes"> > Les professionnels qui leur fourniront un repas
        de noces</li>
        <li id="consignes"> > Les artistes pour organiser la cérémonie profane</li>
      </ul>
    </p>
  </div>
</section>
<!-- FIN ENTÊTE -->

<!-- CHOIX OFFICIELS -->
<center>
  <form action="../modele/afficheProOfficiels.php" method="POST">
    <div class="d-flex justify-content-center">
    <div class="form-group col-md-6" >

     <label for="choixOfficiels" id="labelNone">Les officiels des 2 familles</label>
           <select class="form-control" id="choixOfficiels" >
       <option selected>Les officiels des 2 familles</option>
       <?php while($donneesOfficiel = $reqOfficiel->fetch()) { ?>
       <option><?php echo $donneesOfficiel["nom"];?></option>
       <?php } ?>
     </select>
     </div>
     <p class="p-tlp" data-toggle="tooltip" data-placement="bottom" title="As-tu pensé à regarder les infos sur les mariages civils?">?</p>
     </div>
  </form>
</center>
<!-- FIN CHOIX OFFICIELS -->

<!-- CHOIX COSTUMES-->
<center>
  <form action="../modele/afficheProCostumes.php" method="POST">
    <div class="d-flex justify-content-center">

    <div class="form-group col-md-6">
     <label for="choixCostumes" id="labelNone">Les personnes pour les costumes</label>
     <select class="form-control" id="choixCostumes">
       <option selected>Les personnes pour les costumes</option>
       <?php while($donneesCostume = $reqCostume->fetch()) { ?>
       <option><?php echo $donneesCostume["nom"];?></option>
       <?php } ?>
     </select>
     </div>
     <p class="p-tlp" data-toggle="tooltip" data-placement="bottom" title="Différents corps de métier peuvent être ici utiles">?</p>
   </div>
  </form>
</center>
<!-- FIN CHOIX COSTUMES -->

<!-- CHOIX REPAS-->
<center>
  <form action="../modele/afficheProRepas.php" method="POST">
    <div class="d-flex justify-content-center">

    <div class="form-group col-md-6">
     <label for="choixVoisin" id="labelNone">Les professionnels pour le repas</label>
     <select class="form-control" id="choixVoisin">
       <option selected>Les professionnels pour le repas</option>
       <?php while($donneesRepas = $reqRepas->fetch()) { ?>
       <option><?php echo $donneesRepas["nom"];?></option>
       <?php } ?>
     </select>
     </div>
     <p class="p-tlp" data-toggle="tooltip" data-placement="bottom" title="Penses bien à vérifier les dates de naissances">?</p>
   </div>
  </form>
</center>
<!-- FIN CHOIX REPAS -->

<!-- CHOIX ARTISTES-->
<center>
  <form action="../modele/afficheProArtistes.php" method="POST">
    <div class="d-flex justify-content-center">

    <div class="form-group col-md-6">
     <label for="choixArtistes" id="labelNone">Les artistes</label>
     <select class="form-control" id="choixArtistes">
       <option selected>Les artistes</option>
       <?php while($donneesArtiste = $reqArtiste->fetch()) { ?>
       <option><?php echo $donneesArtiste["nom"];?></option>
       <?php } ?>
     </select>
     </div>
     <p class="p-tlp" data-toggle="tooltip" data-placement="bottom" title="Attention, il y a peut-être un piège...">?</p>
   </div>
  </form>
</center>
<!-- FIN CHOIX ARTISTES -->

<!-- VALIDATION -->
  <center>
    <a href="##">
      <button type="button" class="btn mb-5" id="validation">Valider !</button>
    </a>
  </center>
  <!-- FIN VALIDATION -->

  <!-- FOOTER -->
  <?php include "footer.php"; ?>
  <!-- FIN FOOTER -->
</body>

</html>
