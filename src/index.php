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
                <li class="nav__item"><a href="./index.php" class="nav__link in">Início</a></li>
                <li class="nav__item"><a href="./sobre.php" class="nav__link">Sobre</a></li>
                <li class="nav__item"><a href="./projetos.php" class="nav__link">Projetos</a></li>
                <li class="nav__item"><a href="./contato.php" class="nav__link">Contato</a></li>
                <li class="nav__item"><a href="./admin/index.php" class="nav__link">Admin</a></li>
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">
    </header>

    <script src="./js/navbar.js"></script>
    <div class="home-img-div">
        <div class="home-img-fade">
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
    <div class="blank5"></div>
    <div class="home-card-info-title">
        <p>• Garantimos</p>
    </div>
    <div class="blank3"></div>
    <div class="info-container">
        <div class="card-1">
            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
            <lord-icon src="https://cdn.lordicon.com/jsoeastu.json" trigger="hover"></lord-icon>
            <h2>Preço Justo</h2>
            <p>Uma das funções do arquiteto é a especificação de material e quantitativos deles, o que com toda certeza
                evita erros no processo, fazendo você economizar muito mais ou no mínimo gastar o planejado.</p>
        </div>
        <div class="card-2">
        <lord-icon src="https://cdn.lordicon.com/qznlhdss.json" trigger="hover"></lord-icon>
            <h2>Prazo de entrega</h2>
            <p>Um bom prazo de entrega é algo que condiz com o projeto, dependendo do projeto e complexidade que é
                necessário para executar o projeto e a obra. Focamos em fazer a realização de um projeto que realmente
                seja de uma qualidade boa e que atenda as espectativas e exigências do cliente.</p>
        </div>
        <div class="card-3">
        <lord-icon src="https://cdn.lordicon.com/kulwmpzs.json" trigger="hover"></lord-icon>
            <h2>Profissionalismo</h2>
            <p>Priorizamos um bom atendimento, compromisso e fidelidade com o cliente, propomos ser extremamente
                profissionais garantindo a consultoria de alta qualidade, rapidez e entrega de prazos dentro do
                combinado.</p>
        </div>
    </div>
    <div class="square white"></div>
    <div class="home-sobrenos">
        <div class="home-sobrenos-text">
            <h1>Sobre nós</h1>
            <p>Com o crescimento da nossa empresa, estamos cada vez mais focando em projetos e interiores maiores e com
                mais complexidade.</p>
            <button class="home-btn-sobrenos"><a href="./sobre.php">Saiba mais</a></button>
        </div>
        <img src="./img/img9_169.png" alt="">
    </div>
    <div class="square blue"></div>
    <div class="blank7"></div>
    <div class="home-projetos">
        <div class="slider-container">
            <div id="slider">
                <ul id="slideWrap">
                    <li><img src="./img/img1_169.png" alt=""></li>
                    <li><img src="./img/img2_169.png" alt=""></li>
                    <li><img src="./img/img3_169.png" alt=""></li>
                    <li><img src="./img/img5_169.png" alt=""></li>
                    <li><img src="./img/img7_169.png" alt=""></li>
                    <li><img src="./img/img8_169.png" alt=""></li>
                    <li><img src="./img/img9_169.png" alt=""></li>
                    <li><img src="./img/img23_169.png" alt=""></li>
                    <li><img src="./img/img24_169.png" alt=""></li>
                    <li><img src="./img/img12.jpg" alt=""></li>
                    <li><img src="./img/img13.jpg" alt=""></li>
                    <li><img src="./img/img14.jpg" alt=""></li>
                    <li><img src="./img/img15.jpg" alt=""></li>
                    <li><img src="./img/img16.jpg" alt=""></li>
                </ul>
                <div class="svg">
                    <img id="prev" src="./img/icon/next.svg" alt="">
                    <img id="next" href src="./img/icon/prev.svg" alt="">
                </div>
            </div>
        </div>
        <div class="home-projetos-text">
            <h1>Nossos projetos</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, sapiente consequuntur? Voluptatem amet et
                totam voluptas hic iusto vitae ipsa quibusdam, rerum sit atque ut repellat necessitatibus laborum
                dolorum. Animi?</p>
        </div>
    </div>
    <div class="blank7"></div>
    <script src="./js/img-slider.js"></script>
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>Sobre Nós</h2>
                <div class="content">
                    <p>Criada e fundada em 2020, estavamos em um ano difícil com uma pequena cartela de clientes devido
                        à pandemia. Após a criação da empresa conseguimos aumentar a nossa cartela e aumentar a produção
                        e qualidade dos projetos que foram sendo desenvolvidos.</p>
                    <div class="social">
                        <a href="https://www.instagram.com/arq.studioaoquadrado/" target="_blank"><img src="./img/icon/logo-instagram.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="center box">
                <h2>Endereço</h2>
                <div class="content">
                    <div class="place">
                    <lord-icon src="https://cdn.lordicon.com/osuxyevn.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span class="text">Av. Brasil, Nova Capital</span>
                    </div>
                    <div class="phone">
                    <lord-icon src="https://cdn.lordicon.com/osuxyevn.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span class="text">+55 19 98985-7713</span>
                    </div>
                    <div class="email">
                    <lord-icon src="https://cdn.lordicon.com/ifqmqwui.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span class="text">exemplo@empresa.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="center">
                <span class="credit">Criado por <a href="./equipe.php">Studio Ao Quadrado</a></span>
                <span class="copyright">© 2021 Todos os direitos reservados</span>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/54c30c2b81.js" crossorigin="anonymous"></script>


</body>

</html>