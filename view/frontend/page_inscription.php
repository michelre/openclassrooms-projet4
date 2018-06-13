
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title>Inscription</title>
</head>
<body>
	<header class="row">
		<h1 class="col-sm-5"><a href="page_principale.php">Billet pour l'Alaska</a>
		</h1>
		<div class="col-sm-offset-7 col-sm-5">Déjà membre ? <a href="page_connexion.php"> connectez-vous</a>
		</div>
	</header>
	<section class="row">
		<h2 class="col-sm-8 col-sm-offset-2">Pas encore membre ? Inscrivez-vous gratuitement</h2>

		<?php
		if(isset($_GET['error'])){
			if (isset($_GET['pass'])) {
				echo '<p id="error">Les mots de passe ne sont pas identiques.</p>';
			}
			else if(isset($_GET['email'])) {
				echo '<p id="error">Cete adresse email est déjà prise.</p>';
			}
		}
		else if(isset($_GET['success'])) {
				echo '<p id="success">Inscription correctement prise en compte.</p>';
			}
		  
		 ?>

		<form class="col-sm-offset-1 col-sm-12 ">
			<table class="col-sm-4 col-sm-offset-2">
				
				<tr>
					<td><input class="form-control" type="pseudonyme" name="pseudonyme" placeholder="pseudonyme" required></td>
				</tr>
				<tr>
					<td><input class="form-control" type="email" name="email" placeholder="E-mail" required></td>
				</tr>
				<tr>
					<td><input class="form-control" type="password" name="password" placeholder="Mot de passe" required></td>
				</tr>
				<tr>
					<td><input class="form-control" type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required></td>
				</tr>

			</table>
			<button>Inscription</button>
		</form>
	</section>


</body>
</html>

