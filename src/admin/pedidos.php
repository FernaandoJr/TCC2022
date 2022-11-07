<?php
require_once 'init.php';
// abre a conexão
$PDO = db_connect();

$sql = "SELECT * "
    . "FROM resposta_form ORDER BY id ASC";

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
            <div class="pedidos-parent">            
            <div class="title">
                <div class="parent-title">
                <i class="fa-regular fa-comments fa"></i>   
                <p>Pedidos</p>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Pesquisar">
                        <i class="fa fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>
            </div>
            </div>
            <div class="table-container">
            <table>
            
                <thead>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Mensagem</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($resposta_form = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($resposta_form['nome']) ?></td>
                        <td><?php echo htmlspecialchars($resposta_form['tel']) ?></td>
                        <td><?php echo htmlspecialchars($resposta_form['email']) ?></td>
                        <td><?php echo htmlspecialchars($resposta_form['msg']) ?></td>
                        <td><a href="delete-msg.php?id=<?php echo $resposta_form['id'] ?>">Excluir</a></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            
            </div>
        </div>
    </div>
    <script src="./js/admin.js"></script>
</body>

</html>