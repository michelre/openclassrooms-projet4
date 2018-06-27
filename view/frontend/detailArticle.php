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
    <h1><?php echo $article->getTitle(); ?></h1>
    <p><?php echo $article->getContent(); ?></p>
    <div class="col-md-6">

      <?php foreach ($comments as $comment) { ?>

        <h3><?php echo $comment->getPseudonyme(); ?></h3>
        <p><?php echo $comment->getComments(); ?></p>
        <p><?php echo $comment->getCreationDate(); ?></p>
        <p>
            <?php if ($comment->isReported()) { ?>
              <span class="text-danger">Déjà signalé</span>
            <?php } ?>

            <?php if (!$comment->isReported()) { ?>
              <a href="?action=reportComment&commentId=<?php echo $comment->getId(); ?>">Signaler</a>
            <?php } ?>
        </p>
      <?php } ?>
    </div>
      <div class="col-md-8">
      <h3>Laisser un commentaire</h2>
      <form method="POST" action="?action=addComment&articleId=<?php echo $article->getId(); ?>">
      <div class="form-group">
        <input type="text" name="pseudonyme" placeholder="pseudonyme" class="form-control" required>
      </div>
      <div class="form-group">
        <textarea id="textarea" name="content" placeholder="Votre commentaire" class="form-control" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Publier</button>
    </form>
    </div>
  </section>
  <?php include("view/common/public_footer.php"); ?>
  <?php include("view/common/include_scripts.php"); ?>
  </div>
</body>
</html>
