<?php 
	include_once("conexao.php");
	session_start();
	/* Controlar abas*/
	if(!isset($_SESSION['control_aba'])){
		$_SESSION['control_aba'] = 0;
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Criar pagina com abas</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container theme-showcase" role="main">
			<div>

			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" <?php if($_SESSION['control_aba'] == 0){ echo "class='active'"; } ?> >
					<a href="#dados_pessoais" aria-controls="home" role="tab" data-toggle="tab">INDENTIFICAÇÃO</a>
				</li>
				
				<li role="presentation" <?php if($_SESSION['control_aba'] == 1){ echo "class='active'"; } ?> >
					<?php if(isset($_SESSION['ultimo_id_usuario'])){
						?><a href="#dados_de_acesso" aria-controls="dados_de_acesso" role="tab" data-toggle="tab"><?php
					}else{
						?><a href="#" aria-controls="dados_de_acesso" role="tab" data-toggle="tab"><?php
					}?>					
						INTERCORRÊNCIAS E INTERVENÇÕES NEONATAIS
					</a>
				</li>
				<li role="presentation" <?php if($_SESSION['control_aba'] == 2){ echo "class='active'"; } ?> ><a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab">
				AVALIAÇÃO FUNCIONAL E COGNITIVA
				</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" 
					<?php if($_SESSION['control_aba'] == 0){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?> class="" id="dados_pessoais">
					<div style="padding-top:20px;">
						<form class="form-horizontal" method="POST" action="testa_dados.php">
							<div>
								<h4>Indentificação</h4>
							</div>
							<div class="row">
								<div class="col-md-8 py-2">
									<label>Nome</label>
									<input type="text" name="nome_paciente" class="form-control" placeholder="Nome da Criança">
								</div>
								<div class="col-md-4 py-2">
									<label>Apelido</label>
									<input type="text" name="apelido_paciente" class="form-control" placeholder="Apelido">
								</div>
								<div class="col-md-3 py-2">
									<label>Data de Nascimento</label>
									<input type="date" name="data_nascimento" class="form-control">
								</div>
								<div class="col-md-3 py-2">
									<label>Sexo</label><br>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="sexo" value="Masculino">
										<label class="form-check-label">Masculino</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="sexo" value="Feminino">
										<label class="form-check-label">Feminino</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 py-2">
									<label>Nome do Responsável</label>
									<input type="text" class="form-control" name="nome_responsavel" placeholder="Ex: João Oliveira">
								</div>
								<div class="col-md-3 py-2">
									<label>Parentesco</label>
									<select class="form-control" name="parentesco">
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
									<input type="text" class="form-control" name="telefone" placeholder="(00) 00000-0000">
								</div>
								<div class="col-md-12 py-3">
									<label for="exampleFormControlTextarea1">Diagnóstico Médico</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" name="diagnostico_medico" rows="3"></textarea>    
								</div>
							</div>
							<div>
								<h4>ANAMINESE</h4>
							</div>
							<div class="row">
								<div class="col-md-12 py-2">
									<label for="exampleFormControlTextarea1"></label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="anaminese"></textarea>    
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 py-2">
									<label>GPA</label>
									<input type="text" name="gpa" class="form-control" placeholder="">
								</div>
								<div class="col-md-4 py-2">
									<label>Idade Materna na Gestação:</label>
									<input type="text" name="idade_gestacao" class="form-control" placeholder="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pt-4">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="doencas_hereditarias" id="inlineRadio1" value="Doenças hereditárias">
										<label class="form-check-label">Doenças hereditárias</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="has_materna" id="inlineRadio2" value="HAS Materna">
										<label class="form-check-label">HAS Materna</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="doencas_cardio" id="inlineRadio3" value="Doenças Cardiopulmonares">
										<label class="form-check-label">Doenças Cardiopulmonares</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="infeccoes_cogenitas" id="inlineRadio4" value="Infecções Congênitas">
										<label class="form-check-label">Infecções Congênitas</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="partos_anteriores" id="inlineRadio5" value="Partos anteriores demorados">
										<label class="form-check-label">Partos anteriores demorados</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="aborto" id="inlineRadio6" value="Aborto">
										<label class="form-check-label">Aborto</label>
									</div>
								</div>
								<div class="col-md-12">
									<label for="exampleFormControlTextarea1"><b>OBS:</b></label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texto_observacao"></textarea>    
								</div> 
							</div>

							<div class="row py-3">
								<h4 class="ml-3">HISTÓRIA GESTACIONAL</h4>
							</div>

							<div class="row">
								<div class="col-md-4">
									<label>Ganho de peso durante a gestação:</label>
									<input type="text" class="form-control" name="ganho_peso_durante_gestao" placeholder="">
								</div>
								<div class="col-md-4">
									<div class="custom-control custom-checkbox my-1 mr-sm-2">
										<label class="custom-control-label" for="customControlInline">Infecções Cogênitas</label>
									</div>
									<input type="text" class="form-control" placeholder="" name="infeccoes_cogenitas_2">     
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
									<input type="text" class="form-control" name="tipo_parto" placeholder="">
								</div>

								<div class="col-md-3">
									<label>Idade gestacional:</label>
									<input type="text" class="form-control" name="idade_gestacional" placeholder="">
								</div>
								<div class="col-md-3">
									<label>Peso ao nascer:</label>
									<input type="text" class="form-control" name="peso_nascimento" placeholder="">
								</div>
								<div class="col-md-3">
									<label>Tamanho ao nascer:</label>
									<input type="text" class="form-control" name="tamanho_nascer" placeholder="">
								</div>

							</div>

							<div class="row py-3">
								<h4 class="ml-3">Apresentação fetal:</h4>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio3" value="Cefálica">
										<label class="form-check-label">Cefálica</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio4" value="Nádegas">
										<label class="form-check-label">Nádegas </label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio5" value="Face">
										<label class="form-check-label">Face</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio6" value="Ombro">
										<label class="form-check-label">Ombro</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="apresentacao_fetal" id="inlineRadio7" value="Transversal">
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
										<input class="form-check-input" type="radio" name="trabalho_parto" id="inlineRadio3" value="Prolongado (>24h/12h)">
										<label class="form-check-label" for="inlineRadio3">Prolongado (>24h/12h)</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="trabalho_parto" id="inlineRadio4" value="Precipitado (<3h)">
										<label class="form-check-label" for="inlineRadio4">Precipitado (<3h) </label>
									</div>
								</div>

							</div>

							<div class="row py-3">
								<h4 class="ml-3">Tempo de bolsa rota (entre romper a bolsa e a criança nascer)</h4>
							</div>

							<div class="row">

								<div class="col-md-3">
									<input type="text" class="form-control" name="tempo_bolsa" placeholder="">
								</div>

							</div>

							<div class="row pt-3">
								<h4 class="ml-3">Chorou ao nascer</h4>
							</div>

							<div class="row">
								<div class="col-md-12 form-inline">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="chorou" id="inlineRadio3" value="Sim">
										<label class="form-check-label" for="inlineRadio3">Sim</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="chorou" id="inlineRadio4" value="Não">
										<label class="form-check-label" for="inlineRadio4">Não </label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success">Cadastrar</button>
							</div>

						</form>
					</div>
				</div>
				<div role="tabpanel"  
					<?php if($_SESSION['control_aba'] == 1){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?>  id="dados_de_acesso">
					<div style="padding-top:20px;">
					 <form class="form-horizontal" method="POST" action="testa_dados2.php">
                              <div class="container">
   <div class="row">
    <div class="col-md-12 py-2">

    <h3 class="text-center">Avaliação Fisioterapêutica Pediátrica</h3>
    
  </div>
  </div>
<div class="container">

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
        <label class="form-check-label" for="inlineCheckbox1">Exsanguineo transfusão</label>

      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" value="Permanência Hospitalar" type="checkbox"  name="permanencia_hospitalar">
        <label class="form-check-label" for="inlineCheckbox1">Permanência Hospitalar</label>

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
    <textarea class="form-control" name="obs" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>
</div>
<div>
  <h4>AMAMENTAÇÃO</h4>
</div>
<div class="row">
  <div class="col-md-8 py-2">
    <label>Período:</label>
    <input type="text" class="form-control" name="periodo" placeholder="">
  </div>
  <div class="col-md-4 py-2">
    <label>Frequência:</label>
    <input type="text" class="form-control" name="frequencia" placeholder="">
  </div>
</div>

<div class="row">
  <label class="ml-3">Associação a outros tipos de alimento? Quais?</label>
  <div class="col-md-12 py-2">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" name="associacao_a_tipos_de_alimento" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>
</div>
<div class="row">
   <label class="ml-3">Dificuldades:</label>
    <div class="col-md-12 py-2">
      <label for="exampleFormControlTextarea1"></label>
      <textarea class="form-control" name="dificuldades" id="exampleFormControlTextarea1" rows="3"></textarea>    
    </div>
</div>



<div class="row py-3">
  <h4 class="ml-3">SINAIS VITAIS</h4>
</div>

<div class="row">
  <div class="col-md-3">
    <label>Pulso:</label>
    <input type="text" class="form-control" name="pulso" placeholder="">
  </div>

  <div class="col-md-3">
    <label>FR:</label>
    <input type="text" class="form-control"  name="fr" placeholder="">
  </div>
  
</div>
<br>
<table class="table" style="border: 1px solid; border-color: #fff; ">
  <thead>
    <tr>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">RTCA</th>
      <td><input class="form-check-input" type="radio" name="rtca1" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="rtca1" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>

          <td><input class="form-check-input" type="radio" name="rtca1" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>
    <tr>
      <th scope="row">Reflexo de Sucção</th>
      <td><input class="form-check-input" type="radio" name="reflexo_de_succao" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="reflexo_de_succao" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="reflexo_de_succao" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>
    <tr>
      <th scope="row">Reflexo “Olhos de Boneca</th>
      <td><input class="form-check-input" type="radio" name="reflexo_olhos_de_boneca" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio"  name="reflexo_olhos_de_boneca" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio"  name="reflexo_olhos_de_boneca" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>

    <tr>
      <th scope="row">Reação de Moro</th>
      <td><input class="form-check-input" type="radio" name="reacao_de_moro" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="reacao_de_moro" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="reacao_de_moro" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>

    <tr>
      <th scope="row">Reflexo de Preensão palmar</th>
      <td><input class="form-check-input" type="radio" name="reflexo_de_preensao_palmar" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="reflexo_de_preensao_palmar" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="reflexo_de_preensao_palmar" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>

     <tr>
      <th scope="row">Babinsk</th>
      <td><input class="form-check-input" type="radio" name="babinsk" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="babinsk" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="babinsk" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>
     <tr>
      <th scope="row">Reflexo de apoio plantar</th>
      <td><input class="form-check-input" type="radio" name="reflexo_de_apoio_plantar" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="reflexo_de_apoio_plantar" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="reflexo_de_apoio_plantar" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>

     <tr>
      <th scope="row">Marcha reflexa</th>
      <td><input class="form-check-input" type="radio" name="marcha_reflexa" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="marcha_reflexa" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="marcha_reflexa" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>

     <tr>
      <th scope="row">Reação de Landau</th>
      <td><input class="form-check-input" type="radio" name="reacao_de_landau" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="reacao_de_landau" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="reacao_de_landau" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>
     <tr>
      <th scope="row">Galant</th>
      <td><input class="form-check-input" type="radio" name="galant" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="galant" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio"name="galant" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>
     <tr>
      <th scope="row">Glabelar</th>
      <td><input class="form-check-input" type="radio" name="glabelar" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="glabelar" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="glabelar" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>

     <tr>
      <th scope="row">RTCA</th>
      <td><input class="form-check-input" type="radio" name="rtca2" id="inlineRadio3" value="( + ) Padrão Normal/Presente">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="rtca2" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="rtca2" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>
    <tr>
      <th scope="row">Reflexo de preensão plantar</th>
      <td><input class="form-check-input" type="radio" name="reflexo_de_preensao_plantar" id="inlineRadio3" value="( + ) Padrão Normal/Presentes">
      <label class="form-check-label" for="inlineRadio3">( + ) Padrão Normal/Presente</label></td>

      <td><input class="form-check-input" type="radio" name="reflexo_de_preensao_plantar" id="inlineRadio3" value="( - ) Padrão Ausente">
      <label class="form-check-label" for="inlineRadio3">( - ) Padrão Ausente</label></td>
      
          <td><input class="form-check-input" type="radio" name="reflexo_de_preensao_plantar" id="inlineRadio3" value="( N ) Não observado">
      <label class="form-check-label" for="inlineRadio3">( N ) Não observado</label></td>
    </tr>
  </tbody>
</table>




<div class="row py-3">
  <h4 class="ml-3">DIAGNÓSTICO FISIOTERÁPICO:</h4>
</div>
<div class="row">
  <div class="col-md-12 py-0">
    
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" name="diagnostico_fisioterapico" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>
</div>
<div class="row py-3">
  <div class="col-md-12 py-2">
<button type="button" class="btn btn-primary">Voltar</button>
<button type="button" class="btn btn-primary">Proximo</button>
</div>
</div>
</div>
</div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
				<div role="tabpanel"  
					<?php if($_SESSION['control_aba'] == 2){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?> id="messages">
					<div style="padding-top:20px;">
					 <form class="form-horizontal"  action="" method="POST" action="testa_dados3.php">
                           <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="container">
   <div class="row">
     <div class="col-md-12 my-3">
      <h2 class="text-center">Avaliação Fisioterapêutica Pediátrica</h2>
    </div>
  </div>

<div class="container">

  <div>
    <h4>AVALIAÇÃO FUNCIONAL E COGNITIVA:</h4>
  </div>
  <a>Capacidades/ Limitações:</a>
  <div class="row">
   <div class="col-md-12 py-2">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
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
    <input type="text" class="form-control" placeholder="">

  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="inlineCheckbox1" name="Sexo" value="option1">
    <label class="form-check-label" for="inlineCheckbox1">Escola especial</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="inlineCheckbox1" name="Sexo" value="option1">
    <label class="form-check-label" for="inlineCheckbox1">Escola regular</label>
  </div>
  
</div>

<div class="row py-3">
  <div class="col-md-4">
    <label>Alimentação (qualidade/independência)</label>
    <input type="text" class="form-control" placeholder="">
  </div>
  <div class="col-md-4">
    <label>Qualidade do sono (dorme bem?, com quem?)</label>
    <input type="text" class="form-control" placeholder="">
  </div>
  <div class="col-md-4">
    <label>AVD’S (qualidade/independência)</label>
    <input type="text" class="form-control" placeholder="">
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
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>
  <div class="col-md-12 py-2">
    <label>Tronco:</label>
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>
  <div class="col-md-12 py-2">
    <label>Membros Superiores:</label>
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>
  <div class="col-md-12 py-2">
    <label>Membros Inferiores:</label>
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>
  <div class="col-md-12 py-2">
    <label>Uso de Ortese?</label>
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>
  <div class="col-md-12 py-2">
    <label>Movimentação passiva (ADM):</label>
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>
</div>

<div class="row py-3">
  <h4 class="ml-3">Tônus:</h4>
</div>

<div class="row">
  <div class="col-md-6">
    <label>Tônus de repouso</label>
    <input type="text" class="form-control" placeholder="">
  </div>
  <div class="col-md-6">
    <label>Tônus de movimento</label>
    <input type="text" class="form-control" placeholder="">
  </div>
</div>

<br>

<div class="row">
  <div class="col-md-12 py-2">
    <h4 >OBS:</h4>
  </div>
  
  <div class="col-md-12">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
  </div>

  <div class="col-md-4 py-2">
    <label>ESCALA DE ARSHWORTH (modificada)</label>
    <select class="form-control">
      <option>Grau 0 = Sem aumento de tônus</option>
      <option>Grau 1 = Leve aumento de tônus no começo ou final do movimento</option>
      <option>Grau 1 = Leve aumento de tônus na metade do arco do movimento</option>
      <option>Grau 2 = Aumento de tônus em toda ADM</option>
      <option>Grau 3 = Aumento considerável de tônus e movimentação passiva difícil</option>
      <option>Grau 4 = Deformidade, rigidamente acometido em flexão, extensão, abdução ou adução</option>
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
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
</div>
</div>

<div class="row py-3">
  <h4 class="ml-3">EXAMES COMPLEMENTARES</h4>
 <div class="col-md-12 py-0">
  <label for="exampleFormControlTextarea1"></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
</div>
</div>

<div class="row py-3">
  <h4 class="ml-3">OBJETIVOS:</h4>
 <div class="col-md-12 py-0">
  <label for="exampleFormControlTextarea1"></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
</div>
</div>

<div class="row py-3">
  <h4 class="ml-3">PLANO DE TRATAMENTO</h4>
 <div class="col-md-12 py-0">
  <label for="exampleFormControlTextarea1"></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
</div>

<div class="col-md-3 py-2">
        <label>Data:</label>
        <input type="date" class="form-control">
      </div>
</div>

<div class="row py-3">
  <h4 class="ml-3">Evolução</h4>
 <div class="col-md-12 py-0">
  <label for="exampleFormControlTextarea1"></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>    
</div>

<div class="row py-3">
  <div class="col-md-12 py-2">
<button type="button" class="btn btn-primary">Voltar</button>
<button type="button" class="btn btn-primary">Salvar</button>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>