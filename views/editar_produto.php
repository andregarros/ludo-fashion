<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="../css/produtos.css">
</head>
<body>
    <header>
        <nav id="nav">
            <h1 id="nav">LudoFashion</h1>

        </nav>
        </header>
    <nav id="navbottom">
        <a href="">catálogo</a>
        <a href="sobre.html">Sobre a loja</a>
    </nav>
    <main>
        <div class="inserir">
            <h1>Editar Produto</h1>
            <?php
            // Inserir informações de conexão com o banco de dados
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

            // Obter ID do produto
            $id = $_GET['id'];

            // Consultar produto
            $sql = "SELECT * FROM produtos WHERE id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            } else {
                echo "Produto não encontrado.";
                exit();
            }
            
            $conn->close();
            ?>
            <form action="atualizar_produto.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                
                <label for="codigo">Código do Produto:</label>
                <input type="text" name="codigo" id="codigo" value="<?php echo $row['codigo']; ?>" required>
                
                <label for="nome">Nome do Produto:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>" required>
                
                <label for="cor">Cor:</label>
                <input type="text" name="cor" id="cor" value="<?php echo $row['cor']; ?>" required>
                
                <label for="tamanho">Tamanho:</label>
                <input type="text" name="tamanho" id="tamanho" value="<?php echo $row['tamanho']; ?>" required>
                
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" rows="4" required><?php echo $row['descricao']; ?></textarea>
                
                <button type="submit">Atualizar Produto</button>
            </form>
        </div>
    </main>
</body>
</html>