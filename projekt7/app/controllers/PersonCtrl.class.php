<?php
// app/controllers/PersonCtrl.class.php
require_once __DIR__ . '/../core/DB.class.php';

class PersonCtrl {
    public function process() {
        $db = DB::$database;
        $smarty = $GLOBALS['smarty'];

        $filter = $_GET['filter'] ?? '';
        $where = [];
        if ($filter !== '') {
            $where = [
                'OR' => [
                    'imie[~]'     => $filter,
                    'nazwisko[~]' => $filter,
                ]
            ];
        }

        $people = $db->select('person', '*', $where);

        $smarty->assign('people', $people);
        $smarty->assign('filter', $filter);
        $smarty->display('personList.tpl');
    }

    public function edit() { /* … */ }
    public function save() { /* … */ }
    public function delete(){ /* … */ }
}
