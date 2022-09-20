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
    <link rel="stylesheet" href="./styles/cadastro.css">
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
                <li class="nav__item"><a href="./login.php" class="nav__link">Login</a></li>
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
                if (isset($_SESSION['error_senha'])) :
                ?>
                    <script src="./js/popup.js"></script>
                    <div class="popup" id="popup">
                        <div class="popup-content">
                            <div class="popup-text">
                                <h1>ERRO</h1>
                                <p>A senha deve conter 8 ou mais digitos.</p>
                            </div>
                        </div>
                    </div>
                <?php
                endif;
                unset($_SESSION['error_senha']);
                ?>
                <?php
                if (isset($_SESSION['error_email'])) :
                ?>
                    <script src="./js/popup.js"></script>
                    <div class="popup">
                        <div class="popup-content">
                            <div class="popup-text">
                                <h1>ERRO</h1>
                                <p>O email não é válido.</p>
                            </div>
                        </div>
                    </div>
                <?php
                endif;
                unset($_SESSION['error_email']);
                ?>
                <?php
                if (isset($_SESSION['error_confirm_senha'])) :
                ?>
                    <script src="./js/popup.js"></script>
                    <div class="popup">
                        <div class="popup-content">
                            <div class="popup-text">
                                <h1>ERRO</h1>
                                <p>As senhas não coincidem.</p>
                            </div>
                        </div>
                    </div>
                <?php
                endif;
                unset($_SESSION['error_confirm_senha']);
                ?>
                <?php
                if (isset($_SESSION['error_email_exists'])) :
                ?>
                    <script src="./js/popup.js"></script>
                    <div class="popup">
                        <div class="popup-content">
                            <div class="popup-text">
                                <h1>ERRO</h1>
                                <p>Este email já está cadastrado.</p>
                            </div>
                        </div>
                    </div>
                <?php
                endif;
                unset($_SESSION['error_email_exists']);
                ?>

                <div class="img-cadastro"><img src="./img/exemplo.jpg" alt=""></div>
                <div class="form-cadastro">

                    <form action="./php/cadastro.php" method="post" class="formulario-grid">
                        <div class="cadastro-title">
                            <p>Cadastre-se</p>
                        </div>
                        <div class="cadastro-email">
                            <div class="input-group">
                                <input required="" type="text" name="email" id="email" autocomplete="off" maxlength="50" class="input">
                                <label class="user-label">Email</label>
                            </div>
                        </div>
                        <div class="cadastro-senha">
                            <div class="input-group">
                                <input required="" type="password" name="senha" id="senha" autocomplete="off" maxlength="50" class="input">
                                <label class="user-label">Senha</label>
                            </div>
                        </div>
                        <div class="cadastro-confirm-senha">
                            <div class="input-group">
                                <input required="" type="password" name="confirm_senha" id="confirm_senha" autocomplete="off" maxlength="50" class="input">
                                <label class="user-label">Confirmar Senha</label>
                            </div>
                        </div>
                        <div class="cadastro-btn">
                            <button type="submit" class="cadastro-btn-submit">Enviar</button>
                        </div>
                        <div class="cadastro-aviso">
                            <p>Já tem uma conta? <a href="./login.php">Faça login.</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>