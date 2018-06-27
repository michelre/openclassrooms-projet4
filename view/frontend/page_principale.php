<!DOCTYPE html>
<html>

<head>
    <?php include("view/common/public_head.php"); ?>
</head>

<body>
	<div class="container">
	<header>
		<?php include("view/common/public_menu.php"); ?>
	</header>

		<img src="public/images/USA_Alaska.jpg" alt="USA_Alaska">

	<section class="row">
		<article class="col-md-8">

			<div id="dernier_article">
			<h2><?php echo $article->getTitle(); ?></h2>
			<p><?php echo $article->getContent(); ?></p>		
			</div>
			<a href="?action=detailArticle&articleId=<?php echo $article->getId(); ?>">Voir la suite...</a>
		</article>
		<aside class="col-md-4 table-reponsive">
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
	<?php include("view/common/public_footer.php"); ?>
  	<?php include("view/common/include_scripts.php"); ?>
 	</div>
</body>
</html>
