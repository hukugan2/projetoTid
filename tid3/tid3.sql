-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 04, 2020 alle 19:38
-- Versione del server: 10.4.8-MariaDB
-- Versione PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tid3`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `evolucao`
--

CREATE TABLE `evolucao` (
  `id_evolucao` int(11) NOT NULL,
  `evolucao` text NOT NULL,
  `data_evolucao` varchar(10) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `evolucao`
--

INSERT INTO `evolucao` (`id_evolucao`, `evolucao`, `data_evolucao`, `id_paciente`) VALUES
(1, 'fafvawvwafvwafawf', '03/06/2020', 19),
(2, 'awffaw', '04/06/2020', 19),
(3, 'eafawgaw', '04/06/2020', 19);

-- --------------------------------------------------------

--
-- Struttura della tabella `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome_funcionario` varchar(100) NOT NULL,
  `sexo_funcionario` varchar(15) NOT NULL,
  `telefone_funcionario` varchar(16) NOT NULL DEFAULT '',
  `cargo_funcionario` varchar(50) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `senha_funcionario` varchar(32) NOT NULL,
  `data_nascimento_funcionario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome_funcionario`, `sexo_funcionario`, `telefone_funcionario`, `cargo_funcionario`, `nome_usuario`, `senha_funcionario`, `data_nascimento_funcionario`) VALUES
(8, 'cjv', 'Masculino', 'vjvhkh', 'fjyfuyj', 'fxc', 'eea5c5a04c48fa542433c9927483c015', '04/06/2020');

-- --------------------------------------------------------

--
-- Struttura della tabella `indentificacao`
--

CREATE TABLE `indentificacao` (
  `id` int(11) NOT NULL,
  `nome_paciente` varchar(100) NOT NULL,
  `apelido_paciente` varchar(100) NOT NULL,
  `data_nascimento` varchar(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `nome_responsavel` varchar(100) NOT NULL,
  `parentesco` varchar(50) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `diagnostico_medico` text NOT NULL,
  `anaminese` text NOT NULL,
  `gpa` varchar(100) NOT NULL,
  `idade_gestacao` varchar(40) NOT NULL,
  `doencas_hereditarias` varchar(30) NOT NULL,
  `has_materna` varchar(30) NOT NULL,
  `doencas_cardio` varchar(30) NOT NULL,
  `infeccoes_cogenitas` varchar(30) NOT NULL,
  `partos_anteriores` varchar(30) NOT NULL,
  `aborto` varchar(30) NOT NULL,
  `texto_observacao` text NOT NULL,
  `ganho_peso_durante_gestao` varchar(50) NOT NULL,
  `infeccoes_cogenitas_2` varchar(50) NOT NULL,
  `uso_medicamentos` varchar(60) NOT NULL,
  `anormalidade_placentaria` varchar(30) NOT NULL,
  `traumatismos` varchar(30) NOT NULL,
  `has` varchar(30) NOT NULL,
  `hemorragias` varchar(30) NOT NULL,
  `pre_eclampsia` varchar(30) NOT NULL,
  `gestacao_multipla` varchar(30) NOT NULL,
  `tipo_parto` varchar(50) NOT NULL,
  `idade_gestacional` varchar(50) NOT NULL,
  `peso_nascimento` varchar(50) NOT NULL,
  `tamanho_nascer` varchar(50) NOT NULL,
  `apresentacao_fetal` varchar(30) NOT NULL,
  `trabalho_parto` varchar(30) NOT NULL,
  `tempo_bolsa` varchar(50) NOT NULL,
  `chorou` varchar(30) NOT NULL,
  `mal_formacoes` varchar(15) NOT NULL,
  `intubacao` varchar(15) NOT NULL,
  `medicacoes` varchar(16) NOT NULL,
  `processos_cirurgicos1` varchar(25) NOT NULL,
  `convulsoes` varchar(16) NOT NULL,
  `infeccoes` text NOT NULL,
  `vni` varchar(10) NOT NULL,
  `antibioticoterapia` varchar(25) NOT NULL,
  `desconforto_respiratorio` varchar(30) NOT NULL,
  `fototerapia` varchar(16) NOT NULL,
  `exsanguineo_transfusao` varchar(30) NOT NULL,
  `permanencia_hospitalar` varchar(30) NOT NULL,
  `processos_cirurgicos2` varchar(25) NOT NULL,
  `obs` text NOT NULL,
  `periodo` varchar(15) NOT NULL,
  `frequencia` varchar(15) NOT NULL,
  `associacao_a_tipos_de_alimento` text NOT NULL,
  `dificuldades` text NOT NULL,
  `pulso` varchar(10) NOT NULL,
  `fr` varchar(10) NOT NULL,
  `rtca1` varchar(30) NOT NULL,
  `reflexo_de_succao` varchar(30) NOT NULL,
  `reflexo_olhos_de_boneca` varchar(30) NOT NULL,
  `reacao_de_moro` varchar(30) NOT NULL,
  `reflexo_de_preensao_palmar` varchar(30) NOT NULL,
  `babinsk` varchar(30) NOT NULL,
  `reflexo_de_apoio_plantar` varchar(30) NOT NULL,
  `marcha_reflexa` varchar(30) NOT NULL,
  `reacao_de_landau` varchar(30) NOT NULL,
  `galant` varchar(30) NOT NULL,
  `glabelar` varchar(30) NOT NULL,
  `rtca2` varchar(30) NOT NULL,
  `reflexo_de_preensao_plantar` varchar(35) NOT NULL,
  `diagnostico_fisioterapico` text NOT NULL,
  `capacidades_limitacoes` text NOT NULL,
  `escolaridade` varchar(50) NOT NULL,
  `escolaridade_radio` varchar(50) NOT NULL,
  `alimentacao` varchar(200) NOT NULL,
  `qualidade_sono` varchar(200) NOT NULL,
  `avd` varchar(200) NOT NULL,
  `cervical` text NOT NULL,
  `tronco` text NOT NULL,
  `membros_superiores` text NOT NULL,
  `membros_inferiores` text NOT NULL,
  `ortese` text NOT NULL,
  `movimentacao_passiva` text NOT NULL,
  `tonus_repouso` varchar(200) NOT NULL,
  `tonus_movimento` varchar(200) NOT NULL,
  `obs_tonus` text NOT NULL,
  `escala_arshworth` varchar(200) NOT NULL,
  `fisioterapia_conteudo` text NOT NULL,
  `exames_complementares` text NOT NULL,
  `objetivos` text NOT NULL,
  `plano_tratamento` text NOT NULL,
  `data` varchar(15) NOT NULL,
  `evolucao` text NOT NULL,
  `nome_medico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `indentificacao`
