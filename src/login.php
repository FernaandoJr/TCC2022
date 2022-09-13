<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/sobre.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <link rel="stylesheet" href="./styles/login.css">
    <title>Estudio ao Quadrado</title>
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
                <li class="nav__item"><a href="./login.php" class="nav__link">Login</a></li>                                             
                 <li class="nav__item"><a href="./cadastro.php" class="nav__link nav__link-special">Cadastro</a></li>                 
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">

    </header>

    <script src="./js/navbar.js"></script>
    <div class="parent">
        <div class="img-login">
            <img src="./img/exemplo24.jpg" alt="">
        </div>
        <div class="form-login">

            <form action="./php/login.php" method="post" class="formulario-grid">
                <div class="login-title">
                    <p>Login</p>
                </div>
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div class="login-error">
                <p>Usuário ou Senha incorretos.</p>
                </div>
                <?php
                endif;  
                unset($_SESSION['nao_autenticado']);
                ?>
                <div class="login-email">
                    <div class="input-group">
                        <input required="" type="text" name="email" id="email" autocomplete="off" maxlength="50"
                            class="input">
                        <label class="user-label">Email</label>
                    </div>
                </div>
                <div class="login-senha">
                    <div class="input-group">
                        <input required="" type="password" name="senha" id="senha" autocomplete="off" maxlength="50"
                            class="input">
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
</body>

</html>