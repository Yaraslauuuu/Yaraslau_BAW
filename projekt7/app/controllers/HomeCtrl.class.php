<?php
class HomeCtrl {
    public function process() {
        $smarty = $GLOBALS['smarty'];
        $smarty->display('home.tpl');
    }
}
