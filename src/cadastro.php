<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/sobre.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <link rel="stylesheet" href="./styles/cadastro.css">
    <title>Hívena Del Pintor</title>
</head>

<body>
    <!--  ↓ NAVBAR E IMAGEM DA HOME ↓ -->
    <header>
        <div class="logo">
            <a href="./index.php"><img src="./img/logo/logo2.png" alt=""></a>
        </div>
        <nav class="nav" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="./index.php" class="nav__link">Início</a></li>
                <li class="nav__item"><a href="./sobre.php" class="nav__link">Sobre</a></li>
                <li class="nav__item"><a href="./projetos.php" class="nav__link">Projetos</a></li>
                <li class="nav__item"><a href="./contato.php" class="nav__link">Contato</a></li>
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">
        
    </header>

    <script src="./js/navbar.js"></script>
    <div class="sobre-img-div">
        <div class="sobre-img-fade">
            <div class="logo-sobre">
                <img src="./img/logo/logo4.png" alt="Logo">
            </div>
        </div>
    </div>
    <div class="blank15"></div>
    <div class="cadastro-title">
        <p>• Faça seu cadastro</p>
    </div>
    <div class="blank2"></div>
    <div class="general">
        <div class="card-form">
            <div class="grid">
                    <form action="./php/cadastro.php" method="post">
                    <label for="email">Digite seu Email</label>
                    <input type="text" name="email" id="email">
                    <input type="text" name="senha" id="senha">
                    <input type="text" name="confirm_senha" id="confirm_senha">
                    <button type="submit">Enviar</button>
            </div>
        </div>
    </div>


    </form>
</body>

</html>