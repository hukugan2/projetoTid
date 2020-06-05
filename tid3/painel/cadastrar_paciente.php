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
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-user-md"></i><span class="app-menu__label">Funcionários</span></a></li>
        <li><a class="app-menu__item active" href="pacientes.php"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Pacientes</span></a></li>
    </aside>

    <main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">


              
              <div id="div1">
                <form method="POST">
                  <div>
                    <h4>Indentificação</h4>
                  </div>
                  <div class="row">
                    <div class="col-md-8 py-2">
                      <label>Nome</label>
                      <input type="text" name="nome_paciente" class="form-control" placeholder="Nome da Criança" required="" value="teste">
                    </div>
                    <div class="col-md-4 py-2">
                      <label>Apelido</label>
                      <input type="text" name="apelido_paciente" class="form-control" placeholder="Apelido" required="" value="teste">
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
                <div class="row">
                  <div class="col-md-6 py-2">
                    <label>Nome do Responsável</label>
                    <input type="text" class="form-control" name="nome_responsavel" placeholder="Ex: João Oliveira" required="" value="teste">
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
                    <input type="text" class="form-control" name="telefone" placeholder="(00) 00000-0000" required="" maxlength="16" value="teste">
                  </div>
                  <div class="col-md-12 py-3">
                    <label for="exampleFormControlTextarea1">Diagnóstico Médico</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="diagnostico_medico" rows="3" required="">Teste</textarea>    
                  </div>
                </div>
                <div>
                  <h4>ANAMINESE</h4>
                </div>
                <div class="row">
                 <div class="col-md-12 py-2">
                  <label for="exampleFormControlTextarea1"></label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="anaminese" required="">Teste</textarea>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 py-2">
                  <label>GPA</label>
                  <input type="text" name="gpa" class="form-control" placeholder="" required="" value="teste">
                </div>
                <div class="col-md-4 py-2">
                  <label>Idade Materna na Gestação:</label>
                  <input type="text" name="idade_gestacao" class="form-control" placeholder="" required="" value="teste">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pt-4">
                 <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="doencas_hereditarias" value="Doenças hereditárias">
                  <label class="form-check-label">Doenças hereditárias</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="has_materna" value="HAS Materna" >
                  <label class="form-check-label">HAS Materna</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="doencas_cardio" value="Doenças Cardiopulmonares">
                  <label class="form-check-label">Doenças Cardiopulmonares</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="infeccoes_cogenitas" value="Infecções Congênitas">
                  <label class="form-check-label">Infecções Congênitas</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="partos_anteriores" value="Partos anteriores demorados">
                  <label class="form-check-label">Partos anteriores demorados</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="aborto" value="Aborto">
                  <label class="form-check-label">Aborto</label>
                </div>
              </div>
              <div class="col-md-12">
                <label for="exampleFormControlTextarea1"><b>OBS:</b></label>
                <textarea class="form-control" rows="3" name="texto_observacao" required="">Teste</textarea>    
              </div> 
            </div>

            <div class="row py-3">
              <h4 class="ml-3">HISTÓRIA GESTACIONAL</h4>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label>Ganho de peso durante a gestação:</label>
                <input type="text" class="form-control" name="ganho_peso_durante_gestao" placeholder="" required="" value="teste">
              </div>
              <div class="col-md-4">
                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                  <label class="custom-control-label" for="customControlInline">Infecções Cogênitas</label>
                </div>
                <input type="text" class="form-control" placeholder="" name="infeccoes_cogenitas_2" required="" value="teste">     
              </div>
              <div class="col-md-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="uso_medicamentos" id="inlineRadio3" value="Uso de medicamentos">
                  <label class="form-check-label">Uso de medicamentos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="anormalidade_placentaria" id="inlineRadio4" value="Anormalidade placentária">
                  <label class="form-check-label" for="inlineRadio4">Anormalidade placentária (Placenta previa/ruptura brusca)</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="traumatismos" id="inlineRadio5" value="Traumatismos">
                  <label class="form-check-label" for="inlineRadio5">Traumatismos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="has" id="inlineRadio6" value="HAS">
                  <label class="form-check-label">HAS</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="hemorragias" id="inlineRadio7" value="Hemorragias">
                  <label class="form-check-label">Hemorragias</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="pre_eclampsia" id="inlineRadio8" value="Pré-Eclampsia">
                  <label class="form-check-label">Pré-Eclampsia</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="gestacao_multipla" id="inlineRadio9" value="Gestação múltipla">
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
              <input type="text" class="form-control" name="tipo_parto" placeholder="" required="" value="teste">
            </div>

            <div class="col-md-3">
              <label>Idade gestacional:</label>
              <input type="text" class="form-control" name="idade_gestacional" placeholder="" required="" value="teste">
            </div>
            <div class="col-md-3">
              <label>Peso ao nascer:</label>
              <input type="text" class="form-control" name="peso_nascimento" placeholder="" required="" value="teste">
            </div>
            <div class="col-md-3">
              <label>Tamanho ao nascer:</label>
              <input type="text" class="form-control" name="tamanho_nascer" placeholder="" required="" value="teste">
            </div>

            </div>

            <div class="row py-3">
              <h4 class="ml-3">Apresentação fetal:</h4>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio3" value="Cefálica" required="">
                  <label class="form-check-label">Cefálica</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio4" value="Nádegas" required="" checked="true">
                  <label class="form-check-label">Nádegas </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio5" value="Face" required="">
                  <label class="form-check-label">Face</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio6" value="Ombro" required="">
                  <label class="form-check-label">Ombro</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio7" value="Transversal" required="">
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
                <input class="form-check-input" type="radio" name="trabalho_parto" id="inlineRadio3" value="Prolongado (>24h/12h)" required="" checked="true">
                <label class="form-check-label" for="inlineRadio3">Prolongado (>24h/12h)</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="trabalho_parto" id="inlineRadio4" value="Precipitado (<3h)" required="">
                <label class="form-check-label" for="inlineRadio4">Precipitado (<3h) </label>
              </div>
            </div>

            </div>

            <div class="row py-3">
              <h4 class="ml-3">Tempo de bolsa rota (entre romper a bolsa e a criança nascer)</h4>
            </div>

            <div class="row">

             <div class="col-md-3">
              <input type="text" class="form-control" name="tempo_bolsa" placeholder="" required="" value="teste">
            </div>

            </div>

            <div class="row pt-3">
              <h4 class="ml-3">Chorou ao nascer</h4>
            </div>

            <div class="row">
               <div class="col-md-12 form-inline">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="chorou" id="inlineRadio3" value="Sim" required="" checked="htt">
                    <label class="form-check-label" for="inlineRadio3">Sim</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="chorou" id="inlineRadio4" value="Não" required="">
                    <label class="form-check-label" for="inlineRadio4">Não</label>
                  </div>
               </div>
            </div>
              <button type="submit" class="btn btn-primary mt-3">próximo</button>
            </form>

            </div>    

            <div id="div2" class="d-none">
              <form method="POST">
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
                      <input class="form-check-input" value="Mal formações" type="checkbox" name="mal_formacoes">
                      <label class="form-check-label" for="inlineCheckbox1">Mal formações</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Intubação" type="checkbox" name="intubacao">
                      <label class="form-check-label" for="inlineCheckbox1">Intubação</label>

                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Medicações" type="checkbox" name="medicacoes">
                      <label class="form-check-label" for="inlineCheckbox1">Medicações</label>

                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Processos Cirúrgicos" type="checkbox" name="processos_cirurgicos1">
                      <label class="form-check-label" for="inlineCheckbox1">Processos Cirúrgicos</label>

                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Convulsões" type="checkbox"  name="convulsoes">
                      <label class="form-check-label" for="inlineCheckbox1">Convulsões</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Infecções" type="checkbox"  name="infeccoes">
                      <label class="form-check-label" for="inlineCheckbox1">Infecções</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="VNI" type="checkbox"  name="vni">
                      <label class="form-check-label" for="inlineCheckbox1">VNI</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Antibioticoterapia" type="checkbox"  name="antibioticoterapia">
                      <label class="form-check-label" for="inlineCheckbox1">Antibioticoterapia</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Desconforto Respiratório" type="checkbox"  name="desconforto_respiratorio">
                      <label class="form-check-label" for="inlineCheckbox1">Desconforto Respiratório</label>
                    </div> 

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Fototerapia" type="checkbox"  name="fototerapia">
                      <label class="form-check-label" for="inlineCheckbox1">Fototerapia</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Exsanguineo transfusão" type="checkbox"  name="exsanguineo_transfusao" >
                      <label class="form-check-label">Exsanguineo transfusão</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Permanência Hospitalar" type="checkbox"  name="permanencia_hospitalar" >
                      <label class="form-check-label">Permanência Hospitalar</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" value="Processos Cirúrgicos" type="checkbox"  name="processos_cirurgicos2">
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
                      <textarea class="form-control" name="obs" rows="3" required=""></textarea>    
                    </div>
                  </div>
                  <div>
                    <h4>AMAMENTAÇÃO</h4>
                  </div>
                  <div class="row">
                    <div class="col-md-8 py-2">
                      <label>Período:</label>
                      <input type="text" class="form-control" name="periodo" placeholder="" required="">
                    </div>
                    <div class="col-md-4 py-2">
                      <label>Frequência:</label>
                      <input type="text" class="form-control" name="frequencia" placeholder="" required="">
                    </div>
                  </div>

                  <div class="row">
                    <label class="ml-3">Associação a outros tipos de alimento? Quais?</label>
                    <div class="col-md-12 py-2">
                      <label for="exampleFormControlTextarea1"></label>
                      <textarea class="form-control" name="associacao_a_tipos_de_alimento" rows="3" required=""></textarea>    
                    </div>
                  </div>
                  
                  <div class="row">
                   <label class="ml-3">Dificuldades:</label>
                    <div class="col-md-12 py-2">
                      <label for="exampleFormControlTextarea1"></label>
                      <textarea class="form-control" name="dificuldades" rows="3" required=""></textarea>    
                    </div>
                  </div>

                  <div class="row py-3">
                    <h4 class="ml-3">SINAIS VITAIS</h4>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <label>Pulso:</label>
                      <input type="text" class="form-control" name="pulso" placeholder="" required="">
                    </div>

                    <div class="col-md-3">
                      <label>FR:</label>
                      <input type="text" class="form-control"  name="fr" placeholder="" required="">
                    </div>
                  
                  </div>
                  
                  <br>

                  <table class="table" style="border: 1px solid; border-color: #fff; ">
                    <tbody>
                      <tr>
                        <th scope="row">RTCA</th>
                        <td>
                          <input class="form-check-input" type="radio" name="rtca1" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="rtca1" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="rtca1" value="( N ) Não observado" required="">
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Reflexo de Sucção</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_succao" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_succao" value="( - ) Padrão Ausente" required="">
                        <label class="form-check-label">( - ) Padrão Ausente</label></td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_succao" value="( N ) Não observado" required="">
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Reflexo “Olhos de Boneca</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_olhos_de_boneca" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio"  name="reflexo_olhos_de_boneca" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio"  name="reflexo_olhos_de_boneca" value="( N ) Não observado" required="">
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Reação de Moro</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_moro" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_moro" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_moro" value="( N ) Não observado" required="">
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Reflexo de Preensão palmar</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_palmar" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_palmar" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_palmar" value="( N ) Não observado" required="">
                          <label class="form-check-label">( N ) Não observado</label>
                        </td>
                      </tr>

                       <tr>
                        <th scope="row">Babinsk</th>
                        <td>
                          <input class="form-check-input" type="radio" name="babinsk" id="inlineRadio3" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="babinsk" id="inlineRadio3" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="babinsk" id="inlineRadio3" value="( N ) Não observado" required="">
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Reflexo de apoio plantar</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_apoio_plantar" id="inlineRadio3" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_apoio_plantar" id="inlineRadio3" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_apoio_plantar" id="inlineRadio3" value="( N ) Não observado" required="">
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Marcha reflexa</th>
                        <td>
                          <input class="form-check-input" type="radio" name="marcha_reflexa" id="inlineRadio3" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="marcha_reflexa" id="inlineRadio3" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="marcha_reflexa" id="inlineRadio3" value="( N ) Não observado" required="">
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">Reação de Landau</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_landau" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_landau" id="inlineRadio3" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reacao_de_landau" id="inlineRadio3" value="( N ) Não observado" required="">
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label>
                        </td>
                      </tr>
                       <tr>
                        <th scope="row">Galant</th>
                        <td>
                          <input class="form-check-input" type="radio" name="galant" id="inlineRadio3" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="galant" id="inlineRadio3" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio"name="galant" id="inlineRadio3" value="( N ) Não observado" required="">
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label>
                        </td>
                      </tr>
                       <tr>
                        <th scope="row">Glabelar</th>
                        <td>
                          <input class="form-check-input" type="radio" name="glabelar" id="inlineRadio3" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="glabelar" id="inlineRadio3" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="glabelar" id="inlineRadio3" value="( N ) Não observado" required="">
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
                        </tr>

                       <tr>
                        <th scope="row">RTCA</th>
                        <td>
                          <input class="form-check-input" type="radio" name="rtca2" id="inlineRadio3" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="rtca2" id="inlineRadio3" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="rtca2" id="inlineRadio3" value="( N ) Não observado" required="">
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Reflexo de preensão plantar</th>
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_plantar" id="inlineRadio3" value="( + ) Padrão Normal/Presente" required="">
                          <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label>
                        </td>

                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_plantar" id="inlineRadio3" value="( - ) Padrão Ausente" required="">
                          <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label>
                        </td>
                        
                        <td>
                          <input class="form-check-input" type="radio" name="reflexo_de_preensao_plantar" id="inlineRadio3" value="( N ) Não observado" required="">
                          <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="row py-3">
                    <h4 class="ml-3">DIAGNÓSTICO FISIOTERÁPICO:</h4>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 py-0">
                      <label for="exampleFormControlTextarea1"></label>
                      <textarea class="form-control" name="diagnostico_fisioterapico" id="exampleFormControlTextarea1" rows="3" required=""></textarea>    
                    </div>
                  </div>
                
                   <button type="submit" class="btn btn-danger mt-3" id="btn2">próximo</button>

                </form>
            </div>

            <div id="div3" class="d-none">
               <form class="form-horizontal"  action="" method="POST">
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
                      <textarea class="form-control" name="capacidades_limitacoes" rows="3" required=""></textarea>    
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
                        <input type="text" name="escolaridade" class="form-control" placeholder="" required="">
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="escolaridade_radio" value="Escola especial" required="">
                        <label class="form-check-label" for="inlineCheckbox1">Escola especial</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="escolaridade_radio" value="Escola regular" required="">
                        <label class="form-check-label" for="inlineCheckbox1">Escola regular</label>
                      </div>
                    </div>
                    <div class="row py-3">
                      <div class="col-md-4">
                        <label>Alimentação (qualidade/independência)</label>
                        <input type="text" name="alimentacao" class="form-control" placeholder="" required="">
                      </div>
                      <div class="col-md-4">
                        <label>Qualidade do sono (dorme bem?, com quem?)</label>
                        <input type="text" name="qualidade_sono" class="form-control" placeholder="" required="">
                      </div>
                      <div class="col-md-4">
                        <label>AVD’S (qualidade/independência)</label>
                        <input type="text" name="avd" class="form-control" placeholder="" required="">
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
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" name="cervical" rows="3" required=""></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Tronco:</label>
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" name="tronco" rows="3" required=""></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Membros Superiores:</label>
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" name="membros_superiores" rows="3" required=""></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Membros Inferiores:</label>
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" name="membros_inferiores" rows="3" required=""></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Uso de Ortese?</label>
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" name="ortese" rows="3" required=""></textarea>    
                      </div>
                      <div class="col-md-12 py-2">
                        <label>Movimentação passiva (ADM):</label>
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" name="movimentacao_passiva" rows="3" required=""></textarea>
                      </div>
                    </div>

                    <div class="row py-3">
                      <h4 class="ml-3">Tônus:</h4>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <label>Tônus de repouso</label>
                        <input type="text" class="form-control" name="tonus_repouso" placeholder="" required="">
                      </div>
                      <div class="col-md-6">
                        <label>Tônus de movimento</label>
                        <input type="text" class="form-control" name="tonus_movimento" placeholder="" required="">
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-md-12 py-2">
                        <h4 >OBS:</h4>
                      </div>
                      
                      <div class="col-md-12">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" name="obs_tonus" rows="3" required=""></textarea>    
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
                          <textarea class="form-control" name="fisioterapia_conteudo" rows="3" required=""></textarea>  
                        </div>
                      </div>

                      <div class="row py-3">
                        <h4 class="ml-3">EXAMES COMPLEMENTARES</h4>
                         <div class="col-md-12 py-0">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" name="exames_complementares" rows="3" required=""></textarea>    
                          </div>
                      </div>

                      <div class="row py-3">
                        <h4 class="ml-3">OBJETIVOS:</h4>
                         <div class="col-md-12 py-0">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" name="objetivos" rows="3" required=""></textarea>    
                          </div>
                      </div>

                      <div class="row py-3">
                        <h4 class="ml-3">PLANO DE TRATAMENTO</h4>
                         <div class="col-md-12 py-0">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" name="plano_tratamento" rows="3" required=""></textarea>    
                         </div>

                         <div class="col-md-3 py-2">
                            <label>Data:</label>
                            <input type="date" name="data" class="form-control">
                         </div>
                      </div>

                      <div class="row py-3">
                        <h4 class="ml-3">Evolução</h4>
                          <div class="col-md-12 py-0">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" name="evolucao" rows="3" required=""></textarea>    
                          </div>
                      </div>

                       <div class="col-md-4">

                      <?php $resultado = mysqli_query($conexao, "SELECT * FROM funcionarios");
                      if(mysqli_num_rows($resultado) > 0){
                      while($row = mysqli_fetch_assoc($resultado)) { ?> 


                        <label>Médico resposável</label>
                          <select class="form-control" name="nome_medico" required="">
                            <option value="<?php echo $row['nome_funcionario']?>"><?php echo $row['nome_funcionario']?>
                          </select>
                        </div>
                 
                      <?php } }?>

                      <button type="submit" class="btn btn-dark mt-3" id="btn3">finalizar</button>
                
                    </div>
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
  

      <?php

        if (isset($_POST['chorou'])){ 
            $nome_paciente = $_POST['nome_paciente'];
            $apelido_paciente = $_POST['apelido_paciente'];
            $data_nascimento = $_POST['data_nascimento'];
            $data_nascimento = date("d/m/Y");
            $sexo = $_POST['sexo'];
            $nome_responsavel = $_POST['nome_responsavel'];
            $parentesco = $_POST['parentesco'];
            $telefone = $_POST['telefone'];
            $diagnostico_medico = $_POST['diagnostico_medico'];
            $anaminese = $_POST['anaminese'];
            $gpa = $_POST['gpa'];
            $idade_gestacao = $_POST['idade_gestacao'];

            if(empty($_POST['doencas_hereditarias'])){ $doencas_hereditarias = "";
            }else{ $doencas_hereditarias = $_POST['doencas_hereditarias']; }

            if(empty($_POST['has_materna'])){$has_materna = "";
            }else{ $has_materna = $_POST['has_materna']; }

            if(empty($_POST['doencas_cardio'])){$doencas_cardio = "";
            }else{ $doencas_cardio = $_POST['doencas_cardio']; }
            
            if(empty($_POST['infeccoes_cogenitas'])){ $infeccoes_cogenitas = "";
            }else{ $infeccoes_cogenitas = $_POST['infeccoes_cogenitas']; }

            if(empty($_POST['infeccoes_cogenitas'])){ $infeccoes_cogenitas = "";
            }else{ $infeccoes_cogenitas = $_POST['infeccoes_cogenitas']; }
            
            if(empty($_POST['partos_anteriores'])){  $partos_anteriores = "";
            }else{  $partos_anteriores = $_POST['infeccoes_cogenitas']; }
            
            if(empty($_POST['aborto'])){   $aborto = "";
            }else{  $aborto = $_POST['aborto']; }

            $texto_observacao = $_POST['texto_observacao'];
            $ganho_peso_durante_gestao = $_POST['ganho_peso_durante_gestao'];
            $infeccoes_cogenitas_2 = $_POST['infeccoes_cogenitas_2'];
            
            if(empty($_POST['uso_medicamentos'])){ $uso_medicamentos = "";
            }else{ $uso_medicamentos = $_POST['uso_medicamentos']; }

            if(empty($_POST['anormalidade_placentaria'])){ $anormalidade_placentaria = "";
            }else{ $anormalidade_placentaria = $_POST['anormalidade_placentaria']; }
            
            if(empty($_POST['traumatismos'])){ $traumatismos = "";
            }else{ $traumatismos = $_POST['traumatismos']; }

            if(empty($_POST['has'])){ $has = "";
            }else{ $has = $_POST['has']; }

            if(empty($_POST['hemorragias'])){ $hemorragias = "";
            }else{ $hemorragias = $_POST['hemorragias']; }

            if(empty($_POST['pre_eclampsia'])){ $pre_eclampsia = "";
            }else{ $pre_eclampsia = $_POST['pre_eclampsia']; }

            if(empty($_POST['gestacao_multipla'])){ $gestacao_multipla = "";
            }else{ $gestacao_multipla = $_POST['gestacao_multipla']; }
            
            $tipo_parto = $_POST['tipo_parto'];
            $idade_gestacional = $_POST['idade_gestacional'];
            $peso_nascimento = $_POST['peso_nascimento'];
            $tamanho_nascer = $_POST['tamanho_nascer'];
            $apresentacao_fetal = $_POST['apresentacao_fetal'];
            $trabalho_parto = $_POST['trabalho_parto'];
            $tempo_bolsa = $_POST['tempo_bolsa'];
            $chorou = $_POST['chorou'];

            $inserir_usuario = mysqli_query($conexao, "INSERT INTO indentificacao
  (nome_paciente, apelido_paciente, data_nascimento, sexo, nome_responsavel, parentesco, telefone, diagnostico_medico,anaminese, gpa, idade_gestacao, doencas_hereditarias, has_materna, doencas_cardio, infeccoes_cogenitas, partos_anteriores, aborto, texto_observacao, ganho_peso_durante_gestao, infeccoes_cogenitas_2, uso_medicamentos, anormalidade_placentaria, traumatismos, has, hemorragias, pre_eclampsia, gestacao_multipla, tipo_parto,idade_gestacional, peso_nascimento, tamanho_nascer, apresentacao_fetal, trabalho_parto, tempo_bolsa, chorou) 
  VALUES ('$nome_paciente','$apelido_paciente','$data_nascimento','$sexo','$nome_responsavel','$parentesco','$telefone','$diagnostico_medico','$anaminese','$gpa','$idade_gestacao','$doencas_hereditarias','$has_materna', '$doencas_cardio', '$infeccoes_cogenitas','$partos_anteriores','$aborto','$texto_observacao','$ganho_peso_durante_gestao','$infeccoes_cogenitas_2','$uso_medicamentos', '$anormalidade_placentaria', '$traumatismos', '$has', '$hemorragias', '$pre_eclampsia','$gestacao_multipla','$tipo_parto','$idade_gestacional','$peso_nascimento','$tamanho_nascer','$apresentacao_fetal','$trabalho_parto','$tempo_bolsa','$chorou')");

      $ultimo_id_inserido = mysqli_query($conexao, $inserir_usuario);
      $ultimo_id = mysqli_insert_id($conexao);

      $_SESSION['ultimo_id'] = $ultimo_id;
      echo "o ultimo id é ".$_SESSION['ultimo_id'];

          ?>
          <script type="text/javascript">
                $("#div1").addClass("d-none");
                $("#div2").removeClass("d-none");
          </script>

      <?php }
        else if (isset($_POST['pulso'])){

          $ultimo_id = $_SESSION['ultimo_id'];

           if(empty($_POST['mal_formacoes'])){ $mal_formacoes = "";
           }else{ $mal_formacoes = $_POST['mal_formacoes']; }

            if(empty($_POST['intubacao'])){ $intubacao = "";
           }else{ $intubacao = $_POST['intubacao']; }

            if(empty($_POST['medicacoes'])){ $medicacoes = "";
           }else{ $medicacoes = $_POST['medicacoes']; }

            if(empty($_POST['processos_cirurgicos1'])){ $processos_cirurgicos1 = "";
           }else{ $processos_cirurgicos1 = $_POST['processos_cirurgicos1']; }

            if(empty($_POST['convulsoes'])){ $convulsoes = "";
           }else{ $convulsoes = $_POST['convulsoes']; }

            if(empty($_POST['infeccoes'])){ $infeccoes = "";
           }else{ $infeccoes = $_POST['infeccoes']; }

            if(empty($_POST['vni'])){ $vni = "";
           }else{ $vni = $_POST['vni']; }

            if(empty($_POST['antibioticoterapia'])){ $antibioticoterapia = "";
           }else{ $antibioticoterapia = $_POST['antibioticoterapia']; }

            if(empty($_POST['desconforto_respiratorio'])){ $desconforto_respiratorio = "";
           }else{ $desconforto_respiratorio = $_POST['desconforto_respiratorio']; }

            if(empty($_POST['fototerapia'])){ $fototerapia = "";
           }else{ $fototerapia = $_POST['fototerapia']; }

            if(empty($_POST['exsanguineo_transfusao'])){ $exsanguineo_transfusao = "";
           }else{ $exsanguineo_transfusao = $_POST['exsanguineo_transfusao']; }

            if(empty($_POST['permanencia_hospitalar'])){ $permanencia_hospitalar = "";
           }else{ $permanencia_hospitalar = $_POST['permanencia_hospitalar']; }
 
            if(empty($_POST['processos_cirurgicos2'])){ $processos_cirurgicos2 = "";
           }else{ $processos_cirurgicos2 = $_POST['processos_cirurgicos2']; }
       

          $obs = $_POST['obs'];
          $periodo = $_POST['periodo'];
          $frequencia = $_POST['frequencia'];
          $associacao_a_tipos_de_alimento = $_POST['associacao_a_tipos_de_alimento'];
          $dificuldades = $_POST['dificuldades'];
          $pulso = $_POST['pulso'];
          $fr = $_POST['fr'];
          $rtca1 = $_POST['rtca1'];
          $reflexo_de_succao = $_POST['reflexo_de_succao'];
          $reflexo_olhos_de_boneca = $_POST['reflexo_olhos_de_boneca'];
          $reacao_de_moro = $_POST['reacao_de_moro'];
          $reflexo_de_preensao_palmar = $_POST['reflexo_de_preensao_palmar'];
          $babinsk = $_POST['babinsk'];
          $reflexo_de_apoio_plantar = $_POST['reflexo_de_apoio_plantar'];
          $marcha_reflexa = $_POST['marcha_reflexa'];
          $reacao_de_landau = $_POST['reacao_de_landau'];
          $galant = $_POST['galant'];
          $glabelar = $_POST['glabelar'];
          $rtca2= $_POST['rtca2'];
          $reflexo_de_preensao_plantar = $_POST['reflexo_de_preensao_plantar'];
          $diagnostico_fisioterapico = $_POST['diagnostico_fisioterapico'];

          $resultado2 = mysqli_query($conexao, "UPDATE indentificacao SET 
            mal_formacoes = '$mal_formacoes', 
            intubacao = '$intubacao', 
            medicacoes = '$medicacoes',
            processos_cirurgicos1 = '$processos_cirurgicos1',
            convulsoes = '$convulsoes',
            infeccoes = '$infeccoes',
            vni = '$vni',  
            antibioticoterapia = '$antibioticoterapia',
            desconforto_respiratorio = '$desconforto_respiratorio',
            fototerapia = '$fototerapia',
            exsanguineo_transfusao = '$exsanguineo_transfusao',
            permanencia_hospitalar = '$permanencia_hospitalar',
            processos_cirurgicos2 = '$processos_cirurgicos2',
            obs = '$obs',
            periodo = '$periodo',
            frequencia = '$frequencia', 
            associacao_a_tipos_de_alimento = '$associacao_a_tipos_de_alimento',
            dificuldades = '$dificuldades',
            pulso = '$pulso',
            fr = '$fr',
            rtca1 = '$rtca1',
            reflexo_de_succao = '$reflexo_de_succao',
            reflexo_olhos_de_boneca = '$reflexo_olhos_de_boneca',
            reacao_de_moro = '$reacao_de_moro', 
            reflexo_de_preensao_palmar = '$reflexo_de_preensao_palmar',
            babinsk = '$babinsk',
            reflexo_de_apoio_plantar = '$reflexo_de_apoio_plantar',
            marcha_reflexa = '$marcha_reflexa',
            reacao_de_landau = '$reacao_de_landau', 
            galant = '$galant',
            glabelar = '$glabelar',
            rtca2 = '$rtca2', 
            reflexo_de_preensao_plantar =  '$reflexo_de_preensao_plantar',
            diagnostico_fisioterapico = '$diagnostico_fisioterapico'
            WHERE id = '$ultimo_id'");

?>
  <script type="text/javascript">
      $("#div1").addClass("d-none");
      $("#div2").addClass("d-none");
      $("#div3").removeClass("d-none");
  </script>

<?php }else if(isset($_POST['alimentacao'])){

       $ultimo_id = $_SESSION['ultimo_id'];


      $capacidades_limitacoes = $_POST['capacidades_limitacoes'];
      $escolaridade = $_POST['escolaridade'];
      $escolaridade_radio = $_POST['escolaridade_radio'];
      $alimentacao = $_POST['alimentacao'];
      $qualidade_sono = $_POST['qualidade_sono'];
      $avd = $_POST['avd'];
      $cervical = $_POST['cervical'];
      $tronco = $_POST['tronco'];
      $membros_superiores = $_POST['membros_superiores'];
      $membros_inferiores = $_POST['membros_inferiores'];
      $ortese = $_POST['ortese'];
      $movimentacao_passiva = $_POST['movimentacao_passiva'];
      $tonus_repouso = $_POST['tonus_repouso'];
      $tonus_movimento = $_POST['tonus_movimento'];
      $obs_tonus = $_POST['obs_tonus'];
      $escala_arshworth = $_POST['escala_arshworth'];
      $fisioterapia_conteudo = $_POST['fisioterapia_conteudo'];
      $exames_complementares = $_POST['exames_complementares'];
      $objetivos = $_POST['objetivos'];
      $plano_tratamento = $_POST['plano_tratamento'];
      $data = $_POST['data'];
      $evolucao = $_POST['evolucao'];
      $nome_medico = $_POST['nome_medico'];

      $data = date("d/m/Y");

      $resultado = mysqli_query($conexao, 
       "UPDATE indentificacao SET 
       capacidades_limitacoes = '$capacidades_limitacoes',  
       escolaridade = '$escolaridade', 
       escolaridade_radio = '$escolaridade_radio', 
       alimentacao = '$alimentacao',  
       qualidade_sono = '$qualidade_sono', 
       avd = '$avd',
       cervical = '$cervical', 
       tronco = '$tronco',  
       membros_superiores = '$membros_superiores',  
       membros_inferiores = '$membros_inferiores',
       ortese = '$ortese',
       movimentacao_passiva = '$movimentacao_passiva',  
       tonus_repouso = '$tonus_repouso', 
       tonus_movimento = '$tonus_movimento',
       obs_tonus = '$obs_tonus',
       escala_arshworth = '$escala_arshworth', 
       fisioterapia_conteudo = '$fisioterapia_conteudo', 
       exames_complementares = '$exames_complementares',
       objetivos = '$objetivos',
       plano_tratamento = '$plano_tratamento',
       data = '$data', 
       evolucao = '$evolucao',
       nome_medico = '$nome_medico' WHERE id = $ultimo_id");

  echo ("<script>
        window.alert('Cadastro finalizado')
        window.location.href='pacientes.php';
    </script>");

}  ?>

  </body>
</html>