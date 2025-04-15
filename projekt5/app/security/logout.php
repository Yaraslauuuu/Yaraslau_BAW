<?php
declare(strict_types=1);

session_start();
namespace app\security;


require_once dirname(__DIR__, 2) . '/init.php';

session_destroy();

\Core\redirect(\Core\getConf()->get('app_url') . "/index.php?action=main");