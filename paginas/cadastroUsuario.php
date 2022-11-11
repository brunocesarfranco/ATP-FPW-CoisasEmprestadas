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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
                    <li><a href="./adm.php">Adminstrativo</a></li>
                    <li><a href="../config/logout.php">Sair</a></li>
                </ul>
            </nav>
             </header>

            <p id="titulo-lista">CADASTRO DE USUÁRIOS</p>

            <section id="container" class="cadastro">
                <form action="../config/salvarUsuario.php" method="post">
                    <label>Nome:</label>
                    <input class="campos" type="text" name="nome" placeholder="Digite seu nome...">
                    <label>E-mail:</label>
                    <input class="campos" type="email" name="email" placeholder="Digite seu e-mail...">
                    <label>Telefone:</label>
                    <input class="campos" type="text" name="telefone" placeholder="Digite seu telefone...">
                    <label>Senha:</label>
                    <input class="campos" type="password" name="senha" placeholder="Digite seu senha...">
            
                    <input class="campos" type="password" name="confirme_senha" placeholder="Confirme sua senha...">
                    <label>Endereço:</label>
                    <input class="campos" type="text" name="endereco" placeholder="Digite seu endereco...">
                    <div id="container-btn">
                        <input class="campos" type="submit" value="Cadastrar" id="btn-cadastro">
                    </div>
                </form> 
            </section>
     </section>

     <script src="../js/navbar-js.js"></script>

</body>
</html>