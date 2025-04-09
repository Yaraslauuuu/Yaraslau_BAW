<?php
require_once __DIR__ . '/CalcForm.class.php';
require_once __DIR__ . '/CalcResult.class.php';
require_once __DIR__ . '/Messages.class.php';
require_once __DIR__ . '/../smarty/libs/Smarty.class.php';

class CalcCtrl {

    private $form;
    private $result;
    private $msgs;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->msgs = new Messages();
    }

    public function getParams(){
        // Используем имена полей формы, как заданы в шаблоне (kwota, okres, procent)
        $this->form->amount  = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->years   = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
        $this->form->percent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
    }

    public function validate(){
        if (!(isset($this->form->amount) && isset($this->form->years) && isset($this->form->percent))) {
            return false;
        }
        if ($this->form->amount == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this->form->years == "") {
            $this->msgs->addError('Nie podano liczby lat');
        }
        if ($this->form->percent == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }
        if (!$this->msgs->isError()) {
            if (!is_numeric($this->form->amount)) {
                $this->msgs->addError('Kwota nie jest liczbą');
            }
            if (!is_numeric($this->form->years)) {
                $this->msgs->addError('Liczba lat nie jest liczbą');
            }
            if (!is_numeric($this->form->percent)) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą');
            }
        }
        if (!$this->msgs->isError()) {
            if ($this->form->amount <= 0) {
                $this->msgs->addError('Kwota musi być większa od 0');
            }
            if ($this->form->years <= 0) {
                $this->msgs->addError('Liczba lat musi być większa od 0');
            }
            if ($this->form->percent <= 0) {
                $this->msgs->addError('Oprocentowanie musi być większe od 0');
            }
        }
        return !$this->msgs->isError();
    }

    public function process(){
        $this->getParams();

        if($this->validate()){
            $this->form->amount  = floatval($this->form->amount);
            $this->form->years   = floatval($this->form->years);
            $this->form->percent = floatval($this->form->percent);

            $this->result->monthlyInterestRate = ($this->form->percent / 100) / 12;
            $this->result->numberOfPayments = $this->form->years * 12;
            $this->result->monthlyPayment = ($this->form->amount * $this->result->monthlyInterestRate) /
                (1 - pow(1 + $this->result->monthlyInterestRate, -$this->result->numberOfPayments));
            $this->result->totalPayment = $this->result->monthlyPayment * $this->result->numberOfPayments;
        }

        $this->generateView();
    }

    public function generateView(){
        global $conf;
        $smarty = new Smarty\Smarty();
        // Передаём дополнительные переменные для отображения
        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description','Obiektowość. Kalkulator oparty na wzorcu MVC.');
        $smarty->assign('page_header','Kalkulator Kredytowy');
        $smarty->assign('app_url', $conf->app_url);  // обязательно передаём app_url для корректных ссылок

        $smarty->assign('form', $this->form);
        $smarty->assign('res',  $this->result);
        $smarty->assign('msgs', $this->msgs);

        $smarty->display($conf->root_path . '/app/CalcView.tpl');
    }
}
