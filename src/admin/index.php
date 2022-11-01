<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 
    <link rel="icon" href="/src/img/logo/logoA_blue.svg" type="image/svg">
    <title>Painel</title>
</head>

<body>
    <div class="dash-container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="./index.php">
                        <img src="/src/img/logo/logoA_white.svg" alt="">
                        <span>
                            <h2>Studio Ao Quadrado</h2>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        <span><i class="fa-solid fa-house"></i></span>
                        <span>Início</span>
                    </a>
                </li>
                <li>
                    <a href="./pedidos.php">
                        <span><i class="fa-solid fa-comments"></i></span>
                        <span>Pedidos</span>
                    </a>
                </li>
                <li>
                    <a href="./projetos.php">
                        <span><i class="fa-solid fa-folder-open"></i></span>
                        <span>Projetos</span>
                    </a>
                </li>
                <li>
                    <a href="/src/index.php">
                        <span><i class="fa-solid fa-right-to-bracket"></i></span>
                        <span>Sair</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/54c30c2b81.js" crossorigin="anonymous"></script>

    <div class="main">
        <div class="topbar">
            <div class="toggle" onclick="AdminToggle();">
            </div>
            <div class="search">
                    <label>
                        <input type="text" placeholder="Pesquisar">
                        <i class="fa fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>
            <div class="user">
                <img src="\src\img\pfp2.jpeg" alt="">
            </div>
        </div>
    </div>
    <script src="./js/admin.js"></script>
</body>
</html>