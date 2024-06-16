<?php
session_start();
if(!$_SESSION['usuario']){
	header('Location: PaginaInicial.php');
	exit();
}
?>