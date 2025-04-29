<?php
namespace app\forms;

class CalcForm {
    public $kwota;
    public $okres;
    public $procent;

    public function loadFromRequest() {
        $this->kwota = $_POST['kwota'] ?? null;
        $this->okres = $_POST['okres'] ?? null;
        $this->procent = $_POST['procent'] ?? null;
    }
}
?>
