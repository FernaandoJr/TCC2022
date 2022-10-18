<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo/logoA_blue.svg" type="image/svg">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/sobre.css">
    <link rel="stylesheet" href="./styles/blank.css">
    <title>Studio ao Quadrado</title>
</head>

<body>
    <!--  ↓ NAVBAR E IMAGEM DA HOME ↓ -->
    <header>
        <div class="logo">
            <a href="./index.php"><img src="./img/logo/LogoA_white.svg" alt=""></a>
        </div>
        <nav class="nav" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="./index.php" class="nav__link">Início</a></li>
                <li class="nav__item"><a href="./sobre.php" class="nav__link in">Sobre</a></li>
                <li class="nav__item"><a href="./projetos.php" class="nav__link">Projetos</a></li>
                <li class="nav__item"><a href="./contato.php" class="nav__link">Contato</a></li>
                 
            </ul>
        </nav>
        <img src="./img/icon/menu.svg" alt="" class="header__menu" id="toggle-menu" onclick="changeImage()">

    </header>

    <script src="./js/navbar.js"></script>
    <div class="sobre-img-div">
        <div class="sobre-img-fade">
            <div class="logo-sobre">
                <img src="./img/logo/full_logo_white.svg" alt="Logo">
            </div>
        </div>
    </div>
    <div class="container-1 white">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque amet ipsam, ut, adipisci voluptate fuga, sapiente reiciendis ipsa nam ipsum labore voluptatem saepe maiores provident tempora. Omnis culpa odio commodi quia eaque non voluptatibus, animi sint enim, sed soluta laboriosam harum! Fuga ab hic perferendis numquam vel error, ratione provident!</p>
    </div>
    <div class="square white"></div>
    <div class="container-2 blue">
        <img src="./img/img7_169.png" alt="">
        <div class="text">
            <h1>Lorem ipsum</h1>
            <p>Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quo perspiciatis nostrum corrupti nobis, vitae recusandae cum accusamus? Voluptatum corrupti quaerat velit dolor, alias temporibus aperiam expedita aliquid deleniti harum. sit amet consectetur, adipisicing elit. At magni consectetur, est rem repellat porro illum non delectus assumenda velit reprehenderit molestiae unde optio laudantium. Dicta recusandae iure minima officiis?</p>
        </div>
    </div>
    <div class="square blue"></div>
    <div class="container-3 white">

        <div class="text">
            <h1>Lorem ipsum</h1>
            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quibusdam eos laborum quam, iste hic porro error saepe optio nisi, officia molestias vitae iusto reprehenderit sunt. Minima vitae velit ullam. consectetur, adipisicing elit. At magni consectetur, est rem repellat porro illum non delectus assumenda velit reprehenderit molestiae unde optio laudantium. Dicta recusandae iure minima officiis?</p>
        </div>
        <img src="./img/img7_169.png" alt="">
    </div>
    <div class="square white"></div>
    <div class="container-4 blue">
        <img src="./img/img7_169.png" alt="">
        <div class="text">
            <h1>Lorem ipsum</h1>
            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos enim ratione nisi iure fugiat porro tempora blanditiis numquam quam exercitationem, quidem animi, modi mollitia, adipisci aliquam. Quidem dolorum voluptas sunt? consectetur, adipisicing elit. At magni consectetur, est rem repellat porro illum non delectus assumenda velit reprehenderit molestiae unde optio laudantium. Dicta recusandae iure minima officiis?</p>
        </div>
    </div>
    <div class="container-5">
        <h2>Curiosidades sobre a empresa</h2>
        <div class="text-box">
            <p>Lorem ipsum, dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis quas repudiandae distinctio tempore illum a dolorem, est exercitationem odio corrupti asperiores illo, quidem dignissimos dolor modi nulla, quo provident! consectetur adipisicing elit. Rerum dignissimos maxime esse praesentium atque libero quidem? Minima earum velit modi consequuntur, voluptatum distinctio doloremque cumque accusantium porro odit suscipit quaerat eius exercitationem doloribus delectus expedita officia illo, ut neque sit! Obcaecati beatae, eveniet sunt ipsum rem doloribus ipsa id aut.</p>
            <div class="square-msg"></div>
        </div>
        <div class="profile">
            <img src="./img/img23.jpg" alt="">
            <p>Nome Sobrenome</p>
            <span>Fundadora da <a href="./index.php">Studio Ao Quadrado</a></span>
        </div>
    </div>
    <div class="sobre-final">
        <h2>Se interessou pela nossa empresa?</h2>
        <p>Conheça alguns de nossos <a href="./projetos.php"> projetos.</a></p>
    </div>
</body>

</html>