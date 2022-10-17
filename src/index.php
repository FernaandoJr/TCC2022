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
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/home-card/prj.css">
    <link rel="stylesheet" href="./styles/home-card/sobre.css">
    <link rel="stylesheet" href="./styles/home-card/info.css">
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
                <li class="nav__item"><a href="./projetos.php" class="nav__link">Projetos</a></li>
                <li class="nav__item"><a href="./contato.php" class="nav__link">Contato</a></li>
                <li class="nav__item"><a href="./login.php" class="nav__link">Login</a></li>
                <li class="nav__item"><a href="./cadastro.php" class="nav__link nav__link-special">Cadastro</a></li>
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
    <div class="blank3"></div>
    <!-- CARD PROJETOS -->
    <div class="projeto-background-div">
        <h1 class="sobre-title">Conheça os nossos projetos</h1>
    </div>
    <div class="slider-container">
        <div id="slider">
            <ul id="slideWrap">
                <li><img src="./img/exemplo15.jpg" alt=""></li>
                <li><img src="./img/exemplo17.jpg" alt=""></li>
                <li><img src="./img/exemplo14.jpg" alt=""></li>
                <li><img src="./img/exemplo9.jpg" alt=""></li>
                <li><img src="./img/exemplo10.jpg" alt=""></li>
                <li><img src="./img/exemplo13.jpg" alt=""></li>
                <li><img src="./img/exemplo20.jpg" alt=""></li>
                <li><img src="./img/exemplo21.jpg" alt=""></li>
            </ul>
            <div class="svg">
                <img id="prev" src="./img/icon/next.svg" alt="">
                <img id="next" href src="./img/icon/prev.svg" alt="">
            </div>
        </div>
    </div>
    <script src="./js/img-slider.js"></script>

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
    <script src="./js/img-slider.js"></script>
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>Sobre Nós</h2>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, laudantium pariatur, non beatae ea natus amet consectetur consequatur quis ducimus dolores cupiditate. Explicabo expedita commodi odit placeat ad repellendus saepe iste distinctio dolore. Accusamus architecto voluptas enim in eaque asperiores?</p>
                    <div class="social">
                        <a href="#"><img src="./img/icon/logo-instagram.svg" alt=""></a>
                        <a href="#"><img src="./img/icon/logo-instagram.svg" alt=""></a>
                        <a href="#"><img src="./img/icon/logo-instagram.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="center box">
                <h2>Endereço</h2>
                <div class="content">
                    <div class="place">
                        <img class="icon" src="./img/icon/location-outline.svg" alt="">
                        <span class="text">Av. Brasil, Nova Capital</span>
                    </div>
                    <div class="phone">
                        <img class="icon" src="./img/icon/call.svg" alt="">
                        <span class="text">+55 19 98985-7713</span>
                    </div>
                    <div class="email">
                        <img class="icon" src="./img/icon/mail-open.svg" alt="">
                        <span class="text">exemplo@empresa.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="center">
                <span class="credit">Criado por <a href="">Studio Ao Quadrado</a></span>
                <span class="copyright">© 2021 Todos os direitos reservados</span>
            </div>
        </div>
    </footer>
</body>

</html>