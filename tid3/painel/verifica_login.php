<?php
@session_start();
if(!$_SESSION['usuario'] && (!isset($_SESSION['nivel_acesso']))) {
	header('Location: ../index.php');
	exit();
}