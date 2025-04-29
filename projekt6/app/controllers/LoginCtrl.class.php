<?php
require_once __DIR__ . '/../../libs/smarty/libs/Smarty.class.php';
require_once __DIR__ . '/../core/SessionUtils.class.php';

class LoginCtrl {

    public function process() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $smarty = new Smarty();
        $smarty->setTemplateDir(__DIR__ . '/../../views/templates');
        $smarty->setCompileDir(__DIR__ . '/../../views/templates_c');

        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'] ?? '';
            $password = $_POST['pass'] ?? '';

            if ($login === 'admin' && $password === 'admin') {
                SessionUtils::storeRole('admin');
                header('Location: index.php?action=dashboard');
                exit;
            } elseif ($login === 'user' && $password === 'user') {
                SessionUtils::storeRole('user');
                header('Location: index.php?action=calc');
                exit;
            } else {
                $error = 'Invalid login or password.';
            }
        }

        $smarty->assign('error', $error);
        $smarty->display('login.tpl');
    }
}
?>
