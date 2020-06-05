<?php
include_once("conexao.php");

$id_paciente = $_POST['id_paciente'];

$nome_paciente = $_POST['nome_paciente'];
$apelido_paciente = $_POST['apelido_paciente'];
$data_nascimento = $_POST['data_nascimento'];
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
}else{  $partos_anteriores = $_POST['partos_anteriores']; }

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

if(empty($_POST['permanencia_hospitalar'])){ $permanencia_hospitalar = "";
}else{ $permanencia_hospitalar = $_POST['permanencia_hospitalar']; }

if(empty($_POST['exsanguineo_transfusao'])){ $exsanguineo_transfusao = "";
}else{ $exsanguineo_transfusao = $_POST['exsanguineo_transfusao']; }

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
$capacidades_limitacoes = $_POST['capacidades_limitacoes'];
$escolaridade = $_POST['escolaridade'];
$escolridade_radio = $_POST['escolridade_radio'];
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

$resultado = mysqli_query($conexao, "UPDATE indentificacao SET 
	nome_paciente = '$nome_paciente', 
	apelido_paciente = '$apelido_paciente', 
	data_nascimento = '$data_nascimento', 
	sexo = '$sexo', 
	nome_responsavel = '$nome_responsavel', 
	parentesco = '$parentesco', 
	telefone = '$telefone', 
	diagnostico_medico = '$diagnostico_medico', 
	anaminese = '$anaminese', 
	gpa = '$gpa', 
	idade_gestacao = '$idade_gestacao', 
	doencas_hereditarias = '$doencas_hereditarias',
	has_materna = '$has_materna', 
	doencas_cardio = '$doencas_cardio', 
	infeccoes_cogenitas = '$infeccoes_cogenitas', 
	partos_anteriores = '$partos_anteriores', 
	aborto = '$aborto', 
	texto_observacao = '$texto_observacao', 
	ganho_peso_durante_gestao = '$ganho_peso_durante_gestao',
	infeccoes_cogenitas_2 = '$infeccoes_cogenitas_2',
	uso_medicamentos = '$uso_medicamentos', 
	anormalidade_placentaria = '$anormalidade_placentaria',
	traumatismos = '$traumatismos', 
	has = '$has', 
	hemorragias = '$hemorragias', 
	pre_eclampsia = '$pre_eclampsia', 
	gestacao_multipla = '$gestacao_multipla', 
	tipo_parto = '$tipo_parto', 
	idade_gestacional = '$idade_gestacional', 
	peso_nascimento = '$peso_nascimento', 
	tamanho_nascer = '$tamanho_nascer', 
	apresentacao_fetal = '$apresentacao_fetal', 
	trabalho_parto  = '$trabalho_parto',
	tempo_bolsa = '$tempo_bolsa',
	chorou = '$chorou',
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
	reflexo_de_preensao_plantar = '$reflexo_de_preensao_plantar',
	diagnostico_fisioterapico = '$diagnostico_fisioterapico',
	capacidades_limitacoes = '$capacidades_limitacoes',
	escolaridade = '$escolaridade',
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
	evolucao = '$evolucao'
WHERE id = $id_paciente");

if($resultado == 1){
    echo ("<script>
        window.alert('Paciente editado!')
     	window.location.href='pacientes.php'
    </script>");
} else {
   echo ("<script>
        window.alert('Não foi possível editar o paciente!')
        window.location.href='pacientes.php'
    </script>");
} 

?>