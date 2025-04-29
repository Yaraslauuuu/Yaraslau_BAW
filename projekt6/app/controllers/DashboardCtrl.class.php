<?php
require_once __DIR__ . '/../../libs/smarty/libs/Smarty.class.php'; 

class DashboardCtrl {

    public function process() {
        $smarty = new Smarty();

        $smarty->setTemplateDir(__DIR__ . '/../../views/templates');
        $smarty->setCompileDir(__DIR__ . '/../../views/templates_c');

        $smarty->assign('message', 'Welcome Admin! This is the dashboard.');
        $smarty->display('dashboard.tpl');
    }
}
?>
