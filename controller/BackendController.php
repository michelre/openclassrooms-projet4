<?php

require_once('dao/ArticleDAO.php');
require_once('dao/CommentDAO.php');
require_once('dao/UserDAO.php');
require_once "service/ConnectionService.php";

class BackendController
{
    private $articleDAO;
    private $commentDAO;
    private $userDAO;
    private $connectionService;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        $this->userDAO = new UserDAO();
        $this->connectionService = new ConnectionService();
    }

    public function displayAdminHome()
    {
        if ($this->connectionService->isConnected()) {
            $articles = $this->articleDAO->getArticles();
            $articlesHeader = $this->articleDAO->getArticles();
            $articlesHeader = $this->articleDAO->getArticles();
            $isConnected = true;
            require_once('view/backend/admin_home.php');
        } else {
            header('Location: ?action=login');
        }
    }

    public function modifyArticle($articleId)
    {
        if ($this->connectionService->isConnected()) {
            $articlesHeader = $this->articleDAO->getArticles();
            $article = $this->articleDAO->getArticleById($articleId);
            $isConnected = true;
            require_once('view/backend/modify_article.php');
        } else {
            header('Location: ?action=login');
        }

    }

    public function deleteArticle($articleId)
    {
        if ($this->connectionService->isConnected()) {
            $this->commentDAO->deleteAllFromArticleId($articleId);
            $this->articleDAO->delete($articleId);
            header('Location:?action=adminHome');
        } else {
            header('Location: ?action=login');
        }
    }

    public function displayAddArticle()
    {
        if ($this->connectionService->isConnected()) {
            $articlesHeader = $this->articleDAO->getArticles();
            $isConnected = true;
            require_once('view/backend/post-article.php');
        } else {
            header('Location: ?action=login');
        }
    }

    public function postArticle($title, $content, $pseudonyme)
    {
        if ($this->connectionService->isConnected()) {
            $this->articleDAO->create($title, $content, $pseudonyme);
            header('Location: ?action=adminHome');
        } else {
            header('Location: ?action=login');
        }
    }

    public function displayLoginPage()
    {
        require_once('view/backend/login.php');
    }

    public function showReportedComments($articleId)
    {
        if ($this->connectionService->isConnected()) {
            $articlesHeader = $this->articleDAO->getArticles();
            $comments = $this->commentDAO->getReportedComments($articleId);
            $article = $this->articleDAO->getArticleById($articleId);
            $isConnected = true;
            require_once "view/backend/comment_manager.php";
        } else {
            header('Location: ?action=login');
        }
    }

    public function deleteComment($commentId)
    {
        if ($this->connectionService->isConnected()) {
            $comment = $this->commentDAO->getById($commentId);
            $this->commentDAO->delete($commentId);
            header('Location: ?action=showReportedComments&articleId=' . $comment->getArticleId());
        } else {
            header('Location: ?action=login');
        }
    }

    public function modifyArticleAction($articleId, $title, $content)
    {
        if ($this->connectionService->isConnected()) {
            $this->articleDAO->update($articleId, $title, $content);
            header('Location: ?action=detailArticle&articleId=' . $articleId);
        } else {
            header('Location: ?action=login');
        }
    }

    public function login()
    {
        if ($this->connectionService->isConnected()) {
            header('Location: ?action=adminHome');
        } else {
            $articlesHeader = $this->articleDAO->getArticles();
            require_once "view/backend/page_connexion.php";
        }
    }

    public function loginAction($pseudo, $password)
    {
        $user = $this->userDAO->getByPseudonyme($pseudo);
        if (password_verify($password, $user->getPassword())) {
            $this->connectionService->initConnection();
            header('Location: ?action=adminHome');
        } else {
            header('Location: ?action=login');
        }
    }

    public function logout()
    {
        $this->connectionService->logout();
        header('Location: ?action=login');
    }

}
