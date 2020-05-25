<?php

class App
{

    protected $controller = "IndexController";
    protected $method = "actionIndex";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        
        $controllerName = ucfirst(strtolower($url[0])) . "Controller";
        if (file_exists("controllers/" . $controllerName . ".php")) {
            $this->controller = $controllerName;
            unset($url[0]);
        }
        require "controllers/" . $this->controller . ".php";

        $this->controller = new $this->controller;

        if (isset($url[1])) {
            $methodName = "action" . ucfirst(strtolower($url[1]));

            if (method_exists($this->controller, $methodName)) {
                $this->method = $methodName;
                unset($url[1]);
            }
        }
        $this->params[] = $url ? array_values($url) : $this->params;

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        } else {
            return array("index");
        }
    }
}
