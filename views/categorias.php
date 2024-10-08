<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/categorias.css">
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
    <nav class="sub-menu">
        <a href="">catálogo</a>
        <a href="">duvidas</a>
    </nav>
    <main>
        <div class="titulo">
            <img class="img-lista" src="../imgs/icon-categoria.png" alt="" width="40px">
            <h1>Categorias</h1>
        </div>
        <div id="caixa">
            <span class="categoria-1">
                Casual
                <img src="../imgs/icon-lapis.png" alt="">
                <img src="../imgs/icon-lixeira.png" alt="">
            </span>
            <span class="categoria-1">
                Esportivo
                <img src="../imgs/icon-lapis.png" alt="">
                <img src="../imgs/icon-lixeira.png" alt="">
            </span>
            <span class="categoria-1">
                Lingeries
                <img src="../imgs/icon-lapis.png" alt="">
                <img src="../imgs/icon-lixeira.png" alt="">
            </span>
            <span class="categoria-1">
                Social
                <img src="../imgs/icon-lapis.png" alt="">
                <img src="../imgs/icon-lixeira.png" alt="">
            </span>
            <span class="categoria-1">
                Bolsas
                <img src="../imgs/icon-lapis.png" alt="">
                <img src="../imgs/icon-lixeira.png" alt="">
            </span>
            <span class="categoria-1">
                Calcinhas
                <img src="../imgs/icon-lapis.png" alt="">
                <img src="../imgs/icon-lixeira.png" alt="">
            </span>
            <span class="categoria-1">
                Maquiagem
                <img src="../imgs/icon-lapis.png" alt="">
                <img src="imgs/icon-lixeira.png" alt="">
            </span>
            <span class="categoria-1">
                Banho    
                <img src="../imgs/icon-lapis.png" alt="">
                <img src="../imgs/icon-lixeira.png" alt="">  
            </span>
            <span class="categoria-1">
                Moda praia
                <img src="../imgs/icon-lapis.png" alt="">
                <img src="../imgs/icon-lixeira.png" alt="">
            </span>
            <span class="button">
                <button>Adicionar categoria</button>
            </span>
        </div>
    </main>
</body>
</html>