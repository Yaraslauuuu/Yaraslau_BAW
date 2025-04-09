<?php

$conf = new stdClass();
$conf->root_path = __DIR__;
$conf->server_url = 'http://localhost';
$conf->app_url = $conf->server_url . '/projekt4';  // ← путь до проекта в браузере

// Настройки пути для проекта
define('_ROOT_PATH', dirname(__FILE__));  // Корневой путь

// Настройки Smarty
require_once _ROOT_PATH . '/smarty/libs/Smarty.class.php';

$smarty = new Smarty\Smarty();
$smarty->setTemplateDir(_ROOT_PATH . '/app/views');   // Папка с шаблонами
$smarty->setCompileDir(_ROOT_PATH . '/libs/templates_c');  // Папка для скомпилированных шаблонов
$smarty->setCacheDir(_ROOT_PATH . '/libs/cache');  // Папка для кеша
$smarty->setConfigDir(_ROOT_PATH . '/libs/configs');  // Папка для конфигураций Smarty
$smarty->assign('conf', $conf);
?>
