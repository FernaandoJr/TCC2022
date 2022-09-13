<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/sobre.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <link rel="stylesheet" href="./styles/popup.css">
    <title>Hívena Del Pintor</title>
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
                <li class="nav__item"><a id="btn-cadastro" class="nav__link">Cadastro</a></li>
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">
        
    </header>

    <script src="./js/navbar.js"></script>
    <div class="sobre-img-div">
        <div class="sobre-img-fade">
            <div class="logo-sobre">
                <img src="./img/logo/logo4.png" alt="Logo">
            </div>
        </div>
    </div>
    <script src="./js/popup.js"></script>







    <div class="popup">
        <div class="popup-content">
            <div class="parent">
                <div class="img-cadastro"><img src="./img/exemplo4.jpg" alt=""></div>
                <div class="form-cadastro">

                        <form action="./php/cadastro.php" method="post" class="formulario-grid">
                            <div class="cadastro-title">
                                <p>Cadastre-se</p>
                            </div>
                            <div class="cadastro-error">

                            </div>
                            <div class="cadastro-email">
                                <div class="input-group">
                                    <input required="" type="text" name="email" id="email" autocomplete="off"
                                        maxlength="50" class="input">
                                    <label class="user-label">Email</label>
                                </div>
                            </div>
                            <div class="cadastro-senha">
                                <div class="input-group">
                                    <input required="" type="text" name="senha" id="senha" autocomplete="off"
                                        maxlength="50" class="input">
                                    <label class="user-label">Senha</label>
                                </div>
                            </div>
                            <div class="cadastro-confirm-senha">
                                <div class="input-group">
                                    <input required="" type="text" name="confirm_senha" id="confirm_senha"
                                        autocomplete="off" maxlength="50" class="input">
                                    <label class="user-label">Confirmar Senha</label>
                                </div>
                            </div>
                            <div class="cadastro-btn">
                                <button type="submit" class="cadastro-btn-submit">Enviar</button>
                            </div>
                            <div class="cadastro-aviso">
                                <p>Já tem uma conta? <a href="#">Faça login.</a></p>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>