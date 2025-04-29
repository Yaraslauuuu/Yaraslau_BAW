<?php

require_once __DIR__ . '/../forms/CalcForm.class.php';
require_once __DIR__ . '/../transfer/CalcResult.class.php';

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

    public function process() {
        $smarty = new Smarty();
        $smarty->setTemplateDir(__DIR__ . '/../../views/templates');
        $smarty->setCompileDir(__DIR__ . '/../../views/templates_c');

        $form = new CalcForm();
        $form->loadFromRequest();
        $result = new CalcResult();

        if ($form->kwota && $form->okres && $form->procent) {
            $result->result = ($form->kwota * $form->procent / 100) / $form->okres;
        }

        $smarty->assign('result', $result);
        $smarty->assign('calc', 1);

        $smarty->display('MainView.tpl');
    }
}
?>
