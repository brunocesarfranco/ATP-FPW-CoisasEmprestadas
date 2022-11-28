<?php
include("conexao.php");

$nomeProduto = $mysqli->real_escape_string($_POST['nomeProduto']);
$categoria = $mysqli->real_escape_string($_POST['categoriaProduto']);

// Query insert (Cria novos produtos)
$sqlSave = $mysqli->prepare("INSERT INTO produtos(nomeProduto, categoria) VALUES (?, ?)");

try {
    $sqlSave->bind_param("ss", $nomeProduto, $categoria);
    
    $sqlSave->execute();
    
    header("location: ../paginas/cadastroProdutos.php");
} catch(Exception $e) {
    echo $e;
}
?>