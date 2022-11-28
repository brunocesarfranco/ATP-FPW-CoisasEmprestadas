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
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
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
                    <li><a href="./cadastro.php"><strong>Cadastro</strong></a></li>
                    <li><a href="./produtos.php">Produtos</a></li>
                    <li><a href="./dashboard.php">Dashboard</a></li>
                    <!-- <li><a href="./adm.php">Adminstrativo</a></li> -->
                    <li><a href="../config/logout.php">Sair</a></li>
                </ul>
            </nav>
             </header>
            <p id="titulo-lista">CADASTRO DE PRODUTOS</p>
            <section  class="produtos">
                <form action="../config/funcoes.php" method="POST">
                    <label>Nome Produto:</label>
                    <input class="campos" type="text" name="nomeProduto" placeholder="Digite seu nome...">
                    <label>Categoria:</label>
                    <select name="categoriaProduto" class="campos" id="categ">
                        <option value="eletronico">Eletronico</option>
                        <option value="livros">Livros</option>
                        <option value="roupas">Roupas</option>
                    </select>
                    
                    <div id="container-btn">
                        <input class="campos" type="submit" value="Cadastrar" id="btn-cadastro">
                    </div>
                </form> 
            </section>
     </section>
     <script src="../js/navbar-js.js"></script>
</body>
</html>