<?php
session_start()

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" type="image/x-icon" href="images/ico/favicon.ico" />
	<title>Blog Jean FORTEROCHE</title>
</head>
<body>
	<?php

require_once 'database.php';
require_once 'function.php';

$article = getArticle($db,1,$_GET['id']);
	?>
	<header>
		<div class="navbar navbar-default">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Jean FORTEROCHE</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Accueil</a></li>
				<li><a href="#">Episodes</a>
				<li><a href="#">Inscription</a></li>
				<li><a href="#">Connexion</a></li>
			</ul>
		</div>
	</header>

	<section>
		<div class="container">
			<h1><?= $article->name ?></h1>
			<h5><?= $article->content ?></h5>
				<div class="pull-right"><?= $article->content ?></div>

		<?php

		if(isset($_SESSION['admin']) AND !empty($_SESSION['admin'])): ?>
		<div class="row">
			<a href="delete_article.php?id=<?= $article->id ?>"><div class="action col-sm-4"><h5>Supprimer</h5></div></a>
			<a href="modify_article.php?id=<?= $article->id ?>"><div class="action col-sm-4"><h5>Modifier</h5></div></a>
			<a href="admin/"><div class="action col-sm-4"><h5>Espace Admin</h5></div></a>
		</div>

		<?php endif ?>
		</div>
	</section>
<footer>
		<div class="row">
		<div class="col-sm-4">
			<h3>Plus d'infos</h3>
			<p><a href="#">Auteur</a></p>
			<p><a href="#">Contact</a></p>
		</div>
		<div class="col-sm-offset-4 col-sm-4">
			<h3>Plus de contact</h3>
			<button class="btn btn-primary btn-lg"><i class="fab fa fa-facebook"></i></button>
			<button class="btn btn-primary btn-lg"><i class="fab fa fa-twitter"></i></button>
			<button class="btn btn-primary btn-lg"><i class="fab fa fa-linkedin"></i></i></button>
			<button class="btn btn-primary btn-lg"><i class="fab fa fa-instagram"></i></button>
			<button class="btn btn-primary btn-lg"><i class="fab fa fa-youtube"></i></button>
		</div>
	</footer>
	<script src="https://use.fontawesome.com/6f0fc455cc.js"></script>
</body>
</html>