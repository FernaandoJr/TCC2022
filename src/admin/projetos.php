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
            <div class="img"></div>
            <p>Adicionar projeto</p>
            <form action="add-img.php" method="post">
                <div class="input-group">
                    <input type="text" required="" name="link" id="link" autocomplete="off" maxlength="200" class="input-link">
                    <label class="user-label">Link da imagem</label>
                </div>
                <div class="input-group radio-group">
                    <input type="radio" name="tipo" id="banheiro" value="banheiro" class="checkbox">
                    <label for="banheiro">Banheiro</label>
                    <input type="radio" name="tipo" id="quarto" value="quarto" class="checkbox">
                    <label for="quarto">Quarto</label>
                    <input type="radio" name="tipo" id="sala" value="salas_estar" class="checkbox">
                    <label for="sala">Sala</label>
                    <input type="radio" name="tipo" id="cozinha" value="cozinha" class="checkbox">
                    <label for="cozinha">Cozinha</label>
                </div>
                <div class="btn-submit-div">
                    <input type="submit" class="btn-submit">
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
                        <lord-icon src="https://cdn.lordicon.com/osuxyevn.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span>Início</span>
                    </a>
                </li>
                <li>
                    <a href="./pedidos.php">
                        <lord-icon src="https://cdn.lordicon.com/icxqolmx.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span>Pedidos</span>
                    </a>
                </li>
                <li>
                    <a href="./projetos.php">
                        <lord-icon src="https://cdn.lordicon.com/xhcrhqyw.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span>Projetos</span>
                    </a>
                </li>
                <li>
                    <a href="/src/index.php">
                    <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
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
                    <lord-icon src="https://cdn.lordicon.com/xhcrhqyw.json" trigger="hover"></lord-icon>
                        <p>Projetos</p>
                    </div>
                    <div class="buttons">
                        <div>
                            <button class="icon-btn add-btn green">
                                <div class="add-icon green"></div>
                                <div id="btn-add" class="btn-add">Adicionar</div>
                                <form action="delete-img.php" method="post">
                            </button>
                            <button type="submit" class="icon-btn add-btn red" name="delImg">
                                <div class="btn-delete" id="btn-delete">Remover</div>
                            </button>
                            <div>
                            </div>
                            <div class="btn-remove"></div>
                        </div>
                    </div>

                </div>
                <script src="./js/admin.js"></script>
                
    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
            </div>
            <div class="imgs">
                <?php while ($img = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <div class="teste" style="background-image: url('<?php echo $img['link'] ?>');">
                        <?php echo "<td><input type='checkbox' class='checkbox' value='" . $img['id'] . "' name='delete-id[]'></td>"; ?>

                    </div>
                <?php endwhile; ?>
                </form>
            </div>
        </div>
</body>

</html>