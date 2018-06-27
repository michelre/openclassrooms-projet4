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

  <section class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 table-responsive">
      <table class="table table-bordered table-striped table-condensed">
          <h3>Tous les articles</h3>
        <thead>
        <tr>
          <th>Titres</th>
          <th>Auteur</th>
          <th>Dates de publication</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article) { ?>
          <tr>
            <td><?php echo $article->getTitle(); ?></td>
            <td><?php echo $article->getPseudonyme(); ?></td>
            <td><?php echo $article->getCreationDate(); ?></td>
            <td>
              <a class="btn btn-primary" href="?action=modifyArticle&articleId=<?php echo $article->getId(); ?>">Modifier</a>
              <a class="btn btn-danger" href="?action=deleteArticle&articleId=<?php echo $article->getId(); ?>">Supprimer</a>
              <a class="btn btn-default" href="?action=showReportedComments&articleId=<?php echo $article->getId(); ?>">Voir les commentaires signalés</a>
            </td>

          </tr>
          <?php } ?>     
        </tbody>
      </table>
    <a class="btn btn-primary" href="?action=displayAddArticle">Ajouter un article</a>
    </div>
  </section>
  <?php include("view/common/public_footer.php"); ?>
  <?php include("view/common/include_scripts.php"); ?>
  </div>
</body>
</html>
