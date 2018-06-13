<?php

require_once('controller/FrontendController.php');
require_once('controller/BackendController.php');

$frontendController = new FrontendController();
$backendController = new BackendController();

if(!isset($_GET['action'])){
    $frontendController->listArticles();
    return;
}
if($_GET['action'] === 'listarticles'){
    $frontendController->listArticles();
    return;
}
if($_GET['action'] === 'detailArticle'){
    $frontendController->detailArticle($_GET['articleId']);
    return;
}
if($_GET['action'] === 'dernierArticle'){
    $frontendController->dernierArticle();
    return;
}
if($_GET['action'] === 'addComment'){
    $frontendController->postComment($_GET['articleId'], $_POST['pseudonyme'], $_POST['content']);
    return;
}
if($_GET['action'] === 'register'){
    $frontendController->displayRegisterPage();
    return;
}

if($_GET['action'] === 'login'){
    $backendController->displayLoginPage();
    return;
}
if($_GET['action'] === 'loginAction'){
    $backendController->loginAction($_POST['pseudonyme'], $_POST['password']);
    return;
}

if(!isset($_GET['action'])){
    $backendController->listArticles();
    return;
}
if($_GET['action'] === 'adminHome'){
    $backendController->displayAdminHome();
    return;
}
if($_GET['action'] === 'postArticle'){
    $backendController->postArticle($_GET['articleId'], $_POST['pseudonyme'], $_POST['content']);
    return;
}
if($_GET['action'] === 'modifyArticle'){
    $backendController->modifyArticle($_GET['articleId']);
    return;
}
if($_GET['action'] === 'deleteArticle'){
    $backendController->deleteArticle($_GET['articleId']);
    return;
}






/**
 * 1. Afficher les commentaires sur la page de détail des articles
 * 2. Donner la possibilité de signaler un commentaire
 * 3. Séparer le header et le footer pour éviter d'avoir à répéter du code
 * 4. Revoir la page d'index pour afficher le dernier article en page principale
 */
