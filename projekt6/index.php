<?php
require_once __DIR__ . '/app/core/Router.class.php';
require_once __DIR__ . '/app/core/SessionUtils.class.php';
require_once __DIR__ . '/app/controllers/MainCtrl.class.php';
require_once __DIR__ . '/app/controllers/LoginCtrl.class.php';
require_once __DIR__ . '/app/controllers/CalcCtrl.class.php';
require_once __DIR__ . '/app/controllers/DashboardCtrl.class.php';
require_once __DIR__ . '/app/controllers/ProfileCtrl.class.php';

$main = new MainCtrl();
$main->process();
?>
