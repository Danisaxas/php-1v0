<?php
// db.php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DATABASE_HOST'];
$dbname = $_ENV['DATABASE_NAME'];
$user = $_ENV['DATABASE_USER'];
$password = $_ENV['DATABASE_PASSWORD'];

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
