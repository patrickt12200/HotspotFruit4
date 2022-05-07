<?php
    $connect = mysqli_connect("localhost", "root", "pass", "hotspotfruit");
    $dsn = 'mysql:host=localhost:3306;dbname=hotspotfruit';
    $username = 'root';
    $password = 'pass'; //Enter your default pass

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>