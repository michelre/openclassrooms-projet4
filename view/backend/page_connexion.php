<!DOCTYPE html>
<html>
<head>
    <?php include("view/common/public_head.php"); ?>
</head>
<body>
  <div class="container">
  <header>
    <?php include("view/common/public_menu.php"); ?>
  </header>
  <div id="connexion">  
  <section class="row">
    <h2 class="col-md-8 col-md-offset-2">Pas encore membre ? Inscrivez-vous gratuitement</h2>

     <?php
    if (isset($_GET['error'])) {
        echo '<p id="error">Nous ne pouvons pas vous identifier.</p>';
    } else if (isset($_GET['success'])) {
        echo '<p id="success">Vous êtes maintenant connecté.</p>';
    }

    ?>

    <form class="col-sm-offset-1 col-sm-12 " action="?action=loginAction" method="POST">
      <div class="col-sm-4 col-sm-offset-2">

        <div class="form-group">
          <input class="form-control" type="Pseudonyme" name="pseudo" placeholder="Pseudonyme" required>
        </div>

        <div class="form-group">
         <input class="form-control" type="Password" name="password" placeholder="Mot de passe" required>
        </div>
      <button class="btn btn-primary">Connexion</button>
    </form>
  </section>
  </div>
  <?php include("view/common/public_footer.php"); ?>
  <?php include("view/common/include_scripts.php"); ?>
  </div>
</body>
</html>

