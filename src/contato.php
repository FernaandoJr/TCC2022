<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/contato.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <link rel="stylesheet" href="./styles/popup.css">
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
                <li class="nav__item"><a id="btn-cadastro" class="nav__link">Cadastro</a></li>
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">
        
    </header>

    <script src="./js/navbar.js"></script>
    <div class="contato-img-div">
        <div class="contato-img-fade">
            <div class="contato-logo">
                <img src="./img/logo/logo4.png" alt="Logo">
            </div>
        </div>
    </div>
    <script src="./js/navbar.js"></script>
    <div class="blank5"></div>
    <div class="contato-card-title">
        <p>Entre em contato conosco</p>
        <div class="blank3"></div>
    </div>
    <div class="contato-form-grid">
        <!-- ↓ COLUNA 1 ↓ -->
        <div class="contato-card"><img src="./img/exemplo17.jpg" alt="Imagem"></div>
        <div class="contato-form-text">
            <div class="form-grid">
                <div class="nome-completo">
                    <form action="./php/add.php" method="post">
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
        </div>

    </div>
    </form>

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







    <script src="./js/input.js"></script>
    <script src="./js/popup.js"></script>
    <br><br><br><br><br><br><br><br><br><br>


</body>

</html>