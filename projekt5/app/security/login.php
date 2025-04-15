<?php
$login = $_POST['login'] ?? '';
$pass = $_POST['pass'] ?? '';

if ($login === 'admin' && $pass === 'admin') {
    $_SESSION['user'] = $login;
    $_SESSION['logged'] = true;
    header('Location: index.php?action=main');
    exit;
} else {
    $smarty = getSmarty();
    $smarty->assign('error', 'Nieprawidłowy login lub hasło');
    $smarty->display('login.tpl');
}
