<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/admin.css">
    <link rel="stylesheet" href="./styles/projetos.css">
    <link rel="icon" href="/src/img/logo/logoA_blue.svg" type="image/svg">
    <title>Projetos</title>
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
            <div class="user">
                <img src="\src\img\pfp2.jpeg" alt="">
            </div>
        </div>
        <div class="projetos-parent">
            <div class="projetos-container">
                <div class="title">
                    <div class="parent-title">
                        <span><i class="fa fa-solid fa-folder-open"></i></span>
                        <p>Projetos</p>
                    </div>
                    <div class="buttons">
                        <div>
                            <a href="./php/img-add.php">
                                <button class="icon-btn add-btn green">
                                    <div class="add-icon green"></div>
                                    <div class="btn-txt">Adicionar</div>
                                </button>
                            </a>
                            <a href="./php/img-remove.php">
                                <button class="icon-btn add-btn red">
                                    <div class="btn-txt">Remover</div>
                                </button>
                            </a>
                            <div>
                            </div>
                            <div class="btn-remove"></div>
                        </div>
                    </div>

                </div>
                <script src="./js/admin.js"></script>

            </div>
        </div>
</body>

</html>