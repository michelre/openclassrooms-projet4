<!DOCTYPE html>
<html>
<head>
    <?php include("view/common/public_head.php"); ?>
  <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({selector: 'textarea'});
  </script>
</head>
<body>
  <div class="container">
  <header>
    <?php include("view/common/public_menu.php"); ?>
  </header>

  <section class="row">
    <div class="col-md-12">
    <h2>Modifier un article</h2>
    <form method="POST" action="?action=modifyArticleAction&articleId=<?php echo $article->getId(); ?>">
      <div class="form-group">
        <input class="form-control" type="text" name="title" value="<?php echo $article->getTitle(); ?>" placeholder="titre">
      </div>
      <div class="form-group">
        <textarea id="tinymce" class="form-control" name="content" placeholder="contenu de l'article"><?php echo $article->getContent(); ?></textarea>
      </div>
      <button class="btn btn-primary" type="submit">Mettre à jour</button>
    </form>
    </div>
  </section>
  <?php include("view/common/public_footer.php"); ?>
  <?php include("view/common/include_scripts.php"); ?>
  </div>
</body>
</html>
