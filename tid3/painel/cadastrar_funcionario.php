<?php
session_start();
include_once("verifica_login.php");
include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Painel Administrativo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- icones css-->
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
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-user-md"></i><span class="app-menu__label">Funcionários</span></a></li>
         <li><a class="app-menu__item" href="pacientes.php"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Pacientes</span></a></li>
    </aside>

    <main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

              <div id="div1">
                <form method="POST" action="processa_cadastrar_funcionario.php">
                  <div>
                    <h4>Cadastrar Funcionário</h4>
                  </div>
                  <div class="row">
                    <div class="col-md-6 py-2">
                      <label>Nome do funcionário</label>
                      <input type="text" name="nome_funcionario" class="form-control" placeholder="Nome completo" required="">
                    </div>
                    <div class="col-md-3 py-2">
                      <label>Login</label>
                      <input type="text" name="nome_usuario" class="form-control" placeholder="Nome de usuário" required="">
                    </div>
                    <div class="col-md-3 py-2">
                      <label>Senha</label>
                      <input type="password" name="senha_funcionario" class="form-control" placeholder="Senha de acesso" required="">
                    </div>
                    <div class="col-md-3 py-2">
                      <label>Cargo</label>
                      <input type="text" name="cargo_funcionario" class="form-control" placeholder="Cargo do usuário" required="">
                    </div>
                    <div class="col-md-3 py-2">
                      <label>Telefone</label>
                      <input type="text" name="telefone_funcionario" class="form-control" placeholder="Telefone do funcionário" required="">
                    </div>
                    <div class="col-md-3 py-2">
                      <label>Data de Nascimento</label>
                      <input type="date" name="data_nascimento" class="form-control" required="" maxlength="10">
                    </div>
                    <div class="col-md-3 py-2">
                     <label>Sexo</label><br>
                     <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sexo" checked="true" value="Masculino" required="">
                      <label class="form-check-label">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sexo" value="Feminino" required="">
                      <label class="form-check-label">Feminino</label>
                    </div>
                  </div>
                </div>
              <button type="submit" class="btn btn-primary mt-3" id="btn3">Cadastrar</button>
            </form>
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
  
  </body>
</html>