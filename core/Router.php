<?php

namespace Core;

class Router {
    private $routes = [];

    public function add($route, $params) {
        $this->routes[$route] = $params;
    }

    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            $controllerName = $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];
            $controller = "App\\Controllers\\$controllerName";
            if (class_exists($controller)) {
                $controllerObj = new $controller;
                if (method_exists($controllerObj, $action)) {
                    $controllerObj->$action();
                } else {
                    echo "Method $action not found in controller $controllerName";
                }
            } else {
                echo "Controller class $controllerName not found";
            }
        } else {
            echo "No route matched";
        }
    }
}
