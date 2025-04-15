<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
    public function calcAction(){
        $smarty = $GLOBALS['smarty'];
        $form = new CalcForm();
        $form->loadFromRequest();        // считываем POST: kwota, okres, procent
        $result = new CalcResult();
        if($form->kwota && $form->okres && $form->procent){
            $result->result = ($form->kwota * $form->procent / 100) / $form->okres;
        }
        // Присваиваем результат в шаблон
        $smarty->assign('result', $result);
        // ВКЛЮЧАЕМ блок калькулятора на главной
        $smarty->assign('calc', 1);
        // Отображаем главную страницу (MainView.tpl), где есть условие {if $calc == 1}...
        $smarty->display('MainView.tpl');
    }
}
?>
