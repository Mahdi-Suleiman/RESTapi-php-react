<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";
try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected";
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}