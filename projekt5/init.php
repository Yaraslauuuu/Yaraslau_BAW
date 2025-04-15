<?php
$config = require_once __DIR__ . '/config.php';
require_once __DIR__ . '/core/ClassLoader.class.php';

$loader = new ClassLoader();
$loader->register();

require_once __DIR__ . '/core/functions.php';
require_once __DIR__ . '/smarty/libs/Smarty.class.php';

$smarty = new \Smarty\Smarty;
$smarty->setTemplateDir(__DIR__ . '/views/templates/');
$smarty->setCompileDir(__DIR__ . '/views/templates_c/');
$smarty->setCacheDir(__DIR__ . '/views/cache/');
$smarty->setConfigDir(__DIR__ . '/views/configs/');

$GLOBALS['smarty'] = $smarty;
?>
