<?php
if (!empty($_POST) and (empty($_POST["primeiro-nome-cadastro"]) or empty($_POST["ultimo-nome-cadastro"]) or empty($_POST["senha-cadastro"]) or empty($_POST["username-cadastro"]))) {
    echo '<script language="javascript" type="text/javascript">
    window.location.href="signup.php";
    alert("Preencha todos os campos.");
    </script>';
    exit;
}

if (strlen($_POST["senha-cadastro"]) < 8) {
    echo '<script language="javascript" type="text/javascript">
    window.location.href="signup.php";
    alert("Senha com menos de 8 caracteres.");
    </script>';
    exit;
}

include_once("../../backend/database/conexao.php");

$nome = $_POST["primeiro-nome-cadastro"] . " " . $_POST["ultimo-nome-cadastro"];
$username = $_POST["username-cadastro"];
$senha = md5($_POST["senha-cadastro"]);

$sql = "SELECT username FROM usuario";

if (mysqli_query($conexao, $sql)) {
    $usuarios = mysqli_query($conexao, $sql);

    foreach ($usuarios as $usuario) {
        if ($username === $usuario["username"]) {
            echo '<script language="javascript" type="text/javascript">
            window.location.href="signup.php";
            alert("Este nome de usuário já está em uso.");
            </script>';
            exit;
        }
    }
}

$sql = "INSERT INTO usuario (nome, username, senha) VALUES ('$nome', '$username', '$senha')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header('location: ../../index.php');
