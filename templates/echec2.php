<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Essaie Encore</title>

  <link href="../public/styles/css/reset.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
  <link href="../public/styles/css/check.css" type="text/css" rel="stylesheet"/>

</head>

<body>
<!-- NAVBAR -->
  <?php include "navbar.php"; ?>
<!-- FIN NAVBAR -->

<center>
<section class="card border-primary m-5" id="presentation" style="max-width: 40rem;">
  <div class="card-header" id="BGless">Oups malheureusement ton formulaire comporte
  des erreurs !!</div>
  <figure>
    <img src="../public/images/validation/wrong.png"/>
  </figure>
  <div class="card-body">
    <p class="card-text">
      As-tu bien vérifié que tes invités appartenaient à la bonne époque
      (autour de 1750) ?
    </p>
    <a href="second.php">
      <button type="button" class="btn mb-5" id="suite">Nouvel Essai !</button>
    </a>
  </div>
</section>
</center>

<!-- FOOTER -->
<?php include "footer.php"; ?>
<!-- FIN FOOTER -->
</body>

</html>
