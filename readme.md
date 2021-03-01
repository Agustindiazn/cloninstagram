# PROYECTO LARAVEL 5

Red social basica = 
-crear usuario
-Subir fotos
-ver fotos de otros users
-Likear fotos y comentar en ellas
-Borrar publicacion 

<!-- agregar mas acciones a futuro -->
# BD MySQL

-- phpMyAdmin SQL
-- version 5.0.2
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel_master`
--

-- --------------------------------------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `user_id`, `image_path`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'test.jpg', 'descripción de prueba 1', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(2, 1, 'playa.jpg', 'descripción de prueba 2', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(3, 1, 'arena.jpg', 'descripción de prueba 3', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(4, 3, 'familia.jpg', 'descripción de prueba 4', '2020-12-16 05:00:42', '2020-12-16 05:00:42'),
(5, 7, '1610187082compragamer.jpeg', '1', '2021-01-09 10:11:22', '2021-01-09 10:11:22'),
(6, 7, '1614074172compragamer.jpeg', 'Compra gamer', '2021-02-21 20:44:26', '2021-02-23 10:01:08');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

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
(34, 7, 1, '2021-02-21 13:50:41', '2021-02-21 13:50:41');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `surname`, `nick`, `email`, `password`, `image`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'user', 'Víctor', 'Robles', 'victor', 'victor@victor.com', 'pass', NULL, '2020-12-16 05:00:42', '2020-12-16 05:00:42', NULL),
(2, 'user', 'Juan', 'Lopez', 'juanlopez', 'juan@juan.com', 'pass', NULL, '2020-12-16 05:00:42', '2020-12-16 05:00:42', NULL),
(3, 'user', 'Manolo', 'Garcia', 'manologarcia', 'manolo@manolo.com', 'pass', NULL, '2020-12-16 05:00:42', '2020-12-16 05:00:42', NULL),
(4, NULL, 'user', NULL, NULL, 'user@user.com', '$2y$10$Q5NyoZwiYuXWtE0DG6cqhOvbf2ehXEz.NQANz6fGJ7C.jQVE8Ml7m', NULL, '2020-12-16 09:56:19', '2020-12-16 09:56:19', NULL),
(5, NULL, 'User2', 'User2', 'NickUser2', 'user2@user2.com', '$2y$10$WAnM6IvJTqk1Odp2IsUjd.fCXH3772Yx1I8Frz9DNgKpHWEIYY/uG', NULL, '2020-12-16 10:22:11', '2020-12-16 10:22:11', NULL),
(6, 'user', 'Prueba211', 'Pruen2', '1', 'prueba2@prueba2.com1', '$2y$10$5QvlCyyOe6yl5dXyampKkucyNhXcpHoFY5bV5TClvse48.gsXgEmS', NULL, '2020-12-31 08:08:23', '2020-12-31 10:55:42', NULL),
(7, 'user', 'asdasd', 'asdasd', 'asdasdasdasd', 'asdasd@asdasd.com', '$2y$10$pFlCc7B71wDTjbn50uonVOKVcImtPAgo1/Phj8BvkwXi7dPDRdA6W', '1610180834compra gamer.jpeg', '2020-12-31 08:23:29', '2021-01-09 08:27:14', NULL),
(8, 'user', '123123', '123123', '1231231', '123123@1231231.com', '$2y$10$spcdXTm4A.t94tM9X1Tth.WmREmhjcFDybvTjC9O0yMxQ.812pewK', NULL, '2020-12-31 08:24:59', '2020-12-31 08:24:59', NULL),
(9, 'user', '11', '11', '11', '11@11.com', '$2y$10$8Kg5vTqRmll1ALIxGUDheey1RdktIjKUaqf8jVaQiBzF/pqskl4km', NULL, '2020-12-31 09:11:47', '2020-12-31 09:11:47', NULL);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
