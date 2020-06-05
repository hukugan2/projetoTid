<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "tid3";
	
	//Criar a conexão
	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname) or die("erro na conexão");
	$conexao->set_charset("utf-8");

?>