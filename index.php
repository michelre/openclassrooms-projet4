<?php

require_once 'router/Router.php';

$routes = array(
    array(
        "action" => null,
        "controller" => "frontendController::listArticles",
        "params" => array()
    ),
    array(
        "action" => "detailArticle",
        "controller" => "frontendController::detailArticle",
        "params" => array(
            array("key" => "articleId", "method" => "GET")
        )
    ),
    array(
        "action" => "addComment",
        "controller" => "frontendController::postComment",
        "params" => array(
            array("key" => "articleId", "method" => "GET"),
            array("key" => "pseudonyme", "method" => "POST"),
            array("key" => "content", "method" => "POST"),
        )
    ),
    array(
        "action" => "reportComment",
        "controller" => "frontendController::reportComment",
        "params" => array(
            array("key" => "commentId", "method" => "GET")
        )
    ),
    array(
        "action" => "adminHome",
        "controller" => "backendController::displayAdminHome",
        "params" => array()
    ),
    array(
        "action" => "modifyArticle",
        "controller" => "backendController::modifyArticle",
        "params" => array(
            array("key" => "articleId", "method" => "GET"),
        )
    ),
    array(
        "action" => "displayAddArticle",
        "controller" => "backendController::displayAddArticle",
        "params" => array()
    ),
    array(
        "action" => "postArticle",
        "controller" => "backendController::postArticle",
        "params" => array(
            array("key" => "title", "method" => "POST"),
            array("key" => "content", "method" => "POST"),
            array("key" => "pseudonyme", "method" => "POST"),
        )
    ),
    array(
        "action" => "modifyArticleAction",
        "controller" => "backendController::modifyArticleAction",
        "params" => array(
            array("key" => "articleId", "method" => "GET"),
            array("key" => "title", "method" => "POST"),
            array("key" => "content", "method" => "POST"),
        )
    ),
    array(
        "action" => "deleteArticle",
        "controller" => "backendController::deleteArticle",
        "params" => array(
            array("key" => "articleId", "method" => "GET")
        )
    ),
    array(
        "action" => "showReportedComments",
        "controller" => "backendController::showReportedComments",
        "params" => array(
            array("key" => "articleId", "method" => "GET")
        )
    ),
    array(
        "action" => "deleteComment",
        "controller" => "backendController::deleteComment",
        "params" => array(
            array("key" => "commentId", "method" => "GET")
        )
    ),
    array(
        "action" => "login",
        "controller" => "backendController::login",
        "params" => array()
    ),
    array(
        "action" => "loginAction",
        "controller" => "backendController::loginAction",
        "params" => array(
            array("key" => "pseudo", "method" => "POST"),
            array("key" => "password", "method" => "POST")
        )
    ),
    array(
        "action" => "logout",
        "controller" => "backendController::logout",
        "params" => array()
    )
);

$router = new Router();
$router->initRoutes($routes);
$router->run();
