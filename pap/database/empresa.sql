-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jul-2021 às 23:31
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `telefone` int(9) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `telefone`, `email`, `id_user`) VALUES
(2, 'Maria Emilia Alves De Oliveira', 911541556, 'marta.isabel.5@hotmail.com', 3),
(3, 'Marta', 915415554, 'a14177@aedah.pt', 1),
(5, 'Tonys', 932558741, 'jose@gmail.com', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `id_equipamento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id_equipamento`, `id_cliente`, `marca`, `descricao`) VALUES
(1, 1, 'Hp', 'Impressora'),
(2, 1, 'Lenovo', 'Yoga'),
(3, 1, 'MacBook', '10.2'),
(8, 3, 'Hp\'s', 'Impressora'),
(9, 4, 'Sony', 'Pony'),
(10, 4, 'Samsung', 'S21'),
(11, 2, 'Hp', 'impressora 1600r'),
(13, 5, 'Hp', 'PC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id_fornecedor` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `telefone` int(9) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id_fornecedor`, `nome`, `telefone`, `email`) VALUES
(1, 'Manuel Ferreira', 936587413, 'mferreira@gmail.pt'),
(2, 'Vitor Alves', 914785598, 'vitoralves@gmail.com'),
(6, 'Antonio', 252369874, 'apereira@gmail.com'),
(10, 'mariana', 252147898, 'ffmachado@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE `materiais` (
  `id_material` int(11) NOT NULL,
  `designacao` varchar(80) NOT NULL,
  `stock` int(11) NOT NULL,
  `preco` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `materiais`
--

INSERT INTO `materiais` (`id_material`, `designacao`, `stock`, `preco`, `id_fornecedor`) VALUES
(111, 'Placa Grafica', 15, 60, 1),
(225, 'RAM', 3, 40, 3),
(1025, 'Processador i7', 7, 300, 2),
(1027, 'Motherboard', 5, 100, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reparacao`
--

CREATE TABLE `reparacao` (
  `id_reparacao` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `id_equipamento` int(11) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `observacoes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reparacao`
--

INSERT INTO `reparacao` (`id_reparacao`, `id_material`, `descricao`, `id_equipamento`, `preco`, `observacoes`) VALUES
(1, 111, 'Seu equipamento está pronto!', 1, 215, 'Substituição da  Placa Gráfica'),
(3, 225, 'Seu equipamento ainda não foi apresentado para o técnico. ', 2, 68, 'Substituição da RAM'),
(4, 225, 'Ainda não foi visto pelo tecnico', 3, 89, 'Substituição da RAM'),
(16, 1025, 'Substituição do processador.', 11, 150, 'Está a ser finalizada a reparação do seu equipamento.'),
(17, 1027, 'Substituição da Motherboard.', 8, 250, 'Está a ser finalizada a reparação do seu equipamento.'),
(18, 111, 'GPU queimado', 11, 150, 'Nada'),
(19, 111, 'GPU queimado', 11, 150, 'Nadadsfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal' COMMENT 'normal ou funcionario ou admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marta', 'marta.isabel.5@hotmail.com', NULL, '$2y$10$joc3MHfQhIVvbRccIzsWOez/v4b78khxtYFjJ5/etqXqDwbRiKhWK', 'admin', NULL, '2021-03-02 15:30:14', '2021-03-02 15:30:14'),
(3, 'Jose', 'jose@gmail.com', NULL, '$2y$10$ft9Pub48RdEFuLAx1p.gu.xcAOQ1DwXYLfKeLTWvFYU.DrTCBNMXW', 'admin', NULL, '2021-04-13 16:37:02', '2021-04-13 16:37:02'),
(5, 'Marta Cliente', '_marta.isabel.5@hotmail.com', NULL, '$2y$10$joc3MHfQhIVvbRccIzsWOez/v4b78khxtYFjJ5/etqXqDwbRiKhWK', 'cliente', NULL, '2021-03-02 15:30:14', '2021-03-02 15:30:14');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`id_equipamento`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices para tabela `materiais`
--
ALTER TABLE `materiais`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `id_fornecedor` (`id_fornecedor`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `reparacao`
--
ALTER TABLE `reparacao`
  ADD PRIMARY KEY (`id_reparacao`),
  ADD KEY `id_equipamento` (`id_material`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `materiais`
--
ALTER TABLE `materiais`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1029;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `reparacao`
--
ALTER TABLE `reparacao`
  MODIFY `id_reparacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
