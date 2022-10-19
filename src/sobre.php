<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo/logoA_blue.svg" type="image/svg">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/sobre.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <title>Studio ao Quadrado</title>
</head>

<body>
    <!--  ↓ NAVBAR E IMAGEM DA HOME ↓ -->
    <header>
        <div class="logo">
            <a href="./index.php"><img src="./img/logo/LogoA_white.svg" alt=""></a>
        </div>
        <nav class="nav" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="./index.php" class="nav__link">Início</a></li>
                <li class="nav__item"><a href="./sobre.php" class="nav__link in">Sobre</a></li>
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
                <img src="./img/logo/full_logo_white.svg" alt="Logo">
            </div>
        </div>
    </div>
    <div class="container-1 white">
        <p>Nós da Studio Ao Quadrado, acreditamos que a melhor maneira de um bom atendimento ao projeto é os laços que são criados com o cliente e a empresa, prezamos pela excelência e qualidade com os projetos.</p>
    </div>
    <div class="square white"></div>
    <div class="container-2 blue">
        <img src="./img/img7_169.png" alt="">
        <div class="text">
            <h1>História</h1>
            <p>Criada e fundada em 2020, estavamos em um ano difícil com uma pequena cartela de clientes devido à pandemia. Após a criação da empresa conseguimos aumentar a nossa cartela e aumentar a produção e qualidade dos projetos que foram sendo desenvolvidos.</p>
        </div>
    </div>
    <div class="square blue"></div>
    <div class="container-3 white">

        <div class="text">
            <h1>Crescimento rápido</h1>
            <p>Com a alta demanda de consultorias após a pandemia, conseguimos crescer e aumentar nossos esforços e aumentar a produção e consultoria de mais interiores por todo o Brasil.</p>
        </div>
        <img src="./img/img7_169.png" alt="">
    </div>
    <div class="square white"></div>
    <div class="container-4 blue">
        <img src="./img/img7_169.png" alt="">
        <div class="text">
            <h1>Projetos maiores</h1>
            <p>Com o crescimento da nossa empresa, estamos cada vez mais focando em projetos e interiores maiores e com mais complexidade, focando e desenvolvendo formas de automatizar o processo de consultoria dos nossos clientes.</p>
        </div>
    </div>
    <div class="container-5">
        <h2>Curiosidades sobre a empresa</h2>
        <div class="text-box">
            <p>"O nome da empresa vem de um antigo trabalho de curso, onde o nome foi criado para o meu projeto e posteriormente decidi fazer disso o nome da minha empresa que até hoje está liderando o mercado."</p>
            <div class="square-msg"></div>
        </div>
        <div class="profile">
            <img src="./img/pfp2.jpeg" alt="">
            <p>Amanda Moura</p>
            <span>Fundadora da <a href="./index.php">Studio Ao Quadrado</a></span>
        </div>
    </div>
    <div class="sobre-final">
        <h2>Se interessou pela nossa empresa?</h2>
        <p>Conheça alguns de nossos <a href="./projetos.php"> projetos.</a></p>
    </div>
</body>

</html>