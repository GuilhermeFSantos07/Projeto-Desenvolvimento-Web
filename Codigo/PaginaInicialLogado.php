<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedFarma</title>
    <link rel="stylesheet" type="text/css" href="https://localhost/ProjetoWeb/css/PaginaInicialLogado.css">
</head>

<body>
    <div class="logo">
        <img src="https://live.staticflickr.com/65535/53229595971_50e4afb011_n.jpg">
    </div>
    <?php
    if(isset($_SESSION['cadastro_remedio'])):
    ?>
    <div class="texto-cadastro">
        <p>Remedio cadastrado</p>
    </div>
    <?php
    endif;
    unset($_SESSION['cadastro_remedio']);
    ?>
    <nav>
        <ul class="menu">
            <li><a href="Login_Logout.php"><img src="https://live.staticflickr.com/65535/53230418505_bf6a73d398_s.jpg" width="20" height="20">Sair</a></li>

            <li><a href="http://localhost/ProjetoWeb/CadastroRemedio.php"><img src="https://live.staticflickr.com/65535/53230418505_bf6a73d398_s.jpg" width="20" height="20">Cadastro Remedio</a></li>
        </ul>
    </nav>
    <div>
        <p class="texto-1">
            Compare os preços das FARMÁCIAS 
        </p>
        <p class="texto-2">
            Aqui na MedFarma você consegue de forma simples e rápida comparar os valores dos remédios nas farmácias mais próximas a você. 
        </p>
    </div>
    <a href="http://localhost/ProjetoWeb/Comparacao.php"><button class="botao">Clique para comparar</button></a>
</body>
</html>