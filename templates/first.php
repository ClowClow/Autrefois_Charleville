<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Etape 1</title>

  <link href="../public/styles/css/reset.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
  <link href="../public/styles/css/first.css" type="text/css" rel="stylesheet"/>

</head>

<body>
<!-- CONNEXION BDD -->
  <?php include "../modele/coBdd.php"; ?>
<!-- FIN CONNEXION BDD -->

<!-- APPEL FICHIERS  -->
  <?php include "../modele/afficheInviteFamille.php";
        include "../modele/afficheInviteCollegue.php";
        include "../modele/afficheInviteVoisin.php"; ?>
<!-- FIN APPEL FICHIERS -->

<!-- NAVBAR -->
  <?php include "navbar.php"; ?>
<!-- FIN NAVBAR -->

<!-- ENTÊTE -->
<section class="d-inline-flex  flex-row flex-wrap justify-content-around col-md-12 m-5">
  <figure class="d-inline-flex flex-col justify-content-center align-items-center col-md-6" id="listInvit">
    <img src="../public/images/notaires.jpg" id="notaire"
    alt="Illustration représentant un registre notarial"/>
  </figure>
  <div class="jumbotron col-md-6">
    <h1 class="display-3">Etape 1: Créer la liste d'invités !</h1>
    <p class="lead">Nous sommes en 1750 à Charleville : Nicolas Brion et Marie-Jeanne
    Rousseaux viennent de publier leurs bans en prévision de leur marriage fixé le
    7 avril. Ils ont besoin de toi pour les aider à constituer la liste de leurs
    invités.</p>
    <hr class="my-4">
    <p id="consignes">Tu devras trouver parmi toutes les propositions:<br/>
      <ul>
        <li id="consignes"> > Les 10 membres de leurs familles</li>
        <li id="consignes"> > Leurs 10 voisins</li>
        <li id="consignes"> > Les 5 collègues</li>
      </ul>
    </p>
  </div>
</section>
<!-- FIN ENTÊTE -->

<form action="../modele/validation1.php" method="POST">
<!-- CHOIX FAMILLE -->
<center>
  <section action="../modele/afficheInviteFamille.php">
    <div class="d-flex justify-content-center">
      <div class="form-group col-md-6">
       <label for="choixFamille" id="labelNone">Les membres des deux familles</label>
       <select class="form-control selectpicker show-tick" multiple
        title="Les membres des deux familles" id="choixFamille">
         <?php while($donneesFamille = $reqFamille->fetch()) { ?>
         <option type="checkbox"><?php echo $donneesFamille["nom"].' '.$donneesFamille["prenom"];?></option>
         <?php } ?>
       </select>
      </div>
      <p class="p-tlp" data-toggle="tooltip" data-placement="bottom" title="Pense à regarder aussi
      les données indiquées dans l'onglet ménage ! ">?</p>
    </div>
  </section>
</center>
<!-- FIN CHOIX FAMILLE -->

<!-- CHOIX COLLEGUE-->
<center>
  <section action="../modele/afficheInviteCollegue.php">
    <div class="d-flex justify-content-center">
      <div class="form-group col-md-6">
       <label for="choixCollegue" id="labelNone">Les collègues</label>
       <select class="form-control selectpicker show-tick" multiple
        title="Les collègues" id="choixCollegue">
         <?php while($donneesCollegue = $reqCollegue->fetch()) { ?>
         <option><?php echo $donneesCollegue["nom"].' '.$donneesCollegue["prenom"];?></option>
         <?php } ?>
       </select>
     </div>
     <p class="p-tlp" data-toggle="tooltip" data-placement="bottom" title="Ne vous
     contentez pas de regarder l'année 1750 pour les collègues des mariés">?</p>
   </div>
 </section>
</center>
<!-- FIN CHOIX COLLEGUE -->

<!-- CHOIX VOISINS-->
<center>
  <section action="../modele/afficheInviteVoisin.php">
    <div class="d-flex justify-content-center">
      <div class="form-group col-md-6">
       <label for="choixVoisin" id="labelNone">Les voisins</label>
       <select class="form-control selectpicker show-tick" multiple
        title="Les voisins" id="choixVoisin">
         <?php while($donneesVoisin = $reqVoisin->fetch()) { ?>
         <option><?php echo $donneesVoisin["nom"].' '.$donneesVoisin["prenom"];?></option>
         <?php } ?>
       </select>
     </div>
     <p class="p-tlp" data-toggle="tooltip" data-placement="bottom" title="Attention
     à rester logique dans votre recherche">?</p>
    </div>
  </section>
</center>
<!-- FIN CHOIX VOISINS -->


<!-- VALIDATION -->
  <center>
    <a href="second.php">
      <button name="submit" type="submit" class="btn mb-5" id="validation">Valider !</button>
    </a>
  </center>
  <!-- FIN VALIDATION -->
</form>
  <!-- FOOTER -->
  <?php include "footer.php"; ?>
  <!-- FIN FOOTER -->
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<!-- JS BOOTSTRAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
<!-- JS BOOTSTRAP SELECT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
</body>

</html>
