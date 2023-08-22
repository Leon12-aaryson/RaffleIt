<?php
// session_start();

$servername = "localhost";
$username = "u855062599_raffleitapp";
$password = "Leon12@48dex";

try {
    $conn = new PDO("mysql:host=$servername;dbname=u855062599_raffleitapp", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
