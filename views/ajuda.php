<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/ajuda.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
        <a href="sobre.html">Sobre a loja</a>
    </nav>
    <section id="duvidas">
        <div id="bloco-center">
                <h1> Bloco de Duvidas</h1>
            <details class="bloco-duvidas">
                <summary>Como faço pra adicionar um produto a minha lista de desejo</summary>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, natus delectus! Deserunt natus provident, illum dicta soluta quasi error cupiditate aliquam placeat corrupti voluptate vitae sequi consectetur. Quos, necessitatibus ipsa?</p>
            </details>
            <details class="bloco-duvidas">
                <summary>Existe uma opção de chat ao vivo ou suporte online para obter ajuda adicional  sobre um produto</summary>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda accusamus sed quibusdam quae quos odio dolorum, nihil quidem vel fugit reiciendis perferendis eaque officiis beatae in quas maiores magni ex?</p>
            </details>
            <details class="bloco-duvidas">
                <summary>Como posso pesquisar produto no site</summary>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nobis dolorem error fuga tenetur ipsa expedita consectetur quis omnis est alias repellat, ea maiores officiis quo molestias id commodi. Quis.</p>
            </details>
            <details class="bloco-duvidas">
                <summary>Existe uma opção de filtragem para encontrar produtos especifíficos?</summary>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quam perferendis aut exercitationem facilis hic vitae, libero eos placeat maxime porro aperiam, esse minima, reprehenderit ipsa aliquid culpa iusto eum.</p>
            </details>
            <details class="bloco-duvidas">
                <summary>Posso salvar produtos em uma lista de desejo para ver mais tarde</summary>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio obcaecati natus iusto vero provident beatae reiciendis? Dolore exercitationem nobis aut voluptatibus dolores sint illo fugiat, voluptatum rem, tenetur eveniet ab!</p>
            </details>
        </div>
 
        <div id="ajuste-img-text">
            <img src="../imgs/pessoa-pensativa.jpeg" alt="">
            <h1>Ainda com problemas?</h1>
            <h2>fale conosca <span class="material-symbols-outlined">
                support_agent
                </span></h2>
        </div>
    </section>
      
    </main>
</body>
</html>