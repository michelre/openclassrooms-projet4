<?php

require_once('dao/ArticleDAO.php');
require_once('dao/CommentDAO.php');
require_once('dao/UserDAO.php');
require_once("model/Comment.php");

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
        $articlesHeader = $this->articleDAO->getArticles();

        require_once('view/frontend/page_principale.php');
    }

    public function detailArticle($articleId)
    {
        $article = $this->articleDAO->getArticleById($articleId);
        $comments = $this->commentDAO->getCommentsByArticle($articleId);
        $articlesHeader = $this->articleDAO->getArticles();
        require_once('view/frontend/detailArticle.php');
    }

    public function postComment($articleId, $pseudonyme, $content)
    {
        $comment = new Comment(null, $articleId, $pseudonyme, $content, null, false);
        $comment->setPseudonyme($pseudonyme);
        $comment->setComments($content);
        $this->commentDAO->postComment($articleId, $comment);
        header('Location: ?action=detailArticle&articleId=' . $articleId);
    }

    public function displayRegisterPage()
    {
        $error = $this->userDAO->getDisplayRegisterPage();
        require_once('view/frontend/page_principale');
    }

    public function reportComment($commentId)
    {
        $comment = $this->commentDAO->getById($commentId);
        $this->commentDAO->reportComment($comment);
        header('Location: ?action=detailArticle&articleId=' . $comment->getArticleId());
    }

}
