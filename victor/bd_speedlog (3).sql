-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Mar-2023 às 01:53
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_speedlog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_adm` int(11) NOT NULL,
  `nome_adm` varchar(300) NOT NULL,
  `cpf_adm` varchar(14) NOT NULL,
  `email_adm` varchar(300) NOT NULL,
  `usuario_adm` varchar(100) NOT NULL,
  `senha_adm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_adm`, `nome_adm`, `cpf_adm`, `email_adm`, `usuario_adm`, `senha_adm`) VALUES
(1, 'Rogerio Morgado Freitas', '094.821.766-93', 'admin@gmail.com', 'admin', '1234'),
(7, 'Victor Jobison', '094.821.766-93', 'victorjobison2016@gmail.com', 'admin2', '1234'),
(8, 'jonasss', '146.684.684-68', 'ADMIN@gmail.com', 'jj', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `api`
--

CREATE TABLE `api` (
  `id_parametro` int(5) NOT NULL,
  `descricao_parametro` varchar(100) NOT NULL,
  `valor_parametro` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `api`
--

INSERT INTO `api` (`id_parametro`, `descricao_parametro`, `valor_parametro`) VALUES
(1, 'Menos de 1Kg', 3.00),
(2, 'Entre 1Kg e 3Kg', 5.00),
(3, '\r\nEntre 3Kg e 8Kg\r\n\r\n', 9.00),
(4, 'Entre 8Kg e 12Kg', 12.00),
(5, '1 Km rodado', 0.50),
(6, '1 minuto de deslocamento', 0.30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `ri_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `cep_cliente` varchar(20) NOT NULL,
  `numero_casa` int(10) DEFAULT NULL,
  `numero_telefone_cliente` varchar(15) NOT NULL,
  `email_cliente` varchar(100) DEFAULT NULL,
  `referencia_de_residencia` varchar(200) DEFAULT NULL,
  `usuario_cliente` varchar(100) NOT NULL,
  `senha_cliente` varchar(100) NOT NULL,
  `data_nasc_cliente` varchar(10) DEFAULT NULL,
  `cpf_cliente` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`ri_cliente`, `nome_cliente`, `cep_cliente`, `numero_casa`, `numero_telefone_cliente`, `email_cliente`, `referencia_de_residencia`, `usuario_cliente`, `senha_cliente`, `data_nasc_cliente`, `cpf_cliente`) VALUES
