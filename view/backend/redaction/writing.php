<?php

$db = new PDO('mysql:host=localhost;dbname=projet4-membres;charset=utf8', 'root', '');

if(isset($_POST['titlearticles'], $_POST['content'])){
	if(!empty($_POST['titlearticles']) AND !empty($_POST['content'])){
		$titlearticles = htmlspecialchars($_POST['titlearticles']);
		$content = htmlspecialchars($_POST['content']);

		$ins = $db->prepare('INSERT INTO listarticles (titlearticles, content, creationDate) VALUES (?, ?, now())');
		$ins->execute(array($titlearticles, $content));

		$message = 'votre aticle a bien été posté';
	}
	else{
		$error = 'veuillez remplir tous les champs';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="icon" type="image/x-icon" href="images/ico/favicon.ico" />
	<link rel="stylesheet" href="css/wbbtheme.css">
	<script src="public/js/jquery.wusibb.min.js"></script>
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

	// require_once 'database.php';
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

			
			<form method="POST">
			<thead>
				<tr>
					<th><input type="text" name="titlearticles" placeholder="titre"><br/></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><textarea id="wysibb" name="content" placeholder="contenu de l'article"></textarea><br/></td>
				</tr>
			</tbody>
			<button>Valider</button>
			</form>
			<?php if(isset($message)) { echo $message; } ?>
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