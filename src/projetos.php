<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo/logoA_blue.svg" type="image/svg">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <link rel="stylesheet" href="./styles/projetos.css">
    <title>Studio ao Quadrado</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="./index.php"><img src="./img/logo/LogoA_white.svg" alt=""></a>
        </div>
        <nav class="nav" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="./index.php" class="nav__link">Início</a></li>
                <li class="nav__item"><a href="./sobre.php" class="nav__link">Sobre</a></li>
                <li class="nav__item"><a href="./projetos.php" class="nav__link in">Projetos</a></li>
                <li class="nav__item"><a href="./contato.php" class="nav__link">Contato</a></li>
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">

    </header>
    <div class="projetos-img-div">
        <div class="projetos-img-fade">
            <div class="logo-projetos">
                <img src="./img/logo/full_logo_white.svg" alt="Logo">
            </div>
        </div>
    </div>
    <div class="checkbox">
        <input type="radio" name="btn" id="btn-todos" checked>
        <label for="btn-todos">Todos</label>
        <input type="radio" name="btn" id="btn-quartos">
        <label for="btn-quartos">Quartos</label>
        <input type="radio" name="btn" id="btn-banheiros">
        <label for="btn-banheiros">Banheiros</label>
        <input type="radio" name="btn" id="btn-sala_estar">
        <label for="btn-sala_estar">Salas de estar</label>
    </div>
    <div class="galeria">
        <img src="./img/img1.jpg" alt="" class="sala_estar">
        <img src="./img/img2.jpg" alt="" class="sala_estar">
        <img src="./img/img3.jpg" alt="" class="sala_estar">
        <img src="./img/img4.jpg" alt="" class="sala_estar">
        <img src="./img/img23.jpg" alt="" class="quarto">
        <img src="./img/img6.jpg" alt="" class="sala_estar">
        <img src="./img/img7.jpg" alt="" class="sala_estar">
        <img src="./img/img8.jpg" alt="" class="sala_estar">
        <img src="./img/img21.jpg" alt="" class="banheiro">
    </div>
    <script src="./js/navbar.js"></script>
</body>

</html>