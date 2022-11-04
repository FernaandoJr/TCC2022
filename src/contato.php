<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo/logoA_blue.svg" type="image/svg">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/contato.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <link rel="stylesheet" href="./styles/footer.css">
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
                <li class="nav__item"><a href="./contato.php" class="nav__link in">Contato</a></li>
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">
        
    </header>

    <script src="./js/navbar.js"></script>
    <div class="contato-img-div">
        <div class="contato-img-fade">
            <div class="contato-logo">
                <img src="./img/logo/full_logo_white.svg" alt="Logo">
            </div>
        </div>
    </div>
    <script src="./js/navbar.js"></script>
    <div class="blank5"></div>
    <div class="contato-form-title">
        <h1>Entre em contato conosco</h1>
        <div class="blank3"></div>
    </div>
    <div class="container-form-img">
        <img src="/src/img/img6.jpg" alt="">
        <div class="form">
        <form action="./php/add.php" method="post" autocomplete="off">
        <div class="nome-completo">
                        <div class="input-group">
                            <input required="" type="text" name="nome" id="nome" autocomplete="off" maxlength="50"
                                class="input-name">
                            <label class="user-label">Nome Completo</label>
                        </div>
                </div>
                <div class="telefone">
                    <div class="input-group">
                        <input required="" type="text" name="tel" id="tel" autocomplete="off" maxlength="12"
                            class="input-tel">
                        <label class="user-label">Telefone</label>
                    </div>
                </div>
                <div class="email">
                    <div class="input-group">
                        <input required="" type="text" name="email" id="email" autocomplete="off" maxlength="40"
                            class="input-email">
                        <label class="user-label">E-mail</label>
                    </div>
                </div>
                <div class="mensagem">
                    <div class="input-group">
                        <textarea required="" type="text" name="msg" id="msg" autocomplete="off" maxlength="200"
                            class="input-msg"></textarea>
                        <label class="user-label">Mensagem</label>
                    </div>
                </div>
                <button class="contato-btn-submit">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="contato-btn-text">Enviar</span>
                </button>
        </div>
        </form>
    </div>
    <script src="./js/input.js"></script>
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>Sobre Nós</h2>
                <div class="content">
                    <p>Criada e fundada em 2020, estavamos em um ano difícil com uma pequena cartela de clientes devido
                        à pandemia. Após a criação da empresa conseguimos aumentar a nossa cartela e aumentar a produção
                        e qualidade dos projetos que foram sendo desenvolvidos.</p>
                    <div class="social">
                        <a href="https://www.instagram.com/arq.studioaoquadrado/" target="_blank"><img
                                src="./img/icon/logo-instagram.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="center box">
                <h2>Endereço</h2>
                <div class="content">
                    <div class="place">
                        <img class="icon" src="./img/icon/location-sharp.svg" alt="">
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
                <span class="credit">Criado por <a href="./equipe.php">Studio Ao Quadrado</a></span>
                <span class="copyright">© 2021 Todos os direitos reservados</span>
            </div>
        </div>
    </footer>
</body>

</html>