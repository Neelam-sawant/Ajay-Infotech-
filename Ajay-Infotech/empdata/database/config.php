<?php 
// config.php
$host = "localhost";
$db = "u811507687_testdb";
$user = "u811507687_Sriniwas_07";
$pass = "Sriniwas@008";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
