<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- biblioteca de icones: -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Virtual Phonebook</title>
</head>

<body>
    <header>
        Virtual Phonebook
        <i class="bi bi-telephone-inbound-fill"></i>
    </header>

    <nav>
        <div><a href="<?= (!empty($_GET)) ? "./telas/home/index.php" : "./telas/signin/signin.php" ?>">Fazer login</a></div>
        <div><a href="./telas/signup/signup.php">Inscrever-se</a></div>
    </nav>

    <main>
        <h1>Seja bem vindo ao Virtual Phonebook!</h1>

        <article>
            <section>
                <p>Seu mundo de contatos em um só lugar.</p>
            </section>

            <section>
                <img src="logo.png"></img>
            </section>
        </article>
    </main>

    <footer>Virtual Phonebook | Copyright © <?php echo date("Y"); ?></footer>
</body>

</html>