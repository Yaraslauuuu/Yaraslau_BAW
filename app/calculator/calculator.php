<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../../config.php';
// załaduj Smarty
require_once _ROOT_PATH.'/smarty/libs/Smarty.class.php';

// pobranie parametrów
function getParams(&$form){
    $form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $form['okres'] = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
    $form['procent'] = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
}

// walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){
    // sprawdzenie, czy parametry zostały przekazane - jeśli nie, to zakończ walidację
    if ( !(isset($form['kwota']) && isset($form['okres']) && isset($form['procent']) )) return false;

    // parametry przekazane, zatem
    // nie pokazuj wstępu strony, gdy tryb obliczeń
    $hide_intro = true;

    $infos [] = 'Przekazano parametry.';

    // sprawdzenie, czy potrzebne wartości zostały przekazane
    if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty kredytu.';
    if ( $form['okres'] == "") $msgs [] = 'Nie podano okresu kredytowania.';
    if ( $form['procent'] == "") $msgs [] = 'Nie podano oprocentowania.';

    // walidacja, czy parametry są liczbami
    if (count($msgs) == 0) {
        if (! is_numeric( $form['kwota'] )) $msgs [] = 'Kwota kredytu nie jest liczbą.';
        if (! is_numeric( $form['okres'] )) $msgs [] = 'Okres kredytowania nie jest liczbą.';
        if (! is_numeric( $form['procent'] )) $msgs [] = 'Oprocentowanie nie jest liczbą.';
    }

    return count($msgs) == 0;
}

// wykonaj obliczenia
function process(&$form,&$infos,&$msgs,&$result){
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

    // konwersja parametrów na float
    $form['kwota'] = floatval($form['kwota']);
    $form['okres'] = floatval($form['okres']);
    $form['procent'] = floatval($form['procent']);

    // формула расчета ежемесячного платежа (аннуитетный кредит)
    $r = $form['procent'] / 100 / 12; // Месячная процентная ставка
    $n = $form['okres'] * 12; // Количество месяцев

    if ($r > 0) {
        $result = $form['kwota'] * ($r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
    } else {
        $result = $form['kwota'] / $n;
    }

    // форматирование результата
    $result = number_format($result, 2, '.', '.');
}

// inicjalizacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

// pobranie parametrów i walidacja
getParams($form);

if (validate($form, $infos, $messages, $hide_intro)) {
    process($form, $infos, $messages, $result);

}

// 4. Przygotowanie danych dla szablonu
$smarty = new Smarty\Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Kalkulator');
$smarty->assign('page_description', 'Profesjonalne obliczenia kredytowe');
$smarty->assign('page_header', 'Kalkulator kredytowy');
$smarty->assign('hide_intro', $hide_intro);

// przekazanie zmiennych do szablonu
$smarty->assign('form', $form);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos', $infos);

// 5. Wywołanie szablonu

$smarty->display(_ROOT_PATH.'/app/calculator/calc.html');
