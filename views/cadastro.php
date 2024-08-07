<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = 'ludofashion';

// Cria uma conexão com o banco de dados
$connect = mysqli_connect($servername, $username, $password, $db_name);

// Verifica se a conexão foi bem-sucedida
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['btn-cadastrar'])) {
    // Obtém e escapa os dados do formulário
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    
    // Verifica se o email já está registrado
    $checkSql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($connect, $checkSql);
    
    if (mysqli_num_rows($result) > 0) {
        // Se o email já estiver registrado, exibe uma mensagem
        echo "Usuário já cadastrado com este email.";
    } else {
        // Se o email não estiver registrado, insere o novo usuário
        $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
        
        if (mysqli_query($connect, $sql)) {
            header("Location: formulario.php");
        } else {
            // Exibe uma mensagem de erro se a inserção falhar
            echo "Erro: " . mysqli_error($connect);
        }
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <script src="js.js" defer></script>
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
        <a href="sobre.php">Sobre a loja</a>
    </nav>
    <main>
        <div id="cadastro">
            <h1>Cadastro</h1>
             <form action="" method = "post">
                <div class="wrapper">
                    <div class="input-field">
                        <input type="text" placeholder="NOME COMPLETO">
                    </div>
                    <div class="input-field">
                        <input type="tel" name="" id="" placeholder="NUMERO">
                    </div>
                </div>
                <div class="wrapper">
                    <div class="input-field">
                        <input type="date">
                    </div>
                    <div class="input-field">
                        <input type="text" name="cpf" id="cpf" maxlength="11" placeholder="CPF">
                    </div>
                </div>

                <div class="wrapper">
                    <div class="input-field">
                        <input type="email" name="email" id="email" placeholder="EMAIL" required>
                    </div>
                    <div class="input-field">
                        <input type="password" name="senha" id="password" placeholder="SENHA">
                    </div>
                </div>
                <div class="butao">
                    <button name="btn-cadastrar"><a href=""></a>CADASTRAR</button>
                    <a href="formulario.php">Ja tem uma conta cadastrada?</a>
                    <p>OU</p>
                    <div class="icons">
                        <img src="../imgs/icon-google.png" alt="" width="50px">
                        <img src="../imgs/icon-facebook.png" alt="" width="50px">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>