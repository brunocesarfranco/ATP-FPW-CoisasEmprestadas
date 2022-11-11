
<body>
<?php

    include("./conexao.php");
    /* $mysqli->real_escape_string SERVE PARA LIMPAR OS DADOS E EVITAR SQL INJECTION */
    $login = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['psword']);

    $sqlAuth = "SELECT * FROM usuarios WHERE email = '$login' and senha = '$senha' ";

    $sql_query = $mysqli->query($sqlAuth) or die("ERRO ao consultar " . $mysqli->error);

    /* Verificando se existem registros: */
    $registros = $sql_query->num_rows;
    
    try {
        if($registros == 1) {
            $dados = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
    
            $_SESSION['id'] = $dados['idUsuario'];
            $_SESSION['nome'] = $dados['nomeUsuario'];
    
            header("location: ../home.php");
    
        } else {
            echo "Falhar ao logar, E-mail ou senha incorretos.";
        }

    } catch ( Exception $e) {
        echo $e;
    }

?>
    
</body>