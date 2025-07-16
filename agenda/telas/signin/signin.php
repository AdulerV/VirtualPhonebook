<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- biblioteca de icones: -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login</title>
</head>

<body>
    <header>
        <a href="../../index.php">Virtual Phonebook</a>
        <i class="bi bi-telephone-inbound-fill"></i>
    </header>

    <main>
        <fieldset>
            <h2>Iniciar sessão</h2>

            <form action="validator.php" method="post">
                <label for="login-username">Nome de Usuário</label>
                <input type="username" name="login-username" id="login-username" maxlength="100">

                <label for="login-senha">Senha</label>
                <input type="password" name="login-senha" id="login-senha" maxlength="50">

                <button id="btn-logar-usuario" type="submit">Entrar</button>
            </form>

            <div id="mensagem-erro"></div>

            <div id="links">
                <p>Novo no Virtual Phonebook? <a href="../signup/signup.php">Crie uma conta</a>
            </div>
        </fieldset>
    </main>

    <footer>
        Virtual Phonebook | Copyright © <?php echo date("Y"); ?>
    </footer>

    <script src="script.js"></script>
</body>

</html>