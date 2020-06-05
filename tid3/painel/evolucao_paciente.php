<?php
session_start();
include_once("verifica_login.php");
include_once("conexao.php");

$id_paciente = $_GET['id_paciente'];

$resultado = mysqli_query($conexao, "SELECT * FROM evolucao WHERE id_paciente = '$id_paciente'");

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Painel Administrativo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i>Sair</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <ul class="app-menu">
        <li>
          <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-user-md"></i><span class="app-menu__label">Funcionários</span></a></li>
          <a class="app-menu__item" href="index.php">
          <i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Pacientes</span>
          </a>
        </li>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <a href="pacientes.php" class="btn btn-success"><i class="fa fa-arrow-left"></i>Voltar</a>
          <a href="evolucao_paciente.php?&id_paciente=<?php echo $id_paciente;?>" class="btn btn-primary">Evolução do paciente</a>
        </div>
      </div>
       <div class="main-panel">
      <div class="container">
       
       <div class="row bg-white">

    	<div class="col-md-12 p-3">
          	<h4 class="text-center">Evolução do paciente</h4>
      	</div>    
    	<div class="col-md-12">
    		<form method="POST" action="cad_evolucao.php">
    			<div class="col-md-12 py-3">
                   <label>Evolução</label>
                    <textarea class="form-control" name="evolucao" rows="6" required=""></textarea>    
                    <button type="submit" class="btn btn-info mt-2">Enviar</button>
                 </div>
                 <input type="hidden" name="id_paciente" value="<?php echo $id_paciente;?>">
    		</form>
    	</div>

       <?php if (mysqli_num_rows($resultado) > 0) { 
              while ($row = mysqli_fetch_assoc($resultado)) { ?>
    		<div class="col-md-12 py-3">
                <label>Criado dia <?php echo $row['data_evolucao'];?></label>
                    <textarea class="form-control" disabled="true" name="evolucao" rows="6" required=""><?php echo $row['evolucao']?>
                    </textarea>    
           </div>

  		<?php } }?>

  		</div>

	</div>
</div>
</div>
<!-- main-panel ends -->
</main>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
  </body>
</html>

<style type="text/css">
.divisoria{
  width: 100%; 
  height: 1px; 
  background: #d6caca; 
  margin: 0 20px;
 }
</style>