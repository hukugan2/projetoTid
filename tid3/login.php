<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$resultado_usuario = mysqli_query($conexao, $query);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

if(isset($resultado)){
	$_SESSION['usuario'] = $resultado['usuario'];
	$_SESSION['usuario_id'] = $resultado['usuario_id'];	
	$_SESSION['nivel_acesso'] = $resultado['nivel_acesso'];
	if ($resultado['nivel_acesso'] == '111999') {
		header('Location: painel/index.php');
		exit();
	}
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
