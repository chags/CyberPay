-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01/12/2023 às 20:04
-- Versão do servidor: 10.6.15-MariaDB-cll-lve
-- Versão do PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aerservicos_aer`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `cargo_nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `cargo_nome`) VALUES
(1, 'Desbravador'),
(2, 'Conselheiro'),
(3, 'Capitão'),
(4, 'Capelão'),
(5, 'Secretario'),
(6, 'Diretor'),
(7, 'Distrital'),
(8, 'Regional'),
(9, 'Administrador'),
(10, 'Pastor'),
(11, 'Dep. Uniao'),
(12, 'Diretor-Associado'),
(13, 'Diretora Associada'),
(14, 'Instrutor'),
(15, 'Cozinheira'),
(16, 'Enfermeira');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `cliente_nome` varchar(200) DEFAULT NULL,
  `cliente_telefone` varchar(30) DEFAULT NULL,
  `cliente_email` varchar(150) DEFAULT NULL,
  `cliente_cpf` varchar(11) DEFAULT NULL,
  `cliente_cnpj` varchar(14) DEFAULT NULL,
  `cliente_inscricao` varchar(11) DEFAULT NULL,
  `cliente_razao_social` varchar(150) DEFAULT NULL,
  `cliente_nome_fantasia` varchar(150) DEFAULT NULL,
  `cliente_CEP` varchar(8) DEFAULT NULL,
  `cliente_logradouro` varchar(150) DEFAULT NULL,
  `cliente_numero` varchar(11) DEFAULT NULL,
  `cliente_complemento` varchar(20) DEFAULT NULL,
  `cliente_bairro` varchar(100) DEFAULT NULL,
  `cliente_municipio` varchar(50) DEFAULT NULL,
  `cliente_cidade` varchar(50) DEFAULT NULL,
  `cliente_uf` varchar(2) DEFAULT NULL,
  `cliente_status` tinyint(1) DEFAULT NULL,
  `cliente_data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `cliente_nome`, `cliente_telefone`, `cliente_email`, `cliente_cpf`, `cliente_cnpj`, `cliente_inscricao`, `cliente_razao_social`, `cliente_nome_fantasia`, `cliente_CEP`, `cliente_logradouro`, `cliente_numero`, `cliente_complemento`, `cliente_bairro`, `cliente_municipio`, `cliente_cidade`, `cliente_uf`, `cliente_status`, `cliente_data`) VALUES
(5, 'IN9 TENOLOGY', '85999593777', 'thayslane.mateus@th7.com.br', NULL, '10901743000196', '', 'TH7 TECNOLOGIA LTDA', 'IN9 TENOLOGY', '60533603', 'AVENIDA B', '711', '17,18', 'CONJUNTO CEARA', 'Fortaleza', NULL, 'CE', 1, '2023-10-06 20:59:18'),
(6, 'IN9 ENGENHARIA E CONSTRUCOES', '91999787072', 'financeiro@in9engenharia.com.br', NULL, '27550338000173', '', 'IN9 ENGENHARIA E CONSTRUCOES LTDA', 'IN9 ENGENHARIA E CONSTRUCOES', '74705100', 'RUA BOGOTA', '1249', 'QUADRACH LOTE 27', 'CHACARA BOTAFOGO', 'Goiânia', NULL, 'GO', 1, '2023-10-07 14:06:39'),
(7, 'AER SERVICOS E TELECOM', '85858828282', 'erickvitorioso@gmail.com', NULL, '43865081000103', '', 'ERICK RAMOS FERREIRA', 'AER SERVICOS E TELECOM', '61652500', 'RUA COLINA', '114', 'LETRA A', 'MARECHAL RONDON (JUREMA)', 'Caucaia', NULL, 'CE', 1, '2023-10-07 18:56:04'),
(8, 'HOSPITAL ALDEOTA', '40023633', 'fiscal@hapvida.com.br', NULL, '63554067021195', '', 'HOSPITAL ALDEOTA', 'HAPVIDA ASSISTENCIA MEDICA S.A.', '60140160', 'AVENIDA PADRE ANTONIO TOMAS', '2056', '', 'ALDEOTA', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 07:36:30'),
(9, 'HAPCLINICA MESSEJANA', '40023633', 'fiscal@hapvida.com.br', NULL, '63554067009900', '', 'HAPCLINICA MESSEJANA', 'HAPVIDA ASSISTENCIA MEDICA S.A.', '60840000', 'RUA TENENTE JURANDIR ALENCAR', '234', '', 'MESSEJANA', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 17:57:00'),
(10, 'HAPCLINICA RODRIGUES JUNIOR', '40023633', 'fiscal@hapvida.com.br', NULL, '63554067011718', '', 'HAPVIDA ASSISTENCIA MEDICA S.A.', 'HAPVIDA ASSISTENCIA MEDICA S.A.', '60060001', 'RUA RODRIGUES JUNIOR', '1280', '', 'CENTRO', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 17:57:34'),
(11, 'HOSPITAL LUIZ FRANCA', '40023633', 'fiscal@hapvida.com.br', NULL, '63554067005076', '', 'HOSPITAL LUIZ FRANCA', 'HAPVIDA ASSISTENCIA MEDICA S.A.', '60140060', 'AVENIDA HERACLITO GRACA', '100', '', 'CENTRO', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 17:58:15'),
(12, 'VIDA & IMAGEM PARANGABA', '40023633', 'fiscal@hapvida.com.br', NULL, '63554067021942', '', 'VIDA & IMAGEM PARANGABA', 'HAPVIDA ASSISTENCIA MEDICA S.A.', '60740101', 'RUA CARLOS AMORA', '136', '', 'PARANGABA', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 17:58:34'),
(13, 'HAPCLINICA BARAO DE STUDART', '40023633', 'fiscal@hapvida.com.br', NULL, '63554067010908', '', 'HAPVIDA ASSISTENCIA MEDICA S.A.', 'HAPCLINICA BARAO DE STUDART', '60120002', 'AVENIDA BARAO DE STUDART', '2260', '', 'JOAQUIM TAVORA', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 17:59:04'),
(14, 'VIDA & IMAGEM PADRE VALDEVINO', '40023633', 'fiscal@hapvida.com.br', NULL, '63554067008415', '', 'VIDA & IMAGEM PADRE VALDEVINO', 'HAPVIDA ASSISTENCIA MEDICA S.A.', '60135414', 'RUA PADRE VALDEVINO', '2640', '', 'DIONISIO TORRES', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 17:59:25'),
(15, 'PRONTO ATENDIMENTO BEZERRA DE MENEZES', '40023633', 'fiscal@hapvida.com.br', NULL, '63554067022590', '', 'PRONTO ATENDIMENTO BEZERRA DE MENEZES', 'HAPVIDA ASSISTENCIA MEDICA S.A.', '60010890', 'RUA CORONEL RIBEIRO DA SILVA', '727', '', 'FARIAS BRITO', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 18:00:10'),
(16, 'HAPCLINICA ANTONIO SALES', '40023633', 'fiscal@hapvida.com.br', NULL, '63554067010401', '', 'HAPVIDA ASSISTENCIA MEDICA S.A.', 'HAPCLINICA ANTONIO SALES', '60135102', 'AVENIDA ANTONIO SALES', '2238', '', 'DIONISIO TORRES', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 18:00:45'),
(17, 'CLINICA ALDEOTA', '35229010', 'contab@hapvida.com.br', NULL, '12361267024025', '', 'ULTRA SOM SERVICOS MEDICOS S.A.', 'CLINICA ALDEOTA', '60170079', 'AVENIDA SENADOR VIRGILIO TAVORA', '1815', '', 'ALDEOTA', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 18:01:51'),
(18, 'HAPCLINICA SAO GERARDO', '32559010', 'humberto@hapvida.com.br', NULL, '12361267008500', '', 'HAPCLINICA SAO GERARDO', 'HAPCLINICA SAO GERARDO', '60325003', 'AVENIDA BEZERRA DE MENEZES', '981', '', 'SAO GERARDO', 'Fortaleza', NULL, 'CE', 1, '2023-10-10 18:02:56');

-- --------------------------------------------------------

--
-- Estrutura para tabela `confi`
--

CREATE TABLE `confi` (
  `id_config` int(11) NOT NULL,
  `config_orcamento_id` int(11) DEFAULT NULL,
  `config_prazo_entrega` varchar(100) DEFAULT NULL,
  `config_frete` varchar(100) DEFAULT NULL,
  `config_forma_pagamento` varchar(100) DEFAULT NULL,
  `config_prazo_pagamento` varchar(100) DEFAULT NULL,
  `config_cotacao` varchar(100) DEFAULT NULL,
  `config_natureza_nota` varchar(100) DEFAULT NULL,
  `config_garantia` varchar(100) DEFAULT NULL,
  `config_tecnico` varchar(100) DEFAULT NULL,
  `config_observacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `confi`
