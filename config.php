<?php
$dbServer = 'localhost';
$dbName = 'lspd_panel';
$dbUsername = 'root';
$dbPassword = '';

try {
    $dsn = "mysql:host=$dbServer;dbname=$dbName;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $dbUsername, $dbPassword, $options);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}


// Session ayarları
ini_set('session.cookie_lifetime', 30 * 24 * 60 * 60); // 1 ay
ini_set('session.gc_maxlifetime', 30 * 24 * 60 * 60); // 1 ay

session_start();
ob_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Istanbul');
