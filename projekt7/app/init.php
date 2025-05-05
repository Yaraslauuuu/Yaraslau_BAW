<?php
session_start();

// Medoo
require_once __DIR__ . '/../libs/medoo/src/Medoo.php';
require_once __DIR__ . '/core/DB.class.php';
DB::init();

// Router & SessionUtils
require_once __DIR__ . '/core/Router.class.php';
require_once __DIR__ . '/core/SessionUtils.class.php';

// Smarty
require_once __DIR__ . '/../libs/smarty/libs/Smarty.class.php';
$smarty = new Smarty\Smarty();
$smarty->assign('role', $_SESSION['role'] ?? null);
$smarty->setTemplateDir(__DIR__ . '/../views/templates/');
$smarty->setCompileDir(__DIR__ . '/../views/templates_c/');
$GLOBALS['smarty'] = $smarty;
