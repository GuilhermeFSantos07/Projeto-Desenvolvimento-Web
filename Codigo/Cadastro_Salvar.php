<?php

session_start();
include("conexao.php");

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$cpfcnpj = mysqli_real_escape_string($conexao, trim($_POST['cpfcnpj']));
$cep = mysqli_real_escape_string($conexao, trim($_POST['cep']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));

$sql = "select count(*) as total from farmacia where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: Cadastro.php');
	exit;
}

$sql = "INSERT INTO farmacia (email, senha, nome, cpfcnpj, cep, endereço) VALUES ('$email', '$senha', '$nome', '$cpfcnpj', '$cep', '$endereco')";
if($conexao->query($sql) === TRUE){
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: PaginaInicial.php');
exit;
?>