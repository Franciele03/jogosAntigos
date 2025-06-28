<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jogos_antigos";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>