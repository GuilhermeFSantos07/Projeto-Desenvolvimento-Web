<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedFarma</title>
    <link rel="stylesheet" type="text/css" href="https://localhost/ProjetoWeb/css/Cadastro.css">
</head>

<body>
    <div class="logo">
        <img src="https://live.staticflickr.com/65535/53229595971_50e4afb011_n.jpg">
    </div>
    <div>
        <a href="http://localhost/ProjetoWeb/PaginaInicial.php"><button class="botao-home"><img src="https://live.staticflickr.com/65535/53232643910_d0cb6f23dd_n.jpg" width="150" height="150"></button></a>
   </div>
    <div class="texto-cadastro">
        Digite seus dados
    </div>
    <?php
    if(isset($_SESSION['usuario_existe'])):
    ?>
    <div class="texto-erro">
        Usuário já cadastrado
    </div>
    <?php
    endif;
    unset($_SESSION['usuario_existe']);
    ?>
    <form action="Cadastro_Salvar.php" method="POST">
        <div>
            <input type="email" name="email" placeholder="E-mail"/>
        </div>
        <div>
            <input type="password" name="senha" placeholder="Senha"/>
        </div>
        <div>
            <input type="text" name="nome" placeholder="Nome"/>
        </div>
        <div>
            <input type="text" name="cpfcnpj" placeholder="CPF/CNPJ"/>
        </div>
        <div>
            <input type="text" name="cep" placeholder="CEP"/>
        </div>
        <div>
            <input type="text" name="endereco" placeholder="Endereço"/>
        </div>
        <div>
            <button type="submit" class="botao-salvar">Salvar</button>
        </div>
    </form>
</body>
</html>