--

INSERT INTO `indentificacao` (`id`, `nome_paciente`, `apelido_paciente`, `data_nascimento`, `sexo`, `nome_responsavel`, `parentesco`, `telefone`, `diagnostico_medico`, `anaminese`, `gpa`, `idade_gestacao`, `doencas_hereditarias`, `has_materna`, `doencas_cardio`, `infeccoes_cogenitas`, `partos_anteriores`, `aborto`, `texto_observacao`, `ganho_peso_durante_gestao`, `infeccoes_cogenitas_2`, `uso_medicamentos`, `anormalidade_placentaria`, `traumatismos`, `has`, `hemorragias`, `pre_eclampsia`, `gestacao_multipla`, `tipo_parto`, `idade_gestacional`, `peso_nascimento`, `tamanho_nascer`, `apresentacao_fetal`, `trabalho_parto`, `tempo_bolsa`, `chorou`, `mal_formacoes`, `intubacao`, `medicacoes`, `processos_cirurgicos1`, `convulsoes`, `infeccoes`, `vni`, `antibioticoterapia`, `desconforto_respiratorio`, `fototerapia`, `exsanguineo_transfusao`, `permanencia_hospitalar`, `processos_cirurgicos2`, `obs`, `periodo`, `frequencia`, `associacao_a_tipos_de_alimento`, `dificuldades`, `pulso`, `fr`, `rtca1`, `reflexo_de_succao`, `reflexo_olhos_de_boneca`, `reacao_de_moro`, `reflexo_de_preensao_palmar`, `babinsk`, `reflexo_de_apoio_plantar`, `marcha_reflexa`, `reacao_de_landau`, `galant`, `glabelar`, `rtca2`, `reflexo_de_preensao_plantar`, `diagnostico_fisioterapico`, `capacidades_limitacoes`, `escolaridade`, `escolaridade_radio`, `alimentacao`, `qualidade_sono`, `avd`, `cervical`, `tronco`, `membros_superiores`, `membros_inferiores`, `ortese`, `movimentacao_passiva`, `tonus_repouso`, `tonus_movimento`, `obs_tonus`, `escala_arshworth`, `fisioterapia_conteudo`, `exames_complementares`, `objetivos`, `plano_tratamento`, `data`, `evolucao`, `nome_medico`) VALUES
(19, 'teste', 'teste', '04/06/2020', 'Masculino', 'teste', 'Pai', 'teste', 'Teste', 'Teste', 'teste', 'teste', '', '', '', '', '', '', 'Teste', 'teste', 'teste', '', '', '', '', '', '', '', 'teste', 'teste', 'teste', 'teste', 'Nádegas', 'Prolongado (>24h/12h)', 'teste', 'Sim', '', '', '', '', '', '', '', '', '', '', '', '', '', 'fezfvae', 'gwafgaw', 'gwagawgw', 'gawg', 'gagwa', 'fawfga', 'fafw', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', ' wafawfawg', 'egsfgse', 'gafaw', 'Escola especial', 'afaw', ' khsefj', 'oselgbl', 'osdlgld', 'pgrisçngskl', 'pisgnikd', 'pfnilkd', 'pfdkn', 'pnkfnlkh', 'drhdf', 'hrfhd', 'rgsgsegse', 'Grau 0 = Sem aumento de tônus', 'gsdgsgs', 'gsegseggs', 'hsfgsegse', 'segsegsesegse', '04/06/2020', 'esesgesg', 'nome'),
(20, 'teste', 'teste', '04/06/2020', 'Masculino', 'teste', 'Pai', 'teste', 'Teste', 'Teste', 'teste', 'teste', '', '', '', '', '', '', 'Teste', 'teste', 'teste', '', '', '', '', '', '', '', 'teste', 'teste', 'teste', 'teste', 'Nádegas', 'Prolongado (>24h/12h)', 'teste', 'Sim', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cea', 'wa', 'gawg', 'awga', 'gwaga', 'gawgwa', 'w', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', '( + ) Padrão Normal/Presente', ' wdaw', 'dve', 'esgse', 'Escola especial', 'ges', 'gesg', 'gesg', 'esgse', 'gsegse', 'gseg', 'gesg', 'esgesg', 'gesfaef', 'fafaw', 'gwagaw', 'fwafawf', 'Grau 0 = Sem aumento de tônus', 'awgwafa', 'gawgwa', 'gwafwa', 'gawwagaw', '04/06/2020', 'gawgaw', 'cjv');

-- --------------------------------------------------------

--
-- Struttura della tabella `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nivel_acesso` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nivel_acesso`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 111999);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `evolucao`
--
ALTER TABLE `evolucao`
  ADD PRIMARY KEY (`id_evolucao`);

--
-- Indici per le tabelle `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `indentificacao`
--
ALTER TABLE `indentificacao`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `evolucao`
--
ALTER TABLE `evolucao`
  MODIFY `id_evolucao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `indentificacao`
--
ALTER TABLE `indentificacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la tabella `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
