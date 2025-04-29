<?php

class Router {

    private $routes = [];

    public function addRoute($name, $controllerClass, $requiredRole = null) {
        $this->routes[$name] = [
            'controller' => $controllerClass,
            'role' => $requiredRole
        ];
    }

    public function dispatch($routeName) {
        if (!isset($this->routes[$routeName])) {
            die('404 Not Found - Route: ' . htmlspecialchars($routeName));
        }

        $route = $this->routes[$routeName];

        if (isset($route['role'])) {
            require_once __DIR__ . '/SessionUtils.class.php';

            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            if (!SessionUtils::isLoggedIn() || !SessionUtils::isRole($route['role'])) {
                header('Location: index.php?action=login');
                exit;
            }
        }

        $controllerName = $route['controller'];
        $controller = new $controllerName();
        $controller->process();
    }
}
?>
