<?php
if (!empty($_POST) and (empty($_POST["login-username"]) or empty($_POST["login-senha"]))) {
    echo '<script language="javascript" type="text/javascript">
            window.location.href="signin.php";
            alert("Preencha todos os campos.");
            </script>';
    exit;
}

include_once("../../backend/database/conexao.php");

$usernameLogin = $_POST["login-username"];
$senhaLogin = $_POST["login-senha"];

$sql = "SELECT id_usuario, nome FROM usuario WHERE (username = '$usernameLogin') AND (senha = '" . md5($senhaLogin) . "')";
$resultado = mysqli_query($conexao, $sql);

if (!$resultado or mysqli_num_rows($resultado) !== 1) {
    echo '<script language="javascript" type="text/javascript">
            window.location.href="signin.php";
            alert("Usuário ou senhas inválidos.");
            </script>';
    exit;
} else {
    if (!isset($_SESSION)) {
        session_start();
    }

    $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION["UsuarioID"] = $usuario["id_usuario"];
    $_SESSION["UsuarioNome"] = $usuario["nome"];

    header("location: ../home/index.php");
    exit;
}
