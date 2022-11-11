<?php 
    include_once("./config/protect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas Emprestadas</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animacoes.css">
</head>
<html>
<body>

    <main id="mainIndex">
        
        <!-- Cabeçalho -->
        <header id="header">
            
            <a id="logo" href="./home.php">Coisas Emprestadas</a>
            <p id="user"><strong>Bem Vindo: </strong><?php echo $_SESSION['nome']  ?></p>
            <nav id="nav">
                <!-- Menu Haburguer -->
                <button id="btn-mobile" aria-label="Abril Menu" aria-haspopup="true" aria-controls="menu">Menu
                    <span id="hamburguer" aria-expanded="false"></span>
                </button>
                <ul id="menu" role="menu">
                    <li><a href="./paginas/cadastro.php">Cadastro</a></li>
                    <li><a href="./paginas/produtos.php">Produtos</a></li>
                    <li><a href="./paginas/dashboard.php">Dashboard</a></li>
                    <li><a href="./paginas/adm.php">Adminstrativo</a></li>
                    <li><a href="./config/logout.php">Sair</a></li>
                </ul>
            </nav>
            
        </header>
        <p id="titulo-lista">LISTA DE EMPRESTIMOS</p>
        <section id="lista">
<?php
    include "./config/conexao.php";

    $user = $_SESSION['id'];

    
    $sql1 = "SELECT nomeProduto, categoria, nomeUsuario, dataDev, idRegistro FROM produtos INNER JOIN emprestimos INNER JOIN usuarios WHERE emprestimos.idUsuario = usuarios.idUsuario and emprestimos.idProduto = produtos.idProduto ORDER BY emprestimos.idRegistro DESC";
    
    $sql2 = "SELECT nomeProduto, categoria, nomeUsuario, dataDev, idRegistro FROM produtos INNER JOIN emprestimos INNER JOIN usuarios WHERE emprestimos.idUsuario = usuarios.idUsuario and emprestimos.idProduto = produtos.idProduto and emprestimos.idUsuario = $user ORDER BY emprestimos.idRegistro DESC";
    
    $sql_query = $mysqli->query($user == 1 ? $sql1 : $sql2) or die("ERRO ao consultar " . $mysqli->error);


    
    if($sql_query->num_rows == 0) {
        echo "Nenhum resultado encontrado.";
    } else {
        while($dados = $sql_query->fetch_assoc()) {
            ?>

            
                <section class="item-lista">
                    <p class="titulo-produto-lista"><?php echo$dados['nomeProduto'] ?></p>
                    <div >
                        <p>Dono: <?php echo$dados['nomeUsuario'] ?></p>
                        <p>Data limite de Devolução: <?php echo$dados['dataDev'] ?></p>
                        <form action="./config/devolucao.php" method="post">
                            <input type="hidden" name="idRegistro" value="<?php echo$dados['idRegistro'] ?>">
                            <input type="submit" value="Devolver">
                        </form>
                    </div>
                </section>
    <?php
        }
    };
?>
    </section>

<script src="js/navbar-js.js"></script>

</body>
</html>
        