<?php
    include("conexao.php");
    include("protect.php");

    $nome = $_POST['nomeProduto'];

    $cincoDias = new DateInterval('P5Y0M0D'); // Intervalo de 5 dias
    $hoje = new DateTime();
    $dataDevolucao = $hoje->add($cincoDias);

    $date = $dataDevolucao->format('d/m/y');
    $user = $_SESSION['id'];

    // Query select (lista produtos)
    $sql = "SELECT * FROM produtos WHERE nomeProduto = '$nome'";
    $sqlSave = $mysqli->prepare("INSERT INTO emprestimos(dataDev, idUsuario, idProduto) VALUES (?, ?, ?)");

    $sql_query = $mysqli->query($sql) or die("ERRO ao consultar " . $mysqli->error);

    $dados = $sql_query->fetch_assoc();

    try {
        if($sql_query->num_rows == 1) {
            $id = $dados['idProduto'];
            $nome = $dados['nomeProduto'];
    
            $sqlSave->bind_param("sss", $date, $user, $id);
    
            $sqlSave->execute();
    
            header("location: ../home.php");
        } 

    } catch (Exception $e) {
        echo $e;
    }
?>