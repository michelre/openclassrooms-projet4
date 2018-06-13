<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="icon" type="image/x-icon" href="images/ico/favicon.ico" />
	<script src="https://use.fontawesome.com/6f0fc455cc.js"></script>
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
	<title>Blog Jean FORTEROCHE</title>
	<script>
		tinymce.init({ selector:'textarea' });
	</script>
</head>
<body>
	<header>

		<?php include("public_menu.php"); ?>
	</header>


	<section>
		<div class="container">

			<h1><?php echo $article->getTitle(); ?></h1>
			<p><?php echo $article->getContent(); ?></p>
			
		</div>

		<div class="commentaires">
			
			 <?php foreach ($comments as $comment) { ?>

			<h3><?php echo $comment->getPseudonyme(); ?></h3>
			<p><?php echo $comment->getComments(); ?></p>
			<p><?php echo $comment->getCreationDate(); ?></p>
			<p><a href="?action=comment_manager&articleId=<?php echo $article->getId(); ?>">Signaler</a></p>
		<?php } ?>

			<h2>Publier un nouveau commentaire</h2>
			<form method="POST" action="?action=addComment&articleId=<?php echo $article->getId(); ?>">
				<input type="text" name="pseudonyme"></br>
				<textarea id="tinymce" name="content" placeholder="contenu de l'article"></textarea></br>
				<button type="submit">Publier</button>
			</form>
		</div>
	</section>

 <?php include("public_footer.php"); ?>
 
</body>
</html>
