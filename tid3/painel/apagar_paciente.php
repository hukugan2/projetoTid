<?php
include_once("conexao.php");

$id_paciente = $_GET['id_paciente'];

$resultado = mysqli_query($conexao, "DELETE FROM indentificacao WHERE id = '$id_paciente'");

if($resultado == 1){
    echo ("<script>
        window.alert('Paciente deletado!')
        window.location.href='pacientes.php';
    </script>");
} else {
   echo ("<script>
        window.alert('Não foi possível deletar o paciente!')
        window.location.href='pacientes.php';
    </script>");
} 

