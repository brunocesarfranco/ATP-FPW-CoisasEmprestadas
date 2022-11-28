<?php 
    include_once("../config/protect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas Emprestadas</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico" >
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animacoes.css">
</head>
<body>
     <section class="containerbody">
         <!-- Cabeçalho -->
         <header id="header">
            <a id="logo" href="../home.php">Coisas Emprestadas</a>
            <p><strong>Bem Vindo: </strong><?php echo $_SESSION['nome']  ?></p>
            <nav id="nav">
                <!-- Menu Haburguer -->
                <button id="btn-mobile" aria-label="Abril Menu" aria-haspopup="true" aria-controls="menu">Menu
                    <span id="hamburguer" aria-expanded="false"></span>
                </button>
                <ul id="menu" role="menu">
                    <li><a href="./cadastro.php">Cadastro</a></li>
                    <li><a href="./produtos.php"><strong>Produtos</strong></a></li>
                    <li><a href="./dashboard.php">Dashboard</a></li>
                    <!-- <li><a href="./adm.php">Adminstrativo</a></li> -->
                    <li><a href="../config/logout.php">Sair</a></li>
                </ul>
            </nav>
             </header>
             <p id="titulo-lista">PRODUTOS</p>
            <section id="quadro">

            <?php 
                include("../config/conexao.php");

                $sql = "SELECT * FROM produtos";

                $sql_query = $mysqli->query($sql) or die("ERRO ao consultar " . $mysqli->error);

                if($sql_query->num_rows == 0) {
                    echo "Nenhum resultado encontado...";
                } else {
                    while($dados = $sql_query->fetch_assoc()) {  
                        ?>
                        <form action="../config/funcaoconsulta.php" method="POST" >
                            <section  class="qdCadastro anamation3" >
                                <input type="hidden" name="idProduto" value="<?php echo$dados['idProduto'] ?>"> 
                                <input type="hidden" name="nomeProduto" value="<?php echo$dados['nomeProduto'] ?>"> 
                                <p name="nomeProduto" class="titulo-produto-lista" value="<?php echo$dados['nomeProduto'] ?>"><?php echo$dados['nomeProduto'] ?></p>
                                <div>
                                    <p name="categoria">Categoria: <?php echo$dados['categoria'] ?></p>
                                </div>
                                <input id="btn_emprestar" type="submit" value="Emprestar">
                            </section>
                        </form>
                        <?php

                    }
                }

            ?>

                
            </section>
     </section>

     <script src="../js/navbar-js.js"></script>

</body>
</html>