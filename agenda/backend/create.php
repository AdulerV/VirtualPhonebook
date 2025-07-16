<?php
inserirQuery();

function inserirQuery()
{
    include_once("database/conexao.php");
    $idContato = inserirDadosContato($conexao);

    if ($idContato) {
        inserirTelefone($conexao, $idContato);
        inserirEndereco($conexao, $idContato);
    } else {
        echo "Não foi possível inserir os dados do contato!";
    }
    mysqli_close($conexao);
    header('location: ../telas/home/index.php');
}

function inserirDadosContato($conexao)
{
    $nome_contato = $_POST["nome-contato"];
    $email_contato = $_POST["correio-eletronico-contato"];
    $id_usuario = $_GET["id"];

    if (empty($nome_contato) or empty($email_contato) or empty($id_usuario)) {
        header('location: ../index.php');
        exit;
    }

    $sql = "INSERT INTO contato (nome, email, fk_id_usuario) VALUES ('$nome_contato', '$email_contato', '$id_usuario')";

    if (mysqli_query($conexao, $sql)) {
        return mysqli_insert_id($conexao);
    }
    return false;
}

function inserirTelefone($conexao, $idContato)
{
    $telefones = $_POST["telefone-contato"];

    foreach ($telefones as $telefone) {
        if (empty($telefone)) {
            header('location: ../index.php');
            exit;
        }

        $sql = "INSERT INTO telefone (numero_telefone, fk_id_contato) VALUES ('$telefone', '$idContato')";
        mysqli_query($conexao, $sql);
    }
}

function inserirEndereco($conexao, $idContato)
{
    $patria = $_POST["patria"];
    $estado = $_POST["estado"];
    $municipio = $_POST["municipio"];
    $bairro = $_POST["bairro"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];

    if (empty($patria) or empty($estado) or empty($municipio) or empty($bairro) or empty($logradouro) or empty($numero)) {
        header('location: ../index.php');
        exit;
    }

    $sql = "INSERT INTO endereco (pais, estado, municipio, bairro, logradouro, numero, fk_id_contato) VALUES ('$patria', '$estado', '$municipio', '$bairro', '$logradouro', '$numero', '$idContato')";
    mysqli_query($conexao, $sql);
}
