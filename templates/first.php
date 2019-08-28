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
