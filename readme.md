# PROYECTO LARAVEL 5

Red social basica = 

...  0.1
-crear usuario
-Subir fotos
-ver fotos de otros users
-Likear fotos y comentar en ellas
-Borrar publicacion 

...   0.2
-mensajes (jquery) y notificaciones (pusher) 
-actualizacion al dar like


<!--  agregar mas acciones a futuro -->
# BD MySQL

-- phpMyAdmin SQL
-- version 5.0.2
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-03-2021 a las 06:37:00
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

--
-- Base de datos: `laravel_master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `nick` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `surname`, `nick`, `email`, `password`, `image`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'user', 'Víctor', 'Robles', 'victor', 'victor@victor.com', 'pass', '1610180834compra gamer.jpeg', '2020-12-16 05:00:42', '2020-12-16 05:00:42', NULL),
(2, 'user', 'Juan', 'Lopez', 'juanlopez', 'juan@juan.com', 'pass', '1610180834compra gamer.jpeg', '2020-12-16 05:00:42', '2020-12-16 05:00:42', NULL),
(3, 'user', 'Manolo', 'Garcia', 'manologarcia', 'manolo@manolo.com', 'pass', '1610180834compra gamer.jpeg', '2020-12-16 05:00:42', '2020-12-16 05:00:42', NULL),
(4, NULL, 'user', 'User Pruebba', 'Niqui', 'user@user.com', '$2y$10$Q5NyoZwiYuXWtE0DG6cqhOvbf2ehXEz.NQANz6fGJ7C.jQVE8Ml7m', '1610180834compra gamer.jpeg', '2020-12-16 09:56:19', '2021-03-06 06:00:28', NULL),
(5, NULL, 'User2', 'User2', 'NickUser2', 'user2@user2.com', '$2y$10$WAnM6IvJTqk1Odp2IsUjd.fCXH3772Yx1I8Frz9DNgKpHWEIYY/uG', '1610180834compra gamer.jpeg', '2020-12-16 10:22:11', '2020-12-16 10:22:11', NULL),
(6, 'user', 'Prueba211', 'Pruen2', '1', 'prueba2@prueba2.com1', '$2y$10$5QvlCyyOe6yl5dXyampKkucyNhXcpHoFY5bV5TClvse48.gsXgEmS', '1613940266arena.jpg', '2020-12-31 08:08:23', '2020-12-31 10:55:42', NULL),
(7, 'user', 'asdasd', 'asdasd', 'asdasdasdasd', 'asdasd@asdasd.com', '$2y$10$pFlCc7B71wDTjbn50uonVOKVcImtPAgo1/Phj8BvkwXi7dPDRdA6W', '1610180834compra gamer.jpeg', '2020-12-31 08:23:29', '2021-01-09 08:27:14', NULL),
(8, 'user', '123123', '123123', '1231231', '123123@1231231.com', '$2y$10$spcdXTm4A.t94tM9X1Tth.WmREmhjcFDybvTjC9O0yMxQ.812pewK', '1610180834compra gamer.jpeg', '2020-12-31 08:24:59', '2020-12-31 08:24:59', NULL),
(9, 'user', '11', '11', '11', '11@11.com', '$2y$10$8Kg5vTqRmll1ALIxGUDheey1RdktIjKUaqf8jVaQiBzF/pqskl4km', '1610180834compra gamer.jpeg', '2020-12-31 09:11:47', '2020-12-31 09:11:47', NULL),
(10, 'user', 'Damion Wisozk', 'Evelyn Champlin MD', 'Elijah Lemke', 'ukeeling@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1610180834compra gamer.jpeg', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'U9AlZVSBYJ'),
(11, 'user', 'Nathaniel Wisozk', 'Bernita Osinski', 'Aylin Cronin DDS', 'rico.wunsch@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', '0YZdLgcOPN'),
(12, 'user', 'Prof. Zachariah Senger DDS', 'Felix Quigley Jr.', 'Sherman Spinka II', 'myrtle63@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'QbXyyh2pRM'),
(13, 'user', 'Torrance Kirlin Jr.', 'Amanda Bayer', 'Ms. Idell Bahringer DDS', 'thurman82@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'JVRyrvj6qI'),
(14, 'user', 'General Okuneva', 'Dr. King Feil', 'Collin Bradtke Jr.', 'douglas.holly@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'R0NE5D0mjT'),
(15, 'user', 'Dr. Mckenna Kutch', 'Hattie Grady PhD', 'Courtney Beahan', 'sstroman@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', '3xtL1iKEfZ'),
(16, 'user', 'Isadore Koelpin IV', 'Jewel Schoen', 'Onie Windler', 'mya.gleichner@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'pUXnterw80'),
(17, 'user', 'Lue Erdman', 'Rachelle Veum', 'Sven Hermiston III', 'yolanda57@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'VpXyLgiM2V'),
(18, 'user', 'Meggie Upton', 'Forest Marvin', 'Miss Aleen Bruen', 'elvie43@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'X3WCxQj7K8'),
(19, 'user', 'Lenna Beier', 'Jackie Willms', 'Raina Zboncak', 'hudson.andy@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'X2YDJwfHwz'),
(20, 'user', 'Marian Wyman III', 'Jeremy Pfeffer', 'Hazle Lynch', 'runolfsson.derrick@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1613940266arena.jpg', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'MmV8BrVqzf'),
(21, 'user', 'Wilmer Grant', 'Maida Hahn', 'Bettye VonRueden', 'roxanne.smith@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1613940266arena.jpg', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'da7tSYyj2a'),
(22, 'user', 'Prof. Dell Kuphal V', 'Evie Jones DDS', 'Ryley Sipes DDS', 'eliza36@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'eNqF1CWZ7L'),
(23, 'user', 'Billie Kirlin', 'Milo Ondricka Sr.', 'Vidal Abbott MD', 'bechtelar.eliseo@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'Y261ihOUP1'),
(24, 'user', 'Prof. Gina Breitenberg', 'Nayeli Johnston Sr.', 'Gillian Thiel', 'delilah40@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1613940266arena.jpg', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'ukoI0mqtoq'),
(25, 'user', 'Mr. Sid Lind Jr.', 'Nicola Grady', 'Verlie Powlowski', 'chelsea40@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1613940266arena.jpg', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'NFfWAzPk9w'),
(26, 'user', 'Mafalda Denesik', 'Bobbie Runte', 'Yoshiko Pollich', 'gutmann.priscilla@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'UltFcMbYXb'),
(27, 'user', 'Mr. Clemens Morar', 'Imelda Wilderman', 'Kirk Lang', 'ritchie.alexie@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'I3LkXqxknu'),
(28, 'user', 'Prof. Nasir Morar', 'Mr. Santa Wisoky II', 'Mittie Gutkowski', 'pamela.bradtke@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'gy1TWKxT2a'),
(29, 'user', 'Tristin Buckridge', 'Prof. Dante Crooks', 'Elliott Lemke II', 'eankunding@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'hV6rBBplah'),
(30, 'user', 'Prof. Lacy Gislason III', 'Ms. Karen Dicki', 'Danielle Towne', 'fblick@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'BSQtuQKhFe'),
(31, 'user', 'Mr. Dillan Herman II', 'Prof. Alfonso Tromp III', 'Lauryn Rosenbaum IV', 'hhauck@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'HN1SLqh4oa'),
(32, 'user', 'Kayla Spencer', 'Doris Cummings', 'Stan Rau', 'chintz@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', '98OZtKwFfj'),
(33, 'user', 'Aiyana Daugherty', 'Prof. Pietro Schuppe', 'Dr. Laverna Spinka', 'aida.heidenreich@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'lYq6Bo3Dka'),
(34, 'user', 'Bethel Batz', 'Drew White', 'Christopher Hintz', 'gaylord.hayes@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'vvdi7Z2QLo'),
(35, 'user', 'Mazie Heathcote', 'Aubrey Spinka', 'Dr. Clovis Swift DDS', 'oceane31@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', '4l445Mx5VO'),
(36, 'user', 'Marty Krajcik I', 'Gavin Satterfield', 'Mrs. Winifred Hermann', 'grady.tierra@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', '7qDk3rWofQ'),
(37, 'user', 'Michele Jerde MD', 'Geraldine Lemke', 'Prudence Conn', 'zfeil@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', 'MXU1Bh57r7'),
(38, 'user', 'Mrs. Nicole Roob III', 'Pierce Schamberger MD', 'Mrs. Rosalinda Torp', 'stacey.parker@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', '9ug0kBfdl5'),
(39, 'user', 'Bria Stark I', 'Horacio Mante', 'Breanne Bayer', 'donato.blick@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/150', '2021-03-04 00:20:16', '2021-03-04 00:20:16', '3JCXjGZtlL');


--
-- Estructura de tabla para la tabla `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `image_id` int(255) DEFAULT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comments_users` (`user_id`),
  KEY `fk_comments_images` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `image_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Buena foto de familia!!', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(2, 2, 1, 'Buena foto de PLAYA!!', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(3, 2, 4, 'que bueno!!', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(4, 7, 5, 'Prueba 1', '2021-02-18 07:07:39', '2021-02-18 07:07:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `user_id`, `image_path`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'test.jpg', 'descripción de prueba 1', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(2, 1, 'playa.jpg', 'descripción de prueba 2', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(3, 1, 'arena.jpg', 'descripción de prueba 3', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(4, 3, 'familia.jpg', 'descripción de prueba 4', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(5, 7, '1610187082compragamer.jpeg', '1', '2021-01-09 10:11:22', '2021-01-09 10:11:22'),
(6, 7, '1614074172compragamer.jpeg', 'Compra gamer', '2021-02-21 20:44:26', '2021-02-23 10:01:08'),
(7, 4, '1615010400heart-red.png', 'Corazon', '2021-03-06 06:00:00', '2021-03-06 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `image_id` int(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_likes_users` (`user_id`),
  KEY `fk_likes_images` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `image_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(2, 2, 4, '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(3, 3, 1, '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(4, 3, 2, '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(5, 2, 1, '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(30, 7, 5, '2021-02-21 13:22:57', '2021-02-21 13:22:57'),
(31, 7, 4, '2021-02-21 13:47:11', '2021-02-21 13:47:11'),
(32, 7, 3, '2021-02-21 13:50:38', '2021-02-21 13:50:38'),
(33, 7, 2, '2021-02-21 13:50:39', '2021-02-21 13:50:39'),
(34, 7, 1, '2021-02-21 13:50:41', '2021-02-21 13:50:41'),
(36, 7, 6, '2021-03-06 04:48:17', '2021-03-06 04:48:17'),
(43, 4, 5, '2021-03-06 05:52:48', '2021-03-06 05:52:48'),
(44, 4, 6, '2021-03-06 05:52:51', '2021-03-06 05:52:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `from` bigint(20) NOT NULL,
  `to` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=173 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 'Fuga dolorem repellendus maiores et voluptatum facere rem.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(2, 2, 1, 'Eius molestiae illo ab facilis porro omnis.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(3, 8, 10, 'Minima vero a saepe.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(4, 3, 5, 'Iste quia rerum vel.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(5, 25, 14, 'Maiores nisi soluta nulla.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(6, 10, 20, 'Voluptatem debitis neque eos consequatur deleniti.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(7, 16, 12, 'Veniam et perspiciatis molestiae at ipsam.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(8, 30, 14, 'Iure impedit recusandae necessitatibus unde culpa assumenda quasi quam.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(9, 9, 20, 'Dolorem et doloremque ea cupiditate quia ullam nulla nesciunt.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(10, 8, 15, 'Incidunt nemo at nobis et rerum possimus.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(11, 13, 21, 'Placeat cumque vel deleniti et dolor exercitationem qui.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(12, 16, 2, 'Omnis eos dicta qui aut optio dolorem aut.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(13, 5, 14, 'Assumenda odit est rerum enim vitae eos repellendus.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(14, 21, 11, 'Autem reiciendis iste qui ex vero provident cum omnis.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(15, 24, 5, 'Nobis itaque ab molestiae quasi voluptatibus exercitationem.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(16, 3, 20, 'Tenetur quas blanditiis in qui.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(17, 22, 27, 'Rerum illum et optio quis.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(18, 27, 5, 'Quisquam et est qui consequatur aliquam.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(19, 10, 13, 'Dolores voluptas pariatur sit sint aliquam.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(20, 29, 12, 'Saepe laboriosam repellat totam officiis.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(21, 25, 29, 'Maxime sunt asperiores quis dignissimos nihil laudantium voluptatibus.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(22, 5, 4, 'Assumenda facilis quaerat vel error.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(23, 3, 25, 'Et molestiae sint et aut enim vero odio.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(24, 18, 6, 'Ut velit rerum exercitationem voluptatibus.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(25, 18, 15, 'Harum qui impedit minima itaque.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(26, 23, 15, 'Ea aliquid eum rerum alias.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(27, 6, 25, 'Dolore repellat voluptates dolore ratione dolor.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(28, 9, 13, 'Fugiat eaque sed totam mollitia.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(29, 5, 18, 'Aperiam vel qui praesentium est ad commodi ea.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(30, 10, 5, 'Qui rerum est voluptatem quo.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(31, 12, 1, 'Sunt autem quam debitis aut omnis necessitatibus.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(32, 2, 17, 'Illum unde quia perspiciatis beatae officiis aperiam.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(33, 5, 20, 'Nesciunt qui aspernatur sint modi et nobis optio voluptatem.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(34, 21, 24, 'Unde magni quia mollitia.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(35, 21, 12, 'Quos maxime excepturi temporibus deleniti.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(36, 17, 8, 'Aut pariatur ut vero et.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(37, 10, 22, 'Velit non vero sint praesentium.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(38, 1, 20, 'Sint sit corporis deleniti omnis officiis aut dolor.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(39, 24, 28, 'Assumenda dolores dolorem eaque illum.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(40, 4, 20, 'Quisquam fugit corporis minima quibusdam.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(41, 21, 30, 'Earum et sequi nobis veniam doloremque.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(42, 16, 9, 'Quia voluptatem voluptas molestiae aut minima.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(43, 27, 29, 'Rem aut rem incidunt.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(44, 24, 20, 'Sint quisquam voluptatum rerum repellat deserunt expedita mollitia.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(45, 13, 24, 'Incidunt laborum blanditiis laborum fugiat magnam sunt animi.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(46, 16, 28, 'Quia accusamus consequuntur sint.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(47, 30, 13, 'Eos occaecati sequi dolorem dolorem nulla quas natus.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(48, 21, 8, 'Rem autem eaque quia.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(49, 13, 17, 'Totam iusto non animi nam repellendus minus.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(50, 15, 29, 'Consequuntur perferendis perferendis totam odit.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(51, 28, 24, 'Placeat quia et reprehenderit repudiandae unde.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(52, 1, 2, 'Fugiat aliquam ipsam maiores.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(53, 21, 16, 'Beatae qui alias molestias aut eum qui.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(54, 13, 23, 'Quia vero odio omnis.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(55, 11, 3, 'Non molestiae et adipisci natus rerum sapiente.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(56, 12, 17, 'Aut qui vel iste ut sit.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(57, 3, 28, 'Quidem perspiciatis quod blanditiis et ea qui nihil sunt.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(58, 5, 28, 'Atque repudiandae asperiores amet sit.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(59, 23, 9, 'Veniam ut voluptatem aspernatur recusandae quo ea.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(60, 4, 18, 'Nesciunt accusantium voluptatem est ea minima.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(61, 2, 17, 'Sunt enim atque veritatis cupiditate iste eum.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(62, 15, 18, 'Vero est reiciendis dolore rerum officia.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(63, 21, 16, 'Autem nobis aliquid occaecati et eum molestias doloribus.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(64, 28, 19, 'Delectus harum est eum illum explicabo totam.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(65, 13, 22, 'Delectus est nulla voluptatem in illum id ratione commodi.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(66, 24, 29, 'Voluptatem officiis facilis quisquam dolor aspernatur nam consectetur est.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(67, 3, 13, 'Quia quis laboriosam sed.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(68, 4, 5, 'Autem molestiae quaerat odio id deserunt laudantium laborum.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(69, 6, 27, 'Doloribus sunt amet ut.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(70, 20, 8, 'Ut earum nihil voluptates qui delectus sequi aut quae.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(71, 22, 12, 'Occaecati in cum quidem quisquam quia.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(72, 4, 10, 'Neque veritatis vel dolor ut modi illum.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(73, 21, 26, 'Sed et iste eum quo accusamus beatae.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(74, 19, 26, 'Natus veniam deleniti expedita placeat eum enim.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(75, 20, 6, 'Voluptas occaecati debitis repudiandae aut commodi nesciunt dolores.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(76, 30, 19, 'Dolores laudantium sed soluta necessitatibus.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(77, 30, 1, 'Aut atque enim aliquid et voluptatem expedita.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(78, 4, 20, 'Non et odit est amet sit.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(79, 2, 28, 'Veniam officiis voluptatem ullam dolor quaerat.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(80, 14, 30, 'Cupiditate eius vel et sit qui ut nihil et.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(81, 3, 24, 'Officia est consequatur quam at iusto.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(82, 1, 9, 'Corporis neque blanditiis quia omnis voluptates ut.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(83, 15, 29, 'Inventore consectetur sit perspiciatis excepturi praesentium necessitatibus pariatur quibusdam.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(84, 4, 22, 'Expedita quidem rerum non commodi et qui.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(85, 11, 16, 'Aspernatur cum recusandae magnam.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(86, 19, 13, 'Recusandae velit explicabo magni accusantium blanditiis laboriosam.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(87, 30, 29, 'Minima ut deleniti ut cupiditate omnis eaque dolor.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(88, 21, 11, 'Earum perspiciatis et veniam quae placeat in.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(89, 17, 11, 'Earum quo sed aut ut.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(90, 16, 14, 'Quisquam et quod mollitia sed.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(91, 30, 23, 'Sint quis qui cupiditate exercitationem exercitationem dolores.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(92, 20, 5, 'Quasi consequuntur accusamus voluptatem est.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(93, 12, 9, 'Recusandae corporis nisi provident a voluptatem.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(94, 9, 23, 'Ut non qui modi eligendi ut dolorem rerum.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(95, 14, 11, 'Exercitationem ut totam iste.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(96, 8, 7, 'Enim cum et est fugiat ut.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(97, 7, 19, 'Ut accusantium ratione est eius.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(98, 29, 22, 'Sunt aut assumenda iste iure.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(99, 25, 16, 'Error vel eos officiis qui libero.', 0, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(100, 10, 30, 'Perferendis quasi consequatur dolores.', 1, '2021-03-04 03:17:21', '2021-03-04 03:17:21'),
(101, 7, 1, 'Hola', 0, '2021-03-05 23:07:11', '2021-03-05 23:07:11'),
(102, 7, 2, 'prueba', 0, '2021-03-05 23:07:41', '2021-03-05 23:07:41'),
(103, 7, 4, 'asd', 1, '2021-03-05 23:22:42', '2021-03-06 08:46:55'),
(104, 4, 7, 'hola', 1, '2021-03-05 23:23:21', '2021-03-06 08:47:01'),
(105, 7, 4, 'asd', 1, '2021-03-05 23:23:25', '2021-03-06 08:46:55'),
(106, 4, 7, 'asd', 1, '2021-03-05 23:27:06', '2021-03-06 08:47:01'),
(107, 4, 7, 'asd', 1, '2021-03-05 23:27:16', '2021-03-06 08:47:01'),
(108, 7, 6, 'asd', 0, '2021-03-05 23:27:46', '2021-03-05 23:27:46'),
(109, 7, 6, 'asd', 0, '2021-03-05 23:27:54', '2021-03-05 23:27:54'),
(110, 4, 5, 'asd', 0, '2021-03-05 23:53:05', '2021-03-05 23:53:05'),
(111, 7, 4, 'asd', 1, '2021-03-05 23:53:16', '2021-03-06 08:46:55'),
(112, 7, 4, 'asd', 1, '2021-03-05 23:53:46', '2021-03-06 08:46:55'),
(113, 4, 7, '1', 1, '2021-03-05 23:58:02', '2021-03-06 08:47:01'),
(114, 4, 2, 'asd', 0, '2021-03-06 00:56:05', '2021-03-06 00:56:05'),
(115, 4, 1, 'asd', 0, '2021-03-06 00:56:09', '2021-03-06 00:56:09'),
(116, 7, 4, 'asd', 1, '2021-03-06 00:56:38', '2021-03-06 08:46:55'),
(117, 4, 7, 'asd', 1, '2021-03-06 00:56:51', '2021-03-06 08:47:01'),
(118, 7, 4, 'asd', 1, '2021-03-06 00:57:07', '2021-03-06 08:46:55'),
(119, 7, 4, 'asd', 1, '2021-03-06 01:04:08', '2021-03-06 08:46:55'),
(120, 7, 4, 'a', 1, '2021-03-06 01:09:33', '2021-03-06 08:46:55'),
(121, 4, 7, 'a', 1, '2021-03-06 01:09:50', '2021-03-06 08:47:01'),
(122, 7, 4, 'a', 1, '2021-03-06 01:11:07', '2021-03-06 08:46:55'),
(123, 4, 7, 'asd', 1, '2021-03-06 01:11:11', '2021-03-06 08:47:01'),
(124, 7, 1, 'a', 0, '2021-03-06 01:30:01', '2021-03-06 01:30:01'),
(125, 4, 1, 'a', 0, '2021-03-06 01:30:13', '2021-03-06 01:30:13'),
(126, 4, 7, 'a', 1, '2021-03-06 01:41:49', '2021-03-06 08:47:01'),
(127, 4, 7, 'a', 1, '2021-03-06 01:42:01', '2021-03-06 08:47:01'),
(128, 4, 7, 'a', 1, '2021-03-06 03:45:00', '2021-03-06 08:47:01'),
(129, 4, 7, 'asd', 1, '2021-03-06 03:45:04', '2021-03-06 08:47:01'),
(130, 7, 4, '123', 1, '2021-03-06 03:45:17', '2021-03-06 08:46:55'),
(131, 4, 7, 'asd', 1, '2021-03-06 03:45:45', '2021-03-06 08:47:01'),
(132, 4, 7, 'asd', 1, '2021-03-06 04:05:18', '2021-03-06 08:47:01'),
(133, 4, 7, 'asd', 1, '2021-03-06 04:05:39', '2021-03-06 08:47:01'),
(134, 4, 7, 'asd', 1, '2021-03-06 05:19:56', '2021-03-06 08:47:01'),
(135, 4, 1, 'asd', 0, '2021-03-06 06:05:36', '2021-03-06 06:05:36'),
(136, 4, 1, 'asd', 0, '2021-03-06 06:06:12', '2021-03-06 06:06:12'),
(137, 4, 1, 'asd', 0, '2021-03-06 06:08:41', '2021-03-06 06:08:41'),
(138, 4, 7, 'asd', 1, '2021-03-06 06:09:40', '2021-03-06 08:47:01'),
(139, 7, 4, 'asd', 1, '2021-03-06 06:10:04', '2021-03-06 08:46:55'),
(140, 7, 4, 'asd', 1, '2021-03-06 06:10:33', '2021-03-06 08:46:55'),
(141, 4, 3, 'asd', 0, '2021-03-06 06:11:52', '2021-03-06 06:11:52'),
(142, 4, 6, 'a', 0, '2021-03-06 06:14:05', '2021-03-06 06:14:05'),
(143, 4, 6, 'a', 0, '2021-03-06 06:14:17', '2021-03-06 06:14:17'),
(144, 4, 5, '1', 0, '2021-03-06 06:14:34', '2021-03-06 06:14:34'),
(145, 4, 5, 'asd', 0, '2021-03-06 06:15:27', '2021-03-06 06:15:27'),
(146, 4, 5, 'asd', 0, '2021-03-06 06:19:32', '2021-03-06 06:19:32'),
(147, 4, 5, 'asd', 0, '2021-03-06 06:22:47', '2021-03-06 06:22:47'),
(148, 4, 5, 'asd', 0, '2021-03-06 06:22:59', '2021-03-06 06:22:59'),
(149, 4, 2, 'asd', 0, '2021-03-06 06:23:04', '2021-03-06 06:23:04'),
(150, 4, 6, 'a', 0, '2021-03-06 06:23:16', '2021-03-06 06:23:16'),
(151, 4, 1, 'a', 0, '2021-03-06 06:23:34', '2021-03-06 06:23:34'),
(152, 4, 2, 'a', 0, '2021-03-06 06:23:37', '2021-03-06 06:23:37'),
(153, 4, 1, 'asd', 0, '2021-03-06 06:25:54', '2021-03-06 06:25:54'),
(154, 4, 5, 'asd', 0, '2021-03-06 06:25:57', '2021-03-06 06:25:57'),
(155, 4, 7, 'asd', 1, '2021-03-06 06:32:49', '2021-03-06 08:47:01'),
(156, 4, 5, 'asd', 0, '2021-03-06 06:41:26', '2021-03-06 06:41:26'),
(157, 4, 1, 'a', 0, '2021-03-06 08:03:46', '2021-03-06 08:03:46'),
(158, 4, 1, 'a', 0, '2021-03-06 08:04:56', '2021-03-06 08:04:56'),
(159, 4, 2, 'a', 0, '2021-03-06 08:05:39', '2021-03-06 08:05:39'),
(160, 4, 1, 'a', 0, '2021-03-06 08:07:12', '2021-03-06 08:07:12'),
(161, 4, 7, 'a', 1, '2021-03-06 08:20:50', '2021-03-06 08:47:01'),
(162, 4, 7, 'hola', 1, '2021-03-06 08:20:58', '2021-03-06 08:47:01'),
(163, 4, 7, 'hola', 1, '2021-03-06 08:21:14', '2021-03-06 08:47:01'),
(164, 4, 7, 'noti', 1, '2021-03-06 08:21:18', '2021-03-06 08:47:01'),
(165, 7, 4, 'asd', 1, '2021-03-06 08:28:01', '2021-03-06 08:46:55'),
(166, 7, 4, 'asd', 1, '2021-03-06 08:28:16', '2021-03-06 08:46:55'),
(167, 7, 4, 'asd', 1, '2021-03-06 08:28:17', '2021-03-06 08:46:55'),
(168, 4, 7, 'asd', 1, '2021-03-06 08:28:24', '2021-03-06 08:47:01'),
(169, 4, 7, 'test remove', 1, '2021-03-06 08:46:18', '2021-03-06 08:47:01'),
(170, 4, 7, 'text}', 1, '2021-03-06 08:46:22', '2021-03-06 08:47:01'),
(171, 7, 4, 'test', 1, '2021-03-06 08:46:40', '2021-03-06 08:46:55'),
(172, 7, 4, 'remove notificaciones', 1, '2021-03-06 08:46:50', '2021-03-06 08:46:55');

-- --------------------------------------------------------


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_images` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_comments_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `fk_likes_images` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_likes_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;
