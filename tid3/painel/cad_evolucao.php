<?php
include_once("conexao.php");

$id_paciente = $_POST['id_paciente'];
$evolucao = $_POST['evolucao'];
$data_evolucao = date("d/m/Y");

$resultado = mysqli_query($conexao, "INSERT INTO evolucao 
	   (evolucao, data_evolucao, id_paciente) 
VALUES ('$evolucao', '$data_evolucao', '$id_paciente')");

if($resultado == 1){
    echo ("<script>
        window.alert('Evolução cadastrada!')
     	window.location.href='evolucao_paciente.php?&id_paciente=$id_paciente'
    </script>");
} else {
   echo ("<script>
        window.alert('Não foi possível cadastrar a evolução do paciente!')
       	window.location.href='evolucao_paciente.php'
    </script>");
} 