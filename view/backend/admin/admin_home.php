<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="icon" type="image/x-icon" href="images/ico/favicon.ico"/>
	<title>Blog Jean FORTEROCHE</title>
</head>
<body>
	<header>
		<div class="navbar navbar-default">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Jean FORTEROCHE</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Accueil</a></li>
				<li><a href="#">connexion</a>
				<li><a href="#">administrateur</a></li>
			</ul>
		</div>
	</header>
	<section>
		<div class="article_and_comments">
			<h3>Articles:<a href="postArticle.php">Ajouter un article</a></h3>
			<h3>Commentaires:<a href="admin_comment.php">Voir les commentaires</a></h3>
		</div>
		<div class="container">
		<aside class="col-sm-12 table-reponsive">
			<table class="table table-bordered table-striped table-condensed">
				<caption>
					<h3>Tous les articles</h3>
				</caption>

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
						 	<a href="?action=modifyArticle&articleId=<?php echo $article->getId(); ?>">Modifier</a>
						 	<a href="?action=deleteArticle&articleId=<?php echo $article->getId(); ?>">Supprimer</a>
						 </td>

					</tr>
       			   <?php } ?>
				</tbody>
			</table>

		</aside>	
		</div>
	</section>
</body>
</html>