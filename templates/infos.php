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
  <style>
  @import url('https://fonts.googleapis.com/css?family=EB+Garamond|Niconne&display=swap');
  </style>
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
        <span class="collapsible"></span>

        <div class="art-content">

          <p class="card-text">
            -La demande en mariage : Souvent le prétendant a pu sonder le terrain mais la demande officielle est faite par les parents du marié à ceux de la mariée. C’est « l’coup d’chapiau » où les questions de dot et d’intérêts sont âprement discutées. Aimer ne suffit pas, il faut le prouver : achat de bijoux, châles, d’assiettes au nom des époux… Les préparatifs se font sur plusieurs jours. Dès le jeudi on procède au nettoyage et à la décoration du local choisi. Le samedi, les noceilleux sont en palada (en grande cérémonie), on va chercher la jeune fille chez elle en cortège. Une chanson peut être entonnée : « Ouvrez-moi donc la porte ma mie si vous m’aimez ». Après quelques pourparlers la porte est ouverte le fiancé cherche sa belle, la trouve, la saisit et scelle d’un baiser sa prise de possession. Cette cérémonie accomplie, le cortège s’achemine vers la mairie (à partir du XIXe siècle) et l’église. Tout le village est là et pour se distinguer les invités portent un ruban de soie. Le cortège s’ébranle conduit par le « violoneux » suivi de la fiancée au bras de son père, le promis fermant la marche au bras de sa mère.
          </p>
          <p class="card-text">
            -Le jour des noces : Lors de la remise des alliances, l’époux doit introduire l’anneau jusqu’à la troisième phalange s’il veut acquérir la maîtrise du foyer ; si la femme plie le doigt, elle « portera la culotte ». Le repas est essentiel : « les invités ont plus d’appétit que de dévotion. Il a souvent lieu dans une grange préparée pour l’occasion. Les vieux sont à droite, les jeunes à gauche, les mariés au centre. Au milieu du repas on apporte un colis à la mariée : poupon rose en celluloïd ou autre symbole de vie (des petits oiseaux qu’elle remettait en liberté). Vers la fin du repas, un des garçons d’honneur se glisse discrètement sous la table pour enlever la jarretière de l’épouse. »
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
        <span class="collapsible"></span>

        <div class="art-content">
          <p class="card-text bold">Petit lexique</p>
          <p class="card-text bold">L’alun : sels isomorphes.</p>
          <p class="card-text bold">Mégir (verbe) : tanner une peau en utilisant l’alun.</p>
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
          festivités...
        </p>
        <span class="collapsible"></span>

        <div class="art-content">
          <p class="card-text">L’heure « indue » du mariage (...) en 1644 est une heure nocturne, car à partir de cette date, toutes les indications données par les registres paroissiaux sont postérieures au coucher du soleil . Les horaires se distribuent entre 7 heures du soir et 1 heure du matin en hiver, et entre 10 heures et 1 heure les soirs d’été . La moyenne est à 9 heures et demie en hiver et 11 heures en été, soit dans les deux cas quatre heures après le coucher du soleil.</p>

          <p class="card-text">Cette mode du mariage en soirée se répand progressivement. La proportion des mariages avec dispense d’heure passe de 2 % dans la décennie 1640-1649 à 8 % en 1670-1679. Comme dans les exemples cités, elle est souvent (dans un quart des cas) associée à une dispense de lieu. C’est bien l’insertion des fêtes familiales dans le temps et l’espace citadin que l’on voit changer.</p>

      </div>
      </div>
    </div>
  </section>
  <!-- FIN PARTIE NUIT -->

  <!-- FOOTER -->
  <?php include "footer.php"; ?>
  <!-- FIN FOOTER -->

  <script src="../public/js/script.js"></script>
</body>

</html>
