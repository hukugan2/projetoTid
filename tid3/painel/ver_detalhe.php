<?php
session_start();
include_once("verifica_login.php");
include_once("conexao.php");

$id_paciente = $_GET['id_paciente'];

$resultado = mysqli_query($conexao, "SELECT * FROM indentificacao WHERE id = '$id_paciente'");

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
       
       <?php if (mysqli_num_rows($resultado) > 0) { 
              while ($row = mysqli_fetch_assoc($resultado)) { ?>

        <div class="row bg-white">

    	<div class="col-md-12 p-3">
          	<h4 class="text-center">Indentificação</h4>
      	</div>    
    
          <div class="col-md-6">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Nome: </b><?php echo $row['nome_paciente'];?></li>
              <li class="list-group-item"><b>Apelido: </b><?php echo $row['apelido_paciente'];?></li>
              <li class="list-group-item"><b>Data de nascimento: </b><?php echo $row['data_nascimento'];?></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Nome do responsável: </b><?php echo $row['nome_responsavel'];?></li>
              <li class="list-group-item"><b>Parentesco: </b><?php echo $row['parentesco'];?></li>
              <li class="list-group-item"><b>Telefone: </b><?php echo $row['telefone'];?> | <b class="ml-2">Sexo: </b><?php echo $row['sexo'];?></li>
            </ul>

          </div>

          <div class="divisoria"></div>
       	
          <div class="col-md-12 pt-2">
          	  <h4 class="text-center">Diagnostico Médico</h4>
      	  </div>

          <div class="col-md-12 pt-2">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <?php echo $row['diagnostico_medico'];?>
              </li>
            </ul>
          </div>

          <div class="divisoria"></div>

          <div class="col-md-12">
          	  <h4 class="text-center">Anaminese</h4>
      	  </div>

          <div class="col-md-12">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
               <?php echo $row['anaminese'];?>
              </li>
            </ul>
          </div>
          
          <div class="divisoria"></div>
          
          <div class="col-md-6">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>GPA: </b><?php echo $row['gpa'];?></li>
              <li class="list-group-item"><b>Idade Materna na Gestação: </b><?php echo $row['idade_gestacao'];?></li>
              <li class="list-group-item"><b>Ganho de peso durante a gestação: </b><?php echo $row['ganho_peso_durante_gestao'];?></li>
              <li class="list-group-item"><b>Infecções Cogênitas: </b><?php echo $row['infeccoes_cogenitas'];?></li>
              <li class="list-group-item"><b>Uso de medicamentos: </b><?php echo $row['uso_medicamentos'];?></li>
              <li class="list-group-item"><b>Anormalidade placentária (Placenta previa/ruptura brusca): </b><?php echo $row['anormalidade_placentaria'];?></li>
              <li class="list-group-item"><b>Traumatismos: </b><?php echo $row['nome_responsavel'];?></li>
              <li class="list-group-item"><b>HAS: </b><?php echo $row['has'];?></li>
              <li class="list-group-item"><b>Hemorragias: </b><?php echo $row['hemorragias'];?></li>
              <li class="list-group-item"><b>Pré-Eclampsia: </b><?php echo $row['pre_eclampsia'];?></li>
              <li class="list-group-item"><b>Gestão múltipla: </b><?php echo $row['gestacao_multipla'];?></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Doenças hereditárias: </b><?php echo $row['doencas_hereditarias'];?></li>
              <li class="list-group-item"><b>Has Materna: </b><?php echo $row['has_materna'];?></li>
              <li class="list-group-item"><b>Doenças Cardiopulmonares: </b><?php echo $row['doencas_cardio'];?></li>
              <li class="list-group-item"><b>Infecções Cogênitas: </b><?php echo $row['infeccoes_cogenitas'];?></li>
              <li class="list-group-item"><b>Partos anteriores demorados: </b><?php echo $row['partos_anteriores'];?></li>
              <li class="list-group-item"><b>Aborto: </b><?php echo $row['aborto'];?></li>
              <li class="list-group-item"></li>
            </ul>
          </div>

          <div class="divisoria"></div>

          <div class="col-md-12 p-3">
          	  <h4 class="text-center">História do parto</h4>
      	  </div>
          
          <div class="col-md-6">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Tipo de parto: </b><?php echo $row['tipo_parto'];?></li>
              <li class="list-group-item"><b>Idade gestacional: </b><?php echo $row['idade_gestacao'];?></li>
              <li class="list-group-item"><b>Peso ao nascer: </b><?php echo $row['peso_nascimento'];?></li>
              <li class="list-group-item"><b>Tamanho ao nascer: </b><?php echo $row['tamanho_nascer'];?></li>
          </div>
          <div class="col-md-6">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Apresentação fetal: </b> <?php echo $row['apresentacao_fetal'];?></li>
              <li class="list-group-item"><b>Duração do Parto: </b> <?php echo $row['trabalho_parto'];?></li>
              <li class="list-group-item"><b>Tempo de bolsa: </b> <?php echo $row['tempo_bolsa'];?></li>
              <li class="list-group-item"><b>Chorou ao nascer ?: </b> <?php echo $row['chorou'];?></li>
            </ul>
          </div>

          <div class="divisoria"></div>

          <div class="col-md-12 p-3">
          	<h4 class="text-center">Avaliação Fisioterapêutica Pediátrica</h4>
      	  </div>
          
          <div class="col-md-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Mal formações: </b>
              		<?php echo $row['mal_formacoes'];?>
                </li>
                <li class="list-group-item"><b>Intubação: </b>
              		<?php echo $row['intubacao'];?>
                </li>
                <li class="list-group-item"><b>Medicações: </b>
              		<?php echo $row['medicacoes'];?>
                </li>
                <li class="list-group-item"><b>Processos Cirúrgicos: </b>
              		<?php echo $row['processos_cirurgicos1'];?>
                </li>
                <li class="list-group-item"><b>Convulsões: </b>
              		<?php echo $row['convulsoes'];?>
                </li>
                <li class="list-group-item"><b>Infecções: </b>
              		<?php echo $row['infeccoes'];?>
                </li>
                <li class="list-group-item"><b>VNI: </b>
              		<?php echo $row['vni'];?>
                </li>
    		</ul>
        </div>
        <div class="col-md-6">
        	 <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Antibioticoterapia: </b>
              		<?php echo $row['antibioticoterapia'];?>
                </li>
                <li class="list-group-item"><b>Desconforto Respiratório: </b>
              		<?php echo $row['desconforto_respiratorio'];?>
                </li>
                <li class="list-group-item"><b>Fototerapia: </b>
              		<?php echo $row['fototerapia'];?>
                </li>
                <li class="list-group-item"><b>Exsanguineo transfusão: </b>
              		<?php echo $row['exsanguineo_transfusao'];?>
                </li>
                <li class="list-group-item"><b>Permanência Hospitala: </b>
              		<?php echo $row['permanencia_hospitalar'];?>
                </li>
                <li class="list-group-item"><b>Processos Cirúrgicos: </b>
              		<?php echo $row['processos_cirurgicos2'];?>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
	        <ul class="list-group list-group-flush">
	            <li class="list-group-item"><b>OBS:</b><br>
	           		<?php echo $row['obs'];?>
	            </li>
	      	</ul>
	    </div>

	    <div class="divisoria"></div>

        <div class="col-md-12 p-3">
          	<h4 class="text-center">Amamentação</h4>
      	</div>

      	 <div class="col-md-6">
        	 <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Periodo: </b>
              		<?php echo $row['periodo'];?>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
        	 <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Frequência: </b>
              		<?php echo $row['frequencia'];?>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
	        <ul class="list-group list-group-flush">
	            <li class="list-group-item"><b>Associação a outros tipos de alimento:</b><br>
	           		<?php echo $row['associacao_a_tipos_de_alimento'];?>
	            </li>
	      	</ul>
	    </div>
	    <div class="col-md-12">
	        <ul class="list-group list-group-flush">
	            <li class="list-group-item"><b>Dificuldades:</b><br>
	           		<?php echo $row['dificuldades'];?>
	            </li>
	      	</ul>
	    </div>

	     <div class="divisoria"></div>

        <div class="col-md-12 p-3">
          	<h4 class="text-center">Sinais Vitais</h4>
      	</div>

      	<div class="col-md-6">
        	 <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Pulso: </b>
              		<?php echo $row['pulso'];?>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
        	 <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>FR: </b>
              		<?php echo $row['fr'];?>
                </li>
            </ul>
        </div>

        <div class="divisoria"></div>

        <div class="col-md-6">
        	 <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>RTCA: </b>
              		<?php echo $row['rtca1'];?>
                </li>
                <li class="list-group-item"><b>Reflexo de Sucção: </b>
              		<?php echo $row['reflexo_de_succao'];?>
                </li>
                <li class="list-group-item"><b>Reflexo Olhos de Boneca: </b>
              		<?php echo $row['reflexo_olhos_de_boneca'];?>
                </li>
                <li class="list-group-item"><b>Reação de Moro: </b>
              		<?php echo $row['reacao_de_moro'];?>
                </li>
                <li class="list-group-item"><b>Reflexo de Preensão palmar: </b>
              		<?php echo $row['reflexo_de_preensao_palmar'];?>
                </li>
                <li class="list-group-item"><b>Babinsk: </b>
              		<?php echo $row['babinsk'];?>
                </li>
                <li class="list-group-item"><b>Reflexo de apoio plantar: </b>
              		<?php echo $row['reflexo_de_apoio_plantar'];?>
                </li>
            </ul>
        </div>

        <div class="col-md-6">
        	 <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Marcha reflexa: </b>
              		<?php echo $row['marcha_reflexa'];?>
                </li>
                <li class="list-group-item"><b>Reação de Landau: </b>
              		<?php echo $row['reacao_de_landau'];?>
                </li>
                <li class="list-group-item"><b>Galant: </b>
              		<?php echo $row['galant'];?>
                </li>
                <li class="list-group-item"><b>Glabelar: </b>
              		<?php echo $row['glabelar'];?>
                </li>
                <li class="list-group-item"><b>RTCA: </b>
              		<?php echo $row['rtca2'];?>
                </li>
                <li class="list-group-item"><b>Reflexo de preensão plantar: </b>
              		<?php echo $row['reflexo_de_preensao_plantar'];?>
                </li>
            </ul>
        </div>

		<div class="divisoria"></div>

        <div class="col-md-12 pt-2">
          	  <h4 class="text-center">Diagnostico Fisioterápico</h4>
      	</div>

        <div class="col-md-12 pt-2">
	        <ul class="list-group list-group-flush">
		        <li class="list-group-item">
		            <?php echo $row['diagnostico_fisioterapico'];?>
		        </li>
	        </ul>
        </div>

        <div class="divisoria"></div>

        <div class="col-md-12 pt-2">
          	  <h4 class="text-center">Avaliação Fisioterapêutica Pediátrica</h4>
      	</div>

        <div class="col-md-12 pt-2">
	        <ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>AVALIAÇÃO FUNCIONAL E COGNITIVA:</b><br>
		            <?php echo $row['diagnostico_fisioterapico'];?>
		        </li>
	        </ul>
        </div>

        <div class="divisoria"></div>

        <div class="col-md-12 pt-2">
          	  <h4 class="text-center">Rotina da Criança</h4>
      	</div>

      	<div class="col-md-6">
        	 <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Escolaridade: </b>
              		<?php echo $row['escolaridade'];?>
                </li>
                <li class="list-group-item"><b>Tipo de escola: </b>
              		<?php echo $row['escolaridade_radio'];?>
                </li>
                <li class="list-group-item"><b>Alimentação (qualidade/independência): </b>
              		<?php echo $row['alimentacao'];?>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
        	 <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Qualidade do sono: </b>
              		<?php echo $row['qualidade_sono'];?>
                </li>
                <li class="list-group-item"><b>AVD’S (qualidade/independência): </b>
              		<?php echo $row['avd'];?>
                </li>
            </ul>
        </div>

        <div class="divisoria"></div>

        <div class="col-md-12 pt-2">
          	  <h4 class="text-center">Sistema Músculo-Esquelético</h4>
      	</div>

        <div class="col-md-12 pt-2">
	        <ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>Cervical:</b><br>
		            <?php echo $row['cervical'];?>
		        </li>
	        </ul>
	        <ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>Tronco:</b><br>
		            <?php echo $row['tronco'];?>
		        </li>
	        </ul>
	        <ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>Membros superiores:</b><br>
		            <?php echo $row['membros_superiores'];?>
		        </li>
	        </ul>
	        <ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>Membros inferiores:</b><br>
		            <?php echo $row['membros_inferiores'];?>
		        </li>
	        </ul>
	        <ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>Uso de Ortese:</b><br>
		            <?php echo $row['ortese'];?>
		        </li>
	        </ul>
	        <ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>Movimentação passiva (ADM): </b><br>
		            <?php echo $row['movimentacao_passiva'];?>
		        </li>
	        </ul>
        </div>

        <div class="divisoria"></div>

        <div class="col-md-6">
        	<ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>Tônus de repouso: </b><br>
		            <?php echo $row['tonus_repouso'];?>
		        </li>
	        </ul>
        </div>
        <div class="col-md-6">
        	<ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>Tônus de movimento: </b><br>
		            <?php echo $row['tonus_movimento'];?>
		        </li>
	        </ul>
        </div>

        <div class="col-md-12">
	        <ul class="list-group list-group-flush">
	            <li class="list-group-item"><b>OBS:</b><br>
	           		<?php echo $row['obs_tonus'];?>
	            </li>
	      	</ul>
	    </div>

	    <div class="col-md-12">
        	<ul class="list-group list-group-flush">
		        <li class="list-group-item"><b>Escala de Arshworth (modificada): </b><br>
		            <?php echo $row['escala_arshworth'];?>
		        </li>
	        </ul>
        </div>

        <div class="divisoria"></div>

        <div class="col-md-12 pt-2">
          	  <h4 class="text-center">Terapias Complementares</h4>
      	</div>

        <div class="col-md-12">
	        <ul class="list-group list-group-flush">
	            <li class="list-group-item"><b>Já fez fisioterapia anteriormente? Onde? Quando? Faz algum tratamento paralelo? Faz algum esporte?</b><br>
	           		<?php echo $row['fisioterapia_conteudo'];?>
	            </li>
	            <li class="list-group-item"><b>Exames Complementares</b><br>
	           		<?php echo $row['exames_complementares'];?>
	            </li>
	            <li class="list-group-item"><b>Objetivos</b><br>
	           		<?php echo $row['objetivos'];?>
	            </li>
	            <li class="list-group-item"><b>Plano de Tratamento</b><br>
	           		<?php echo $row['plano_tratamento'];?>
	            </li>
	            <li class="list-group-item"><b>data</b><br>
	           		<?php echo $row['data'];?>
	            </li>
	      	</ul>
	    </div>

	    <div class="col-md-12">
	        <ul class="list-group list-group-flush">
	            <li class="list-group-item"><b>Evolução:</b><br>
	           		<?php echo $row['evolucao'];?>
	            </li>
	      	</ul>
	    </div>

      <div class="col-md-12">
          <ul class="list-group list-group-flush">
              <li class="list-group-item"><b>Nome do médico:</b><br>
                <?php echo $row['nome_medico'];?>
              </li>
          </ul>
      </div>
	   
	    <div class="col-md-12 pb-3">
	   		<a href="editar_paciente.php?&id_paciente=<?php echo $row['id'];?>" class="btn btn-warning ml-3">Editar</a>
	   	</div>
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