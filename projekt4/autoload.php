<?php
// autoload.php

define('__SMARTY_DIR', 'C:/xampp/htdocs/projekt4/smarty/');

// Автозагрузчик для классов Smarty
spl_autoload_register(function ($class) {
    $prefix = 'Smarty\\';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = __SMARTY_DIR . 'libs/' . str_replace('\\', '/', $relative_class) . '.class.php';
    if (file_exists($file)) {
        require_once($file);
    }
});
