-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 04-Fev-2014 às 07:36
-- Versão do servidor: 5.5.34-0ubuntu0.13.04.1
-- versão do PHP: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `questionbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `codPergunta` int(11) NOT NULL AUTO_INCREMENT,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `p6` int(3) NOT NULL,
  `p7` int(3) NOT NULL,
  `p8` int(3) NOT NULL,
  `p9` int(3) NOT NULL,
  `p10` int(3) NOT NULL,
  `p11` varchar(5) NOT NULL,
  `p12` varchar(255) NOT NULL,
  `p13` varchar(255) NOT NULL,
  `p14` varchar(255) NOT NULL,
  `p15` varchar(255) NOT NULL,
  `p16` varchar(255) NOT NULL,
  PRIMARY KEY (`codPergunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`codPergunta`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`) VALUES
(1, 2, 1, 0, 0, 1, 2, 2, 2, 2, 1, 'MB', 'Boa pesssoa', 'Boa pessoa', 'Rever oooo', 'Verificar oooo', 'Mudar ppppp'),
(2, 2, 2, 1, 1, 1, 0, 0, 2, 1, 1, 'I', 'PPPPPPP', 'XXXXXX', 'RRRRRRR', 'TTTTTTT', 'MMMMMMM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `codProf` int(2) NOT NULL DEFAULT '0',
  `nomeProfessor` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`codProf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`codProf`, `nomeProfessor`) VALUES
(2, 'Professor Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario`
--

CREATE TABLE IF NOT EXISTS `questionario` (
  `codQuestionario` int(11) NOT NULL AUTO_INCREMENT,
  `codProfessor` int(11) NOT NULL,
  `codPergunta` int(11) NOT NULL,
  PRIMARY KEY (`codQuestionario`),
  KEY `codProfessor` (`codProfessor`),
  KEY `codPergunta` (`codPergunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `questionario`
--

INSERT INTO `questionario` (`codQuestionario`, `codProfessor`, `codPergunta`) VALUES
(1, 2, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`codUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codUsuario`, `login`, `senha`) VALUES
(1, 'luan', '123');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `questionario`
--
ALTER TABLE `questionario`
  ADD CONSTRAINT `questionario_ibfk_1` FOREIGN KEY (`codProfessor`) REFERENCES `professores` (`codProf`),
  ADD CONSTRAINT `questionario_ibfk_2` FOREIGN KEY (`codProfessor`) REFERENCES `professores` (`codProf`),
  ADD CONSTRAINT `questionario_ibfk_3` FOREIGN KEY (`codPergunta`) REFERENCES `perguntas` (`codPergunta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
