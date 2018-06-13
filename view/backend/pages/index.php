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
			<?php

			$req = $db->query('SELECT * FROM listarticles');
			$listarticles = $req->fetchAll();

			foreach ($listarticles as $article): ?> 
			<div class="row">
				<div class="col-sm-10">
					<span class="title"><?= $article['titlearticles'] ?></span>
				</div>
				<div class="content">
					<p><?= $article['content'] ?><br/> Publié : <?= $article['creationDate'] ?></p>
				</div>
				<div class="action">
					<a href="single_article.php?id=<?= $article['ID'] ?>">Lire la suite...</a>
				</div>
			</div>	
			
			
			?php endforeach ?>
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