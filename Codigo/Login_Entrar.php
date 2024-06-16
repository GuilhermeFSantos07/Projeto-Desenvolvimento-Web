<?php
session_start();
include('conexao.php');
if(empty($_POST['email']) || empty($_POST['senha'])){
	header('Location: Login.php');
	exit();
}
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$query = "select email from farmacia where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['email'] = $email;
	$_SESSION['login'] = true;
	header('Location: PaginaInicialLogado.php');
	exit();
}
else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: Login.php');
	exit();
}
?>