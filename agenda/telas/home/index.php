<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- biblioteca de icones: -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Agenda Telefônica</title>
</head>

<body>
    <header>
        <div id="usuario">
            <i class="bi bi-person-circle"></i>
            <?php
            session_start();
            include_once("../../backend/database/conexao.php");
            $sql = "SELECT nome FROM usuario WHERE id_usuario = " . $_SESSION["UsuarioID"];
            $resultado = mysqli_fetch_assoc(mysqli_query($conexao, $sql));
            echo $resultado["nome"];
            ?>
        </div>

        <div id="titulo">
            <a href="../../index.php?id=<?= $_SESSION["UsuarioID"] ?>">Virtual Phonebook</a>
            <i class="bi bi-telephone-inbound-fill"></i>
        </div>

        <div id="logout">
            <i class="bi bi-door-open-fill"></i>
            <a href="signout.php">Sair</a>
        </div>
    </header>

    <main>
        <table>
            <caption>Agenda Telefônica</caption>

            <thead>
                <tr>
                    <th colspan="5">Lista de Contatos</th>
                </tr>
            </thead>

            <tbody>
                <?php include_once("../../backend/read.php") ?>
            </tbody>

            <tfoot>
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Telefones</td>
                    <td>Endereço</td>
                    <td>Ação</td>
                </tr>
            </tfoot>
        </table>

        <a href="../add/add.php?id=<?= $_SESSION["UsuarioID"] ?>" id="btn-adicionar-contato">Adicionar Contato</a>
    </main>


    <footer>Virtual Phonebook | Copyright © <?php echo date("Y"); ?></footer>

    <script src="script.js"></script>
</body>

</html>