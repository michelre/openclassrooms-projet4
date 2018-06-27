<?php

require_once "controller/FrontendController.php";
require_once "controller/BackendController.php";

class Router
{
    private $routes;
    private $frontendController;
    private $backendController;

    public function __construct()
    {
        $this->frontendController = new FrontendController();
        $this->backendController = new BackendController();
    }

    public function run()
    {
        $currentRoute = null;
        foreach ($this->routes as $route) {
            $action = isset($_GET["action"]) ? $_GET["action"]: "";
            $routeAction = isset($route["action"]) ? $route["action"]: "";
            if ($action === $routeAction) {
                $currentRoute = $route;
            }
        }
        if (isset($currentRoute)) {
            $explode = explode('::', $currentRoute["controller"]);
            $params = $this->parseParams($currentRoute["params"]);
            $this->{$explode[0]}->{$explode[1]}(...$params);
        }
    }

    private function parseParams($params)
    {
        return array_map(function ($param) {
            $method = $param["method"] === "GET" ? $_GET : $_POST;
            return $method[$param["key"]];
        }, $params);
    }

    public function initRoutes($routes)
    {
        $this->routes = $routes;
    }

}
