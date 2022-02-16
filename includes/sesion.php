<?php
session_start();
if (isset($_SESSION['usuario']) && $_SESSION['estado'] == "conectado") {
    "O usuario si está online";
} else {
    header('Location: login.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obra";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Erro na conexion: " . $conn->connect_error);
}
?>