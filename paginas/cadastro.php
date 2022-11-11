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

            <section id="quadro">
                <a href="./cadastroProdutos.php">
                    <section  class="qdCadastro">
                        <h1>PRODUTOS</h1>
                        <div>
                            <p>Cadastre aqui seus produtos que deseja emprestar.</p>
                        </div>
                    </section>
                </a>
                <a href="./cadastroUsuario.php">
                    <section  class="qdCadastro">
                        <h1>USUÁRIOS</h1>
                        <div>
                            <p>Cadastre aqui usuarios para acessar a plataforma.</p>
                        </div>
                    </section>
                </a>
            </section>
     </section>

     <script src="../js/navbar-js.js"></script>

</body>
</html>