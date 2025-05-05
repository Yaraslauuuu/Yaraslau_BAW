<?php
require_once __DIR__ . '/app/init.php';

// controllers will be loaded by ClassLoader or manually:
require_once __DIR__ . '/app/controllers/MainCtrl.class.php';
require_once __DIR__ . '/app/controllers/LoginCtrl.class.php';
require_once __DIR__ . '/app/controllers/RegisterCtrl.class.php';
require_once __DIR__ . '/app/controllers/LogoutCtrl.class.php';
require_once __DIR__ . '/app/controllers/CalcCtrl.class.php';
require_once __DIR__ . '/app/controllers/ProfileCtrl.class.php';
require_once __DIR__ . '/app/controllers/DashboardCtrl.class.php';
require_once __DIR__ . '/app/controllers/PersonCtrl.class.php';
require_once __DIR__ . '/app/controllers/UserCtrl.class.php';

$main = new MainCtrl();
$main->process();
