<?php
namespace app\controllers;

class LoginCtrl {
    public function loginAction(){
        // session_start() уже вызван в index.php
        $smarty = $GLOBALS['smarty'];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $config = require __DIR__ . '/../../config.php';
            if($login === $config['login_user'] && $password === $config['login_pass']){
                $_SESSION['user'] = $login;
                // После успешного входа перенаправляем на главную с параметром calc=1
                header('Location: ?action=default&calc=1');
                exit();
            } else {
                $error = 'Nieprawidłowe dane';
                $smarty->assign('error', $error);
            }
        }
        $smarty->display('LoginView.tpl');
    }
    
    public function logoutAction(){
        session_start();
        session_destroy();
        header('Location: ?action=default');
        exit();
    }
}
?>
