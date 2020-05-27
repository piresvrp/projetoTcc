-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jul-2018 às 23:21
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cap_investimento`
--

CREATE TABLE `cap_investimento` (
  `idcap_investimento` int(11) NOT NULL,
  `valorhard` decimal(5,2) NOT NULL,
  `valorsoft` decimal(5,2) NOT NULL,
  `cap_giro` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `idcargo` int(11) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `valorhora` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`idcargo`, `cargo`, `valorhora`) VALUES
(1, '', 0),
(2, 'programador', 20),
(3, '', 0),
(4, 'programador', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `complexidade`
--

CREATE TABLE `complexidade` (
  `idcomplexidade` int(11) NOT NULL,
  `tipo_funcao` varchar(45) NOT NULL,
  `grau_complexidade` varchar(45) NOT NULL,
  `quant_pf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `complexidade`
--

INSERT INTO `complexidade` (`idcomplexidade`, `tipo_funcao`, `grau_complexidade`, `quant_pf`) VALUES
(1, 'Arquivo logico', 'baixa', 10),
(2, 'Arquivo logico', 'baixa', 10),
(3, 'Arquivo logico', 'baixa', 10),
(4, 'Arquivo de saida', 'media', 30),
(5, 'Arquivo de Interface', 'Alta', 30),
(6, 'Arquivo de Interface', 'Alta', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas_fixas`
--

CREATE TABLE `despesas_fixas` (
  `iddespesas_fixas` int(11) NOT NULL,
  `aluguel` decimal(5,2) NOT NULL,
  `condominio` decimal(5,2) NOT NULL,
  `agua` decimal(5,2) NOT NULL,
  `luz` decimal(5,2) NOT NULL,
  `internet` decimal(10,0) NOT NULL,
  `sal_funcionario` decimal(5,2) NOT NULL,
  `outros` decimal(5,2) NOT NULL,
  `total_gasto` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionalidade`
--

CREATE TABLE `funcionalidade` (
  `idfuncionalidade` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionalidade`
--

INSERT INTO `funcionalidade` (`idfuncionalidade`, `nome`) VALUES
(1, 'cadastrar cliente'),
(2, 'cadastrar cliente'),
(3, 'cadastrar cliente'),
(4, 'cadastrar usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `linguagem`
--

CREATE TABLE `linguagem` (
  `idlinguagem` int(11) NOT NULL,
  `tipo_linguagem` varchar(255) NOT NULL,
  `tempo_gasto` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `linguagem`
--

INSERT INTO `linguagem` (`idlinguagem`, `tipo_linguagem`, `tempo_gasto`) VALUES
(1, 'java', '08:30:20'),
(2, 'c++', '06:00:00'),
(3, 'php', '06:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro_equipe`
--

CREATE TABLE `membro_equipe` (
  `idmembro_equipe` int(11) NOT NULL,
  `nome_membro` varchar(45) NOT NULL,
  `nivel_senioridade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro_equipe_projeto`
--

CREATE TABLE `membro_equipe_projeto` (
  `idmembro_equipe_projeto` int(11) NOT NULL,
  `nivel_senioridade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `probabilidade`
--

CREATE TABLE `probabilidade` (
  `idpropabilidade` int(11) NOT NULL,
  `sucesso` varchar(45) NOT NULL,
  `insucesso` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `idprojeto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `segmento_projeto` varchar(255) NOT NULL,
  `inicio_projeto` date NOT NULL,
  `fim_projeto` date NOT NULL,
  `descricao` text NOT NULL,
  `quant_horasgastas` int(11) NOT NULL,
  `custo_projeto` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`idprojeto`, `nome`, `segmento_projeto`, `inicio_projeto`, `fim_projeto`, `descricao`, `quant_horasgastas`, `custo_projeto`) VALUES
(1, 'Projeto', 'clinica', '0000-00-00', '0000-00-00', 'sf', 200, '999.99'),
(2, 'farmaweb', 'farmacia', '0000-00-00', '0000-00-00', 'd mel', 200, '999.99'),
(3, 'Projeto', 'guanfarma', '2018-06-26', '0000-00-00', 'hj', 200, '999.99'),
(4, 'web', 'serviços', '2018-06-29', '2018-12-29', 'qwweqeew', 200, '5.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_funcao`
--

CREATE TABLE `tipo_funcao` (
  `idtipo_funcao` int(11) NOT NULL,
  `nome_tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_funcao`
--

INSERT INTO `tipo_funcao` (`idtipo_funcao`, `nome_tipo`) VALUES
(1, 'Arquivo logico'),
(2, 'Arquivo externo'),
(3, 'Arquivo externo'),
(4, 'Arquivo logico'),
(5, 'Arquivo logico interno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nivel` int(11) NOT NULL,
  `adm` tinyint(1) NOT NULL,
  `funcao` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `username`, `email`, `senha`, `salt`, `status`, `nivel`, `adm`, `funcao`, `cpf`, `telefone`) VALUES
(1, 'janaina', 'jana', 'jana@if.com', '23b474548d889aa36b61f09589be35a09f913d23218931ef332dee981b66ee008e05f335e4fd9357a9521d1224e37c0f9c98df5e46e92b3f494359ca2782dbb6', '3d3f242c43a0e498290556acad1aa55d4bdc3ab109c996840a7cab427b121c9f465f29f80752942a07b93c8be5df93994f76578adba53a66bd4e9364179fb318', '1', 1, 0, 'Desenvolvedora', '', ''),
(4, 'Pablo', 'luz', 'luka@juca.com', '49b7a6c53cdee2f877f839274802e174c48971460021aa2fa15c552fbcf0cbab496416aeb538bf0ae2d4c46dc0b5fd35cdd58fe0d6da6e4f7e5f7b202cfe043c', '3534a52b758adf2cd53e3cf4e60f7d9e47eff291b53103b0b555b08a7164e02d70e96ac8aeda347013be45a2aa23b9dbfaf1eb4de5c6a1a086b7f3c94d18d21d', '1', 0, 0, 'analista', '', ''),
(8, 'Pablo', 'Mel', 'kadu@hotmail.com', 'aa8170ccfd356db72178ce947219bef75ddccb3a3bf5ffa78ec1eff6fefed7aa527c33073286e8cd77c24456866c0647971d08c8320d25e999097bf77d82b82b', '08508320c4ce605de3055c2febc48ef33ac8acd8b15073fc91b07a82134b5f8f8c3e2b8cc23d2dc6238789bbca0347e00c8960fe0801510d52bd97e96fa18a12', '1', 0, 0, 'desenvolvedor', '', ''),
(9, 'Pablo', 'Mel', 'kadu@hotmail.com', '4d38e4a6e08d0806a8b136b00059f6acb05a308289eb492b710a4c6e6359ea169d9b536fbfaebc8b10acdedac4a807c10bf4e823c0d5c5bf7ebfa399f83b11d2', '745b994ac0042201499143eb99cebfaac30c5aaba368e8f5576157de5cde54c3f5ebd099f4972fc9306b9bfb4b5bca297a79ba6a202537d864b394945cedcb3e', '0', 0, 0, 'desenvolvedor', '', ''),
(10, 'Pablo', 'Jose', 'kadu@hotmail.com', 'd43cbcbb05b81d2b42ed60ebee995c0e7b5223c110c1c415887691f1fb4fce71c5670ec86794a6c0cbd3c4d8925c327aa2e52ef3ccb3a4ce602d1747391d577d', 'a07be4af0b41cef9cbd9ec01e8f7224365e289076dd89428915322d79594b75d90e68282f959823f4568d2fbed51ba2a67d2682936d5700430ca3b1ce8ad83dd', '0', 0, 0, 'desenvolvedor', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cap_investimento`
--
ALTER TABLE `cap_investimento`
  ADD PRIMARY KEY (`idcap_investimento`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idcargo`);

--
-- Indexes for table `complexidade`
--
ALTER TABLE `complexidade`
  ADD PRIMARY KEY (`idcomplexidade`);

--
-- Indexes for table `despesas_fixas`
--
ALTER TABLE `despesas_fixas`
  ADD PRIMARY KEY (`iddespesas_fixas`);

--
-- Indexes for table `funcionalidade`
--
ALTER TABLE `funcionalidade`
  ADD PRIMARY KEY (`idfuncionalidade`);

--
-- Indexes for table `linguagem`
--
ALTER TABLE `linguagem`
  ADD PRIMARY KEY (`idlinguagem`);

--
-- Indexes for table `membro_equipe`
--
ALTER TABLE `membro_equipe`
  ADD PRIMARY KEY (`idmembro_equipe`);

--
-- Indexes for table `membro_equipe_projeto`
--
ALTER TABLE `membro_equipe_projeto`
  ADD PRIMARY KEY (`idmembro_equipe_projeto`);

--
-- Indexes for table `probabilidade`
--
ALTER TABLE `probabilidade`
  ADD PRIMARY KEY (`idpropabilidade`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`idprojeto`);

--
-- Indexes for table `tipo_funcao`
--
ALTER TABLE `tipo_funcao`
  ADD PRIMARY KEY (`idtipo_funcao`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cap_investimento`
--
ALTER TABLE `cap_investimento`
  MODIFY `idcap_investimento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idcargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `complexidade`
--
ALTER TABLE `complexidade`
  MODIFY `idcomplexidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `despesas_fixas`
--
ALTER TABLE `despesas_fixas`
  MODIFY `iddespesas_fixas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionalidade`
--
ALTER TABLE `funcionalidade`
  MODIFY `idfuncionalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `linguagem`
--
ALTER TABLE `linguagem`
  MODIFY `idlinguagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `membro_equipe`
--
ALTER TABLE `membro_equipe`
  MODIFY `idmembro_equipe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `membro_equipe_projeto`
--
ALTER TABLE `membro_equipe_projeto`
  MODIFY `idmembro_equipe_projeto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `probabilidade`
--
ALTER TABLE `probabilidade`
  MODIFY `idpropabilidade` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `idprojeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tipo_funcao`
--
ALTER TABLE `tipo_funcao`
  MODIFY `idtipo_funcao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
