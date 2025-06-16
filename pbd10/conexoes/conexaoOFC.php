<?php
$host = "localhost";
$user = "pdb_user";
$password = "SenhaSegura123";
$dbname = "pdb_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
