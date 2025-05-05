<?php
use Medoo\Medoo;
class DB {
    public static $database;
    public static function init() {
        self::$database = new Medoo([
          'type'=>'mysql',
          'host'=>'127.0.0.1',
          'database'=>'projekt7',
          'username'=>'root','password'=>'',
          'charset'=>'utf8'
        ]);
    }
}
