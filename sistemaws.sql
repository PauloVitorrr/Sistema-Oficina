-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Fev 07, 2020 as 05:04 PM
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sistemaws`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado`
--

CREATE TABLE IF NOT EXISTS `chamado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(50) NOT NULL,
  `telefone` int(15) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `descricao_aparelho` varchar(80) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `relatorio_defeito` varchar(100) NOT NULL,
  `garantia` varchar(15) NOT NULL,
  `data_atendimento` date NOT NULL,
  `date_entrega` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `chamado`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `dataservico`
--

CREATE TABLE IF NOT EXISTS `dataservico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` int(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `nome_tecnico` varchar(50) NOT NULL,
  `cpf_tecnico` varchar(20) NOT NULL,
  `descricao_servico` varchar(50) NOT NULL,
  `data_servico` date NOT NULL,
  `valor_servico` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `dataservico`
--