(6, 'Victor Jobison', '36052-370', NULL, '(32) 9 8899-641', 'victorjobison2016@gmail.com', NULL, 'victorjobison', '1234', NULL, '094.821.766-93'),
(7, 'jonasss', '36052-370', NULL, '(35) 1 4545-434', 'victorjobison@hotmail.com', NULL, 'victorjobison1', '1234', NULL, '094.821.766-93');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id_mensagem` int(11) NOT NULL,
  `ri_cliente` int(11) NOT NULL,
  `usuario_cliente` varchar(100) NOT NULL,
  `mensagem` varchar(300) NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  `data_hora_mensagem` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `envios`
--

CREATE TABLE `envios` (
  `cdg_envio` int(11) NOT NULL,
  `cep_partida` varchar(10) NOT NULL,
  `ri_clien` int(11) NOT NULL,
  `ri_parc` int(11) DEFAULT NULL,
  `tempo` varchar(100) NOT NULL,
  `distancia` varchar(100) NOT NULL,
  `calculo_entrega` varchar(100) NOT NULL,
  `valor_parceiro` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `rua_partida` varchar(100) NOT NULL,
  `cidade_partida` varchar(100) NOT NULL,
  `estado_partida` varchar(100) NOT NULL,
  `bairro_partida` varchar(100) NOT NULL,
  `cep_chegada` varchar(100) NOT NULL,
  `rua_chegada` varchar(100) NOT NULL,
  `cidade_chegada` varchar(100) NOT NULL,
  `estado_chegada` varchar(100) NOT NULL,
  `bairro_chegada` varchar(100) NOT NULL,
  `complemento_chegada` varchar(100) NOT NULL,
  `complemento_partida` varchar(100) NOT NULL,
  `peso` varchar(100) NOT NULL,
  `altura` varchar(100) NOT NULL,
  `largura` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `envios`
--

INSERT INTO `envios` (`cdg_envio`, `cep_partida`, `ri_clien`, `ri_parc`, `tempo`, `distancia`, `calculo_entrega`, `valor_parceiro`, `status`, `rua_partida`, `cidade_partida`, `estado_partida`, `bairro_partida`, `cep_chegada`, `rua_chegada`, `cidade_chegada`, `estado_chegada`, `bairro_chegada`, `complemento_chegada`, `complemento_partida`, `peso`, `altura`, `largura`, `descricao`) VALUES
(13, '36052-370', 6, 5, '6 mins', '2.1 km', '12.03', '8.42', 'Finalizado', 'Rua Rosa Sffeir', 'Juiz de Fora', 'MG', 'Grajaú', '36050-285', 'Rua Américo Lobo', 'Juiz de Fora', 'MG', 'Progresso', '1118', '685', '8', '', '', ''),
(14, '36052-370', 6, 5, '6 mins', '2.1 km', '12.03', '8.42', 'Finalizado', 'Rua Rosa Sffeir', 'Juiz de Fora', 'MG', 'Grajaú', '36050-285', 'Rua Américo Lobo', 'Juiz de Fora', 'MG', 'Progresso', '1118', '685', '8', '', '', ''),
(15, '36052-370', 6, 5, '6 mins', '2.1 km', '12.03', '8.42', 'Andamento', 'Rua Rosa Sffeir', 'Juiz de Fora', 'MG', 'Grajaú', '36050-285', 'Rua Américo Lobo', 'Juiz de Fora', 'MG', 'Progresso', '1118', '685', '8', '', '', ''),
(16, '36052-370', 7, 5, '6 mins', '2.1 km', '12.03', '8.42', 'Finalizado', 'Rua Rosa Sffeir', 'Juiz de Fora', 'MG', 'Grajaú', '36050-285', 'Rua Américo Lobo', 'Juiz de Fora', 'MG', 'Progresso', '1118', '685', '8', '', '', ''),
(17, '36052-370', 6, 5, '6 mins', '2.1 km', '12.03', '8.42', 'Andamento', 'Rua Rosa Sffeir', 'Juiz de Fora', 'MG', 'Grajaú', '36050-285', 'Rua Américo Lobo', 'Juiz de Fora', 'MG', 'Progresso', '1118', '685', '8', '', '', ''),
(18, '36045-120', 6, NULL, '13 mins', '4.1 km', '15.1', '10.57', 'Agendado', 'Avenida Barão do Rio Branco', 'Juiz de Fora', 'MG', 'Manoel Honório', '36025-290', 'Avenida Presidente Itamar Franco', 'Juiz de Fora', 'MG', 'São Mateus', '3600', '22', '8', '12', '6', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `ri_parceiro` int(11) NOT NULL,
  `nome_parceiro` varchar(100) NOT NULL,
  `numero_parceiro` int(10) DEFAULT NULL,
  `numero_telefone_parceiro` varchar(17) NOT NULL,
  `email_parceiro` varchar(100) DEFAULT NULL,
  `referencia_de_residencia_parceiro` varchar(200) DEFAULT NULL,
  `usuario_parceiro` varchar(100) NOT NULL,
  `senha_parceiro` varchar(100) NOT NULL,
  `data_nasc_parceiro` varchar(10) DEFAULT NULL,
  `cpf_parceiro` varchar(20) NOT NULL,
  `foto_parceiro` varchar(15) NOT NULL,
  `placa_veiculo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`ri_parceiro`, `nome_parceiro`, `numero_parceiro`, `numero_telefone_parceiro`, `email_parceiro`, `referencia_de_residencia_parceiro`, `usuario_parceiro`, `senha_parceiro`, `data_nasc_parceiro`, `cpf_parceiro`, `foto_parceiro`, `placa_veiculo`) VALUES
(5, 'Rogerio Morgado Freitas', NULL, '(32) 9 8879-6411', 'victorjobison2016@gmail.com', NULL, 'parceiro', '1234', NULL, '094.821.766-93', 'WIN_20230325_21', 'wde - 5445');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices para tabela `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id_parametro`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ri_cliente`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Índices para tabela `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`cdg_envio`),
  ADD KEY `fk_ri_cliente` (`ri_clien`),
  ADD KEY `fk_ri_parceiro` (`ri_parc`);

--
-- Índices para tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`ri_parceiro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `api`
--
ALTER TABLE `api`
  MODIFY `id_parametro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ri_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `envios`
--
ALTER TABLE `envios`
  MODIFY `cdg_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `ri_parceiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `envios`
--
ALTER TABLE `envios`
  ADD CONSTRAINT `fk_ri_cliente` FOREIGN KEY (`ri_clien`) REFERENCES `clientes` (`ri_cliente`),
  ADD CONSTRAINT `fk_ri_parceiro` FOREIGN KEY (`ri_parc`) REFERENCES `parceiros` (`ri_parceiro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
