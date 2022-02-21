# Sobre Mim

Olá, meu nome é Jeferson Pereira. Iniciei nesse mundo da programação faz uns 3 anos. Tudo que aprendi até o momento foi através de cursos online pela “UDEMY” – Na empresa em que estou atuando no momento, havia 3 programadores, mas com a pandemia todos eles trilharam novos desafios. Pela necessidade de a empresa precisar de um programador e essa não é a principal função, me deram a oportunidade de exercer essa função realizando manutenção, suporte ao sistema atual e futuras integrações com outros sistemas, aceitei o desafio ( E que baita desafio ).

Um dos programadores que saiu, tem uma empresa de programação e me chamou para trabalhar para ele como PJ. Ele faz a parte de modelagem de banco e captação de clientes, enquanto eu faço a parte do desenvolvimento.

Uma das maiores dificuldades que tenho é o fato de não ter contato com ninguém no ramo, muitas dúvidas vem a mim e eu não tenho com quem tirar, apenas a internet não me ajuda, dúvidas como : Code Clean, Arquitetura de Projeto, Design Patterns entre outros, gostaria muito de evoluir nesse ramo e me tornar especialista, creio q tenho capacidade, preciso apenas ter a interações com pessoas que possam me ajudar a evoluir.

--------------------------------------------------------------------------

# Sobre o Teste :

- Facilidades:
1. Nesse teste tentei usar o máximo de experiencia possível que adquiri ao longo desses 3 anos. 
2. Ajudo muito o teste ser aberto para FrameWorks, escolhi o Laravel 8 e Bootsrap 5, onde estou mais familiarizado. 

3. Criação de CRUD, creio que esse é o início de todo programador, saber criar um “CRUD”

4. Banco de dados Mysql, já que apenas tive experiencia com esse e o SQLServer.


- Dificuldades: 

1.	Banco de dados : Logo de início fique com dúvidas sobre a relação “products x tags”, pelo que notei na estrutura do banco é uma relação de N x N com chave composta, o laravel não trabalha com chaves compostas (até onde eu sei). Então fiz o que para mim fazia mais sentido, adotando “tags” como categoria.

2.	Front-end: Em maioria, sempre desenvolvi sistemas com back-end separado do front-end, tive um pouco dificuldade, pois tive que aprender a mexer com “Blade”, não fazia muito sentido eu separar e criar dois projetos, já que o teste não indicava.

3.	Tempo: Comecei o teste no dia 17/02 – no dia 18/02 tive problemas de internet e como eu trabalho em dois lugar diferentes, ficou meio apertado o tempo para criar algumas coisas que gostaria de mostrar, principalmente em mensagens de feedback. Mas tentei mostrar ao longo do projeto o meu conhecimento – responsividade, componentes.

4.	Api:  Na atual empresa atuo mais como Back-end, e como o teste foi baseado em uma aplicação monolítica fique um pouco perdido no início com as rotas com o uso do blade.

5.	Pendencias: Gostaria de ter feito a parte de Relatórios para impressão com filtro, mensagem e efeitos visuais e o “Esqueceu a senha”, mas não consegui, como informado acima, o tempo foi escasso.

---------------------------------------------------------------------------


Configuração :

Php 7.4+
Laravel 8
Bootstrap 5
Xampp 3.2.3
---------------------------------


- Dentro de htdoc
- Git clone https://github.com/jeferson-git/teste-cadastro-produtos.git 
- Composer install
- Npm install
- Necessario criar o DataBase com o nome "cadastro_produtos" - ou se preferir outro nome, teria que mudar no arquivo .env.example "DB_DATABASE={{ Novo Nome }}"

- verificar as senhas de acesso ao Database, as que estão configuradas são as senhas e usuario default : root@root
 DB_USERNAME="usuario database"
 DB_PASSWORD="senha database"

- Renomear o arquivo .env.example para .env

- Php artisan migrate
- Php artisan db:seed
- Php artisan key:generate
- Npm run watch
- Php artisan serve

Usuário : admin@teste.com
Senha : 123456

http://Localhost:8000 

Com esses comandos a aplicação já esta funcional com a base de dados populada com 50 registros e 1 usuario.

Env.

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=cadastro_produtos
- DB_USERNAME=root
- DB_PASSWORD=

Mas caso queira o SQL ->