--

INSERT INTO `confi` (`id_config`, `config_orcamento_id`, `config_prazo_entrega`, `config_frete`, `config_forma_pagamento`, `config_prazo_pagamento`, `config_cotacao`, `config_natureza_nota`, `config_garantia`, `config_tecnico`, `config_observacao`) VALUES
(1, 9, '120 dias', 'Cif', 'Deposito, Pix', 'A combinar', '30 dias', 'Serviço', '120 dias', 'Cristiano chagas', '                                            * Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br> ligue para tirar duvidas\r\n                                                                                                                                                                      '),
(2, 10, '120 dias', 'Cif', 'Deposito, Pix', 'A combinar', '30 dias', 'Fiscal', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n                                      '),
(3, 11, '120 dias', 'Cif', 'Deposito, Pix', 'A combinar', '30 dias', 'Serviço', '120 dias', 'Antonio gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\n					*Garantia 120 dias.<br>'),
(4, 12, '120 dias', 'Cif', 'Deposito, Pix', 'A combinar', '30 dias', 'Fiscal', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n                                                                                  '),
(5, 15, '50 dias', 'CIF', 'Cartão', 'A com binar', '30 dias', 'NFS', '120 dias', 'Chico', '                                            * Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n*Garantia 120 dias.<br>                                                                                        '),
(6, 16, NULL, NULL, 'PIX', NULL, '30 dias', NULL, NULL, 'Erick', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\n					*Garantia 120 dias.<br>'),
(7, 16, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(8, 17, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(9, 18, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(10, 19, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(11, 20, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(12, 21, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(13, 22, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(14, 23, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(15, 24, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(16, 25, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(17, 26, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>'),
(18, 27, 'A combinar', 'Cif', 'Deposito, pix', 'A combinar', NULL, 'Serviço', '120 dias', 'Antonio Gomes', '* Profissional Especializado Instalação será feita por um profissional capacitado para instalar o seu produto.<br>\r\n					* Qualidade garantida Certeza de que o serviço será feito de forma ágil e segura, para você e para seu produto.<br>\r\n					*Garantia 120 dias.<br>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `empresa_logo` varchar(100) DEFAULT NULL,
  `empresa_cnpj` varchar(20) DEFAULT NULL,
  `empresa_email` varchar(150) DEFAULT NULL,
  `empresa_telefone` varchar(30) DEFAULT NULL,
  `empresa_whatsapp` varchar(30) DEFAULT NULL,
  `empresa_razao_social` varchar(100) DEFAULT NULL,
  `empresa_nome_fantasia` varchar(100) DEFAULT NULL,
  `empresa_inscricao` varchar(20) DEFAULT NULL,
  `empresa_inscricao_municipal` varchar(20) DEFAULT NULL,
  `empresa_cep` varchar(9) DEFAULT NULL,
  `empresa_logradouro` varchar(150) DEFAULT NULL,
  `empresa_numero` varchar(11) DEFAULT NULL,
  `empresa_complemento` varchar(100) DEFAULT NULL,
  `empresa_bairro` varchar(100) DEFAULT NULL,
  `empresa_municipio` varchar(100) DEFAULT NULL,
  `empresa_cidade` varchar(100) DEFAULT NULL,
  `empresa_uf` varchar(2) DEFAULT NULL,
  `empresa_data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `empresa_logo`, `empresa_cnpj`, `empresa_email`, `empresa_telefone`, `empresa_whatsapp`, `empresa_razao_social`, `empresa_nome_fantasia`, `empresa_inscricao`, `empresa_inscricao_municipal`, `empresa_cep`, `empresa_logradouro`, `empresa_numero`, `empresa_complemento`, `empresa_bairro`, `empresa_municipio`, `empresa_cidade`, `empresa_uf`, `empresa_data`) VALUES
(1, '_-6524cceaa4248.png', '43.865.081/0001-03', 'erickvitorioso@gmail.com', '(85) 99163-6726', ' (85) 99854-4792', 'ERICK RAMOS FERREIRA ME', 'AER SERVIÇOS TELECOM', '07.093563-7', '023649-7', '61.652-50', 'R. Mário Gordulino de Brito', '812', '', 'Parque Guadalajara', 'Luz', 'Caucaia', 'CE', '2023-10-08 15:25:46');

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens`
--

CREATE TABLE `itens` (
  `id_item` int(11) NOT NULL,
  `item_orcamento_id` int(11) DEFAULT NULL,
  `item_produto_id` int(11) DEFAULT NULL,
  `item_produto_nome` varchar(150) DEFAULT NULL,
  `item_produto_valor` varchar(11) DEFAULT NULL,
  `item_produto_quant` varchar(11) DEFAULT NULL,
  `item_produto_valor_total` varchar(11) DEFAULT NULL,
  `item_data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `itens`
--

INSERT INTO `itens` (`id_item`, `item_orcamento_id`, `item_produto_id`, `item_produto_nome`, `item_produto_valor`, `item_produto_quant`, `item_produto_valor_total`, `item_data`) VALUES
(17, 9, 8, 'DVR 16 canais Giga', '2200', '2', '4400', '2023-10-07 20:23:06'),
(18, 9, 1, 'Camera IP 4K', '400', '2', '800', '2023-10-07 20:23:06'),
(19, 10, 8, 'DVR 16 canais Giga', '2200', '3', '6600', '2023-10-07 20:27:48'),
(20, 10, 9, 'Dome IPTV 8K ', '10', '3', '30', '2023-10-07 20:27:48'),
(21, 11, 8, 'DVR 16 canais Giga', '2200', '3', '6600', '2023-10-07 20:31:19'),
(22, 11, 9, 'Dome IPTV 8K ', '10', '3', '30', '2023-10-07 20:31:19'),
(23, 12, 8, 'DVR 16 canais Giga', '2200', '3', '6600', '2023-10-07 20:31:49'),
(24, 12, 9, 'Dome IPTV 8K ', '10', '3', '30', '2023-10-07 20:31:49'),
(25, 15, 1, 'Camera IP 4K', '400', '5', '2000', '2023-10-08 16:21:46'),
(26, 15, 10, 'cabo coxial 100', '12', '5', '60', '2023-10-08 16:21:46'),
(27, 15, 9, 'Dome IPTV 8K ', '10', '5', '50', '2023-10-08 16:21:46'),
(28, 15, 8, 'DVR 16 canais Giga', '2200', '5', '11000', '2023-10-08 16:21:46'),
(29, 16, 9, 'Dome IPTV 8K ', '10', '6', '60', '2023-10-08 23:32:31'),
(30, 16, 9, 'Dome IPTV 8K ', '10', '6', '60', '2023-10-08 23:32:31'),
(31, 16, 10, 'cabo coxial 100', '12', '6', '72', '2023-10-08 23:32:31'),
(32, 16, 8, 'DVR 16 canais Giga', '2200', '6', '13200', '2023-10-08 23:32:31'),
(33, 17, 9, 'Dome IPTV 8K ', '10', '5', '50', '2023-10-09 20:55:55'),
(34, 17, 10, 'cabo coxial 100', '12', '5', '60', '2023-10-09 20:55:55'),
(35, 17, 9, 'Dome IPTV 8K ', '10', '5', '50', '2023-10-09 20:55:55'),
(36, 18, 11, 'Motor Brushless Porta Social Ppa', '170000', '1', '170000', '2023-10-09 23:07:31'),
(37, 18, 1, 'Camera IP 4K', '12850', '1', '12850', '2023-10-09 23:07:31'),
(38, 19, 11, 'Motor Brushless Porta Social Ppa', '170000', '1', '170000', '2023-10-10 01:04:38'),
(39, 20, 11, 'Motor Brushless Porta Social Ppa', '170000', '1', '170000', '2023-10-10 06:46:57'),
(40, 24, 16, 'Manutenção Técnica Especializada Para Recuperação de Serpentina, Rebobinamento do Motor da Condensadora e Troca do Compressor', '270000', '1', '270000', '2023-10-10 09:13:39'),
(41, 25, 16, 'Manutenção Técnica Especializada Para Recuperação de Serpentina, Rebobinamento do Motor da Condensadora e Troca do Compressor', '270000', '1', '270000', '2023-10-10 09:31:15'),
(42, 26, 18, 'Plafon LED Embutir 18W Redondo 6500K Frio', '2790', '1', '2790', '2023-10-10 18:09:04'),
(43, 27, 17, 'Reparo na Placa da Evaporadora e do Motor Ventilador', '357722', '1', '357722', '2023-10-10 21:09:32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `orcamentos`
--

CREATE TABLE `orcamentos` (
  `id_orcamento` int(11) NOT NULL,
  `orcamento_cliente_id` int(11) DEFAULT NULL,
  `orcamento_status` varchar(2) DEFAULT NULL,
  `orcamento_total_geral` varchar(11) DEFAULT NULL,
  `orcamento_desconto` varchar(11) DEFAULT NULL,
  `orcamento_usuario_id` int(11) DEFAULT NULL,
  `orcamento_laudo` text DEFAULT NULL,
  `orcamento_objetivo` text DEFAULT NULL,
  `orcamento_local_instalacao` text DEFAULT NULL,
  `orcamento_data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `orcamentos`
--

INSERT INTO `orcamentos` (`id_orcamento`, `orcamento_cliente_id`, `orcamento_status`, `orcamento_total_geral`, `orcamento_desconto`, `orcamento_usuario_id`, `orcamento_laudo`, `orcamento_objetivo`, `orcamento_local_instalacao`, `orcamento_data`) VALUES
(9, 7, '1', '5200', NULL, NULL, 'INSTALAÇÃO PARA MELHORIA DA SEGURANÇA DO PREDIO', 'asdasd', 'asdasdasd', '2023-10-07 20:23:06'),
(10, 5, '1', '6630', NULL, 1, 'SADFASDFA\r\nASDFASDFASDF\r\nASDFASDFASD', 'ASDFASDFSD\r\nASDFASDF\r\nASDFSADF\r\n', 'ASDFSDFASDF\r\nASDFASDF\r\nASDFASDF\r\n', '2023-10-07 20:27:48'),
(11, 5, '2', '6630', NULL, 1, 'SADFASDFA\r\nASDFASDFASDF\r\nASDFASDFASD', 'ASDFASDFSD\r\nASDFASDF\r\nASDFSADF\r\n', 'ASDFSDFASDF\r\nASDFASDF\r\nASDFASDF\r\n', '2023-10-07 20:31:19'),
(12, 5, '3', '6630', NULL, 1, 'SADFASDFA\r\nASDFASDFASDF\r\nASDFASDFASD', 'ASDFASDFSD\r\nASDFASDF\r\nASDFSADF\r\n', 'ASDFSDFASDF\r\nASDFASDF\r\nASDFASDF\r\n', '2023-10-07 20:31:49'),
(13, 0, '4', '', NULL, 0, '', '', '', '2023-10-07 20:48:54'),
(14, 0, '1', '', NULL, 0, '', '', '', '2023-10-07 20:49:34'),
(15, 7, '1', '12642', NULL, 1, 'Intalação por falta segurança nos arredores da casa. ', 'Entregar o mais rapido possivel', 'na rua major facundo 333, seegundo andar', '2023-10-08 16:21:46'),
(16, 5, '1', '13298', NULL, 1, 'asdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdfsdf', '2023-10-08 23:32:30'),
(17, 5, '1', '138', NULL, 1, 'sdfasfsdfs', 'sdfsdfsdf', 'sdfsdfsdfs', '2023-10-09 20:55:55'),
(18, 7, '1', '182850', NULL, 3, 'dçsfjsçsjçfs', 'porta principal', '', '2023-10-09 23:07:31'),
(19, 7, '1', '170000', NULL, 3, '', '', '', '2023-10-10 01:04:38'),
(20, 7, '1', '170000', NULL, 8, 'ryrjdttdtmdtntg', 'mjtmthmvgvjmh,f,hkfkhfhhf,', 'cgh gvngngvnvn', '2023-10-10 06:46:57'),
(21, 8, '1', '', NULL, 3, '', 'Manutenção em sistema de ar condicionado', 'Observação da Pediatria ', '2023-10-10 09:01:08'),
(22, 8, '1', '', NULL, 3, '', 'Manutenção em sistema de ar condicionado', 'Observação da Pediatria ', '2023-10-10 09:01:12'),
(23, 8, '1', '', NULL, 3, '', 'Manutenção em sistema de ar condicionado', 'Observação da Pediatria ', '2023-10-10 09:01:15'),
(24, 8, '1', '270000', NULL, 3, '', '', '', '2023-10-10 09:13:39'),
(25, 8, '1', '270000', NULL, 3, '', 'Manutenção em sistema de ar condicionado', 'Observação da Pediatria', '2023-10-10 09:31:15'),
(26, 10, '1', '2790', NULL, 3, 'rgeretrterr', 'rtetertere', 'reteetrter', '2023-10-10 18:09:04'),
(27, 8, '1', '357722', NULL, 3, '', 'Manutenção em sistema de Ar Condionado', 'Espera da UTI', '2023-10-10 21:09:32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `produto_nome` varchar(255) NOT NULL,
  `produto_descricao` text NOT NULL,
  `produto_valor_base` varchar(11) DEFAULT NULL,
  `produto_valor_venda` int(11) NOT NULL,
  `produto_data_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `produto_data` datetime NOT NULL DEFAULT current_timestamp(),
  `produto_und` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `produto_nome`, `produto_descricao`, `produto_valor_base`, `produto_valor_venda`, `produto_data_update`, `produto_data`, `produto_und`) VALUES
(1, 'C', 'C', '000', 1, '2023-10-10 19:13:35', '2023-10-06 17:16:09', 'Und'),
(8, 'DVR 16 canais Giga', 'DVR 16 canais Giga, com server side ', '1000', 2200, '2023-10-09 21:37:54', '2023-10-06 18:25:35', 'Und'),
(9, 'Dome IPTV 8K ', 'Dome IPTV 8K  com reconhecimento facial 2km de distânciia', '6000', 1200, '2023-10-09 21:38:04', '2023-10-06 20:45:45', 'Und'),
(10, 'cabo coxial 100', 'cabo coxial 100 megaCabo', '050', 89, '2023-10-09 21:46:02', '2023-10-07 18:58:38', 'm'),
(11, 'Motor Brushless Porta Social Ppa', 'Motor Brushless Porta Social Ppa', '100000', 170000, '2023-10-09 23:05:10', '2023-10-09 23:05:10', NULL),
(12, 'Correia dentada porta social L050 12MM M10650 PPA', 'Correia dentada porta social L050 12MM M10650 PPA', '16000', 21799, '2023-10-10 07:05:01', '2023-10-10 07:05:01', NULL),
(13, 'Roldana P.S TORE/BONA VIDRO MONTADA P04200', 'Roldana P.S TORE/BONA VIDRO MONTADA P04200', '000', 17635, '2023-10-10 07:06:02', '2023-10-10 07:06:02', NULL),
(14, 'Roldana Do Esticador Porta Vidro Bona Tore Brushless Ppa', 'Roldana Do Esticador Porta Vidro Bona Tore Brushless Ppa', '000', 19625, '2023-10-10 07:06:50', '2023-10-10 07:06:50', NULL),
(15, 'SERVIÇOS TÉCNICO ESPECIALIZADO, PARA MANUTENÇÃO CORRETIVA EM PORTA AUTOMATICA  SOCIAL MODELO BRUSHELSS, CENTRAL MICROPROCESSADORA / INCLUSO INSTALAÇÃO DE TODO  EQUIPAMENTO NESCESSÁRIO PARA SEU PERFEITO FUNCIONAMENTO', 'SERVIÇOS TÉCNICO ESPECIALIZADO, PARA MANUTENÇÃO CORRETIVA EM PORTA AUTOMATICA  SOCIAL MODELO BRUSHELSS, CENTRAL MICROPROCESSADORA / INCLUSO INSTALAÇÃO DE TODO  EQUIPAMENTO NESCESSÁRIO PARA SEU PERFEITO FUNCIONAMENTO', '000', 145076, '2023-10-10 07:10:09', '2023-10-10 07:10:09', NULL),
(16, 'Manutenção Técnica Especializada Para Recuperação de Serpentina, Rebobinamento do Motor da Condensadora e Troca do Compressor', 'Manutenção Técnica Especializada Para Recuperação de Serpentina, Rebobinamento do Motor da Condensadora e Troca do Compressor', '200000', 270000, '2023-10-10 07:18:55', '2023-10-10 07:18:55', NULL),
(17, 'Reparo na Placa da Evaporadora e do Motor Ventilador', 'Reparo na Placa da Evaporadora e do Motor Ventilador', '265000', 357722, '2023-10-10 07:28:02', '2023-10-10 07:28:02', NULL),
(18, 'Plafon LED Embutir 18W Redondo 6500K Frio', 'Plafon LED Embutir 18W Redondo 6500K Frio', '000', 2790, '2023-10-10 18:05:24', '2023-10-10 18:05:24', NULL),
(19, 'Porteiro Residencial IPR 1010 Preto Intelbras', 'Porteiro Residencial IPR 1010 Preto Intelbras', '000', 36270, '2023-10-10 18:12:27', '2023-10-10 18:12:27', NULL),
(20, 'Instalação de Equipamentos + Config + treinamento + garantia 120 dias', 'Instalação de Equipamentos + Config + treinamento + garantia 120 dias', '000', 63595, '2023-10-10 18:13:40', '2023-10-10 18:13:40', NULL),
(21, 'Controlador de Acesso C/Teclado Digiprox', 'Controlador de Acesso C/Teclado Digiprox', '000', 28290, '2023-10-10 18:16:11', '2023-10-10 18:16:11', NULL),
(22, 'Fecho Elétrico FEC-91 LA', 'Fecho Elétrico FEC-91 LA', '000', 12512, '2023-10-10 18:16:57', '2023-10-10 18:16:57', NULL),
(23, 'Fonte Eletrônica 12V 2A', 'Fonte Eletrônica 12V 2A', '000', 7973, '2023-10-10 18:17:41', '2023-10-10 18:17:41', NULL),
(24, 'Instalação de Equipamentos + Config + treinamento + garantia 120 dias', 'Instalação de Equipamentos + Config + treinamento + garantia 120 dias', '000', 48690, '2023-10-10 18:18:23', '2023-10-10 18:18:23', NULL),
(25, 'Fechadura Eletroímã Magnétic', 'Fechadura Eletroímã Magnétic', '000', 29770, '2023-10-10 18:19:11', '2023-10-10 18:19:11', NULL),
(26, 'Acionador de saída Botoeira Simples com fio', 'Acionador de saída Botoeira Simples com fio', '000', 8745, '2023-10-10 18:19:57', '2023-10-10 18:19:57', NULL),
(27, 'Controlador Acesso C/ Biometria Hikvision', 'Controlador Acesso C/ Biometria Hikvision', '000', 128910, '2023-10-10 18:25:15', '2023-10-10 18:25:15', NULL),
(28, 'CONFIGURAÇÃO PADRÃO PARA PORTA SOCIAL EM CENTRAL MICROPOCESSADORA BRUSHLESS', 'CONFIGURAÇÃO PADRÃO PARA PORTA SOCIAL EM CENTRAL MICROPOCESSADORA BRUSHLESS', '000', 35000, '2023-10-10 18:42:24', '2023-10-10 18:42:24', NULL),
(29, 'Substituição de Câmera Full HD VHD, Par Balun Vídeo Híbrido Jfl Novo Modelo 500m Bl-hd251, Conector P4, Conector P4 ', 'Substituição de Câmera Full HD VHD, Par Balun Vídeo Híbrido Jfl Novo Modelo 500m Bl-hd251, Conector P4, Conector P4 - GIGA', '000', 26610, '2023-10-10 18:46:31', '2023-10-10 18:46:31', NULL),
(30, 'Manutenção Coretiva de troca Par Balun Vídeo Híbrido Jfl Novo Modelo 500m Bl-hd251, Conector P4', 'Manutenção Coretiva de troca Par Balun Vídeo Híbrido Jfl Novo Modelo 500m Bl-hd251, Conector P4', '000', 9620, '2023-10-10 18:47:09', '2023-10-10 18:47:09', NULL),
(31, 'Instalação de Câmeras, Conectores, Instalação de Equipamentos + Config + garantia 120 dias, incluso mobilização', 'Instalação de Câmeras, Conectores, Instalação de Equipamentos + Config + garantia 120 dias, incluso mobilização', '000', 43596, '2023-10-10 18:47:46', '2023-10-10 18:47:46', NULL),
(32, 'Eletrificador de Cerca Elc 3020 Intelbras/bateria 12v/cabo alta tensão/sirene/haste aterremento', 'Eletrificador de Cerca Elc 3020 ', '000', 54570, '2023-10-10 18:50:06', '2023-10-10 18:50:06', NULL),
(33, 'HASTE CERCA 40X40mm, 1MT, completa', 'HASTE CERCA 40X40mm, 1MT, completa', '000', 12610, '2023-10-10 18:51:26', '2023-10-10 18:51:26', NULL),
(34, 'Instalação de Equipamentos + Config + treinamento + garantia 120 dias (cerca elétrica)', 'Instalação de Equipamentos + Config + treinamento + garantia 120 dias (cerca elétrica)', '000', 225600, '2023-10-10 18:52:46', '2023-10-10 18:52:46', NULL),
(35, 'Fechadura Externa Para Porta De Correr Cromada -Stam 950', 'Fechadura Externa Para Porta De Correr Cromada -Stam 950', '000', 15835, '2023-10-10 18:53:57', '2023-10-10 18:53:57', NULL),
(36, 'Fechadura Externa Para Porta de correr Bico de papagaio WC quadrada -stam', 'Fechadura Externa Para Porta de correr Bico de papagaio WC quadrada -stam', '000', 13713, '2023-10-10 18:54:36', '2023-10-10 18:54:36', NULL),
(37, 'SERVIÇOS TÉCNICO PARA MANUTENÇÃO CORRETIVA E PREVENTIVA EM PORTA AUTOMATICA SOCIAL COM KIT CENTRAL MICROPOCESSADORA / INCLUSO INSTALAÇÃO TÉCNICA DE EQUIPAMENTOS/ LIMPEZA E LUBRIFICAÇÃO', 'SERVIÇOS TÉCNICO PARA MANUTENÇÃO CORRETIVA E PREVENTIVA EM PORTA AUTOMATICA SOCIAL COM KIT CENTRAL MICROPOCESSADORA / INCLUSO INSTALAÇÃO TÉCNICA DE EQUIPAMENTOS/ LIMPEZA E LUBRIFICAÇÃO', '000', 63590, '2023-10-10 18:56:07', '2023-10-10 18:56:07', NULL),
(38, 'Bomba D Agua Periférica 1cv Idb-50 Premium 127/220v Ferrari Amarelo', 'Bomba D Agua Periférica 1cv Idb-50 Premium 127/220v Ferrari Amarelo', '000', 63081, '2023-10-10 18:56:59', '2023-10-10 18:56:59', NULL),
(39, 'Mola Aérea para Portas MH 103 A 65kg', 'Mola Aérea para Portas MH 103 A 65kg', '000', 32723, '2023-10-10 18:57:43', '2023-10-10 18:57:43', NULL),
(40, 'Implantação de Infraestrura/caixa 4x2/eletro duto 25mm/revestimento/não incluso pintura, Instalação de Equipamentos + Config + treinamento + garantia 120 dias (CONTROLE DE ACESSO)', 'Implantação de Infraestrura/caixa 4x2/eletro duto 25mm/revestimento/não incluso pintura, Instalação de Equipamentos + Config + treinamento + garantia 120 dias (CONTROLE DE ACESSO)', '000', 123595, '2023-10-10 19:02:44', '2023-10-10 19:02:44', NULL),
(41, 'Fonte Chaveada Estabilizada 12 Volts 20 Amper P/ Cftv', 'Fonte Chaveada Estabilizada 12 Volts 20 Amper P/ Cftv', '000', 19595, '2023-10-10 19:10:46', '2023-10-10 19:10:46', NULL),
(42, 'CAMERA INFRAVERMELHO, 20 METROS, RESOLUÇÃO HD, 1MP, MARCA HIKVISION - FORNECIMENTO E INSTALAÇÃO', 'CAMERA INFRAVERMELHO, 20 METROS, RESOLUÇÃO HD, 1MP, MARCA HIKVISION - FORNECIMENTO E INSTALAÇÃO', '000', 17200, '2023-10-10 19:13:07', '2023-10-10 19:13:07', NULL),
(43, 'CABO ELETRÔNICO CATEGORIA 5E, MULTILAN, U/UTP, CM AZ ROHS, MARCA FURUKAWA - FORNECIMENTO E INSTALAÇÃO. (REF SINAPI 98296)', 'CABO ELETRÔNICO CATEGORIA 5E, MULTILAN, U/UTP, CM AZ ROHS, MARCA FURUKAWA - FORNECIMENTO E INSTALAÇÃO. (REF SINAPI 98296)', '000', 325, '2023-10-10 19:14:42', '2023-10-10 19:14:42', NULL),
(44, 'TESTE DE ESTANQUEIDADE, LAUDO TÉCNICO, ART', 'TESTE DE ESTANQUEIDADE, LAUDO TÉCNICO, ART', '000', 239000, '2023-10-10 19:15:35', '2023-10-10 19:15:35', NULL),
(45, 'Motor portão deslizante, DZ RIO 350(Kg) TURBO JETFLEX FULL(PPA), 04 METROS DE CREMALHEIRA, Incluso Instalação.', 'Motor portão deslizante, DZ RIO 350(Kg) TURBO JETFLEX FULL(PPA), 04 METROS DE CREMALHEIRA, Incluso Instalação.', '000', 149190, '2023-10-10 19:33:45', '2023-10-10 19:33:45', NULL),
(46, 'INSTALAÇÃO DE BASE FIXA PARA ALTURA DE MOTOR DESLIZANTE, DZ RIO 350(Kg)', 'INSTALAÇÃO DE BASE FIXA PARA ALTURA DE MOTOR DESLIZANTE, DZ RIO 350(Kg)', '000', 35000, '2023-10-10 19:35:39', '2023-10-10 19:35:39', NULL),
(47, 'MANUTENÇÃO PREVENTIVA C/LIMPEZA/LUBRIFICAÇÃO EM KIT PORT/AUTOMATICA', 'MANUTENÇÃO PREVENTIVA C/LIMPEZA/LUBRIFICAÇÃO EM KIT PORT/AUTOMATICA', '000', 18223, '2023-10-10 20:07:49', '2023-10-10 20:07:49', NULL),
(48, 'Sensor Anti-esmagamento, Fotocélula IFV ', 'Sensor Anti-esmagamento, Fotocélula IFV ', '000', 52491, '2023-10-10 20:08:51', '2023-10-10 20:08:51', NULL),
(49, 'Repetidor De Sinal Para Dispositivos Sem Fio Mrp-01 Duo Jfl', 'Repetidor De Sinal Para Dispositivos Sem Fio Mrp-01 Duo Jfl', '000', 28692, '2023-10-10 20:14:50', '2023-10-10 20:14:50', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario_nome` varchar(200) DEFAULT NULL,
  `usuario_email` varchar(200) DEFAULT NULL,
  `usuario_senha` varchar(200) DEFAULT NULL,
  `usuario_cpf` varchar(11) DEFAULT NULL,
  `usuario_imagem` varchar(50) DEFAULT NULL,
  `usuario_logradouro` varchar(150) DEFAULT NULL,
  `usuario_numero` varchar(20) DEFAULT NULL,
  `usuario_complemento` varchar(50) DEFAULT NULL,
  `usuario_bairro` varchar(200) DEFAULT NULL,
  `usuario_cep` varchar(8) DEFAULT NULL,
  `usuario_estado` varchar(200) DEFAULT NULL,
  `usuario_cidade` varchar(200) DEFAULT NULL,
  `usuario_nascimento` date DEFAULT NULL,
  `usuario_data` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario_cargo_id` varchar(20) DEFAULT NULL,
  `usuario_status` varchar(20) DEFAULT NULL,
  `usuario_session` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario_nome`, `usuario_email`, `usuario_senha`, `usuario_cpf`, `usuario_imagem`, `usuario_logradouro`, `usuario_numero`, `usuario_complemento`, `usuario_bairro`, `usuario_cep`, `usuario_estado`, `usuario_cidade`, `usuario_nascimento`, `usuario_data`, `usuario_cargo_id`, `usuario_status`, `usuario_session`) VALUES
(1, 'cristiano', 'admin@admin.com', '9407c826d8e3c07ad37cb2d13d1cb641', '72958120325', 'cristiano_c_72958120325-62015c5f50f46.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-16 20:01:13', '6', NULL, '1_6528adc292ddd'),
(2, '', '', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Junior_45612377455-61f97c36d6b78.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-01 15:30:14', '9', NULL, NULL),
(3, 'erick', 'erick@aerservicosetelecom.com.br', '9407c826d8e3c07ad37cb2d13d1cb641', '72958120326', 'Erique_Ramos_72958120326-6520a1b72f6b5.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-06 21:09:27', '6', NULL, '3_652d4067c0211'),
(7, 'Beatriz de Oliveira Feitosa', 'beatriz@aerservicosetelecom.com.br', '9407c826d8e3c07ad37cb2d13d1cb641', '05806913309', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-09 23:09:46', '6', NULL, NULL),
(8, 'Antônio Gomes Ferreira', 'antonio@aerservicosetelecom.com.br', '9407c826d8e3c07ad37cb2d13d1cb641', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-09 23:11:48', '6', NULL, '8_6525b3b0663d3');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `confi`
--
ALTER TABLE `confi`
  ADD PRIMARY KEY (`id_config`);

--
-- Índices de tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices de tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id_item`);

--
-- Índices de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD PRIMARY KEY (`id_orcamento`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `confi`
--
ALTER TABLE `confi`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  MODIFY `id_orcamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
