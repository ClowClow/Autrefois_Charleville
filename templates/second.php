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
