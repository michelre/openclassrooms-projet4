<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="icon" type="image/x-icon" href="images/ico/favicon.ico"/>
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
	<title>Blog Jean FORTEROCHE</title>
	<script>
		tinymce.init({ selector:'textarea' });
	</script>
</head>
<body>
	
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

			<h2>Ajouter un nouvelle article</h2>
			<form method="POST" action="?action=postArticle&id=<?php echo $article->getId(); ?>">
			<thead>
				<tr>
					<th><input type="text" name="titlearticles" placeholder="titre"><br/></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><textarea id="tinymce" name="content" placeholder="contenu de l'article"></textarea><br/></td>
				</tr>
			</tbody>
			<button type="submit">Publier</button>
			</form>
			
		</div>
	</section>

</body>
</html>