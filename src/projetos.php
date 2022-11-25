<?php
require_once './php/init.php';
// abre a conexão
$PDO = db_connect();

$sql = "SELECT * "
    . "FROM img";
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo/logoA_blue.svg" type="image/svg">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <link rel="stylesheet" href="./styles/projetos.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <title>Studio ao Quadrado</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="./index.php"><img src="./img/logo/LogoA_white.svg" alt=""></a>
        </div>
        <nav class="nav" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="./index.php" class="nav__link">Início</a></li>
                <li class="nav__item"><a href="./sobre.php" class="nav__link">Sobre</a></li>
                <li class="nav__item"><a href="./projetos.php" class="nav__link in">Projetos</a></li>
                <li class="nav__item"><a href="./contato.php" class="nav__link">Contato</a></li>
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">

    </header>
    <div class="projetos-img-div">
        <div class="projetos-img-fade">
            <div class="logo-projetos">
                <img src="./img/logo/full_logo_white.svg" alt="Logo">
            </div>
        </div>
    </div>
    <ul class="filter">
        <li class="list active" data-filter="todos">Todos</li>
        <li class="list" data-filter="quarto">Quartos</li>
        <li class="list" data-filter="banheiro">Banheiros</li>
        <li class="list" data-filter="sala_estar">Salas de estar</li>
        <li class="list" data-filter="cozinha">Cozinha</li>
    </ul>
    <div class="galeria">
        <?php while ($img = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <div class="itemBox" data-item="<?php echo $img['tipo'] ?>" loading="lazy"><?php echo "<img src=" . $img['link'] . ">" ?></div>
        <?php endwhile; ?>
    </div>
    <script src="./js/navbar.js"></script>
    <script src="./js/img-filter.js"></script>
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>Sobre Nós</h2>
                <div class="content">
                    <p>Criada e fundada em 2020, estavamos em um ano difícil com uma pequena cartela de clientes devido
                        à pandemia. Após a criação da empresa conseguimos aumentar a nossa cartela e aumentar a produção
                        e qualidade dos projetos que foram sendo desenvolvidos.</p>
                    <div class="social">
                        <a href="https://www.instagram.com/arq.studioaoquadrado/" target="_blank"><img src="./img/icon/logo-instagram.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="center box">
                <h2>Endereço</h2>
                <div class="content">
                    <div class="place">
                        <lord-icon src="https://cdn.lordicon.com/osuxyevn.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span class="text">Av. Brasil, Nova Capital</span>
                    </div>
                    <div class="phone">
                        <lord-icon src="https://cdn.lordicon.com/ssvybplt.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span class="text">+55 19 98985-7713</span>
                    </div>
                    <div class="email">
                        <lord-icon src="https://cdn.lordicon.com/ifqmqwui.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span class="text">exemplo@empresa.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="center">
                <span class="credit">Criado por <a href="#">Studio Ao Quadrado</a></span>
                <span class="copyright">© 2021 Todos os direitos reservados</span>
            </div>
        </div>
        <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
    </footer>
</body>

</html>