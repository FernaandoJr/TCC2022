<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/admin.css">
    <link rel="stylesheet" href="./styles/pedidos.css">
    <link rel="icon" href="/src/img/logo/logoA_blue.svg" type="image/svg">
    <title>Pedidos</title>
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
        <div class="pedidos-container">
            <div class="title">
                <p>Pedidos</p>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Pesquisar">
                        <i class="fa fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Tel</th>
                        <th>E-mail</th>
                        <th>Mensagem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rayssa Valentina Sônia Drumond</td>
                        <td>8429389164</td>
                        <td>rayssa-drumond83@pronta.com.br</td>
                        <td>Quero fazer um planejamento de design de interior em uma cozinha...</td>
                    </tr>
                    <tr>
                        <td>Nicole Sabrina Caroline Moura</td>
                        <td>19982154881</td>
                        <td>aparecida_pinto@marramoncks.com.br</td>
                        <td>Quero reformar meu quarto e do meu filho...</td>
                    </tr>
                    <tr>
                        <td>oio1i</td>
                        <td>oio1i</td>
                        <td>oio1i</td>
                        <td>oioi1</td>
                    </tr>
                    <tr>
                        <td>oioi</td>
                        <td>oi1oi</td>
                        <td>oio1i</td>
                        <td>oioi1</td>
                    </tr>
                    <tr>
                        <td>oio1i</td>
                        <td>oio1i</td>
                        <td>oio1i</td>
                        <td>oi1oi</td>
                    </tr>
                    <tr>
                        <td>oioi</td>
                        <td>oioi</td>
                        <td>oioi</td>
                        <td>oioi</td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <script src="./js/admin.js"></script>
</body>

</html>