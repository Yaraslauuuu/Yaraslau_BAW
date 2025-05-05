<?php
require_once __DIR__ . '/../core/SessionUtils.class.php';

class LoginCtrl {

    public function process() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $smarty = $GLOBALS['smarty'];
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login    = trim($_POST['login']    ?? '');
            $password = trim($_POST['password'] ?? '');

            if ($login === 'admin' && $password === 'admin') {
                SessionUtils::storeRole('admin');
                header('Location: index.php?action=dashboard');
                exit;
            }
            elseif ($login === 'user' && $password === 'user') {
                SessionUtils::storeRole('user');
                header('Location: index.php?action=calc');
                exit;
            }
            else {
                $error = 'Неверный логин или пароль.';
            }
        }

        $smarty->assign('error', $error);
        $smarty->display('login.tpl');
    }
}
