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
    <div class="col-md-12 table-reponsive">
      <table class="table table-bordered table-striped table-condensed">
          <h3>Gestion des commentaires pour l'article <strong><?php echo $article->getTitle(); ?></strong></h3>  
        <thead>
        <tr>
          <th>Auteur du commentaire</th>
          <th>Commentaire</th>
          <th>Dates de publication</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($comments as $comment) { ?>
        <tr>
          <td><?php echo $comment->getPseudonyme(); ?></td>
          <td><?php echo $comment->getComments(); ?></td>
          <td><?php echo $comment->getCreationDate(); ?></td>
          <td>
            <a class="btn btn-danger" href="?action=deleteComment&commentId=<?php echo $comment->getId(); ?>">
              Supprimer
            </a>
          </td>
        </tr>
        </tbody>
          <?php } ?>
      </table>
    </div>
  </section>
  <?php include("view/common/public_footer.php"); ?>
  <?php include("view/common/include_scripts.php"); ?>
  </div>
</body>
</html>
