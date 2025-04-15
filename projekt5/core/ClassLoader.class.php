<?php
class ClassLoader {
    public function register(){
        spl_autoload_register([$this, 'autoload']);
    }
    public function autoload($className){
        $file = __DIR__ . '/../' . str_replace('\\', '/', $className) . '.class.php';
        if(file_exists($file)){
            require_once $file;
        }
    }
}
?>
