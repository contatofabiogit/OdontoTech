-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Out-2016 às 01:52
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `odontotech_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `procedimento_id` int(11) NOT NULL,
  `dentista_id_dentista` int(11) NOT NULL,
  `pessoa_id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id_agenda`,`procedimento_id`,`dentista_id_dentista`,`pessoa_id_pessoa`),
  KEY `fk_agenda_procedimento1_idx` (`procedimento_id`),
  KEY `fk_agenda_dentista1_idx` (`dentista_id_dentista`),
  KEY `fk_agenda_pessoa1_idx` (`pessoa_id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnese`
--

CREATE TABLE IF NOT EXISTS `anamnese` (
  `id_anamnese` int(11) NOT NULL AUTO_INCREMENT,
  `questao_1` varchar(250) NOT NULL,
  `questao_2` varchar(250) NOT NULL,
  `questao_3` varchar(250) NOT NULL,
  `questao_4` varchar(250) NOT NULL,
  `questao_5` varchar(250) NOT NULL,
  `questao_6` varchar(250) NOT NULL,
  `questao_7` varchar(250) NOT NULL,
  `info_add` varchar(250) NOT NULL,
  `paciente_id_paciente` int(11) NOT NULL,
  PRIMARY KEY (`id_anamnese`,`paciente_id_paciente`),
  KEY `fk_anamnese_paciente1_idx` (`paciente_id_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista`
--

CREATE TABLE IF NOT EXISTS `dentista` (
  `id_dentista` int(11) NOT NULL AUTO_INCREMENT,
  `cro` varchar(45) NOT NULL,
  `especializacao` varchar(250) NOT NULL,
  `pessoa_id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id_dentista`,`pessoa_id_pessoa`),
  KEY `fk_dentista_pessoa_idx` (`pessoa_id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `dentista`
--

INSERT INTO `dentista` (`id_dentista`, `cro`, `especializacao`, `pessoa_id_pessoa`) VALUES
(16, '12345', 'CirurgiÃ£o Dentista', 36),
(17, '12345', 'CirurgiÃ£o Dentista', 37);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nacionalidade` varchar(150) NOT NULL,
  `est_civil` varchar(45) NOT NULL,
  `local_nascimento` varchar(250) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `profissao` varchar(250) NOT NULL,
  `nome_responsavel` varchar(250) NOT NULL,
  `tel_responsavel` varchar(100) NOT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `bairro` varchar(250) DEFAULT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(15) NOT NULL,
  `numero` varchar(11) NOT NULL,
  `pessoa_id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id_paciente`,`pessoa_id_pessoa`),
  KEY `fk_paciente_pessoa1_idx` (`pessoa_id_pessoa`),
  KEY `fk_estado_id_estado_idx` (`estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nacionalidade`, `est_civil`, `local_nascimento`, `celular`, `profissao`, `nome_responsavel`, `tel_responsavel`, `endereco`, `bairro`, `complemento`, `cidade`, `estado`, `numero`, `pessoa_id_pessoa`) VALUES
(7, 'Brasileira', 'Solteiro(a)', 'Cedro', '99 99999-9999', 'Estudante', 'Maria Luzanira Santos Lima', '99 99999-9999', 'Rosita Afonso AraÃºjo', 'Jardim', 'Casa', 'Cedro', 'ce', '90', 38),
(8, 'Brasileiro', 'Casado(a)', 'Iguatu', '99 99999-9999', 'AutÃ´nomo', 'Francisca Ribeiro de Souza', '99 99999-9999', 'Rua 7 de Setembro', 'MorenÃ£o', 'Casa', 'Iguatu', 'ce', '326', 39);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `rg` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `dt_nascimento` date NOT NULL,
  `telefone` varchar(150) DEFAULT NULL,
  `nivel_acesso` varchar(45) NOT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `login`, `senha`, `email`, `rg`, `cpf`, `sexo`, `dt_nascimento`, `telefone`, `nivel_acesso`) VALUES
(36, 'FÃ¡bio Alves Ribeiro', 'fabio', '123', 'fabio@fabio.com', '9999999999-9', '061.241.133-84', 'M', '2016-12-30', '99 99999-9999', 'Dentista'),
(37, 'Dr. Yule GalvÃ£o', 'yule', '123', 'yule@teste.com', '9999999999-9', '508.210.266-40', 'M', '1989-09-09', '99 99999-9999', 'Dentista'),
(38, 'Maria Eliza Santos Lima', 'eliza', '123', 'eliza.santos@teste.com', '9999999999-9', '508.210.266-40', 'F', '0000-00-00', '99 99999-9999', 'Paciente'),
(39, 'Francisco Ribeiro de Souza', 'ribeiro', '123', 'ribeiro@teste.com', '9999999999-9', '508.210.266-40', 'M', '1954-12-31', '99 99999-9999', 'Paciente'),
(40, 'Hiarly Ferreira de Souza', 'hiarly', '123', 'hiarly@teste.com', '9999999999-9', '508.210.266-40', 'M', '1995-12-31', '99 99999-9999', 'Assistente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimento`
--

CREATE TABLE IF NOT EXISTS `procedimento` (
  `id_procedimento` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(150) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `protuario_id_prontuario` int(11) NOT NULL,
  PRIMARY KEY (`id_procedimento`,`protuario_id_prontuario`),
  KEY `fk_procedimento_protuario1_idx` (`protuario_id_prontuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE IF NOT EXISTS `prontuario` (
  `id_prontuario` int(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` date NOT NULL,
  `paciente_id_paciente` int(11) NOT NULL,
  PRIMARY KEY (`id_prontuario`,`paciente_id_paciente`),
  KEY `fk_protuario_paciente1_idx` (`paciente_id_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE IF NOT EXISTS `receita` (
  `id_receita` int(11) NOT NULL AUTO_INCREMENT,
  `desconto` double NOT NULL,
  `dt_pagamento` date NOT NULL,
  `procedimento_id_procedimento` int(11) NOT NULL,
  `pessoa_id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id_receita`,`procedimento_id_procedimento`,`pessoa_id_pessoa`),
  KEY `fk_receita_procedimento1_idx` (`procedimento_id_procedimento`),
  KEY `fk_receita_pessoa1_idx` (`pessoa_id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_agenda_dentista1` FOREIGN KEY (`dentista_id_dentista`) REFERENCES `dentista` (`id_dentista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agenda_pessoa1` FOREIGN KEY (`pessoa_id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agenda_procedimento1` FOREIGN KEY (`procedimento_id`) REFERENCES `procedimento` (`id_procedimento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `anamnese`
--
ALTER TABLE `anamnese`
  ADD CONSTRAINT `fk_anamnese_paciente1` FOREIGN KEY (`paciente_id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `dentista`
--
ALTER TABLE `dentista`
  ADD CONSTRAINT `fk_dentista_pessoa` FOREIGN KEY (`pessoa_id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_paciente_pessoa1` FOREIGN KEY (`pessoa_id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `procedimento`
--
ALTER TABLE `procedimento`
  ADD CONSTRAINT `fk_procedimento_protuario1` FOREIGN KEY (`protuario_id_prontuario`) REFERENCES `prontuario` (`id_prontuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `prontuario`
--
ALTER TABLE `prontuario`
  ADD CONSTRAINT `fk_protuario_paciente1` FOREIGN KEY (`paciente_id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `receita`
--
ALTER TABLE `receita`
  ADD CONSTRAINT `fk_receita_pessoa1` FOREIGN KEY (`pessoa_id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_receita_procedimento1` FOREIGN KEY (`procedimento_id_procedimento`) REFERENCES `procedimento` (`id_procedimento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
