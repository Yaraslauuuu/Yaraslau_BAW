<?php
require_once __DIR__ . '/smarty/libs/Smarty.class.php';
require_once __DIR__ . '/config.php';

$conf = new stdClass();
$conf->root_path = __DIR__;
$conf->server_url = 'http://localhost';
$conf->app_url = $conf->server_url . '/projektt4';
$conf->app_url = 'http://localhost/projekt4';

$smarty = new Smarty\Smarty();

$smarty->setTemplateDir($conf->root_path . '/templates');
$smarty->setCompileDir($conf->root_path . '/templates_c');

$smarty->assign('app_url', $conf->app_url);
$smarty->assign('site_name', 'Kalkulator Kredytowy');
$smarty->assign('footer_text', 'Wszystkie prawa zastrzeżone.');

$smarty->display('main.html');
