<?php 
// config.php
$host = "localhost"; // Use your host name or IP address here
$db = "u811507687_testdb"; // Your database name
$user = "u811507687_Sriniwas_07"; // Your MySQL username
$pass = "Sriniwas@008"; // Your MySQL password

try {
    // Create a PDO instance for MySQL database connection
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
