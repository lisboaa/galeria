<?php
require __DIR__ . '/../config/config.php';

class Conexao {
    private static $instance;

    public static function getInstance() {
        if(!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                self::$instance->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAtribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
            return self::$instance;
        }
    }

    public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }
}