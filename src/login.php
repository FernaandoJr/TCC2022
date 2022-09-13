<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <title>Estudio ao Quadrado</title>
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
<br><br><br><br>
    <form action="./php/login.php" method="post">
        <input type="text" name="email" id="email">
        <input type="text" name="senha" id="senha">
        <button type="submit">Enviar</button>
</body>

</html>