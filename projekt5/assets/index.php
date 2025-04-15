<?php

// Подключаем автозагрузчик классов и настройки
require_once __DIR__ . '/../init.php';

try {
    session_start();

    // Получаем конфигурацию и сообщения
    $conf = getConf();
    $msgs = getMessages();

    // Получаем значение действия из URL, если оно не задано - по умолчанию 'main'
    $action = $_GET['action'] ?? 'main';
    $action = strtolower($action);  // Приводим действие к нижнему регистру для безопасности

    // Обработчик для логина
    function handleLogin(string $action): void {
        if ($action === 'login') {
            require_once __DIR__ . '/../app/security/login.php';  // Абсолютный путь
        }
    }

    // Функция для проверки безопасности действия
    function checkSecurity(string $action): void {
        // Проверка на наличие запрещенных символов в действии
        if (strpos($action, '..') !== false || strpos($action, '/') !== false) {
            die('403 forbidden');
        }
    }

    // Обработка запросов на CSS
    function handleCss(string $action): void {
        if (strpos($action, 'css') === 0) {
            $file = __DIR__ . '/../assets/css/' . $action . '.css';  // Абсолютный путь
            if (file_exists($file)) {
                header('Content-Type: text/css');
                readfile($file);
                die();
            } else {
                die('404 not found');
            }
        }
    }

    // Обработчик для контроллеров
    function handleController(string $action): void {
        // Пример контроллера для калькулятора
        $controllerName = '\\app\\controllers\\CalcCtrl';

        // Проверка на существование класса контроллера
        if (!class_exists($controllerName)) {
            die('404 not found');
        }

        // Создаем объект контроллера
        $ctrl = new $controllerName();

        // Проверка, что пользователь авторизован
        if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
            \Core\redirect(\Core\getConf()->get('app_url') . '/index.php?action=login');
        } else {
            // Получаем разрешенные действия для контроллера
            $allowedActions = $ctrl->getAllowedActions();
            if (!in_array($action, $allowedActions)) {
                die('403 forbidden');
            }

            // Если действие logout, выполняем логаут
            if ($action === 'logout') {
                include __DIR__ . '/../app/security/logout.php';  // Абсолютный путь
                die();
            }

            // Проверка существования метода в контроллере для действия
            $actionMethod = 'action_' . $action;
            if (!method_exists($ctrl, $actionMethod)) {
                die('404 not found');
            }

            // Выполняем метод действия
            $ctrl->$actionMethod();
        }
    }

    // Обработка входа в систему
    handleLogin($action);

    // Проверка безопасности действия
    checkSecurity($action);

    // Обработка запросов на CSS файлы
    handleCss($action);

    // Обработка запросов на контроллеры
    handleController($action);

} catch (Exception $e) {
    // Отображаем ошибку, если что-то пошло не так
    die($e->getMessage());
}

