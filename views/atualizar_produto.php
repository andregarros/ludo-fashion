<?php
// Inserir informações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = ""; // Insira sua senha aqui
$dbname = "ludofashion"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obter dados do formulário
$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$cor = $_POST['cor'];
$tamanho = $_POST['tamanho'];
$descricao = $_POST['descricao'];

// Atualizar dados no banco de dados
$sql = "UPDATE produtos SET codigo='$codigo', nome='$nome', cor='$cor', tamanho='$tamanho', descricao='$descricao' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Produto atualizado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirecionar para a página de produtos cadastrados
header("Location: produtos_cadastrados.php");
exit();
?>