<?php
// app/core/SessionUtils.class.php
class SessionUtils {
    public static function storeRole(string $role): void {
        $_SESSION['role']       = $role;
        $_SESSION['login_time'] = time();
        self::addHistory($role);
    }
    public static function isLoggedIn(): bool {
        return isset($_SESSION['role']);
    }
    public static function isRole(string $role): bool {
        return isset($_SESSION['role']) && $_SESSION['role'] === $role;
    }
    private static function addHistory(string $user): void {
        if (!isset($_SESSION['history'])) {
            $_SESSION['history'] = [];
        }
        $_SESSION['history'][] = [
            'time' => date('Y-m-d H:i:s'),
            'user' => $user
        ];
    }
    public static function getHistory(): array {
        return $_SESSION['history'] ?? [];
    }
}
