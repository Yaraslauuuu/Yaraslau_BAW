<?php
require_once __DIR__ . '/../config.php';
require_once $conf->root_path . '/app/CalcCtrl.class.php';
require_once $conf->root_path . '/app/CalcForm.class.php';
require_once $conf->root_path . '/app/CalcResult.class.php';
require_once $conf->root_path . '/app/Messages.class.php';

$ctrl = new CalcCtrl();
$ctrl->process();

