<?php
// session_start();

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=raffleitapp", $username, $password);
    // $conn = new PDO("mysql:host=$servername;dbname=u855062599_raffleitapp", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
