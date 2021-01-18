-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Abr 19, 2010 as 04:06 PM
-- Versão do Servidor: 5.0.51
-- Versão do PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `bdcolunista`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `colunistas`
--

CREATE TABLE IF NOT EXISTS `colunistas` (
  `ID` int(3) NOT NULL auto_increment,
  `NOME` varchar(60) NOT NULL default '',
  `ASSUNTO` varchar(60) NOT NULL default '',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `colunistas`
--

INSERT INTO `colunistas` (`ID`, `NOME`, `ASSUNTO`) VALUES
("3", "Sql Server", "Mauro Pichiliani"),
("4", "Photoshop", "Fábio Lody"),
("5", "Mobile", "Cristiano Trindade"),
("6", "Corel", "Alex Falcão"),
("7", "3ds Max", "Guilherme Pinheiro"),
("8", "B. Intelligence", "Michel Souza"),
("9", "JavaScript", "Thiago Prado"),
("10", "JDeveloper", "Eduardo Santana"),
("11", "Desenho Vetorial", "Erika Pessanha"),
("12", "Dreamweaver", "Marcelo Oliveira"),
("13", "Segurança", "Alexandre Freire"),
("14", "Fireworks", "Leonardo César"),
("15", "Cisco Systems", "Thiago Dias"),
("16", "Certificações", "Paulo R. Cardoso"),
("17", "Oracle", "Rodrigo Almeida"),
("18", "CSS", "Mauricio Samy"),
("19", "Visual FoxPro", "Nilton Paulino"),
("20", "Delphi", "Daniel Nascimento"),
("21", "Java", "Almedson Ferreira"),
("22", "Redes", "Renato Amadeu"),
("23", "Zope", "Daniel Schmitz"),
("24", "ColdFusion", "Wender Lima"),
("25", "C#", "Caio Azevedo");