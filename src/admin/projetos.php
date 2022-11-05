<?php
require_once 'init.php';
// abre a conexão
$PDO = db_connect();

$sql = "SELECT * "
    . "FROM img";

// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>

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
    <div class="popup" id="popup">
        <div class="content">
            <p>Adicionar projeto</p>
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" required="" name="link" id="link" autocomplete="off" maxlength="200" class="input-link">
                    <label class="user-label">Link da imagem</label>
                </div>
                <div class="input-group radio-group">
                    <input type="radio" name="tipo" id="banheiro" value="banheiro">
                    <label for="banheiro">Banheiro</label>
                    <input type="radio" name="tipo" id="quarto" value="quarto">
                    <label for="quarto">Quarto</label>
                    <input type="radio" name="tipo" id="sala" value="sala">
                    <label for="sala">Sala</label>
                    <input type="radio" name="tipo" id="cozinha" value="cozinha">
                    <label for="cozinha">Cozinha</label>
                    </div>
            </form>
        </div>
    </div>
    <script src="./js/popup.js"></script>
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
                            <button class="icon-btn add-btn green">
                                <div class="add-icon green"></div>
                                <div id="sergio" class="btn-add">Adicionar</div>
                            </button>
                            <button class="icon-btn add-btn red">
                                <div class="btn-delete">Remover</div>
                            </button>
                            <div>
                            </div>
                            <div class="btn-remove"></div>
                        </div>
                    </div>

                </div>
                <script src="./js/admin.js"></script>
            </div>
            <div class="imgs">
                <?php while ($img = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <?php echo "<img src=" . $img['link'] . ">" ?>
                <?php endwhile; ?>
            </div>
        </div>
</body>

</html>