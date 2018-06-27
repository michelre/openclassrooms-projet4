<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Jean FORTEROCHE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Accueil</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Episodes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php foreach($articlesHeader as $articleHeader) { ?>
              <li><a href="?action=detailArticle&articleId=<?php echo $articleHeader->getId(); ?>"><?php echo $articleHeader->getTitle(); ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li>
          <?php if(isset($isConnected) && $isConnected) { ?>
            <a href="?action=logout" class="text-danger">Se déconnecter</a>
          <?php } ?>
            <?php if(!isset($isConnected) || !$isConnected) { ?>
              <a href="?action=adminHome">Admin</a>
            <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
