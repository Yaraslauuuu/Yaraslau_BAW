<?php

class SessionUtils {

    public static function storeRole($role) {
        $_SESSION['user_role'] = $role;
    }

    public static function getRole() {
        return isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;
    }

    public static function isRole($requiredRole) {
        return self::getRole() === $requiredRole;
    }

    public static function isLoggedIn() {
        return isset($_SESSION['user_role']);
    }

    public static function clearSession() {
        session_unset();
        session_destroy();
    }
}
?>
