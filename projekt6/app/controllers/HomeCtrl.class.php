<?php
require_once __DIR__ . '/../../libs/smarty/libs/Smarty.class.php';


class HomeCtrl {

    public function process() {
        $smarty = new \Smarty(); // ВАЖНО: с обратным слэшем

        $smarty->setTemplateDir(__DIR__ . '/../../views/templates');
        $smarty->setCompileDir(__DIR__ . '/../../views/templates_c');

        $smarty->assign('message', 'Welcome to Home!');
        $smarty->display('home.tpl');
    }
}
?>
