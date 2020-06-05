<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Tela de Login</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="div-login">
            <form class="form-signin" action="login.php" method="POST"> 
                <img class="img-fluid img-login" src="img/sistema/logo-sistema.png" width="150" height="150">

                <input type="text" name="usuario" class="form-control" placeholder="Nome de Usuário" required autofocus><br>

                <input type="password" name="senha" class="form-control" placeholder="Sua Senha" required><br>
               
                <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
                
            </form>
             <?php
	         if (isset($_SESSION['nao_autenticado'])):
	         ?>
	             <div class="alert alert-danger mt-3" role="alert">
			        Usuário ou Senha Inválido
			    </div>
	         <?php
	             endif;
	          unset($_SESSION['nao_autenticado']);
	         ?>
        </div>
    </div>
</div>
</body>
</html>

<style type="text/css">
    .justify-content-center{
        position: fixed;
        top: 50px; 
        left: 38%;
    }
    .div-login{
        width: 200%;
    }
    .img-login{
        margin: 25px;
    }
</style>