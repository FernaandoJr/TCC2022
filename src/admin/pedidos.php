<?php
require_once 'init.php';
// abre a conexão
$PDO = db_connect();

$id = isset($_GET['id']) ? $_GET['id'] : null;

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
                    <a href="./pedidos.php">
                        <lord-icon src="https://cdn.lordicon.com/zchxlapl.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
                        <span>Pedidos</span>
                    </a>
                </li>
                <li>
                    <a href="./projetos.php">
                        <lord-icon src="https://cdn.lordicon.com/fpmskzsv.json" trigger="hover" colors="primary:#ffffff"></lord-icon>
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

        </div>
        <div class="pedidos-container">
            <div class="pedidos-parent">
                <div class="title">
                    <div class="parent-title">
                        <lord-icon src="https://cdn.lordicon.com/zchxlapl.json" trigger="hover"></lord-icon>
                        <p>Pedidos</p>
                    </div>
                    <div class="btn-float">
                        <form method="POST" action="delete-msg.php">
                            <button type="submit" name="delMsg" class="btn-excluir">Excluir</button>
                    </div>
                </div>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
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
                                <?php echo "<td><input type='checkbox' class='checkItem' value='" . $resposta_form['id'] . "' name='delete-id[]'></td>"; ?>
                            </tr>
                        <?php endwhile; ?>

                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/admin.js"></script>
    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
</body>

</html>