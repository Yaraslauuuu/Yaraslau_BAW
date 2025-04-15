<?php
namespace app\forms;

class CalcForm {
    public $kwota;
    public $okres;
    public $procent;

    public function loadFromRequest(){
        $this->kwota = filter_input(INPUT_POST, 'kwota', FILTER_VALIDATE_FLOAT);
        $this->okres = filter_input(INPUT_POST, 'okres', FILTER_VALIDATE_INT);
        $this->procent = filter_input(INPUT_POST, 'procent', FILTER_VALIDATE_FLOAT);
    }
}
?>
