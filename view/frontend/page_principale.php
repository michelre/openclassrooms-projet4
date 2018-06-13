<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="icon" type="image/x-icon" href="images/ico/favicon.ico"/>
	<script src="https://use.fontawesome.com/6f0fc455cc.js"></script>
	<title>Blog Jean FORTEROCHE</title>
</head>

<body>
	<header>
		
		<?php include("public_menu.php"); ?>

		<div class="col-xs-12 col-sm-12 col-md-12"><img src="public/images/USA_Alaska.jpg" alt="USA_Alaska">
		</div>

	</header>

	<section class="row">
		<article class="col-sm-8">
		
			<div id="dernier_article">
			<h2><?php echo $article->getTitle(); ?></h2>
			<p><?php echo $article->getContent(); ?></p>
			<a href="?action=detailArticle&articleId=<?php echo $article->getId(); ?>">Voir la suite...</a>
			</div>
		</article>
		<aside class="col-sm-4 table-reponsive">
			<table class="table table-bordered table-striped table-condensed">
				<caption>
					<h3>Billet simple pour l'Alaska</h3>
				</caption>
				<thead>
					<tr>
						<th>Episodes</th>
						<th>Dates de publication</th>
					</tr>
				</thead>
				<tbody>
       			 <?php foreach ($articles as $article) { ?>
					<tr>
						<td>
              				<a href="?action=detailArticle&articleId=<?php echo $article->getId(); ?>">
                 			 <?php echo $article->getTitle(); ?>
              				</a>
           				 </td>
						 <td><?php echo $article->getCreationDate(); ?></td>
					</tr>
       			 <?php } ?>
				</tbody>
			</table>

		</aside>
	</section>

	<?php include("public_footer.php"); ?>
	
</body>
</html>
