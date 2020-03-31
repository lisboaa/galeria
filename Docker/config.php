<?php
session_start();

try {
    $pdo = new PDO("mysql:dbname=classificados;host=db", "root", "root");
} catch (PDOException $e) {
    echo "FALHOU: ".$e->getMessage();
    exit;
}
?>