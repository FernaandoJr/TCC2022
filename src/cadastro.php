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
    <link rel="stylesheet" href="./styles/cadastro.css">
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
        <div class="img-cadastro"><img src="./img/exemplo4.jpg" alt=""></div>
        <div class="form-cadastro">

            <form action="./php/cadastro.php" method="post" class="formulario-grid">
                <div class="cadastro-title">
                    <p>Cadastre-se</p>
                </div>
                <?php
                if(isset($_SESSION['error_senha'])):
                ?>
                <div class="cadastro-error">
                    <p>A senha deve conter ao menos 8 caracteres.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['error_senha']);
                ?>
                <?php
                if(isset($_SESSION['error_email'])):
                ?>
                <div class="cadastro-error">
                    <p>O Email não é válido.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['error_email']);
                ?>
                <?php
                if(isset($_SESSION['error_confirm_senha'])):
                ?>
                <div class="cadastro-error">
                    <p>As senhas não coincidem.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['error_confirm_senha']);
                ?>
                <?php
                if(isset($_SESSION['error_email_exists'])):
                ?>
                <div class="cadastro-error">
                    <p>Este Email já está cadastrado.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['error_email_exists']);
                ?>
                <div class="cadastro-email">
                    <div class="input-group">
                        <input required="" type="text" name="email" id="email" autocomplete="off" maxlength="50"
                            class="input">
                        <label class="user-label">Email</label>
                    </div>
                </div>
                <div class="cadastro-senha">
                    <div class="input-group">
                        <input required="" type="password" name="senha" id="senha" autocomplete="off" maxlength="50"
                            class="input">
                        <label class="user-label">Senha</label>
                    </div>
                </div>
                <div class="cadastro-confirm-senha">
                    <div class="input-group">
                        <input required="" type="password" name="confirm_senha" id="confirm_senha" autocomplete="off"
                            maxlength="50" class="input">
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
</body>

</html>