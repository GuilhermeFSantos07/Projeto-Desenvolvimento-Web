<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedFarma</title>
    <link rel="stylesheet" type="text/css" href="https://localhost/ProjetoWeb/css/CadastroRemedio.css">
</head>

<body>
    <div class="logo">
        <img src="https://live.staticflickr.com/65535/53229595971_50e4afb011_n.jpg">
    </div>
    <div>
        <a href="http://localhost/ProjetoWeb/PaginaInicialLogado.php"><button class="botao-home"><img src="https://live.staticflickr.com/65535/53232643910_d0cb6f23dd_n.jpg" width="150" height="150"></button></a>
   </div>

    <div class="texto-cadastro">
        Digite os dados do remedio
    </div>
    <?php
    if(isset($_SESSION['remedio_existe'])):
    ?>
    <div class="texto-erro">
        <p>Remedio já existe</p>
    </div>
    <?php
    endif;
    unset($_SESSION['remedio_existe']);
    ?>
    <form action="CadastroRemedio_Salvar.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite o nome da farmacia"/>
        </div>
        <div>
            <input type="text" name="nome_remedio" placeholder="Nome do remedio"/>
        </div>
        <div>
            <input type="text" name="quantidade" placeholder="Quantidade (ml ou comprimidos)"/>
        </div>
        <div>
            <input type="text" name="valor" placeholder="Valor (R$ 00.00)">
        </div>
        <div>
            <input type="url" name="imagem" placeholder="Link Imagem">
        </div>
        <div>
            <input type="url" name="site" placeholder="Link para redirecionar">
        </div>
        <div>
            <button class="botao-salvar" type="submit">Salvar</button>
        </div>
    </form>
</body>
</html>