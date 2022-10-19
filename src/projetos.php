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
    <ul class="filter">
        <li class="list active" data-filter="todos">Todos</li>
        <li class="list" data-filter="quartos">Quartos</li>
        <li class="list" data-filter="banheiros">Banheiros</li>
        <li class="list" data-filter="salas_estar">Salas de estar</li>
    </ul>
    <div class="galeria">
        <div class="itemBox" data-item="salas_estar" loading="lazy"><img src="./img/img1.jpg" alt=""></div>
        <div class="itemBox" data-item="salas_estar" loading="lazy"><img src="./img/img2.jpg" alt=""></div>
        <div class="itemBox" data-item="salas_estar" loading="lazy"><img src="./img/img3.jpg" alt=""></div>
        <div class="itemBox" data-item="salas_estar" loading="lazy"><img src="./img/img4.jpg" alt=""></div>
        <div class="itemBox" data-item="quartos" loading="lazy"><img src="./img/img23.jpg" alt=""></div>
        <div class="itemBox" data-item="salas_estar" loading="lazy"><img src="./img/img6.jpg" alt=""></div>
        <div class="itemBox" data-item="salas_estar" loading="lazy"><img src="./img/img7.jpg" alt=""></div>
        <div class="itemBox" data-item="salas_estar" loading="lazy"><img src="./img/img8.jpg" alt=""></div>
        <div class="itemBox" data-item="banheiros" loading="lazy"><img src="./img/img21.jpg" alt=""></div>
    </div>
    <script src="./js/navbar.js"></script>
    <script src="./js/img-filter.js"></script>
</body>

</html>