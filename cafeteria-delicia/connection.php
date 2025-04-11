<?php
$servername = "localhost"; // Nome do servidor
$username = "root"; // Nome de usuário do banco de dados
$password = "root"; // Senha do banco de dados
$dbname = "cafedb"; // Nome do banco de dados
 
 
// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>