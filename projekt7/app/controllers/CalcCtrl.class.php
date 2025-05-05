<?php
require_once __DIR__ . '/../forms/CalcForm.class.php';
require_once __DIR__ . '/../transfer/CalcResult.class.php';
use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
    public function process() {
        $smarty=$GLOBALS['smarty'];
        $form = new CalcForm(); $form->loadFromRequest();
        $res  = new CalcResult(); $error=null;

        if($_SERVER['REQUEST_METHOD']==='POST') {
            if($form->kwota && $form->okres && $form->procent) {
                $res->result=round(($form->kwota+($form->kwota*$form->procent/100))/$form->okres,2);
            } else $error="Заполните все поля.";
        }

        $smarty->assign('form',$form);
        $smarty->assign('result',$res);
        $smarty->assign('error',$error);
        $smarty->display('calc.tpl');
    }
}
