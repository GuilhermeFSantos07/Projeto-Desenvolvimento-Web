<?php

session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$nome_remedio = mysqli_real_escape_string($conexao, trim($_POST['nome_remedio']));
$quantidade = mysqli_real_escape_string($conexao, trim($_POST['quantidade']));
$valor = mysqli_real_escape_string($conexao, trim($_POST['valor']));
$imagem = mysqli_real_escape_string($conexao, trim($_POST['imagem']));
$site = mysqli_real_escape_string($conexao, trim($_POST['site']));

$sql = "select count(*) as total from remedios where nome_remedio = '$nome_remedio'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
	$_SESSION['remedio_existe'] = true;
	header('Location: CadastroRemedio.php');
	exit;
}

$sql = "INSERT INTO remedios (nome, nome_remedio, quantidade, valor, imagem, site) VALUES ('$nome', '$nome_remedio', '$quantidade', '$valor', '$imagem', '$site')";

if($conexao->query($sql) === TRUE){
	$_SESSION['cadastro_remedio'] = true;
}

$conexao->close();

header('Location: PaginaInicialLogado.php');
exit;
?>