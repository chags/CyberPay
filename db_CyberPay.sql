-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/12/2023 às 21:15
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_cyberpay`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `address`
--

CREATE TABLE `address` (
  `id_address` int(11) NOT NULL,
  `address_street` varchar(150) DEFAULT NULL,
  `address_number` varchar(11) DEFAULT NULL,
  `address_complement` varchar(50) DEFAULT NULL,
  `address_neighborhood` varchar(100) DEFAULT NULL,
  `neighborhood_city` varchar(50) DEFAULT NULL,
  `neighborhood_state` varchar(50) DEFAULT NULL,
  `neighborhood_country` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_address` varchar(200) DEFAULT NULL,
  `company_logo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `company`
--

INSERT INTO `company` (`id_company`, `company_name`, `company_address`, `company_logo`) VALUES
(1, 'CyberPay', 'Street 1000 Nomalinda - North caloline-USA', 'logo-cyberpay.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `config`
--

CREATE TABLE `config` (
  `id_config` int(11) NOT NULL,
  `config_token` varchar(150) DEFAULT NULL,
  `config_serverUserName` varchar(100) DEFAULT NULL,
  `config_url_server` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `config`
--

INSERT INTO `config` (`id_config`, `config_token`, `config_serverUserName`, `config_url_server`) VALUES
(1, 'Basic YRWtaW89QEbbcnBpYTQ4OSMj', 'admin', 'https://h7x.net.br:8090/cloudAPI/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `office`
--

CREATE TABLE `office` (
  `id_office` int(11) NOT NULL,
  `office_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `office`
--

INSERT INTO `office` (`id_office`, `office_name`) VALUES
(1, 'client'),
(2, 'administrator');

-- --------------------------------------------------------

--
-- Estrutura para tabela `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `order_user_id` int(11) DEFAULT NULL,
  `order_items_id` int(11) DEFAULT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `order_invoice_id` int(11) DEFAULT NULL,
  `order_paid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `package`
--

CREATE TABLE `package` (
  `id_package` int(11) NOT NULL,
  `package_name` varchar(100) DEFAULT NULL,
  `package_description` text DEFAULT NULL,
  `package_price` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(150) DEFAULT NULL,
  `user_email` varchar(150) DEFAULT NULL,
  `user_password` varchar(150) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_image` varchar(150) DEFAULT NULL,
  `user_language` varchar(6) DEFAULT NULL,
  `user_office_id` int(11) DEFAULT NULL,
  `user_campany__id` int(11) DEFAULT NULL,
  `user_address_id` int(11) DEFAULT NULL,
  `user_session` int(11) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL,
  `user_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_date_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_image`, `user_language`, `user_office_id`, `user_campany__id`, `user_address_id`, `user_session`, `user_status`, `user_date`, `user_date_update`) VALUES
(1, 'cristiano', 'cristiano.chagas@th7.com.br', '661285f2e15c689a000d6c62c83990b3', '85999593777', NULL, 'pt_BR', 2, 1, NULL, 1, NULL, '2023-12-01 23:36:29', '2023-12-02 03:40:32');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Índices de tabela `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Índices de tabela `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id_config`);

--
-- Índices de tabela `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id_office`);

--
-- Índices de tabela `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Índices de tabela `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id_package`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `config`
--
ALTER TABLE `config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `office`
--
ALTER TABLE `office`
  MODIFY `id_office` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `package`
--
ALTER TABLE `package`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
