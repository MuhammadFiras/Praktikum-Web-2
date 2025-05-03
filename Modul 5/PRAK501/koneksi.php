<?php
function connectDB() {
    $host = 'localhost';
    $port = '3307'; //karena di laptop ulun pakai port 3307, bukan 3306
    $user = 'root';
    $pass = ''; 
    $db   = 'dbmodul5';

    try {
        return new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    } catch (PDOException $e) {
        die("❌ Connection failed: " . $e->getMessage());
    }
}
?>
