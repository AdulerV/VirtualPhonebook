<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- biblioteca de icones: -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <a href="../../index.php">Virtual Phonebook</a>
        <i class="bi bi-telephone-inbound-fill"></i>
    </header>

    <main>
        <fieldset>
            <h2>Criar conta</h2>

            <form action="create.php" method="post">
                <label for="primeiro-nome-cadastro">Primeiro nome</label>
                <input type="text" name="primeiro-nome-cadastro" id="primeiro-nome-cadastro" maxlength="130">

                <label for="ultimo-nome-cadastro">Último nome</label>
                <input type="text" name="ultimo-nome-cadastro" id="ultimo-nome-cadastro" maxlength="125">

                <label for="username-cadastro">Nome de Usuário</label>
                <input type="username" name="username-cadastro" id="username-cadastro" maxlength="100">

                <label for="senha-cadastro">Senha</label>
                <input type="password" name="senha-cadastro" id="senha-cadastro" maxlength="50">

                <button id="btn-cadastrar-usuario" type="submit">Começar a usar Virtual Phonebook</button>
            </form>

            <div id="mensagem-erro"></div>

            <div id="links">
                <p>Já tem uma conta? <a href="../signin/signin.php">Iniciar sessão</a>
            </div>
        </fieldset>
    </main>

    <footer>
        Virtual Phonebook | Copyright © <?php echo date("Y"); ?>
    </footer>

    <script src="script.js"></script>
</body>

</html>