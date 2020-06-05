<?php
include_once("conexao.php");

$nome_funcionario = $_POST['nome_funcionario'];
$sexo = $_POST['sexo'];
$nome_usuario = $_POST['nome_usuario'];
$senha_funcionario = md5($_POST['senha_funcionario']);
$telefone_funcionario = $_POST['telefone_funcionario'];
$cargo_funcionario = $_POST['cargo_funcionario'];
$data_nascimento = $_POST['data_nascimento'];

$data_nascimento = date("d/m/Y");

$resultado = mysqli_query($conexao, "INSERT INTO funcionarios(nome_funcionario, sexo_funcionario, telefone_funcionario, cargo_funcionario, nome_usuario, senha_funcionario, data_nascimento_funcionario) VALUES ('$nome_funcionario', '$sexo', '$telefone_funcionario', '$cargo_funcionario', '$nome_usuario', '$senha_funcionario', '$data_nascimento')");

if($resultado == 1){
    echo ("<script>
        window.alert('Paciente cadastrado!')
     	window.location.href='funcionarios.php'
    </script>");
} else {
   echo ("<script>
        window.alert('Não foi possível cadastrar o paciente!')
       	window.location.href='funcionarios.php'
    </script>");
} 