<?php
session_start();
require_once __DIR__ . '/init.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'default';

switch($action){
    case 'calc':
        $controller = new \app\controllers\CalcCtrl();
        $controller->calcAction();
        break;
    case 'login':
        $controller = new \app\controllers\LoginCtrl();
        $controller->loginAction();
        break;
    case 'logout':
        $controller = new \app\controllers\LoginCtrl();
        $controller->logoutAction();
        break;
    default:
        $controller = new \app\controllers\MainCtrl();
        $controller->defaultAction();
        break;
}
?>