-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Fev-2022 às 05:19
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro_produtos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(36, '2014_10_12_000000_create_users_table', 1),
(37, '2014_10_12_100000_create_password_resets_table', 1),
(38, '2019_08_19_000000_create_failed_jobs_table', 1),
(39, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(40, '2022_02_17_024047_create_products_table', 1),
(41, '2022_02_17_024103_create_tags_table', 1),
(42, '2022_02_17_024120_create_products_x_tags_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Caneta', 'Caneta Azul Bic', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(2, 'Lápis', 'Lápis Faber-Castle', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(3, 'Giz de Cera', 'Giz Preto Faber-Castle', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(4, 'Borracha', 'Borracha Staedtler', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(5, 'Cola', 'Cola Branca Cascorez', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(6, 'Roupão Infantil', 'Roupão Adulto MicroFibra Manga Curta', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(7, 'Toalha de Mesa', 'Toalha de Mesa Dohler Athenas Natalinas (78cm x 78cm)', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(8, 'Toalha de Lavabo', 'Karseten Bruna II - Gramatura: 370 G/M²', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(9, 'Roupão Adulto', 'Roupão Adulto MicroFibra Manga Comprida ( Diversas Cores )', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(10, 'Toalha de Rosto', 'Toalha de Rosto Dohler - Gramatura: 360 G/m²', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(11, 'Cooktop Fischer 4 bocas', 'Gás 1519-5902 Branco Bivolt', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(12, 'Micro-ondas LG', 'Easy Clean MS3091BC 30L 800W Branco 110V', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(13, 'Fogão Consul 5 bocas', 'Preto com mesa de vidro e grades individuais de ferro fundido - CFS5VAE - Bivolt', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(14, 'Smart Tv Philco 42\"', 'D-Led Full HD PTV42G10N5SKF Preto Bivolt', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(15, 'Smartphone Motorola', 'Moto E6I XT2053-5 32Gb Cinza Titanium', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(16, 'Rastelo', 'Rasteo Para Folhas 8 Dentes', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(17, 'Vassoura Plástica', 'Vassoura Plástica Para Jardim Com Cabo - Cor: Vermelha', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(18, 'Mangueira', 'Grade em ferro fundido provençal sacada varanda 16x31 5cm   grade fabricada em ferro fundido usada em sacadas portões jardins corrimão de escadas e divisórias. Proporciona uma belíssima decoração pois possuem bom gosto e durabilidade. Utilize as grades para agregar...', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(19, 'Grade Em Ferro Fundido', 'D-Led Full HD PTV42G10N5SKF Preto Bivolt', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(20, 'Vaso De Flor Para Parede ', 'Meia Lua Jardim Vertical 4 Peças - Marrom', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(21, 'Óculos Vr', 'Óculos de Realidade Virtual Quest 2 - 256Gb, Cor:Branco', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(22, 'Monitor Gamer', 'Aoc Hero 27\" Ips 144Hz 1Ms Fhd G-Sync VGA/HDMI', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(23, 'Echo Dot', 'Echo Dot (4ª Geração): Smart Speaker com Alexa - Cor Preta', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(24, 'Fonte de Alimentação', 'Fonte de Alimentação Para PC Bluecase BLU 350-K ATX 350W - Cor: Preta 115V/230V', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(25, 'Notebook Samsung', 'Notebook Samsung Book X30 cinza 15.6\", Intel Core i5 1135G7 8GB de RAM 256GB SSD, Intel Iris Xe Graphics G7 80EUs 60 Hz 1920x1080px Windows 10 Home', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(26, 'Kit Pistola Pintura', 'Kit Pistola Pintura Hvlp 600ml 2 Jogos Reparo 1.4 E 1.7mm', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(27, 'Resina Epoxi', 'Resina Epoxi Ohana Baixa Viscosidade C/ Endurecedor Kit1,5kg', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(28, 'Kit De Pintura De Parede', 'Kit De Pintura De Parede Completo Anti Respingo 5 Peças', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(29, 'Filtro Para Pistola De Pintura', 'Filtro Para Pistola De Pintura Universal - Mtx', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(30, 'Rolo De Pintura De Parede', 'Anti Respingo Com Reservatório', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(31, 'Serra Circular Elétrica', 'Serra Circular Elétrica Philco PSC01 185mm 1500W azul-celeste 220V', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(32, 'Kit Chaves Jogo Catraca', 'Kit Chaves Jogo Catraca Reversível Soquetes 40 Peças Maleta', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(33, 'Esmerilhadeira', 'Esmerilhadeira angular Philco Force PEM01 azul 850 W 127 V', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(34, 'Alicate Descascador', 'Alicate Descascador De Fios 8mm - Prof. Gross 0,05 A 8,0mm\r\n        ', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(35, 'Furadeira Elétrica Parafusadeira ', 'Furadeira elétrica parafusadeira Chevrolet GM3401 sem fio 1350rpm amarelo 110V/220V 12V', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(36, 'Som Automotivo ', 'Som automotivo Pioneer DEH S4280BT com USB e bluetooth', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(37, 'Capas Automotivo', 'Capas 100% Couro Automotivo Carro Fiat + Capa De Volante', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(38, 'Tapetes Do Jetta', 'Tapetes Do Jetta 2011 2012 2013 2014 2015 2016 2017 2018', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(39, 'Antena Eletrica', 'Antena Eletrica Interna Parabrisa Stetsom Star 900 Original', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(40, 'Condicionador De Metais', 'Condicionador De Metais Automotivo Motorkote 200ml', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(41, 'Kit 3 Brinquedo ', 'Kit 3 Brinquedo Martelo Trovão Marreta Máscara Plástica Thor', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(42, 'Carro Desportivo', 'Carro Desportivo De Controle Remoto Art Brink GP Monte Carlo Lamborghini 1:18 - Cor:vermelho', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(43, 'Carrinho Camaro', 'Carrinho Camaro Transformers Vira Robô Luz Som Bate Volta F', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(44, 'Boneca Nenem Menina', 'Boneca Nenem Menina Coleção Hair Soft Super Macia Milk Toys', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(45, 'Pista Para Carrinhos Hot Wheels', 'Pista Para Carrinhos Hot Wheels Grande Cidade Gg 160cm Br71', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(46, 'Cozinha Compacta', 'Cozinha Compacta 12 Portas 1 Gaveta C/ Tampo Clara - Poliman', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(47, 'Guarda Roupa Casal', 'Guarda Roupa Casal Com Espelho 3 Portas De Correr Lara Da', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(48, 'Sapateira Organizador', 'Sapateira Organizador Sapato Prateleira 12 Pares Desmontavel', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(49, 'Estante', 'Estante Aço Multi-uso 40cm 6 Prateleiras 30kg/prat Cinza', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(50, 'Cadeira Escritório', 'Cadeira Escritório Giratória 360º Total Preta Reclinável 155', '2022-02-21 06:17:18', '2022-02-21 06:17:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products_x_tags`
--

CREATE TABLE `products_x_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products_x_tags`
--

INSERT INTO `products_x_tags` (`id`, `product_id`, `tag_id`, `amount`) VALUES
(11, 11, 3, 3),
(12, 12, 3, 5),
(13, 13, 3, 4),
(14, 14, 3, 2),
(15, 15, 3, 8),
(16, 16, 4, 3),
(17, 17, 4, 5),
(18, 18, 4, 4),
(19, 19, 4, 2),
(20, 20, 4, 8),
(21, 21, 5, 2),
(22, 22, 5, 4),
(23, 23, 5, 10),
(24, 24, 5, 5),
(25, 25, 5, 4),
(26, 26, 6, 13),
(27, 27, 6, 10),
(28, 28, 6, 8),
(29, 29, 6, 17),
(30, 30, 6, 9),
(31, 31, 7, 5),
(32, 32, 7, 3),
(33, 33, 7, 7),
(34, 34, 7, 15),
(35, 35, 7, 19),
(36, 36, 8, 15),
(37, 37, 8, 3),
(38, 38, 8, 15),
(39, 39, 8, 2),
(40, 40, 8, 35),
(41, 41, 9, 20),
(42, 42, 9, 23),
(43, 43, 9, 21),
(44, 44, 9, 17),
(45, 45, 9, 35),
(46, 46, 10, 2),
(47, 47, 10, 3),
(48, 48, 10, 2),
(49, 49, 10, 5),
(50, 50, 10, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Eletrodomésticos', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(4, 'Jardinagem', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(5, 'Tecnologia/Eletronicos', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(6, 'Pintura', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(7, 'Ferramentas em Geral', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(8, 'Automotivos', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(9, 'Brinquedos', '2022-02-21 06:17:18', '2022-02-21 06:17:18'),
(10, 'Móveis', '2022-02-21 06:17:18', '2022-02-21 06:17:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@teste.com', NULL, '$2y$10$9jhnjmwgfwF.snJVNDe0uewKHEVqU0RXGjMlcCmPs4NQ8vrEiIHfa', NULL, '2022-02-21 06:17:18', '2022-02-21 06:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_x_tags`
--
ALTER TABLE `products_x_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_x_tags_product_id_foreign` (`product_id`),
  ADD KEY `products_x_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `products_x_tags`
--
ALTER TABLE `products_x_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `products_x_tags`
--
ALTER TABLE `products_x_tags`
  ADD CONSTRAINT `products_x_tags_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_x_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
