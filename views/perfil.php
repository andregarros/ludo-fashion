<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/perfil.css">
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
</header>
<nav id="navbottom">
    <a href="">catálogo</a>
    <a href="sobre.html">Sobre a loja</a>
</nav>
    </header>

        <main>
            <div id="perfil">
                <h1>Meu perfil</h1>
                <p>gerenciar e proteger sua conta</p>
             </div>
            <div id="perfil-info">
                <p><strong>nome do usuario:</strong> fulando malaquias </p>
                <p><strong>email:</strong> andregarros222 @</p>
                <p><strong>telefone:</strong> 989192931 </p>
                <div id="info">
                    <p><strong>Sexo:</strong></p>
                    <label for="masculino">masculino</label>
                    <input type="radio" name="masculino" id="masculino">
                    <label for="feminino">Feminino</label>
                    <input type="radio" name="Feminino" id="Feminino">
                </div>
                <div>
                    <p><strong>CPF:</strong>6547123712</p>
                </div>
                <div>
                    <p><strong>Data de nascimento:</strong> </p>
                </div>
                <button id="btn">Gravar</button>
            </div>
        </main>
</body>
</html>