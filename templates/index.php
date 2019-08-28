<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Autrefois Charleville</title>

  <link href="../public/styles/css/reset.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
  <link href="../public/styles/css/index.css" type="text/css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=eb+garamond|niconne&display=swap" rel="stylesheet">

  
</head>

<body>
<!-- NAVBAR -->
  <?php include "navbar.php"; ?>
<!-- FIN NAVBAR -->

<!-- SLIDER -->
<section class="slider">
  <?php include "slider.php"; ?>

</section>
<!-- FIN SLIDER-->

<!-- PRESENTATION-->
<center>
<section class="card border-primary mb-5" id="presentation" style="max-width: 40rem;">
  <div class="card-header" id="BGless">Et si vous pouviez remonter le temps et vivre à
    Charleville il y a 300 ans ?</div>
  <div class="card-body">
    <p class="card-text">Imaginez-vous dans la peau d'un carolomacérien du XVIIème
    siècle pour organiser un baptême ou un mariage selon les traditions de l'époque.
    Découvrez au fil de vos recherches les us et les coutumes de ceux qui ont contribué
    à créer l'histoire de la ville créée par Charles de Gonzague. Quels étaient les
    personnages invités à la cérémonie, dans quels quartiers vivaient-ils, quels
    étaient leurs métiers, pour certains oubliés, et quels quartiers d'alors existent
    encore aujourd'hui ? Venez jouer avec nous pour plonger dans le Charleville d'autrefois!
    </p>
  </div>
</section>
<a href="first.php">
  <button type="button" class="btn mb-5" id="jouer">Jouer !</button>
</a>
</center>
<!-- FIN PRESENTATION-->

<!-- CARDS EVENTS-->
<center>
<section class="d-inline-flex  flex-row flex-wrap justify-content-center col-md-12 mb-3">
  <div class="card text-white bg-primary m-3" id="event" style="max-width: 20rem;">
    <div class="card-header">Mettre ici la photo</div>
    <div class="card-body">
      <h4 class="card-title">Organiser un baptême</h4>
      <p class="card-text">Ajouter la description de l'événement baptême.</p>
    </div>
  </div>
  <div class="card text-white bg-primary m-3" id="event" style="max-width: 20rem;">
    <div class="card-header">Mettre ici la photo</div>
    <div class="card-body">
      <h4 class="card-title">Organiser un mariage</h4>
      <p class="card-text">Ajouter la description de l'événement mariage.</p>
    </div>
  </div>
  <div class="card text-white bg-primary m-3" id="event" style="max-width: 20rem;">
    <div class="card-header">Mettre ici la photo</div>
    <div class="card-body">
      <h4 class="card-title">Organiser des obsèques</h4>
      <p class="card-text">Ajouter la description de l'événement enterrement.</p>
    </div>
  </div>
</section>
</center>
<!-- FIN CARDS EVENTS -->

<!-- PARTIE PROFS -->
<center>
<section class="card border-primary mb-5" id="profs" style="max-width: 40rem;">
  <div class="card-header" id="BGless">Vous êtes professeur et vous voulez faire découvrir
    Charleville et son histoire à l'aide de la bdd créée par le CNRS à vos élèves ?</div>
  <div class="card-body">
    <p class="card-text"> De manière ludique, faites plonger vos élèves au coeur
      de Charleville du XVIème ou XVIIème siècle en utilisant un outil qui leur
      permettra d'accéder à toutes les informations récoltées lors des recencements
      effectués annuellement sur cette période et une liste d'informations complémentaires.
      Ainsi ils devront chercher en apprenant pour valider les deux étapes permettant
      de compléter cet atelier : établir la liste des invités et les prestataires de
      l'époque. Vous pourrez suivre en direct leur parcours et les aider tout au long
      de cette activité.
    </p>
  </div>
  <center>
  <button type="button" class="btn mb-5" id="inscription">S'inscrire !</button>
  </center>
</section>
</center>
<!-- FIN PARTIE PROFS -->

<!-- FOOTER -->
<?php include "footer.php"; ?>
<!-- FIN FOOTER -->
</body>

</html>
