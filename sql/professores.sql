-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2020 às 06:58
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `professores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `materia` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sexo` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `materia`, `email`, `sexo`) VALUES
(1, 'Regina Lucia de Oliveira Matias', 'Física', 'reginamatias32@hotmail.com', 'Fe'),
(2, 'José André Penaforte Rodrigues', 'Biologia', 'andre.p.penaforte@gmail.com', 'Ma'),
(3, 'José Roberto da Silva', 'História', 'josefranciscano@hotmai.com', 'Ma'),
(4, 'Vilcelania Alves Costa', 'Geografia', 'vilcelaniaalves@hotmaip.com', 'Fe'),
(5, 'Sara Louise Aquino Almeida Peixoto', 'Filosofia', 'saralouisepeixoto@gmail.com', 'Fe'),
(6, 'Gloria Cristiana de Oliveira Morais', 'Sociologia', 'gloricomorais@bol.com.br', 'Fe'),
(7, 'Tiaggo Miranda', 'Artes', 'tiaggo.miranda.hotmail.com', 'Ma'),
(8, 'Hallysson Henrique Fagundes Duarte', 'Ciência da Computação', 'hallyssonduarte@gmail.com', 'Ma'),
(9, 'Rocelito Fernandes Soares', 'Educação Física', 'celitofernandes@hotmail.com', 'Ma'),
(10, 'José Cláudio de Fariass', 'Geografia', 'gclaudio1511@gmail.com', 'Ma'),
(11, 'Tiago Gleidson de Lima Barra', 'Língua Portuguesa', 'tiagogleidson@hotmail.com', 'Ma'),
(12, 'Antonio Edmar de Palharess', 'Matemática', 'edpalh@hotmail.com', 'Ma'),
(13, 'Mansinho Veríssimo', 'Matemática', 'jrmansinhojr@gmail.com', 'Ma'),
(14, 'Lenilton Maia de Lima', 'Língua Portuguesa', 'leniltonml@hotmail.com', 'Ma'),
(15, 'Ana Celi Alves de Lima', 'Quimica', 'anacelyalves@gmail.com', 'Fe'),
(16, 'Josirranny Priscilla da Silva', 'Língua Espanhola', ' josirranny-priscilla@hotmail.com', 'Fe'),
(17, 'José Pio Granjeiro Batista', 'Geografia', 'bradpio10@gmail.com', 'Ma'),
(18, 'Francisco Elizeldo Lopes da Silva', 'Música', 'elizeldoguitar@gmail.com', 'Ma'),
(19, 'Francisco José Alencar de Paiva', 'História', 'fjalencar2009@hotmail.com', 'Ma'),
(20, 'Antonia Selma de Oliveira Câmara', 'Sociologia', 'aselmadeoliveiraliberdade@gmail.com', 'Fe'),
(21, 'Ramilson Saldanha', 'Língua Inglesa', 'ramilson23@gmail.com', 'Ma'),
(22, 'José Valter Rebouças', 'Língua Portuguesa', 'josevalterr@hotmail.com', 'Ma'),
(23, 'Eber Maia Dantas', 'Língua Inglesa', 'ebermai40@hotmail.com', 'Ma'),
(24, 'Alderi Batista Pereira', 'Física', 'alderi61@gmail.com', 'Ma'),
(25, 'Andeyerlly de Paiva Lima', 'Física', 'andeyerly@hotmail.com', 'Ma'),
(26, 'Marcos Antonio de Oliveira', 'Língua Portuguesa', 'professor.jpg_marcosantonio@hotmail.com', 'Ma');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
