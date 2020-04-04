<?php
session_start();
try {
    define('DB_NAME', 'classificados');
    define('DB_HOST', 'db');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
} catch (PDOException $exception) {
    echo "Erro com o banco de dados". $exception->getMessage();
}