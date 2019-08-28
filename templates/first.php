<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Etape 1</title>

  <link href="../public/styles/css/reset.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
  <link href="../public/styles/css/first.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<!-- CONNEXION BDD -->
  <?php include "../modele/coBdd.php" ?>
<!-- FIN CONNEXION BDD -->

<!-- APPEL FICHIERS  -->
  <?php include "../modele/afficheInviteFamille.php" ?>
  <?php include "../modele/afficheInviteCollegue.php" ?>
  <?php include "../modele/afficheInviteVoisin.php" ?>
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

<!-- CHOIX FAMILLE -->
<center>
  <form action="../modele/afficheInviteFamille.php" method="POST">
    <div class="form-group col-md-6">
     <label for="choixFamille" id="labelNone">Les membres des deux familles</label>
     <select class="form-control" id="choixFamille">
       <option selected>Les membres des deux familles</option>
       <?php while($donneesFamille = $reqFamille->fetch()) { ?>
       <option><?php echo $donneesFamille["nom"];?></option>
       <?php } ?>
     </select>
   </div>
  </form>
</center>
<!-- FIN CHOIX FAMILLE -->

<!-- CHOIX COLLEGUE-->
<center>
  <form action="../modele/afficheInviteCollegue.php" method="POST">
    <div class="form-group col-md-6">
     <label for="choixCollegue" id="labelNone">Les collègues</label>
     <select class="form-control" id="choixCollegue">
       <option selected>Les collègues</option>
       <?php while($donneesCollegue = $reqCollegue->fetch()) { ?>
       <option><?php echo $affiche["nom"];?></option>
       <?php } ?>
     </select>
   </div>
  </form>
</center>
<!-- FIN CHOIX COLLEGUE -->

<!-- CHOIX VOISINS-->
<center>
  <form action="../modele/afficheInviteVoisin.php" method="POST">
    <div class="form-group col-md-6">
     <label for="choixVoisin" id="labelNone">Les voisins</label>
     <select class="form-control" id="choixVoisin">
       <option selected>Les voisins</option>
       <?php while($donneesVoisin = $reqVoisin->fetch()) { ?>
       <option><?php echo $affiche["nom"];?></option>
       <?php } ?>
     </select>
   </div>
  </form>
</center>
<!-- FIN CHOIX VOISINS -->

<!-- VALIDATION -->
  <center>
    <a href="second.php">
      <button type="button" class="btn mb-5" id="validation">Valider !</button>
    </a>
  </center>
  <!-- FIN VALIDATION -->

  <!-- FOOTER -->
  <?php include "footer.php"; ?>
  <!-- FIN FOOTER -->
</body>

</html>
