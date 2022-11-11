<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];

$sqlSave = $mysqli->prepare("INSERT INTO usuarios(nomeUsuario, email, telefone, senha, endereco) VALUES (?, ?, ?, ?, ?) ");

try {
    $sqlSave->bind_param("sssss", $nome, $email, $telefone, $senha, $endereco);

    $sqlSave->execute();

    header("location: ../home.php");

} catch(Exception $e) {
    echo $e;
}

?>