<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/form.css">
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
        <div id="father">
            <div class="Login">
                <form action="" id="form">
                    <h1>LOGIN</h1>
                    <div class="box-login">
                        <label for="email">Email</label>
                        <input type="email" name="mail" id="email" required>
                    </div>
        
                    <div class="box-login">
                        <label for="senha">Senha</label>
                        <input type="password" name="isenha" id="senha" required>
                    </div>
        
                   <div class="button" >
                    <input type="submit" value="enviar">
                   </div>
                   <p class="ou">ou</p>
                   <div class="icons-img">
                        <img src="../imgs/icon-google.png" alt="" width="40px">
                        <img src="../imgs/icon-facebook.png" alt="" width="40px">
                   </div>
                   <div class="link">
                    <a href="../cadastro.html">Cadastrar</a>
                    <a href="">Preciso de ajuda?</a>
                   </div>
                </form>
            </div>
        </div>
</body>
</html>