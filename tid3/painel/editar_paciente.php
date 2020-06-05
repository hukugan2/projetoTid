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
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Pacientes</span></a></li>
    </aside>

    <main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

              <?php if (mysqli_num_rows($resultado) > 0) { 
              while ($row = mysqli_fetch_assoc($resultado)) { ?>
              
              <div>
                <form method="POST" action="processa_editar_paciente.php">
                  <div>
                    <h4>Indentificação</h4>
                  </div>
                  <div class="row">
                    <div class="col-md-8 py-2">
                      <label>Nome</label>
                      <input type="text" name="nome_paciente" class="form-control" placeholder="Nome da Criança" required="" value="<?php echo $row['nome_paciente']?>">
                    </div>
                    <div class="col-md-4 py-2">
                      <label>Apelido</label>
                      <input type="text" name="apelido_paciente" class="form-control" placeholder="Apelido" required="" value="<?php echo $row['apelido_paciente']?>">
                    </div>
                    <div class="col-md-3 py-2">
                      <label>Data de Nascimento</label>
                      <input type="text" name="data_nascimento" value="<?php echo $row['data_nascimento']?>" class="form-control" required="" maxlength="10">
                    </div>
                    <div class="col-md-3 py-2">
                     <label>Sexo</label><br>
                     <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sexo" <?php if($row['sexo'] == "Masculino"){ echo 'checked="true"';} ?> value="Masculino" required="">
                      <label class="form-check-label">Masculino</label>
                        
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sexo" <?php if($row['sexo'] == "Feminino"){ echo 'checked="false"'; };?> value="Feminino" required="" >
                      <label class="form-check-label">Feminino</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 py-2">
                    <label>Nome do Responsável</label>
                    <input type="text" class="form-control" name="nome_responsavel" required="" value="<?php echo $row['nome_responsavel']?>">
                  </div>
                  <div class="col-md-3 py-2">
                    <label>Parentesco</label>
                    <select class="form-control" name="parentesco" required="">
                      <option value="Pai">Pai</option>
                      <option value="Mãe">Mãe</option>
                      <option value="Irmão">Irmão(a)</option>
                      <option value="Avó(ô)">Avó(ô)</option>
                      <option value="Tio">Tio(a)</option>
                      <option value="Primo(a)">Primo(a)</option>
                    </select>
                  </div>
                  <div class="col-md-3 py-2">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="(00) 00000-0000" required="" maxlength="16" value="<?php echo $row['telefone']?>">
                  </div>
                  <div class="col-md-12 py-3">
                    <label for="exampleFormControlTextarea1">Diagnóstico Médico</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="diagnostico_medico" rows="6" required=""><?php echo $row['diagnostico_medico']?></textarea>    
                  </div>
                </div>
                <div>
                  <h4>ANAMINESE</h4>
                </div>
                <div class="row">
                 <div class="col-md-12 py-2">
                  <label for="exampleFormControlTextarea1"></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="anaminese" required="">
                    <?php echo $row['anaminese'] ?>
                  </textarea>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 py-2">
                  <label>GPA</label>
                  <input type="text" name="gpa" class="form-control" placeholder="" required="" value="<?php echo $row['gpa'] ?>">
                </div>
                <div class="col-md-4 py-2">
                  <label>Idade Materna na Gestação:</label>
                  <input type="text" name="idade_gestacao" class="form-control" placeholder="" required="" value="<?php echo $row['idade_gestacao'] ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pt-4">
                 <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="doencas_hereditarias" value="Doenças hereditárias" <?php if($row['doencas_hereditarias'] == "Doenças hereditárias"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Doenças hereditárias</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="has_materna" value="HAS Materna" <?php if($row['has_materna'] == "HAS Materna"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">HAS Materna</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="doencas_cardio" value="Doenças Cardiopulmonares"<?php if($row['doencas_cardio'] == "Doenças Cardiopulmonares"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Doenças Cardiopulmonares</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="infeccoes_cogenitas" value="Infecções Congênitas"<?php if($row['infeccoes_cogenitas'] == "Infecções Congênitas"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Infecções Congênitas</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="partos_anteriores" value="Partos anteriores demorados"<?php if($row['partos_anteriores'] == "Partos anteriores demorados"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Partos anteriores demorados</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="aborto" value="Aborto"<?php if($row['aborto'] == "Aborto"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Aborto</label>
                </div>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlTextarea1"><b>OBS:</b></label>
                <textarea class="form-control" rows="3" name="texto_observacao" required=""><?php echo $row['texto_observacao'] ?></textarea>    
              </div> 
            </div>

            <div class="row py-3">
              <h4 class="ml-3">HISTÓRIA GESTACIONAL</h4>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label>Ganho de peso durante a gestação:</label>
                <input type="text" class="form-control" name="ganho_peso_durante_gestao" placeholder="" required="" value="<?php echo $row['ganho_peso_durante_gestao'] ?>">
              </div>
              <div class="col-md-4">
                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                  <label class="custom-control-label" for="customControlInline">Infecções Cogênitas</label>
                </div>
                <input type="text" class="form-control" placeholder="" name="infeccoes_cogenitas_2" required="" value="<?php echo $row['infeccoes_cogenitas_2'] ?>">     
              </div>
              <div class="col-md-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="uso_medicamentos" value="Uso de medicamentos" <?php if($row['uso_medicamentos'] == "Uso de medicamentos"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Uso de medicamentos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="anormalidade_placentaria" value="Anormalidade placentária" <?php if($row['anormalidade_placentaria'] == "Anormalidade placentária"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label" for="inlineRadio4">Anormalidade placentária (Placenta previa/ruptura brusca)</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="traumatismos" value="Traumatismos" <?php if($row['traumatismos'] == "Traumatismos"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label" for="inlineRadio5">Traumatismos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="has" value="HAS" <?php if($row['has'] == "HAS"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">HAS</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="hemorragias" value="Hemorragias" <?php if($row['hemorragias'] == "Hemorragias"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Hemorragias</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pre_eclampsia" value="Pré-Eclampsia" <?php if($row['pre_eclampsia'] == "Pré-Eclampsia"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Pré-Eclampsia</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="gestacao_multipla" value="Gestação múltipla" <?php if($row['gestacao_multipla'] == "Gestação múltipla"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label" for="inlineRadio9">Gestação múltipla</label>
                </div>
              </div>

            </div>

            <div class="row py-3">
              <h4 class="ml-3">HISTÓRIA DO PARTO</h4>
            </div>

            <div class="row">

             <div class="col-md-3">
              <label>Tipo de parto:</label>
              <input type="text" class="form-control" name="tipo_parto" placeholder="" required="" value="<?php echo $row['tipo_parto'] ?>">
            </div>

            <div class="col-md-3">
              <label>Idade gestacional:</label>
              <input type="text" class="form-control" name="idade_gestacional" placeholder="" required="" value="<?php echo $row['idade_gestacional'] ?>">
            </div>
            <div class="col-md-3">
              <label>Peso ao nascer:</label>
              <input type="text" class="form-control" name="peso_nascimento" placeholder="" required="" value="<?php echo $row['peso_nascimento'] ?>">
            </div>
            <div class="col-md-3">
              <label>Tamanho ao nascer:</label>
              <input type="text" class="form-control" name="tamanho_nascer" placeholder="" required="" value="<?php echo $row['tamanho_nascer'] ?>">
            </div>

            </div>

            <div class="row py-3">
              <h4 class="ml-3">Apresentação fetal:</h4>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" value="Cefálica" required="" <?php if($row['apresentacao_fetal'] == "Cefálica"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Cefálica</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" value="Nádegas" required=""  <?php if($row['apresentacao_fetal'] == "Nádegas"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Nádegas </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" value="Face" required="" <?php if($row['apresentacao_fetal'] == "Face"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Face</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" value="Ombro" required="" <?php if($row['apresentacao_fetal'] == "Ombro"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Ombro</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" value="Transversal" required="" <?php if($row['apresentacao_fetal'] == "Transversal"){ echo 'checked="true"';} ?>>
                  <label class="form-check-label">Transversal</label>
                </div>
              </div>

            </div>

            <div class="row py-3">
              <h4 class="ml-3">Duração de trabalho de parto:</h4>
            </div>

            <div class="row">
             <div class="col-md-12 form-inline">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="trabalho_parto" value="Prolongado (>24h/12h)" required="" <?php if($row['trabalho_parto'] == "Prolongado (>24h/12h)"){ echo 'checked="true"';} ?>>
                <label class="form-check-label" for="inlineRadio3">Prolongado (>24h/12h)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="trabalho_parto" value="Precipitado (<3h)" required="" <?php if($row['trabalho_parto'] == "Precipitado (<3h)"){ echo 'checked="true"';} ?>>
                <label class="form-check-label" for="inlineRadio4">Precipitado (<3h) </label>
              </div>
            </div>

            </div>

            <div class="row py-3">
              <h4 class="ml-3">Tempo de bolsa rota (entre romper a bolsa e a criança nascer)</h4>
            </div>

            <div class="row">

             <div class="col-md-3">
              <input type="text" class="form-control" name="tempo_bolsa" required="" value="<?php echo $row['tempo_bolsa']?>">
            </div>

            </div>

            <div class="row pt-3">
              <h4 class="ml-3">Chorou ao nascer</h4>
            </div>

            <div class="row">
               <div class="col-md-12 form-inline">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="chorou" value="Sim" required="" <?php if($row['chorou'] == "Sim"){ echo 'checked="true"';} ?>>
                    <label class="form-check-label" for="inlineRadio3">Sim</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="chorou" value="Não" required="" <?php if($row['chorou'] == "Não"){ echo 'checked="true"';} ?>>
                    <label class="form-check-label" for="inlineRadio4">Não</label>
                  </div>
               </div>
            </div>

            </div>    

            <div>
                <div class="row">
                  <div class="col-md-12 py-2">
                    <h3 class="text-center">Avaliação Fisioterapêutica Pediátrica</h3>
                  </div>
                </div>

                <div>
                  <h4>INTERCORRÊNCIAS E INTERVENÇÕES NEONATAIS</h4>
                </div>
                <div class="row">
                  <div class="col-md-12 py-2">
                    
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Mal formações" type="checkbox" name="mal_formacoes" <?php if($row['mal_formacoes'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label">Mal formações</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Intubação" type="checkbox" name="intubacao" <?php if($row['intubacao'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">Intubação</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Medicações" type="checkbox" name="medicacoes" <?php if($row['medicacoes'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">Medicações</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Processos Cirúrgicos" type="checkbox" name="processos_cirurgicos1" <?php if($row['processos_cirurgicos1'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label">Processos Cirúrgicos</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Convulsões" type="checkbox"  name="convulsoes" <?php if($row['convulsoes'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label">Convulsões</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Infecções" type="checkbox"  name="infeccoes" <?php if($row['infeccoes'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">Infecções</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="VNI" type="checkbox"  name="vni" <?php if($row['vni'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">VNI</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Antibioticoterapia" type="checkbox"  name="antibioticoterapia" <?php if($row['antibioticoterapia'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">Antibioticoterapia</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Desconforto Respiratório" type="checkbox"  name="desconforto_respiratorio" <?php if($row['desconforto_respiratorio'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">Desconforto Respiratório</label>
                    </div> 

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Fototerapia" type="checkbox"  name="fototerapia" <?php if($row['fototerapia'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">Fototerapia</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Exsanguineo transfusão" type="checkbox"  name="exsanguineo_transfusao" <?php if($row['exsanguineo_transfusao'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">Exsanguineo transfusão</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Permanência Hospitalar" type="checkbox"  name="permanencia_hospitalar" <?php if($row['permanencia_hospitalar'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">Permanência Hospitalar</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Processos Cirúrgicos" type="checkbox"  name="processos_cirurgicos2" <?php if($row['processos_cirurgicos2'] != ""){ echo 'checked="true"';} ?>>
                      <label class="form-check-label" for="inlineCheckbox1">Processos Cirúrgicos</label>
                    </div>
                  </div>
                </div>

                <div>
                  <h5>OBS:</h5>
                </div>
                  <div class="row">
                    <div class="col-md-12 py-2">
                      <label for="exampleFormControlTextarea1"></label>
                      <textarea class="form-control" name="obs" rows="3" required=""><?php echo $row['obs'] ?></textarea>    
                    </div>
                  </div>
                  <div>
                    <h4>AMAMENTAÇÃO</h4>
                  </div>
                  <div class="row">
                    <div class="col-md-8 py-2">
                      <label>Período:</label>
                      <input type="text" class="form-control" name="periodo" required="" value="<?php echo $row['periodo'] ?>">
                    </div>
                    <div class="col-md-4 py-2">
                      <label>Frequência:</label>
                      <input type="text" class="form-control" name="frequencia" required="" value="<?php echo $row['frequencia'] ?>">
                    </div>
                  </div>                  
                  <div class="row">
                    <label class="ml-3">Associação a outros tipos de alimento? Quais?</label>
                    <div class="col-md-12 py-2">
                      <label for="exampleFormControlTextarea1"></label>
                      <textarea class="form-control" name="associacao_a_tipos_de_alimento" rows="3" required=""><?php echo $row['associacao_a_tipos_de_alimento'] ?></textarea>    
                    </div>
                  </div>
                  
                  <div class="row">
                   <label class="ml-3">Dificuldades:</label>
                    <div class="col-md-12">
                      <label for="exampleFormControlTextarea1"></label>
                      <textarea class="form-control" name="dificuldades" rows="3" required=""><?php echo $row['dificuldades'] ?>
                      </textarea>    
                    </div>
                  </div>

                  <div class="row py-3">
                    <h4 class="ml-3">SINAIS VITAIS</h4>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <label>Pulso:</label>
                      <input type="text" class="form-control" name="pulso" required="" value="<?php echo $row['pulso'] ?>">
                    </div>

                    <div class="col-md-3">
                      <label>FR:</label>
                      <input type="text" class="form-control"  name="fr" required="" value="<?php echo $row['fr'] ?>">
                    </div>
                  
                  </div>
                  
                  <br>

                  <table class="table" style="border: 1px solid; border-color: #fff; ">
                    <tbody>
                      <tr>
                        <th scope="row">RTCA</th>
                        <td>
                          <input class="form-check-input" type="radio" name="rtca1" value="( + ) Padrão Normal/Presente" required="" <?php if($row['rtca1'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="rtca1" value="( - ) Padrão Ausente" required="" <?php if($row['rtca1'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="rtca1" value="( N ) Não observado" required="" <?php if($row['rtca1'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Reflexo de Sucção</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_succao" value="( + ) Padrão Normal/Presente" required="" <?php if($row['reflexo_de_succao'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_succao" value="( - ) Padrão Ausente" required="" <?php if($row['reflexo_de_succao'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                        <label class="form-check-label">( - ) Padrão Ausente</label></td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_succao" value="( N ) Não observado" required="" <?php if($row['reflexo_de_succao'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Reflexo “Olhos de Boneca</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_olhos_de_boneca" value="( + ) Padrão Normal/Presente" required="" <?php if($row['reflexo_olhos_de_boneca'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio"  name="reflexo_olhos_de_boneca" value="( - ) Padrão Ausente" required="" <?php if($row['reflexo_olhos_de_boneca'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio"  name="reflexo_olhos_de_boneca" value="( N ) Não observado" required="" <?php if($row['reflexo_olhos_de_boneca'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Reação de Moro</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_moro" value="( + ) Padrão Normal/Presente" required="" <?php if($row['reacao_de_moro'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_moro" value="( - ) Padrão Ausente" required="" <?php if($row['reacao_de_moro'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_moro" value="( N ) Não observado" required="" <?php if($row['reacao_de_moro'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Reflexo de Preensão palmar</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_palmar" value="( + ) Padrão Normal/Presente" required="" <?php if($row['reflexo_de_preensao_palmar'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_palmar" value="( - ) Padrão Ausente" required="" <?php if($row['reflexo_de_preensao_palmar'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_palmar" value="( N ) Não observado" required="" <?php if($row['reflexo_de_preensao_palmar'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>

                       <tr>
                        <th scope="row">Babinsk</th>
                        <td>
                          <input class="form-check-input" type="radio" name="babinsk" value="( + ) Padrão Normal/Presente" required="" <?php if($row['babinsk'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="babinsk" value="( - ) Padrão Ausente" required="" <?php if($row['babinsk'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="babinsk" value="( N ) Não observado" required="" <?php if($row['babinsk'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Reflexo de apoio plantar</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_apoio_plantar" value="( + ) Padrão Normal/Presente" required="" <?php if($row['reflexo_de_apoio_plantar'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_apoio_plantar" value="( - ) Padrão Ausente" required="" <?php if($row['reflexo_de_apoio_plantar'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_apoio_plantar" value="( N ) Não observado" required="" <?php if($row['reflexo_de_apoio_plantar'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Marcha reflexa</th>
                        <td>
                          <input class="form-check-input" type="radio" name="marcha_reflexa" value="( + ) Padrão Normal/Presente" required="" <?php if($row['marcha_reflexa'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="marcha_reflexa" value="( - ) Padrão Ausente" required="" <?php if($row['marcha_reflexa'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="marcha_reflexa" value="( N ) Não observado" required="" <?php if($row['marcha_reflexa'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Reação de Landau</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_landau" value="( + ) Padrão Normal/Presente" required="" <?php if($row['reacao_de_landau'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label" >( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_landau"  value="( - ) Padrão Ausente" required="" <?php if($row['reacao_de_landau'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_landau" value="( N ) Não observado" required="" <?php if($row['reacao_de_landau'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>
                       <tr>
                        <th scope="row">Galant</th>
                        <td>
                          <input class="form-check-input" type="radio" name="galant" value="( + ) Padrão Normal/Presente" required="" <?php if($row['galant'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="galant" id="inlineRadio3" value="( - ) Padrão Ausente" required="" <?php if($row['galant'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio"name="galant" value="( N ) Não observado" required="" <?php if($row['galant'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>
                       <tr>
                        <th scope="row">Glabelar</th>
                        <td>
                          <input class="form-check-input" type="radio" name="glabelar"  value="( + ) Padrão Normal/Presente" required="" <?php if($row['glabelar'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="glabelar"  value="( - ) Padrão Ausente" required="" <?php if($row['glabelar'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="glabelar"value="( N ) Não observado" required="" <?php if($row['glabelar'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label></td>
                        </tr>

                       <tr>
                        <th scope="row">RTCA</th>
                        <td>
                          <input class="form-check-input" type="radio" name="rtca2" value="( + ) Padrão Normal/Presente" required="" <?php if($row['rtca2'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="rtca2" value="( - ) Padrão Ausente" required="" <?php if($row['rtca2'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="rtca2" value="( N ) Não observado" required="" <?php if($row['rtca2'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Reflexo de preensão plantar</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_plantar"value="( + ) Padrão Normal/Presentes" required="" <?php if($row['reflexo_de_preensao_plantar'] == "( + ) Padrão Normal/Presente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_plantar" value="( - ) Padrão Ausente" required="" <?php if($row['reflexo_de_preensao_plantar'] == "( - ) Padrão Ausente"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_plantar" value="( N ) Não observado" required="" <?php if($row['reflexo_de_preensao_plantar'] == "( N ) Não observado"){ echo 'checked="true"';} ?>>
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="row py-3">
                    <h4 class="ml-3">DIAGNÓSTICO FISIOTERÁPICO:</h4>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 py-0">
                      <label></label>
                      <textarea class="form-control" name="diagnostico_fisioterapico" rows="3" required=""><?php echo $row['diagnostico_fisioterapico'] ?></textarea> 
                    </div>
                  </div>
                </div>
                <div>
                  <div class="container">
                   <div class="row">
                     <div class="col-md-12 my-3">
                      <h2 class="text-center">Avaliação Fisioterapêutica Pediátrica</h2>
                    </div>
                   </div>
                   <div>
                    <h4>AVALIAÇÃO FUNCIONAL E COGNITIVA:</h4>
                   </div>
                   <a>Capacidades/ Limitações:</a>
                    <div class="row">
                     <div class="col-md-12 py-2">
                      <label for="exampleFormControlTextarea1"></label>
                      <textarea class="form-control" name="capacidades_limitacoes" rows="3" required=""><?php echo $row['capacidades_limitacoes'] ?></textarea>    
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-m-3 py-2">
                        <h4 class="ml-2">ROTINA DA CRIANÇA</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 py-2">
                        <label>Escolaridade:</label>
                        <input type="text" name="escolaridade" class="form-control" placeholder="" required="" value="<?php echo $row['escolaridade'] ?>">
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="escolridade_radio" value="Escola especial" required="" <?php if($row['escolaridade_radio'] == "Escola especial"){ echo 'checked="true"';} ?>>
                        <label class="form-check-label" for="inlineCheckbox1">Escola especial</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="escolridade_radio" value="Escola regular" required="" <?php if($row['escolaridade_radio'] == "Escola regular"){ echo 'checked="true"';} ?>>
                        <label class="form-check-label" for="inlineCheckbox1">Escola regular</label>
                      </div>
                    </div>
                    <div class="row py-3">
                      <div class="col-md-4">
                        <label>Alimentação (qualidade/independência)</label>
                        <input type="text" name="alimentacao" class="form-control" placeholder="" required="" value="<?php echo $row['alimentacao'] ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Qualidade do sono (dorme bem?, com quem?)</label>
                        <input type="text" name="qualidade_sono" class="form-control" placeholder="" required="" value="<?php echo $row['qualidade_sono'] ?>">
                      </div>
                      <div class="col-md-4">
                        <label>AVD’S (qualidade/independência)</label>
                        <input type="text" name="avd" class="form-control" placeholder="" required=""value="<?php echo $row['avd'] ?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-m-3 py-2">
                        <h4 class="ml-2">SISTEMA MÚSCULO-ESQUELÉTICO</h4>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 py-2">
                        <label>Cervical:</label>
                        <label></label>
                        <textarea class="form-control" name="cervical" rows="3" required=""><?php echo $row['cervical'] ?></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Tronco:</label>
                        <label></label>
                        <textarea class="form-control" name="tronco" rows="3" required=""><?php echo $row['tronco'] ?></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Membros Superiores:</label>
                        <label></label>
                        <textarea class="form-control" name="membros_superiores" rows="3" required=""><?php echo $row['membros_superiores'] ?></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Membros Inferiores:</label>
                        <label></label>
                        <textarea class="form-control" name="membros_inferiores" rows="3" required=""><?php echo $row['membros_inferiores'] ?></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Uso de Ortese?</label>
                        <label></label>
                        <textarea class="form-control" name="ortese" rows="3" required=""><?php echo $row['ortese'] ?></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Movimentação passiva (ADM):</label>
                        <label></label>
                        <textarea class="form-control" name="movimentacao_passiva" rows="3" required=""><?php echo $row['movimentacao_passiva'] ?></textarea>
                      </div>
                    </div>

                    <div class="row py-3">
                      <h4 class="ml-3">Tônus:</h4>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <label>Tônus de repouso</label>
                        <input type="text" class="form-control" name="tonus_repouso" placeholder="" required="" value="<?php echo $row['tonus_repouso'] ?>">
                      </div>
                      <div class="col-md-6">
                        <label>Tônus de movimento</label>
                        <input type="text" class="form-control" name="tonus_movimento" placeholder="" required="" value="<?php echo $row['tonus_movimento'] ?>">
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-md-12 py-2">
                        <h4 >OBS:</h4>
                      </div>
                      
                      <div class="col-md-12">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" name="obs_tonus" rows="3" required=""><?php echo $row['obs_tonus'] ?></textarea>    
                      </div>

                      <div class="col-md-4 py-2">
                        <label>ESCALA DE ARSHWORTH (modificada)</label>
                          <select class="form-control" name="escala_arshworth" required="">
                            <option value="Grau 0 = Sem aumento de tônus">Grau 0 = Sem aumento de tônus</option>
                            <option value="Grau 1 = Leve aumento de tônus no começo ou final do movimento">Grau 1 = Leve aumento de tônus no começo ou final do movimento</option>
                            <option value="Grau 1 = Leve aumento de tônus na metade do arco do movimento">Grau 1 = Leve aumento de tônus na metade do arco do movimento</option>
                            <option value="Grau 2 = Aumento de tônus em toda ADM">Grau 2 = Aumento de tônus em toda ADM</option>
                            <option value="Grau 3 = Aumento considerável de tônus e movimentação passiva difícil">Grau 3 = Aumento considerável de tônus e movimentação passiva difícil</option>
                            <option value="Grau 4 = Deformidade, rigidamente acometido em flexão, extensão, abdução ou adução">Grau 4 = Deformidade, rigidamente acometido em flexão, extensão, abdução ou adução</option>
                          </select>
                        </div>
                      </div>

                      <div class="row py-3">
                        <h4 class="ml-3">TERAPIAS COMPLEMENTARES</h4>
                      </div>

                      <div class="row">
                         <div class="col-md-12 py-2">
                          <label>Já fez fisioterapia anteriormente? Onde? Quando? Faz algum tratamento paralelo? Faz algum esporte?</label>
                          <label for="exampleFormControlTextarea1"></label>
                          <textarea class="form-control" name="fisioterapia_conteudo" rows="3" required=""><?php echo $row['fisioterapia_conteudo'] ?></textarea>  
                        </div>
                      </div>

                      <div class="row py-3">
                        <h4 class="ml-3">EXAMES COMPLEMENTARES</h4>
                         <div class="col-md-12 py-0">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" name="exames_complementares" rows="3" required=""><?php echo $row['exames_complementares'] ?></textarea>    
                          </div>
                      </div>

                      <div class="row py-3">
                        <h4 class="ml-3">OBJETIVOS:</h4>
                         <div class="col-md-12 py-0">
                            <label></label>
                            <textarea class="form-control" name="objetivos" rows="3" required=""><?php echo $row['objetivos'] ?></textarea>    
                          </div>
                      </div>

                      <div class="row py-3">
                        <h4 class="ml-3">PLANO DE TRATAMENTO</h4>
                         <div class="col-md-12 py-0">
                            <label></label>
                            <textarea class="form-control" name="plano_tratamento" rows="3" required=""><?php echo $row['plano_tratamento'] ?></textarea>    
                         </div>

                         <div class="col-md-3 py-2">
                            <label>Data:</label>
                            <input type="text" name="data" class="form-control" value="<?php echo $row['data'] ?>">
                         </div>
                      </div>

                      <div class="row py-3">
                        <h4 class="ml-3">Evolução</h4>
                          <div class="col-md-12 py-0">
                            <label></label>
                            <textarea class="form-control" name="evolucao" rows="3" required=""><?php echo $row['evolucao'] ?></textarea>    
                          </div>
                      </div>

                      <input type="hidden" name="id_paciente" value="<?php echo $row['id'];?>">

                      <button type="submit" class="btn btn-warning mt-3 w-25" id="btn3">Editar</button>
                
                    </div>
                </form>
             
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>

 <?php } } ?>



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