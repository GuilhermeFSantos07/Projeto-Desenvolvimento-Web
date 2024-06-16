<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedFarma</title>
    <link rel="stylesheet" type="text/css" href="https://localhost/ProjetoWeb/css/Login.css">
</head>

<body>
    <div class="logo">
        <img src="https://live.staticflickr.com/65535/53229595971_50e4afb011_n.jpg">
    </div>
    <div>
        <a href="http://localhost/ProjetoWeb/PaginaInicial.php"><button class="botao-home"><img src="https://live.staticflickr.com/65535/53232643910_d0cb6f23dd_n.jpg" width="150" height="150"></button></a>
   </div>
    <div class="texto-login">
        Login
    </div>
    <?php
    if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div class="Texto_Erro">
        Erro ao realizar o login
    </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>
    <form action="Login_Entrar.php" method="POST">
        <div>
            <input type="text" name="email" placeholder="E-mail"/>
        </div>
        <div>
            <input type="password" name="senha" placeholder="Senha"/>
        </div>
        <div >
            <button class="botao-entrar" type="submit">Entrar</button>
        </div>
    </form>
</body>
</html>