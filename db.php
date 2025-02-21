<?php

$servername = "localhost";  // MySQL-Server
$username = "root";         // MySQL-Benutzername
$password = "";             // MySQL-Passwort
$dbname = "login_db";       // Datenbank Name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
