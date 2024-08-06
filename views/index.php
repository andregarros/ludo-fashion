<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
        <section id="banner">
            <div id="txt-banner">
                <p style="font-size: 70px;">Promoção</p>
                <p style="font-size: 70px;">50%</p>
                <p>OFF</p>
                <p>Desconto em toda a coleção Verão</p>
            </div>
        </section>
        <section class="conteudo">
            <h1>desconto em toda coleção verão</h1>
            <div class="card-container">
                <div class="card">
                    <div class="card-img">
                        <img src="../imgs/banner2.jpg" alt="" width="100%">
                    </div>
                    <div class="card-content">
                        <p>5000</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="../imgs/banner2.jpg" alt="" width="100%">
                    </div>
                    <div class="card-content">
                        <p>5000</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="../imgs/banner2.jpg" alt="" width="100%">
                    </div>
                    <div class="card-content">
                        <p>5000</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="../imgs/banner2.jpg" alt="" width="100%">
                    </div>
                    <div class="card-content">
                        <p>5000</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>