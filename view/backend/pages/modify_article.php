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
	<link rel="stylesheet" href="css/wbbtheme.css">
	<script src="js/jquery.wusibb.min.js"></script>
	<title>Blog Jean FORTEROCHE</title>
	<script src="https://use.fontawesome.com/6f0fc455cc.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
$(function() {
  $("#wysibb").wysibb();
})
</script>
</head>
<body>
	<?php

require_once 'database.php';
require_once 'function.php';

$article = getArticle($db,1,$_GET['id']);

if(isset($_GET['id'])){
	header('location:index.php');
}

if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
	header('location:index.php');
}

if(isset($_POST) AND !empty($_POST)){
	if(!empty($_POST['name']) AND !empty($_POST['content']) AND !empty($_POST['creationDate'])){
		$req = $db->prepare('UPDATE listarticles SET name = :name, content = :content, creationDate = :creationDate WHERE id = :id');
		$req->execute([
			'name' => $_POST['name'],
			'content' => $_POST['content'],
			'creationDate' => $_POST['creationDate'],
			'id' => $_POST['id'],
		]);
		$_SESSION['flash']['success'] = 'article modifié !';
	}
	else {
		$_SESSION['flash']['success'] = 'champs manquants !';
	}
	
}
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

			if(isset($_SESSION['flash']['success'])){
				echo '<div class="success">'.$_SESSION['flash']['success'].'</div>/';
			}
			elseif(isset($_SESSION['flash']['error'])){
				echo '<div class="error">'.$_SESSION['flash']['error'].'</div>/';
			}
			?>
			<form method="POST">
			<thead>
				<tr>
					<th><input type="text" name="name" value="<?= $article->name ?>"> Episodes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><textarea id="wysibb" name="content"><?= $article->content ?></textarea></td>
				</tr>
			</tbody>
			<button>Valider</button>
			</form>
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
</body>
</html>