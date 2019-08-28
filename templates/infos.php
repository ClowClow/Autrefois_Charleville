<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Page d'informations</title>

  <link href="../public/styles/css/reset.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
  <link href="../public/styles/css/infos.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <!-- NAVBAR -->
    <?php include "navbar.php"; ?>
  <!-- FIN NAVBAR -->

  <!-- PARTIE SELECTION -->
  <section class="d-inline-flex  flex-row flex-wrap justify-content-center col-md-12 mt-5 mb-5">
    <a href="##">
      <button type="button" class="btn" id="selectInfo">Mariage</button>
    </a>
    <a href="##">
      <button type="button" class="btn" id="selectInfo">Baptême</button>
    </a>
    <a href="##">
      <button type="button" class="btn" id="selectInfo">Obsèques</button>
    </a>
    <a href="##">
      <button type="button" class="btn" id="selectInfo">Métiers</button>
    </a>
    <a href="##">
      <button type="button" class="btn" id="selectInfo">Autres</button>
    </a>
  </section>
  <!-- FIN PARTIE SELECTION -->

  <!-- PARTIE MARIAGE -->
  <section class="cardCenter">
    <div class="card border-primary mb-5" id="infoMariage" style="max-width: 60rem;">
      <div class="card-header" id="BGless">Le mariage au XVIIème siècle</div>
      <div class="card-body">
        <p>Source : <a href="https://roadmovieblog.wordpress.com/2013/10/05/amours-et-mariages-en-france-dautrefois/20/"
          target="_blank">Accéder au site</a></p>
        <img src="../public/images/mariage.jpg" id="mariagePict"
        alt="Illustration d'un mariage du XVIIème siècle"/>
        <p class="card-text">-Faire sa cour : Le 1er mai est la nuit de la jeunesse.
          Les garçons « déménagent » sur la place du village divers objets hétéroclites
          et vont aussi, et surtout, planter les mais, jeunes arbres fraîchement coupés,
          devant la porte des jeunes filles.  Les filles bien honorées remercient
          les garçons et les convient à « arroser les mais » en les invitant à boire
          le dimanche suivant. En la matière les historiens locaux nous invitent
          par ailleurs ici à faire une double lecture de la chanson « La claire fontaine »…
        </p>
      </div>
    </div>
  </section>
  <!-- FIN PARTIE MARIAGE -->

  <!-- PARTIE METIERS -->
  <section class="cardCenter">
    <div class="card border-primary mb-5" id="metiers" style="max-width: 60rem;">
      <div class="card-header" id="BGless">Le métier de Mégissier</div>
      <div class="card-body">
        <p>Source : <a href="https://www.gite-la-tour.com/files/Sedan_1776_Tanneurs.pdf"
          target="_blank">Ouvrir le pdf</a></p>
        <img src="../public/images/megissier.jpg" id="megissier"
        alt="Illustration du métier de Mégissier"/>
        <p class="card-text">Mégissage : traiter les cuirs de la ganterie.
        L'"ouvrier mégissier" est une expression qui apparait vers 1210. Le mégissier
        travaille les peaux en les trempant dans des solutions à base de cendre et d'alun
        pour les mégir. Le mégissier se charge des petites peaux : ovins, caprins,
        porcins. Tandis que le tanneur s'occupe des grandes peaux : bovins et équidés.
        </p>
      </div>
    </div>
  </section>
  <!-- FIN PARTIE METIERS -->

  <!-- PARTIE CEREMONIE -->
  <section class="cardCenter">
    <div class="card border-primary mb-5" id="ceremonie" style="max-width: 60rem;">
      <div class="card-header" id="BGless">La cérémonie profane du mariage autrefois</div>
      <div class="card-body">
        <p>Source : <a href="http://www.crdp-strasbourg.fr/data/histoire/alsace_XV-XVI/celebration_mariage.php?parent=7"
          target="_blank">Accéder au site</a></p>
        <!--<img src="../public/images/" id=""
        alt=""/>-->
        <p class="card-text">Les festivités du mariage : celles-ci se déroulent
          traditionnellement sur deux jours et réunissent plusieurs dizaines de
          personnes puisqu’on limite à quarante le nombre de convives.
          La cérémonie religieuse a lieu le matin, elle est suivie d’un repas de midi,
          puis d’un repas du soir. Ces deux repas sont composés de multiples plats,
          en particulier de viandes différentes.
        </p>
      </div>
    </div>
  </section>
  <!-- FIN PARTIE CEREMONIE -->

  <!-- PARTIE NUIT -->
  <section class="cardCenter">
    <div class="card border-primary mb-5" id="nuit" style="max-width: 60rem;">
      <div class="card-header" id="BGless">Le mariage de nuit</div>
      <div class="card-body">
        <p>Source : <a href="http://www.cairn.info/revue-dix-septieme-siecle-2009-3-page-523.htm#"
          target="_blank">Accéder au site</a></p>
        <!--<img src="../public/images/" id=""
        alt=""/>-->
        <p class="card-text">À quelle heure se mariait-on sous l’Ancien Régime ?
          Cette question n’a jamais été étudiée de façon systématique. Or, bien
          que la mention de l’heure de la célébration ne soit pas obligatoire dans
          les registres paroissiaux, on la trouve assez souvent au XVIIe siècle
          pour pouvoir en faire une analyse. L’horaire de la cérémonie religieuse
          est en effet un indicateur précieux : il détermine le déroulement des
          festivités
        </p>
      </div>
    </div>
  </section>
  <!-- FIN PARTIE NUIT -->

  <!-- FOOTER -->
  <?php include "footer.php"; ?>
  <!-- FIN FOOTER -->
</body>

</html>
