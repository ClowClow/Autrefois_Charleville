<!DOCTYPE HTML>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Se connecter</title>

  <link href="../public/styles/css/reset.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
  <link href="../public/styles/css/index.css" type="text/css" rel="stylesheet"/>
  <link href="../public/styles/css/co.css" type="text/css" rel="stylesheet"/>

</head>

<body>
<!-- NAVBAR -->
  <?php include "navbar.php"; ?>
<!-- FIN NAVBAR -->
<center>
<section class="card border-primary m-5" id="presentation" style="max-width: 40rem;">
  <div class="card-header coTexte" id="BGless"><h1>Connexion</h1></div>
  <div class="card-body">
    <form>
      <center>
        <div class="form-group">
         <label for="username" id="labelNone">Nom d'utilisateur</label>
         <input type="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Nom d'utilisateur">
         <small id="" class="form-text text-muted">Vos identifiants vous ont été fourni par votre professeur.</small>
       </div>
       <div class="form-group">
         <label for="password" id="labelNone">Mot de passe</label>
         <input type="password" class="form-control" id="password" placeholder="Mot de passe">
       </div>
        <a href="second.php">
          <button type="button" class="btn mb-5 mt-3" id="connect">Se connecter</button>
        </a>
      </center>
    </form>
  </div>
</section>
</center>
<!-- FOOTER -->
<?php include "footer.php"; ?>
<!-- FIN FOOTER -->
</body>

</html>
