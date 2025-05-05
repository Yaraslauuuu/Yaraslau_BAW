<?php
require_once __DIR__ . '/../core/SessionUtils.class.php';

class ProfileCtrl {
    public function process() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $smarty = $GLOBALS['smarty'];

        $profile = [
            'username' => $_SESSION['role'] ?? 'guest',                    // поле username
            'since'    => date('Y-m-d H:i:s', $_SESSION['login_time'] ?? time())  // поле since
        ];

        $smarty->assign('profile', $profile);
        $smarty->display('profile.tpl');
    }
}
