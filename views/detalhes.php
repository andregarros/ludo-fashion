<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/detalhes.css">
    <script src="js.js" defer></script>
</head>
<body>
<header>
        <nav id="nav">
            <h1>LudoFashion</h1>
            <a href=""></a>
            <form action="" id="form-buscar">
                <input type="search" name="buscar" id="buscar" class="busca">
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
    <main>
        <nav id="nav-detalhes">
            <h1>Categorias</h1>
            <div class="info">
                <input type="radio" name="" id="blusa">
                <label for="blusa">Blusa</label>
            </div>
           <div class="info">
            <input type="radio" name="" id="saia">
            <label for="">Saia</label>
           </div>
            <div class="info">
                <input type="radio" name="" id="vestido">
                <label for="vestido">Vestido</label>
            </div>
            <div class="info">
                <input type="radio" name="" id="roupas-intimas">
                <label for="roupas-intimas">Roupas intimas</label>
            </div>
            <div class="info">
                <input type="radio" name="" id="maquiagens">
                <label for="maquiagem">Maquiagens</label>
            </div>
            <div class="info">
                <input type="radio" name="" id="bolsa">
                <label for="bolsa">Bolsa</label>
            </div>

        </nav>
        <div id="blusa-detalhes">
            <div id="amostra">
                <img src="../imgs/part1.PNG" alt="" width="50px">
                <img src="../imgs/parte2.PNG" alt="" width="50px">
                <img src="../imgs/parte3.PNG" alt="" width="50px">
                <img src="../imgs/parte4.PNG" alt="" width="50px">
                <img src="../imgs/parte3.PNG" alt="" width="50px">
            </div>
           <div class = "img-principal">
             <img src="../imgs/blusa.jpg" alt="" height="600px">
            </div>
        </div>
        <div id="descrição">
            <h1>Blusa Cropped Feminina Manga </h1>
            <img src="../imgs/5_star.png" alt="" width="200">
            <h2>R$: 89,00</h2>
            <div>
                <p>Cor: <strong>Rosa</strong></p>
                <button id="corbuton"></button>
            </div>
            <div class="btn">
                <p>Escolha Sua variação:</p>
                <button id="tamanhobtn">P</button>
                <button id="tamanhobtn">PP</button>
                <button id="tamanhobtn">M</button>
                <button id="tamanhobtn">G</button>
                <button id="tamanhobtn">GG</button>
            </div>
            <h2>Sobre o produto: </h2>
            <p class="sobrep">Blusa Cropped Feminina Manga 3/4 Bufante LusaFashion, confeccionada em tecido plano viscose. Possui decote reto, manga 3/4 bufante, acabamento e costura no tom.Informações Adicionais:
                Tamanho: 36 ao 44
                Cor: Rosa
                Material: viscose(tecido plano)
                Composição: 100% viscose
                Marca: LudoFashion</p>
        </div>
    </main>
</body>
</html>