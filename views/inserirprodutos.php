<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cadastroproduto.css">
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
        <section class="cadastro">
            <h1>Cadastro De Produto</h1>
            <h2>Detalhes do Produto</h2>
        </section>
        <div>
            <table class="tabela">
                <tr>
                    <td>Cod.produto</td>
                    <td>Nome do produto</td>
                    <td>Cor</td>
                    <td>Tamanho</td>
                    <td>Descricão do Produto</td>
                </tr>
            </table>
        </div>
        <div class="inserir">
            <form action="inserir_produto.php" method="POST">
                <label for="codigo">Código do Produto:</label>
                <input type="text" name="codigo" id="codigo" required>
                
                <label for="nome">Nome do Produto:</label>
                <input type="text" name="nome" id="nome" required>
                
                <label for="cor">Cor:</label>
                <input type="text" name="cor" id="cor" required>
                
                <label for="tamanho">Tamanho:</label>
                <input type="text" name="tamanho" id="tamanho" required>
                
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" rows="4" required></textarea>
                
                <button type="submit">Adicionar Produto</button>
            </form>
        </div>
                <table class="tabela2">
                    <tr>
                        <td>caracteristica do produto</td>
                    </tr>
                    <tr>
                        <td>marca</td>
                    </tr>
                    <tr>
                        <td>tecido</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>