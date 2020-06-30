-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 01/07/2020 às 00:36
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_aluno` int(11) NOT NULL,
  `nomeDeGuerra` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `re` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT 1,
  `dataNasc` date NOT NULL,
  `id_pelotao` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `numero_aluno`, `nomeDeGuerra`, `foto`, `re`, `ativo`, `dataNasc`, `id_pelotao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'MAIRA DE OLIVERA MENDES', 8, 'MENDES', '193902-5.jpg', '193902-5', 1, '1988-12-20', 1, '2020-06-24 15:27:22', '2020-06-24 15:27:22', NULL),
(2, 'ADRIANO PINHEIRO CARVALHO', 4, 'ADRIANO', '193632-8.jpg', '193632-8', 1, '1989-04-29', 1, '2020-06-24 15:28:30', '2020-06-24 15:28:30', NULL),
(3, 'ESNDELL CAETANO FELÍCIO', 5, 'CAETANO', '193640-9.jpg', '193640-9', 1, '1990-07-20', 1, '2020-06-24 15:29:22', '2020-06-24 15:29:22', NULL),
(4, 'WELLINGTON FERREIRA DE ARAUJO SILVA', 6, 'FERREIRA', '193785-5.jpg', '193785-5', 1, '2000-04-21', 1, '2020-06-24 15:30:43', '2020-06-24 15:30:43', NULL),
(5, 'JOSÉ EMILSON DOS SANTOS RODRIGUES', 3, 'RODRIGUES', '193591-7.jpg', '193591-7', 1, '1995-08-28', 1, '2020-06-24 15:32:06', '2020-06-24 15:32:06', NULL),
(6, 'JESSICA DOS SANTOS GALVÃO', 2, 'GALVAO', '180434-A.jpg', '180434-A', 1, '2020-06-20', 2, '2020-06-24 16:11:45', '2020-06-24 16:11:45', NULL),
(7, 'Tiago', 12, 'Messias', '1090909.jpg', '1090909', 1, '2020-06-18', 3, '2020-06-24 21:06:15', '2020-06-24 21:06:15', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `companhias`
--

CREATE TABLE `companhias` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_edital` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `companhias`
--

INSERT INTO `companhias` (`id`, `name`, `description`, `id_edital`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1ª', 'Módulo especifico', 1, '2020-06-24 15:20:09', '2020-06-24 15:20:09', NULL),
(2, '1ª', 'Módulo especifico', 2, '2020-06-24 21:05:28', '2020-06-24 21:05:28', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `editals`
--

CREATE TABLE `editals` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomeEdital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `editals`
--

INSERT INTO `editals` (`id`, `nomeEdital`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2/321/18', '2020-06-24 15:19:56', '2020-06-24 15:19:56', NULL),
(2, '2_032_19', '2020-06-24 21:05:17', '2020-06-24 21:05:17', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(89, '2014_10_12_000000_create_users_table', 1),
(90, '2014_10_12_100000_create_password_resets_table', 1),
(91, '2020_05_12_123938_create_editals_table', 1),
(92, '2020_05_12_124705_create_companhias_table', 1),
(93, '2020_05_12_181336_create_pelotaos_table', 1),
(94, '2020_05_12_195043_create_alunos_table', 1),
(95, '2020_05_12_225950_create_observacaos_table', 1),
(96, '2020_06_17_112320_adicionar_campos_em_users_migration', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `observacaos`
--

CREATE TABLE `observacaos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_graduado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assinatura` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_observacao` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `observacaos`
--

INSERT INTO `observacaos` (`id`, `descricao`, `graduacao`, `RE`, `nome_graduado`, `assinatura`, `id_observacao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Aluno Exemplar', 'CAP', '9723692', 'ROSSIGNOLI', '9723692.JPG', 3, '2020-06-24 15:35:57', '2020-06-24 15:35:57', NULL),
(2, 'aluna exemplar', 'CAP', '9723692', 'ROSSIGNOLI', '9723692.JPG', 1, '2020-06-24 15:43:36', '2020-06-24 15:43:36', NULL),
(3, 'Aluna QRU nihil', 'CB', '1167740', 'WILKER', '1167740.JPG', 1, '2020-06-24 15:46:38', '2020-06-24 15:46:38', NULL),
(4, 'teste', 'CB', '1167740', 'WILKER', '1167740.JPG', 1, '2020-06-24 17:06:36', '2020-06-24 17:06:36', NULL),
(5, 'Aluno dedicado', 'CAP', '9723692', 'ROSSIGNOLI', '9723692.JPG', 2, '2020-06-24 20:44:09', '2020-06-24 20:44:09', NULL),
(6, 'Boa aluna', '1º TEN', '1158031', 'MARIO', '1158031.JPG', 6, '2020-06-24 20:55:35', '2020-06-24 20:55:35', NULL),
(7, 'Aluna exemplar, pontual', 'CB', '1167740', 'WILKER', '1167740.JPG', 1, '2020-06-24 22:27:02', '2020-06-24 22:27:02', NULL),
(8, 'Teste', '1º SGT', '1946978', 'asa', '1946978.png', 1, '2020-07-01 01:32:44', '2020-07-01 01:32:44', NULL),
(9, 'sdsd', '1º SGT', '1946978', 'asa', '1946978.png', 1, '2020-07-01 01:33:28', '2020-07-01 01:33:28', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pelotaos`
--

CREATE TABLE `pelotaos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numeroPelotao` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomePelotao` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comandante` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_companhia` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `pelotaos`
--

INSERT INTO `pelotaos` (`id`, `numeroPelotao`, `nomePelotao`, `comandante`, `id_companhia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1º', 'Defensores', 'Sgt Prado', 1, '2020-06-24 15:23:24', '2020-06-24 15:23:24', NULL),
(2, '2º', 'Audazes', 'Sgt Rogério', 1, '2020-06-24 16:10:54', '2020-06-24 16:10:54', NULL),
(3, '3º', 'Infantes', 'SGT Roso', 2, '2020-06-24 21:05:44', '2020-06-24 21:05:44', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `re` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assinatura` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posto_graduacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`, `re`, `assinatura`, `posto_graduacao`) VALUES
(1, 'Admin', 'admin@gt.com', '$2y$10$DV74gtVNMN9Zp5rglYUpS.5/IAVm4rktaqg7ZMSCS7Y6QpZRLNmxW', 1, '04ln7rS5GOo8dz5JP9CfqRdmpFNqjLbao7JeLIx6078CBVC5bA2IqRnrWSDf', '2020-06-24 15:19:24', '2020-06-24 15:19:24', 'admin@gt.com', 'admin@gt.com.png', 'SD'),
(5, 'asa', 'roso@gt.com', '$2y$10$fP6S7hRikx7Aowy0jyLvS.l7/HbQR/CnH7JDwemhQ/PbFIEg.LVeq', 0, NULL, '2020-07-01 01:32:12', '2020-07-01 01:32:12', '1946978', '1946978.png', '1º SGT');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alunos_id_pelotao_foreign` (`id_pelotao`);

--
-- Índices de tabela `companhias`
--
ALTER TABLE `companhias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companhias_id_edital_foreign` (`id_edital`);

--
-- Índices de tabela `editals`
--
ALTER TABLE `editals`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `observacaos`
--
ALTER TABLE `observacaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `observacaos_id_observacao_foreign` (`id_observacao`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `pelotaos`
--
ALTER TABLE `pelotaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelotaos_id_companhia_foreign` (`id_companhia`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `companhias`
--
ALTER TABLE `companhias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `editals`
--
ALTER TABLE `editals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de tabela `observacaos`
--
ALTER TABLE `observacaos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pelotaos`
--
ALTER TABLE `pelotaos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_id_pelotao_foreign` FOREIGN KEY (`id_pelotao`) REFERENCES `pelotaos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `companhias`
--
ALTER TABLE `companhias`
  ADD CONSTRAINT `companhias_id_edital_foreign` FOREIGN KEY (`id_edital`) REFERENCES `editals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `observacaos`
--
ALTER TABLE `observacaos`
  ADD CONSTRAINT `observacaos_id_observacao_foreign` FOREIGN KEY (`id_observacao`) REFERENCES `alunos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `pelotaos`
--
ALTER TABLE `pelotaos`
  ADD CONSTRAINT `pelotaos_id_companhia_foreign` FOREIGN KEY (`id_companhia`) REFERENCES `companhias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
