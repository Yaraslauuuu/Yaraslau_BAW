<?php
require_once __DIR__ . '/../core/Router.class.php';
require_once __DIR__ . '/../core/SessionUtils.class.php';

require_once __DIR__ . '/LoginCtrl.class.php';
require_once __DIR__ . '/CalcCtrl.class.php';
require_once __DIR__ . '/DashboardCtrl.class.php';
require_once __DIR__ . '/ProfileCtrl.class.php';
require_once __DIR__ . '/HomeCtrl.class.php'; // важно!

class MainCtrl {
    public function process() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $router = new Router();

        // Публичные маршруты
        $router->addRoute('home', 'HomeCtrl');
        $router->addRoute('login', 'LoginCtrl');

        // Авторизованные маршруты
        $router->addRoute('calc', 'CalcCtrl', 'user');
        $router->addRoute('profile', 'ProfileCtrl', 'user');
        $router->addRoute('dashboard', 'DashboardCtrl', 'admin');

        // fallback если ?action отсутствует
        $action = $_GET['action'] ?? 'home';
        $router->dispatch($action);
    }
}
?>
