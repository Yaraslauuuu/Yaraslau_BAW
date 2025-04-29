<?php
session_start();
require_once __DIR__.'/core/functions.php';
require_once __DIR__.'/core/Router.class.php';
require_once __DIR__.'/core/ClassLoader.class.php';
$loader=new core\ClassLoader();$loader->register();
require_once __DIR__.'/libs/smarty/libs/Smarty.class.php';
$smarty=new Smarty\Smarty;
$smarty->setTemplateDir(__DIR__.'/views/templates/');
$smarty->setCompileDir(__DIR__.'/views/templates_c/');
$GLOBALS['smarty']=$smarty;
