-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2021 a las 23:48:13
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones`
--

CREATE TABLE `capacitaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `cuerpo_capacitacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_capacitacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_capacitacion` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `capacitaciones`
--

INSERT INTO `capacitaciones` (`id`, `cuerpo_capacitacion`, `tipo_capacitacion`, `fecha_capacitacion`, `created_at`, `updated_at`) VALUES
(1, 'prueba', 'prueba', '2002-04-03', '2021-02-25 23:52:47', '2021-02-25 23:52:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manuales`
--

CREATE TABLE `manuales` (
  `id_manual` int(10) UNSIGNED NOT NULL,
  `cuerpo_manual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_manual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_manual` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_28_135800_create_novedades_table', 1),
(5, '2020_11_05_132429_create_capacitaciones_table', 1),
(6, '2020_11_27_145225_create_manuales', 1),
(7, '2020_11_28_005149_create_pqrs', 1),
(8, '2020_12_22_193707_create_roles_tables', 1),
(9, '2021_01_06_135948_create_vacaciones', 1),
(10, '0000_00_00_000000_create_websockets_statistics_entries_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(10) UNSIGNED NOT NULL,
  `cuerpo_novedad` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_novedad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_novedad` date NOT NULL,
  `imagen_novedad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `cuerpo_novedad`, `tipo_novedad`, `fecha_novedad`, `imagen_novedad`, `created_at`, `updated_at`) VALUES
(1, 'PRUEBA', 'Lorem Ipsum is simply dummy', '2021-02-26', '1614275769empresa-2-e1551381652195.jpg', '2021-02-25 22:56:09', '2021-02-25 22:56:09'),
(2, 'PRUEBA', 'Lorem Ipsum is simply dummy', '2021-02-26', '1614275863empresa-2-e1551381652195.jpg', '2021-02-25 22:57:43', '2021-02-25 22:57:43'),
(3, 'prueba', 'prueba', '2001-04-03', '1614275976empresa-2-e1551381652195.jpg', '2021-02-25 22:59:36', '2021-02-25 22:59:36'),
(4, 'prueba', 'Lorem Ipsum is simply dummy text', '2021-02-10', '1614276142empresa-2-e1551381652195.jpg', '2021-02-25 23:02:22', '2021-02-25 23:02:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE `pqrs` (
  `id` int(10) UNSIGNED NOT NULL,
  `cuerpo_pqrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_pqrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pqrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoid_pqrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroid_pqrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_pqrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiposolicitud_pqrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solicitud_pqrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido_pqrs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_pqrs` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pqrs`
--

INSERT INTO `pqrs` (`id`, `cuerpo_pqrs`, `apellido_pqrs`, `email_pqrs`, `tipoid_pqrs`, `numeroid_pqrs`, `telefono_pqrs`, `tiposolicitud_pqrs`, `solicitud_pqrs`, `contenido_pqrs`, `fecha_pqrs`, `created_at`, `updated_at`) VALUES
(1, 'Brandon', 'Bautista Santana', 'brandon@gmail.com', '1', '1414141', '32087451622', '2', 'Nomina', 'hola', '2020-12-28', '2021-01-20 19:34:18', '2021-01-20 19:34:18'),
(2, 'Brandon', 'Bautista Santana', 'brandon@gmail.com', '3', '1000861061', '3208451250', '3', 'gfhfgh', 'osgual', '2021-01-12', '2021-01-20 19:38:23', '2021-01-20 19:38:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'administrador', NULL, '2021-02-25 22:28:11', '2021-02-25 22:28:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(3, 1, '2021-02-25 22:31:49', '2021-02-25 22:31:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_cumpleanios` date DEFAULT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `fecha_cumpleanios`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'william', 'orjuelaba2031@gmail.com', '2021-02-02', NULL, NULL, '$2y$10$joBWduD42S801COrbfhCUuiGxBET0MoXOIMuKr.PHES7BS6E30ncu', NULL, '2021-01-20 19:39:29', '2021-02-24 22:29:24'),
(2, 'pepe', 'pepe@pepe.p', NULL, NULL, NULL, '$2y$10$Kti93PzsIHGmu.OT6PIPTOym/A8Jubv8Q8Mi3nVAQQYSnwPUi0h4i', NULL, '2021-01-22 19:14:53', '2021-01-22 19:14:53'),
(3, 'williamo', 'admin@gmail.com', NULL, NULL, NULL, '$2y$10$Z3iXwoWcNh2TZHLbTN4j7eHGG7qwhXmawecKuJR9qxV2DKjYAmZkW', NULL, '2021-02-06 18:58:03', '2021-02-06 18:58:03'),
(4, 'Alejandro45', 'william@william.com', NULL, NULL, NULL, '$2y$10$ayYfiTuDYXUxSmWe98DxBu0GEbRtqOBlZnubyg2KMZXneMmc5aCeO', NULL, '2021-02-12 18:56:11', '2021-02-12 18:56:11'),
(5, 'wilmar ferrer', 'wilmar@gmail.com', NULL, NULL, NULL, '$2y$10$0DwRAyWChlMzNASj0uJ9juwMkczLs/0jF5ykPrgMspdZSXENRcQSy', NULL, '2021-02-22 18:44:12', '2021-02-22 18:44:12'),
(8, 'alejandro', 'alejandro@gmail.com', '2001-04-03', '1614267557.jpg', NULL, '123456789', NULL, '2021-02-25 20:39:17', '2021-02-25 20:39:17'),
(9, 'prueba', 'prueba@gmail.com', '2001-04-03', '1614269428.jpg', NULL, '123456789', NULL, '2021-02-25 21:10:28', '2021-02-25 21:10:28'),
(10, 'sara', 'sara1aA2@gmail.com', '2009-04-03', '1614290598.jpg', NULL, '$2y$10$IBZg1zT8PuEc9/2ECfYhqOW3pBYwes7dlZsmyKz2Ia6Xx9m8Y9nXe', NULL, '2021-02-25 22:04:40', '2021-02-26 03:03:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones`
--

CREATE TABLE `vacaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cuerpo_vacaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_vacaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipsolicitud_vacaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_vacaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_vacaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vacaciones` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vacaciones`
--

INSERT INTO `vacaciones` (`id`, `cuerpo_vacaciones`, `apellido_vacaciones`, `tipsolicitud_vacaciones`, `telefono_vacaciones`, `area_vacaciones`, `fecha_vacaciones`, `created_at`, `updated_at`) VALUES
(2, 'Nicolas', 'Orjuela', 'vacaciones', '301564645', 'Desarollo', '2021-02-01', '2021-02-01 18:11:06', '2021-02-01 18:11:06'),
(3, 'wilmar alejandro', 'ferrer', 'Revisado', '323232323323', 'Mantenimiento', '2021-02-26', '2021-02-01 20:41:41', '2021-02-12 18:57:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `manuales`
--
ALTER TABLE `manuales`
  ADD PRIMARY KEY (`id_manual`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `manuales`
--
ALTER TABLE `manuales`
  MODIFY `id_manual` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
