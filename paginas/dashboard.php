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
    <link rel="stylesheet" href="../css/animacoes.css">
    <link rel="stylesheet" href="../css/dash.css">
</head>
<html>

<body>

    <main id="mainIndex">

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
                    <li><a href="./produtos.php">Produtos</a></li>
                    <li><a href="./dashboard.php"><strong>Dashboard</strong></a></li>
                    <li><a href="./adm.php">Adminstrativo</a></li>
                    <li><a href="../config/logout.php">Sair</a></li>
                </ul>
            </nav>

        </header>
        <p id="titulo-lista">DASHBOARD</p>

    </main>

    <section id="container_dash">

        <div>
            <div class="barra"><label for="#"> 80 </label></div>
            Livro
        </div>
        <div>
            <div class="barra"><label for="#"> 50 </label></div>
            Eletro
        </div>
        <div>
            <div class="barra"><label for="#"> 30 </label></div>
            Roupa
        </div>

    </section>

    <script src="../js/navbar-js.js"></script>

</body>

</html>