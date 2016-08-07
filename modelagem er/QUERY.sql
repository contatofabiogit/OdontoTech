-- MySQL Script generated by MySQL Workbench
-- 07/29/16 22:23:02
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema u633496051_bd
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema u633496051_bd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `u633496051_bd` DEFAULT CHARACTER SET utf8 ;
USE `u633496051_bd` ;

-- -----------------------------------------------------
-- Table `u633496051_bd`.`nivel_acesso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`nivel_acesso` (
  `id_nivel_acesso` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NULL,
  PRIMARY KEY (`id_nivel_acesso`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`dentista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`dentista` (
  `id_dentista` INT NOT NULL AUTO_INCREMENT,
  `cro` VARCHAR(45) NULL,
  `especializacao` VARCHAR(250) NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_dentista`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`protuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`protuario` (
  `id_prontuario` INT NOT NULL AUTO_INCREMENT,
  `dt_cadastro` DATE NULL,
  `procedimento_id` INT NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_prontuario`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`info_pessoais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`info_pessoais` (
  `id_info_pessoais` INT NOT NULL AUTO_INCREMENT,
  `nacionalidade` VARCHAR(150) NULL,
  `est_civil` VARCHAR(45) NULL,
  `dt_nascimento` DATE NULL,
  `local_nascimento` VARCHAR(250) NULL,
  `celular` VARCHAR(45) NULL,
  `profissao` VARCHAR(250) NULL,
  `responsavel` VARCHAR(250) NULL,
  `tel_responsavel` VARCHAR(100) NULL,
  `profissao_responsavel` VARCHAR(250) NULL,
  `doc_anexados` VARCHAR(250) NULL,
  `dt_doc_anexados` DATE NULL,
  `forma_pagamento` VARCHAR(150) NULL,
  `valor` DOUBLE NULL,
  `dt_pagamento` DATE NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_info_pessoais`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`anamnese`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`anamnese` (
  `id_anamnese` INT NOT NULL AUTO_INCREMENT,
  `questao_1` VARCHAR(250) NULL,
  `questao_2` VARCHAR(250) NULL,
  `questao_3` VARCHAR(250) NULL,
  `questao_4` VARCHAR(250) NULL,
  `questao_5` VARCHAR(250) NULL,
  `questao_6` VARCHAR(250) NULL,
  `questao_7` VARCHAR(250) NULL,
  `info_add` VARCHAR(250) NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_anamnese`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`receita`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`receita` (
  `id_receita` INT NOT NULL AUTO_INCREMENT,
  `procedimento_id` INT NULL,
  `desconto` DOUBLE NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_receita`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`agenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`agenda` (
  `id_agenda` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NULL,
  `hora` TIME NULL,
  `procedimento_id` INT NULL,
  `pessoa_id` INT NULL,
  `pronntuario_id` INT NULL,
  PRIMARY KEY (`id_agenda`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`procedimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`procedimento` (
  `id_procedimento` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(150) NULL,
  `valor` VARCHAR(45) NULL,
  `descricao` VARCHAR(250) NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_procedimento`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`pessoa` (
  `id_pessoa` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NULL,
  `login` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `nm_residencial` VARCHAR(10) NULL,
  `nivel_acesso_id` INT NULL,
  PRIMARY KEY (`id_pessoa`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`tel_contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`tel_contato` (
  `id_tel_contato` INT NOT NULL AUTO_INCREMENT,
  `celular` VARCHAR(45) NULL,
  `residencial` VARCHAR(45) NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_tel_contato`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`logradouro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`logradouro` (
  `id_logradouro` INT NOT NULL AUTO_INCREMENT,
  `endereco` VARCHAR(250) NULL,
  `bairro` VARCHAR(250) NULL,
  `complemento` VARCHAR(250) NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_logradouro`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`p_fisica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`p_fisica` (
  `id_p_fisica` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(20) NULL,
  `rg` VARCHAR(20) NULL,
  `dt_nascimento` DATETIME NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_p_fisica`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


-- -----------------------------------------------------
-- Table `u633496051_bd`.`p_juridica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u633496051_bd`.`p_juridica` (
  `id_p_juridica` INT NOT NULL AUTO_INCREMENT,
  `cnpj` VARCHAR(45) NULL,
  `razao_social` VARCHAR(250) NULL,
  `pessoa_id` INT NULL,
  PRIMARY KEY (`id_p_juridica`))
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
