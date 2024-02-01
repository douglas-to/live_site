-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01/02/2024 às 23:15
-- Versão do servidor: 8.2.0
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `live_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(220) NOT NULL,
  `color` varchar(220) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `obs` varchar(220) NOT NULL,
  `users` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis`
--

DROP TABLE IF EXISTS `imoveis`;
CREATE TABLE IF NOT EXISTS `imoveis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_uso_residencial` tinyint(1) DEFAULT NULL,
  `tipo_uso_comercial` tinyint(1) DEFAULT NULL,
  `tipo_uso_misto` tinyint(1) DEFAULT NULL,
  `tipo_imovel` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `quarto` int NOT NULL,
  `suite` int NOT NULL,
  `banheiro` int NOT NULL,
  `vagas` int NOT NULL,
  `tipo_vaga` varchar(50) NOT NULL,
  `area_util` int NOT NULL,
  `area_total` int NOT NULL,
  `sacada` int NOT NULL,
  `andar` int NOT NULL,
  `vista` varchar(50) NOT NULL,
  `frente` int NOT NULL,
  `fundos` int NOT NULL,
  `esquerdo` int NOT NULL,
  `direito` int NOT NULL,
  `area_desejada` varchar(50) NOT NULL,
  `zona` int NOT NULL,
  `ano_cons` int NOT NULL,
  `area_reforma` int NOT NULL,
  `mobiliado` tinyint(1) DEFAULT NULL,
  `face` varchar(50) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `mostrar_mapa` tinyint(1) DEFAULT NULL,
  `ar_condicionado` tinyint(1) DEFAULT NULL,
  `lareira` tinyint(1) DEFAULT NULL,
  `mobilia_usada` tinyint(1) DEFAULT NULL,
  `varanda_gourmet` tinyint(1) DEFAULT NULL,
  `academia` tinyint(1) DEFAULT NULL,
  `churrasqueira` tinyint(1) DEFAULT NULL,
  `elevador` tinyint(1) DEFAULT NULL,
  `espaco_verde` tinyint(1) DEFAULT NULL,
  `gerador_eletrico` tinyint(1) DEFAULT NULL,
  `jardim` tinyint(1) DEFAULT NULL,
  `piscina` tinyint(1) DEFAULT NULL,
  `piscina_criancas` tinyint(1) DEFAULT NULL,
  `playground` tinyint(1) DEFAULT NULL,
  `recepcao` tinyint(1) DEFAULT NULL,
  `salao_festas` tinyint(1) DEFAULT NULL,
  `cabine_primaria` tinyint(1) DEFAULT NULL,
  `docas` tinyint(1) DEFAULT NULL,
  `perto_escolas` tinyint(1) DEFAULT NULL,
  `perto_hospitais` tinyint(1) DEFAULT NULL,
  `perto_shopping` tinyint(1) DEFAULT NULL,
  `perto_transportes` tinyint(1) DEFAULT NULL,
  `perto_vias_acesso` tinyint(1) DEFAULT NULL,
  `circuito_seguranca` tinyint(1) DEFAULT NULL,
  `condominio_fechado` tinyint(1) DEFAULT NULL,
  `interfone` tinyint(1) DEFAULT NULL,
  `perto_cinemas` tinyint(1) DEFAULT NULL,
  `elevador_de_serviço` tinyint(1) DEFAULT NULL,
  `vigia` tinyint(1) DEFAULT NULL,
  `spa` tinyint(1) DEFAULT NULL,
  `salao_jogos` tinyint(1) DEFAULT NULL,
  `patio` tinyint(1) DEFAULT NULL,
  `trifasico` tinyint(1) DEFAULT NULL,
  `seguranca_24h` tinyint(1) DEFAULT NULL,
  `sistema_alarme` tinyint(1) DEFAULT NULL,
  `acesso_internet` tinyint(1) DEFAULT NULL,
  `aquecimento` tinyint(1) DEFAULT NULL,
  `ventilacao` tinyint(1) DEFAULT NULL,
  `area_de_servico` tinyint(1) DEFAULT NULL,
  `cabeamento_completo` tinyint(1) DEFAULT NULL,
  `cozinha` tinyint(1) DEFAULT NULL,
  `deposito` tinyint(1) DEFAULT NULL,
  `garagem` tinyint(1) DEFAULT NULL,
  `moveis_de_madeira` tinyint(1) DEFAULT NULL,
  `lavanderia` tinyint(1) DEFAULT NULL,
  `mobilia_nova` tinyint(1) DEFAULT NULL,
  `quintal` tinyint(1) DEFAULT NULL,
  `serviço_payPerUse` tinyint(1) DEFAULT NULL,
  `tv_cabo` tinyint(1) DEFAULT NULL,
  `vista_exterior` tinyint(1) DEFAULT NULL,
  `aceita_animais` tinyint(1) DEFAULT NULL,
  `nao_aceita_animais` tinyint(1) DEFAULT NULL,
  `nome_condominio` varchar(220) NOT NULL,
  `numero_torres` int NOT NULL,
  `numero_andares` int NOT NULL,
  `numero_unidades` int NOT NULL,
  `ano_contrucao` date NOT NULL,
  `tipo_venda` tinyint DEFAULT NULL,
  `tipo_aluguel` tinyint DEFAULT NULL,
  `tipo_vendaAluguel` tinyint DEFAULT NULL,
  `valor_venda` decimal(10,2) DEFAULT NULL,
  `usou_fgts` tinyint(1) DEFAULT NULL,
  `pagamento` varchar(20) DEFAULT NULL,
  `aceita_financiamento` tinyint(1) DEFAULT NULL,
  `valor_aluguel` decimal(10,2) DEFAULT NULL,
  `pagamento_aluguel` varchar(20) DEFAULT NULL,
  `condominio` decimal(10,2) DEFAULT NULL,
  `iptu` decimal(10,2) DEFAULT NULL,
  `seguro` decimal(10,2) DEFAULT NULL,
  `taxa_servico` decimal(10,2) DEFAULT NULL,
  `sem_garantia` tinyint(1) DEFAULT NULL,
  `seguro_fianca` tinyint(1) DEFAULT NULL,
  `zapway` tinyint(1) DEFAULT NULL,
  `credpago` tinyint(1) DEFAULT NULL,
  `deposito_caucao` tinyint(1) DEFAULT NULL,
  `carta_fianca` tinyint(1) DEFAULT NULL,
  `titulo_capitalizacao` tinyint(1) DEFAULT NULL,
  `fiador` tinyint(1) DEFAULT NULL,
  `titulo_imovel` varchar(255) DEFAULT NULL,
  `descricao_imovel` text,
  `video_imovel` varchar(255) DEFAULT NULL,
  `tour_virtual` varchar(255) DEFAULT NULL,
  `sobre_bairro` text,
  `condicoes_alugar_vender` text,
  `imagem1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagem2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagem3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagem4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagem5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagem6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagem7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nome_proprietario` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `banco` varchar(50) DEFAULT NULL,
  `agencia` varchar(20) DEFAULT NULL,
  `conta` varchar(20) DEFAULT NULL,
  `pix` varchar(50) DEFAULT NULL,
  `relatorio_cliente` tinyint(1) DEFAULT NULL,
  `placa_faixa` tinyint(1) DEFAULT NULL,
  `autorizacao` tinyint(1) DEFAULT NULL,
  `locacao` tinyint(1) DEFAULT NULL,
  `venda` tinyint(1) DEFAULT NULL,
  `avaliacao_live_venda` varchar(50) DEFAULT NULL,
  `avaliacao_live_locacao` varchar(50) DEFAULT NULL,
  `comissao_venda` varchar(50) DEFAULT NULL,
  `comissao_locacao` varchar(50) DEFAULT NULL,
  `anotacoes_internas` text,
  `matricula_ri` varchar(50) DEFAULT NULL,
  `iptu_imovel` varchar(50) DEFAULT NULL,
  `luz` varchar(50) DEFAULT NULL,
  `agua` varchar(50) DEFAULT NULL,
  `gas` varchar(50) DEFAULT NULL,
  `cpf_conta_bancaria` varchar(14) DEFAULT NULL,
  `projeto_aprovado` tinyint(1) DEFAULT NULL,
  `aprovacao_ambiental` tinyint(1) DEFAULT NULL,
  `titulo_direito` varchar(50) DEFAULT NULL,
  `corretores_responsaveis` varchar(255) DEFAULT NULL,
  `corretor_captador` varchar(255) DEFAULT NULL,
  `corretor_cadastrou` varchar(255) DEFAULT NULL,
  `todos_corretores` tinyint(1) DEFAULT NULL,
  `corretores_responsaveis_perm` tinyint(1) DEFAULT NULL,
  `corretor_cadastrou_perm` tinyint(1) DEFAULT NULL,
  `compartilhar_comissao` tinyint(1) DEFAULT NULL,
  `divisao_comissao` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `keywords`
--

DROP TABLE IF EXISTS `keywords`;
CREATE TABLE IF NOT EXISTS `keywords` (
  `id` int NOT NULL AUTO_INCREMENT,
  `keyword` varchar(255) NOT NULL,
  `page_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `keywords`
--

INSERT INTO `keywords` (`id`, `keyword`, `page_id`) VALUES
(1, 'qqq', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`) VALUES
(1, 'teste 1', 'des');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Guber', 'admin@gmail.com', '$2y$10$Yqfn/GyxakOjJ0HTBJdKueQpmjRtqPKas0z5pHiRuKMrkBv/EQZXO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
