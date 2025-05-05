<?php
require_once __DIR__ . '/../core/DB.class.php';

class UserCtrl {
    public function process() {
        $db = DB::$database;
        $smarty = $GLOBALS['smarty'];

        $filter = trim($_GET['filter'] ?? '');

        if ($filter !== '') {
            $users = $db->select('user','*',[
              'OR'=>[
                'imie[~]'=>$filter,
                'nazwisko[~]'=>$filter
              ]
            ]);
        } else {
            $users = $db->select('user','*');
        }

        $smarty->assign('filter', $filter);
        $smarty->assign('users', $users);
        $smarty->display('userList.tpl');
    }
}
