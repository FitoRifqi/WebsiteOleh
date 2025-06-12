<?php
// config/database.php

$host = 'localhost'; // Atau IP database Anda
$db   = 'oleh_oleh_lamongan'; // Nama database yang Anda buat
$user = 'root'; // Username database Anda (default XAMPP/MAMP adalah root)
$pass = ''; // Password database Anda (default XAMPP/MAMP adalah kosong)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>