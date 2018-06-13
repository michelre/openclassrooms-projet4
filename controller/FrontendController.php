<?php

require_once('dao/ArticleDAO.php');
require_once('dao/CommentDAO.php');
require_once('dao/UserDAO.php');

class FrontendController
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

    public function listArticles()
    {
        $articles = $this->articleDAO->getArticles();
        $article = $this->articleDAO->getDernierArticle();

        require_once('view/frontend/page_principale.php');
    }

    public function detailArticle($articleId)
    {
        $article = $this->articleDAO->getArticleById($articleId);
        $comments = $this->commentDAO->getCommentsByArticle($articleId);
        require_once('view/frontend/detailArticle.php');
    }
     public function postComment($articleId, $pseudonyme, $content)
    {
        $comments = $this->commentDAO->postComment($articleId, $pseudonyme, $content);
        header('Location: ?action=detailArticle&articleId='.$articleId);
    }

    public function displayRegisterPage()
    {
        $error = $this->userDAO->getDisplayRegisterPage();
        require_once('view/frontend/page_principale');
    }

    public function session_start(){
        if(isset($_SESSION['connect'])){

            require_once('view/frontend/page_principale');
        }
    }

}
