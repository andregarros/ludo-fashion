<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sobre.css">
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
    <main>
        <section id="conteudo-lado">
            <div id="conteudo">
                <h2>Quem somos</h2>
                <p class="alinha-conteudo">LudoFashion é uma boutique online que cativa o coração de mulheres modernas e conscientes da moda. Especializada na venda de cosméticos e roupas femininas, a LudoFashion oferece uma seleção cuidadosamente curada de produtos que combinam elegância, estilo e qualidade. Desde os mais recentes lançamentos em produtos de beleza até as últimas tendências em moda feminina, cada item da LudoFashion é escolhido para inspirar confiança e beleza em suas clientes. Com um compromisso inabalável com a qualidade e o serviço ao cliente, a LudoFashion se destaca como um destino confiável para mulheres que buscam expressar sua individualidade através do estilo.</p>
                <hr>
                <p class="alinha-conteudo"><strong>Visão:</strong>Ser a principal boutique online para mulheres modernas e conscientes da moda, oferecendo uma experiência única e inspiradora <br>
                 <strong>Missão:</strong>Proporcionar uma seleção cuidadosamente curada de cosméticos e roupas femininas que inspirem confiança e expressão individual, com excelência em qualidade e serviço ao cliente.
                </p>
                <p class="alinha-conteudo">
                    <strong>Valores:</strong> Excelência, Integridade, Empoderamento.
                </p>
            </div>
            <div class="img">
                <img class="ajuste-img" src="../imgs/pessoa-pensativa.jpeg" alt="">
                <div id="icons">
                    <img src="../imgs/twitter.png" alt="" width="30px">
                    <img src="../imgs/icone-instagram.png" alt="" width="30px">
                    <img src="../imgs/whatsapp-icone.png" alt="" width="30px">
                </div>
            </div>
        </section>
    </main>
</body>
</html>