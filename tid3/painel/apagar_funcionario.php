<?php
include_once("conexao.php");

$id_funcionario = $_GET['id_funcionario'];

$resultado = mysqli_query($conexao, "DELETE FROM funcionarios WHERE id = '$id_funcionario'");

if($resultado == 1){
    echo ("<script>
        window.alert('funcionario deletado!')
        window.location.href='index.php';
    </script>");
} else {
   echo ("<script>
        window.alert('Não foi possível deletar o funcionario!')
        window.location.href='index.php';
    </script>");
} 

