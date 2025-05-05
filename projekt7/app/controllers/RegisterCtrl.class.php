<?php
require_once __DIR__ . '/../core/DB.class.php';

class RegisterCtrl {
    public function process() {
        $smarty = $GLOBALS['smarty'];
        $error    = '';
        $oldLogin = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login    = trim($_POST['login']    ?? '');
            $password = trim($_POST['password'] ?? '');
            $oldLogin = $login;

            if ($login === '' || $password === '') {
                $error = 'Логин и пароль не могут быть пустыми.';
            }
            elseif (DB::$database->has('user', ['login' => $login])) {
                $error = 'Пользователь с таким логином уже существует.';
            }
            else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                DB::$database->insert('user', [
                    'login'      => $login,
                    'password'   => $hash,
                    'role'       => 'user',
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
                header('Location: index.php?action=login');
                exit;
            }
        }

        $smarty->assign('error',    $error);
        $smarty->assign('oldLogin', $oldLogin);
        $smarty->display('register.tpl');
    }
}
