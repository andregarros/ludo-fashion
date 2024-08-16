<?php
// Inserir informações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = ""; /
$dbname = "ludofashion"; 
// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obter ID do produto
$id = $_GET['id'];

// Remover produto do banco de dados
$sql = "DELETE FROM produtos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: produtos_cadastrados.php');
} else {
    echo "Erro:";
}