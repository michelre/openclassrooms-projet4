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
		<div class="container">
		<aside class="col-sm-12 table-reponsive">
			<table class="table table-bordered table-striped table-condensed">
				<caption>
					<h3>Gestion des commentaires</h3>
				</caption>

				<thead>
					<tr>
						<th>Auteur du commentaire</th>
						<th>Commentaire</th>
						<th>Article commenté</th>
						<th>Dates de publication</th>
					</tr>
				</thead>
				<tbody>
       			 <?php foreach ($comments as $comment) { ?>
					<tr>
						 <td><?php echo $article->getPseudonyme(); ?></td>
           				 <td><?php echo $article->getComments(); ?></td>
           				 <td><?php echo $article->getArticleId(); ?></td>
						 <td><?php echo $article->getCreationDate(); ?></td>
					</tr>
       			   
				</tbody>
				<a href="delete_comment.php?id=<?= $article->id ?>"><div class="action col-sm-4"><h5>Supprimer</h5></div></a>
				 <?php ?>
			</table>

		</aside>	
		</div>
	</section>
</body>
</html>