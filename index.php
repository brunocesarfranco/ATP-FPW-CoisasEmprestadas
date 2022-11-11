<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas Emprestadas</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/animacoes.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div id="boxlog">
        <div class="anamation2" id="box1">
            <div class="anamation2" id="box2">
                <div id="container">
                    <section id="containersection">
                        <h1 class="anamation1">Coisas Emprestadas</h1>
                        <p id="click">Faça seu login abaixo! 
                            <form id="container-login" method="POST" action="./config/auth.php">
                                <div>
                                    <input type="email" name="email" id="email" class="campos" placeholder="Digite seu E-mail">
                                    <input type="password" name="psword" id="psword" class="campos" placeholder="Digite sua senha">
                                </div>
                                <div id="container-btn">
                                    <p name="dados_invalidos"></p>
                                    <input type="submit" value="Entrar" id="btn-entrar">
                                    <input type="hidden" value="Cadastrar" id="btn-cadastro">
                                </div>
                            </form>
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <strong>Desenvolvido por Bruno Cesar Franco</strong>
</footer>
</html>