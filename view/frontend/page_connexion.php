<?php


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <title>connexion</title>
</head>
<body>
  <header class="row">
    <h1 class="col-sm-5"><a href="page_principale.php">Billet pour l'Alaska</a>
    </h1>
    <div class="col-sm-offset-7 col-sm-5">Pas encore membre ? <a href="page_inscription.php"> Inscrivez-vous</a>
    </div>
  </header>
  <section class="row">
    <h2 class="col-sm-8 col-sm-offset-2">Pas encore membre ? Inscrivez-vous gratuitement</h2>

    <?php
    if(isset($_GET['error'])){
      echo '<p id="error">Nous ne pouvons pas vous identifier.</p>';
    }
    else if(isset($_GET['success'])){
      echo '<p id="success">Vous êtes maintenant connecté.</p>';
    }

    ?>

    <form class="col-sm-offset-1 col-sm-12 ">
      <table class="col-sm-4 col-sm-offset-2">

        <tr>
          <td><input class="form-control" type="Pseudonyme" name="Pseudonyme" placeholder="Pseudonyme" required></td>
        </tr>

        <tr>
          <td><input class="form-control" type="Password" name="Password" placeholder="Mot de passe" required></td>
        </tr>

      </table>
      <p><label><input type="checkbox" name="connect" checked> Connexion automatique</label></p>
      <button>Connexion</button>
    </form>
  </section>


</body>
</html>

