<?php
class LogoutCtrl {
    public function process() {
        if (session_status()===PHP_SESSION_NONE) session_start();
        session_unset();
        session_destroy();
        header('Location: index.php?action=home');
        exit;
    }
}
