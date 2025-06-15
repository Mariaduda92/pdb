<?php

// Configurações do banco de dados
$host = "localhost";
$user = "usuario";
$password = "senha";
$dbname = "nome_do_banco";

// Criar conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
