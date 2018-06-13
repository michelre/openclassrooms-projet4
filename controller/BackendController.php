<?php

require_once('dao/ArticleDAO.php');
require_once('dao/CommentDAO.php');
require_once('dao/UserDAO.php');

class BackendController
{
    private $articleDAO;
    private $commentDAO;
    private $userDAO;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        $this->userDAO = new UserDAO();
    }

    public function displayAdminHome()
    {
        $articles = $this->articleDAO->getArticles();
        require_once('view/backend/admin/admin_home.php');
    }

    public function modifyArticle($articleId)
    {
        require_once('view/backend/admin/modify_article.php');
    }

    public function deleteArticle($articleId)
    {
        $this->articleDAO->delete($articleId);
        header('Location:?action=adminHome');
    }

    public function displayAddArticle($titlearticles, $content)
    {
        $articles = $this->articleDAO->postArticle($titlearticles, $content);
       require_once('view/backend/admin/postArticle.php');
       $articles = $this->articleDAO->modify_article($titlearticles, $content);
       require_once('view/backend/admin/modify_article.php');
    }

    public function displayLoginPage()
    {
        require_once('view/backend/login.php');
    }

    public function loginAction($pseudo, $password)
    {
        //TODO: Créer une méthode dans la DAO pour récupérer l'utilisateur qui a le bon pseudo
        //TODO: Comparer si le mot de passe saisit est le bon
        //TODO: Si OK -> redirige l'utilisateur vers l'espace admin // Si KO -> redirige vers la page de login
    }

}
