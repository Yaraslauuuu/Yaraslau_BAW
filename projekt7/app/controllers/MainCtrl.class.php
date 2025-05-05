<?php
require_once __DIR__.'/HomeCtrl.class.php';
require_once __DIR__.'/LoginCtrl.class.php';
require_once __DIR__.'/RegisterCtrl.class.php';
require_once __DIR__.'/LogoutCtrl.class.php';
require_once __DIR__.'/CalcCtrl.class.php';
require_once __DIR__.'/ProfileCtrl.class.php';
require_once __DIR__.'/DashboardCtrl.class.php';
require_once __DIR__.'/PersonCtrl.class.php';
require_once __DIR__.'/UserCtrl.class.php';

class MainCtrl {
  public function process(): void {
    if(session_status()===PHP_SESSION_NONE) session_start();
    $router = new Router();

    // public
    $router->addRoute('home',     'HomeCtrl');
    $router->addRoute('login',    'LoginCtrl');
    $router->addRoute('register', 'RegisterCtrl');
    $router->addRoute('logout',   'LogoutCtrl');

    // user
    $router->addRoute('calc',     'CalcCtrl',    'user');
    $router->addRoute('profile',  'ProfileCtrl', 'user');

    // admin
    $router->addRoute('dashboard',    'DashboardCtrl', 'admin');
    $router->addRoute('personList',   'PersonCtrl',    'admin');
    $router->addRoute('personEdit',   'PersonCtrl',    'admin');
    $router->addRoute('personSave',   'PersonCtrl',    'admin');
    $router->addRoute('personDelete', 'PersonCtrl',    'admin');
    $router->addRoute('userList',     'UserCtrl',      'admin');

    $action = $_GET['action'] ?? 'home';
    $router->dispatch($action);
  }
}
