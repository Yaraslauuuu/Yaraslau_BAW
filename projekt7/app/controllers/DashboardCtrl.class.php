<?php
// app/controllers/DashboardCtrl.class.php
require_once __DIR__ . '/../core/SessionUtils.class.php';
class DashboardCtrl {
    public function process() {
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('history', SessionUtils::getHistory());
        $smarty->display('dashboard.tpl');
    }
}
