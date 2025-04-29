<?php
require_once __DIR__ . '/../../libs/smarty/libs/Smarty.class.php';

class ProfileCtrl {

    public function process() {
        $smarty = new Smarty();
        $smarty->setTemplateDir(__DIR__ . '/../../views/templates');
        $smarty->setCompileDir(__DIR__ . '/../../views/templates_c');

        $smarty->assign('message', 'Welcome User! This is your profile page.');
        $smarty->display('profile.tpl');
    }
}
?>
