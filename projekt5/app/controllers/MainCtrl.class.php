<?php
namespace app\controllers;

class MainCtrl {
  public function defaultAction(){
    $smarty = $GLOBALS['smarty'];
    if (isset($_GET['calc']) && $_GET['calc'] == 1) {
      $smarty->assign('calc', 1);
    }
    $smarty->display('MainView.tpl');
  }
}
?>
