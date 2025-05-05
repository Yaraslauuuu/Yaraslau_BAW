<?php
// app/core/Router.class.php
require_once __DIR__ . '/SessionUtils.class.php';
class Router {
    private $routes = [];
    public function addRoute($name, $controllerClass, $role = null) {
        $this->routes[$name] = ['controller'=>$controllerClass,'role'=>$role];
    }
    public function dispatch($action) {
        if (!isset($this->routes[$action])) {
            die("404 Not Found - Route: $action");
        }
        $route = $this->routes[$action];
        if ($route['role']) {
            if (session_status()===PHP_SESSION_NONE) session_start();
            if (!SessionUtils::isLoggedIn() || !SessionUtils::isRole($route['role'])) {
                header('Location: index.php?action=login'); exit;
            }
        }
        $ctrl = new $route['controller']();
        $ctrl->process();
    }
}
