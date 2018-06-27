<!DOCTYPE html>
<html>
<head>
    <?php include("view/common/public_head.php"); ?>
  <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({ selector:'textarea' });
  </script>
</head>
<body>
  <div class="container">
  <header>
    <?php include("view/common/public_menu.php"); ?>
  </header>
  <section>
    <h2>Ajouter un nouvel article</h2>
    <form method="POST" action="?action=postArticle">
      <div class="form-group">
      <input type="text" name="title" placeholder="titre" class="form-control">
      </div>
      <div class="form-group">
      <input type="text" name="pseudonyme" placeholder="pseudonyme" class="form-control">
      </div>
      <div class="form-group">
      <textarea id="tinymce" name="content" placeholder="contenu de l'article" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Publier</button>
    </form>
  </section>
  <?php include("view/common/public_footer.php"); ?>
  <?php include("view/common/include_scripts.php"); ?>
  </div>
</body>
</html>
