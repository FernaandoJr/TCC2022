<?php
session_start();
?>

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
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" href="./styles/popup.css">
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
                <li class="nav__item"><a href="./sobre.php" class="nav__link">Sobre</a></li>
                <li class="nav__item"><a href="./projetos.php" class="nav__link">Projetos</a></li>
                <li class="nav__item"><a href="./contato.php" class="nav__link">Contato</a></li>
                <li class="nav__item"><a href="./login.php" class="nav__link in">Login</a></li>
                <li class="nav__item"><a href="./cadastro.php" class="nav__link nav__link-special">Cadastro</a></li>
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">

    </header>

    <script src="./js/navbar.js"></script>
    <div class="bg">
        <div class="teste">
            <div class="parent">
                <?php
                if (isset($_SESSION['nao_autenticado'])) :
                ?>
                    <script src="./js/popup.js"></script>
                    <div class="popup" id="popup">
                        <div class="popup-content">
                            <img src="./img/icon/error.svg" alt="">
                            <h2>Algo deu errado,</h2>
                            <p>Email ou Senha incorretos.</p>
                            <button class="btn-error" ><a href="./login.php">Tentar Novamente</a></button>
                        </div>
                    </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <div class="img-login">
                    <img src="./img/img1_169.png" alt="">
                </div>
                <div class="form-login">

                    <form action="./php/login.php" method="post" class="formulario-grid">
                        <div class="login-title">
                            <p>Login</p>
                        </div>
                        <div class="login-email">
                            <div class="input-group">
                                <input required="" type="text" name="email" id="email" autocomplete="off" maxlength="50" class="input">
                                <label class="user-label">Email</label>
                            </div>
                        </div>
                        <div class="login-senha">
                            <div class="input-group">
                                <input required="" type="password" name="senha" id="senha" autocomplete="off" maxlength="50" class="input">
                                <label class="user-label">Senha</label>
                            </div>
                        </div>
                        <div class="login-btn">
                            <button type="submit" class="login-btn-submit">Enviar</button>
                        </div>
                        <div class="login-aviso">
                            <p>Ainda naõ tem uma conta? <a href="./cadastro.php">Cadastre-se.</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>