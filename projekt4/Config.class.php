<?php
class Config {
    public $root_path;
    public $server_name;
    public $server_url;
    public $app_root;
    public $app_url;

    // Конструктор для инициализации свойств
    public function __construct() {
        // Путь к корневой директории
        $this->root_path = dirname(__FILE__);
        // Устанавливаем значения для других свойств по умолчанию
        $this->server_name = 'localhost';
        $this->server_url = 'http://' . $this->server_name;
        $this->app_root = '/projektt4';
        $this->app_url = $this->server_url . $this->app_root;
    }
}
?>
