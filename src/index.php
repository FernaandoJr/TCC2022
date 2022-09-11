<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <link rel="stylesheet" href="./styles/home-card/prj.css">
    <link rel="stylesheet" href="./styles/home-card/sobre.css">
    <link rel="stylesheet" href="./styles/home-card/info.css">
    <title>Hívena Del Pintor</title>
</head>

<body>
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
                <li class="nav__item"><a href="./cadastro.php" class="nav__link">Cadastro</a></li>
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">
    </header>

    <script src="./js/navbar.js"></script>
    <div class="home-img-div">
        <div class="home-img-fade">
            <div class="home-general">
                <div class="home-img-title">
                    <h1>Especializados em reformas e design de interiores residenciais</h1>
                </div>
                <div class="home-img-subtitle">
                    <h1>Ambientes e decorações pensados para o bem-estar e conforto do
                        cliente
                    </h1>
                </div>
                <div class="home-btn">
                    <a href="contato.php">Fale Conosco</a>
                </div>
            </div>

        </div>
    </div>
    <div class="blank5"></div>
    <div class="home-card-info-title">
        <p>• Garantimos</p>
    </div>
    <div class="blank3"></div>
    <div class="row1-container">
        <div class="card1">
            <div class="box red">
                <h2>Confiança</h2>
                <br>
                <p>Scans our talei mollitia maiores labore
                    suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                    modi minima sunt esse temporibus sint culpa, recusandae alto create the optimal team for your
                    project</p>
                <img class="img-card-teste" src="./img/icon/honesty.png" alt="">
            </div>
        </div>
        <div class="card2">
            <div class="box blue">
                <h2>Profissionalismo</h2>
                <br>
                <p>pat, nisi at euismod tristique, nisl enim suscipit tortor,
                    ac laoreet nisl ante a metus. Proin ac ahe optimal team for your project</p>
                <img class="img-card-teste" src="./img/icon/suitcase.png" alt="">
            </div>
        </div>
        <div class="card3">
            <div class="box green">
                <h2>Rapidez</h2>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint quaerat, um molestias eos </p>
                <img class="img-card-teste" src="./img/icon/fast-time.png" alt="">
            </div>
        </div>
    </div>
    <div class="blank5"></div>
    <div class="blank3"></div>
    <!-- CARD PROJETOS -->
    <div class="projeto-background-div prj-bg-marker">
        <h1>Conheça alguns dos nossos projetos</h1>
    </div>
    <div class="blank3 prj-bg"></div>
    <div class="home-prj-card prj-bg">
        <div class="prj-card-grid">
            <div class="prj-img1"> <img src="./img/exemplo22.jpg" alt=""></div>
            <div class="prj-img2"> <img src="./img/exemplo21.jpg" alt=""></div>
            <div class="prj-img3"> <img src="./img/exemplo23.jpg" alt=""></div>
            <div class="prj-img4"> <img src="./img/exemplo10.jpg" alt=""></div>
            <div class="prj-img5"> <img src="./img/exemplo9.jpg" alt=""></div>
            <div class="prj-img6"> <img src="./img/exemplo17.jpg" alt=""></div>
            <div class="prj-img7"> <img src="./img/exemplo24.jpg" alt=""></div>
            <div class="prj-img8"> <img src="./img/exemplo15.jpg" alt=""></div>
            <div class="prj-img9"> <img src="./img/exemplo14.jpg" alt=""></div>
            <div class="prj-img10"> <img src="./img/exemplo13.jpg" alt=""></div>
        </div>
    </div>
    <div class="blank4 prj-bg"></div>
    <div class="projeto-background-div">
        <h1 class="sobre-title">Saiba um pouco mais sobre nós</h1>
    </div>
    <div class="home-sobre-card">
        <div class="sobre-card-grid">
            <div class="sobre-card-col1">
                <h1>Sobre Nós</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Inventore consequuntur ea minus. Cum perspiciatis corrupti
                    incidunt culpa rerum numquam sit eos aliquid rem, quod sunt
                    voluptatibus, laudantium quidem temporibus excepturi?</p>
                <a href="./sobre.php">
                    <button class="btn">Sobre nós</button>
                </a>
            </div>
            <div class="sobre-card-col2">
                <img src="./img/exemplo21.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="blank4"></div>
    <div class="blank15"></div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>