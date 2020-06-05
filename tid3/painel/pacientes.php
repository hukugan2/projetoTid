<?php
session_start();
include_once("verifica_login.php");
include_once("conexao.php");

$resultado = mysqli_query($conexao, "SELECT * FROM indentificacao");
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

  <script type="text/javascript">
    function apagar(idPaciente) {
        var res = confirm("Deseja apagar este paciente ?");
        if(res){
            window.location = "apagar_paciente.php?id_paciente="+idPaciente;
        }
    }
  </script>

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
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-user-md"></i><span class="app-menu__label">Funcionários</span></a></li>
        <li><a class="app-menu__item active" href="#"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Pacientes</span></a></li>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <a href="destroi_sessao.php" class="btn btn-success">Cadastrar Paciente</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Nome do paciente</th>
                      <th>Sexo</th>
                      <th>Telefone</th>
                      <th>Nome do Responsável</th>
                      <th>Data de Nascimento</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>

	             <?php if(mysqli_num_rows($resultado) > 0){
					while($row = mysqli_fetch_assoc($resultado)) { ?>		
                    
                    <tr>
                      <td><?php echo $row['nome_paciente']?></td>
                      <td><?php echo $row['sexo']?></td>
                      <td><?php echo $row['telefone']?></td>
                      <td><?php echo $row['nome_responsavel']?></td>
                      <td><?php echo $row['data_nascimento']?></td>
                      <td>
                      	<a href="ver_detalhe.php?&id_paciente=<?php echo $row['id']?>" class="btn btn-primary">Ver mais</a>
                      	<a a href="editar_paciente.php?&id_paciente=<?php echo $row['id']?>" class="btn btn-warning">Editar</a>
                      	<a href="javascript:void(0)" class="btn btn-danger" onclick="apagar(<?php echo $row['id']; ?>)">Apagar</button>
                      </td>
                    </tr>

               		<?php 	
               			}
					         }  ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>