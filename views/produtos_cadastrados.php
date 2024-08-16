<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "ludofashion"; 

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Buscar produtos do banco de dados
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>
    <link rel="stylesheet" href="../css/produtos.css">
</head>
<body>
<header>
        <nav id="nav">
            <h1>LudoFashion</h1>
            <a href=""></a>
            <form action="" id="form-buscar">
                <input type="search" name="buscar" id="buscar">
                <button type="submit" id="btn-buscar">
                    <img src="../imgs/icon-buscar.png" alt="" height="29px">
                </button>
            </form>
            <a href="index.php" class="icon-link">
                <img src="../imgs/icon-casa.png" alt="" height="40px">
                home
            </a>
            <a href="cadastro.php" class="icon-link">
                <img src="../imgs/icone-peson.png.png" alt="" height="40px">
                cadastre-se
            </a>
            <a href="ajuda.php" class="icon-link">
                <img src="../imgs/icone-help.png.png" alt="" height="40px">
                duvidas
            </a>
            <a href="formulario.php" class="icon-link">
                <img src="../imgs/icon-coração.png" alt="" height="40px">
                favoritar
            </a>
        </nav>
        <div  class="btn-abrir-menu" id="btn-menu">
            <img src="../imgs/cardapio.png" alt="" width="40px"> 
        </div>
        
        <div class="menu-mobile" id="menu-mobile">
            <nav>
              <ul>
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li><a href="cadastro.php" target="_self" class="cor">LOGIN/CADASTRO</a></li>
                <li><a href="ajuda.php">Duvidas</a></li>
                <li><a href="">favoritar</a></li>
                <li><a href="sobre.php">Sobre a loja</a></li>
              </ul>
            </nav>
          </div>
          <div class="overlay-menu-mobile" id="overlay-menu-mobile"></div>
    </header>
    <nav id="navbottom">
        <a href="">catálogo</a>
        <a href="sobre.html">Sobre a loja</a>
    </nav>
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>Cod. Produto</th>
                        <th>Nome do Produto</th>
                        <th>Cor</th>
                        <th>Tamanho</th>
                        <th>Descrição do Produto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            // Check if row contains actual data
                            if (!empty($row["codigo"]) && !empty($row["nome"]) && !empty($row["cor"]) && !empty($row["tamanho"]) && !empty($row["descricao"])) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row["codigo"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["nome"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["cor"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["tamanho"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["descricao"]) . "</td>";
                                echo "<td>";
                                echo "<a href='editar_produto.php?id=" . $row["id"] . "'>Editar</a> | ";
                                echo "<a href='remover_produto.php?id=" . $row["id"] . "' onclick=\"return confirm('Tem certeza que deseja remover este produto?')\">Remover</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='6'>Nenhum produto encontrado</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
        <div>
            <a href="inserirprodutos.php"><button>Inserir Produto</button></a>
        </div>
    </main>
</body>
</html>
