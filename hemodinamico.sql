-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2022 a las 18:03:17
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hemodinamico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `fluids`
--

CREATE TABLE `fluids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fluids`
--

INSERT INTO `fluids` (`id`, `hour`, `input`, `created_at`, `updated_at`) VALUES
(1, '07', 12.00, '2022-06-27 00:48:39', '2022-06-27 00:48:47'),
(2, '08', 10.00, '2022-06-27 00:48:39', '2022-06-27 05:21:30'),
(3, '09', 8.00, '2022-06-27 00:48:39', '2022-06-27 05:21:38'),
(4, '10', 44.00, '2022-06-27 00:48:39', '2022-06-27 20:08:55'),
(5, '11', 12.00, '2022-06-27 00:48:39', '2022-06-27 20:17:38'),
(6, '12', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(7, '13', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(8, '14', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(9, '15', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(10, '16', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(11, '17', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(12, '18', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(13, '19', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(14, '20', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(15, '21', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(16, '22', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(17, '23', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(18, '24', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(19, '00', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(20, '01', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(21, '02', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(22, '03', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(23, '04', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(24, '05', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39'),
(25, '06', NULL, '2022-06-27 00:48:39', '2022-06-27 00:48:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hours`
--

CREATE TABLE `hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_16_000409_create_fluids_table', 1),
(6, '2022_06_16_002229_create_hours_table', 1),
(7, '2022_06_20_171716_pacientes', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoDoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `regimen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoAfiliacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaIngreso` date NOT NULL,
  `auxiliarId` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `documento`, `tipoDoc`, `nombre`, `entidad`, `sexo`, `edad`, `regimen`, `tipoAfiliacion`, `cama`, `fechaIngreso`, `auxiliarId`, `estado`, `created_at`, `updated_at`) VALUES
(2, '10876472', 'Tarjeta de identidad', 'Daniela González', 'Nueva EPS', 'Femenino', 16, 'Contributivo', 'Beneficiario', '15', '2022-06-26', 4, 'Activo', '2022-06-27 05:29:59', '2022-06-27 05:29:59'),
(3, '1082764', 'Registro civil', 'Pedro Pérez', 'Otra', 'Masculino', 8, 'Vinculado', 'Beneficiario', '1', '2022-06-16', 1, 'Inactivo', '2022-06-27 05:33:12', '2022-06-28 03:18:12'),
(4, '6667', 'Cédula de ciudadanía', 'Verónica López López', 'Salud Total', 'Femenino', 40, 'Contributivo', 'Cotizante', '13', '2022-06-27', 6, 'Activo', '2022-06-28 03:16:06', '2022-06-28 03:16:06');

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
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identificacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `identificacion`, `fechaNac`, `sexo`, `email`, `email_verified_at`, `password`, `tipo_usuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wen Kexing', '1234', '1980-12-12', 'Masculino', 'we@gmail.com', NULL, '$2y$10$v66cg6VF.6Q2nse2jb3laO4/f.qE0pZEPtiNx3YgAHkdt.1k4.TW6', '0', NULL, '2022-06-27 00:48:20', '2022-06-27 00:48:20'),
(2, 'Charlie', '1002976', '2000-06-01', 'Masculino', 'charlie@gmail.com', NULL, '$2y$10$mBU1POlXYFQoBye1C.NRzeJ8ktzj4pR9p6FPrA5OZR.iRjwaLsxuu', '0', NULL, '2022-06-27 05:23:55', '2022-06-27 05:23:55'),
(3, 'Polar', '10602345', '1999-09-09', 'Masculino', 'polar@gmail.com', NULL, '$2y$10$XZsRvj3noqXGsGUyUb8R2.Y.9VoqVn1Zuwpsjnklw1lrQNqBGBNMG', '1', NULL, '2022-06-27 05:25:01', '2022-06-27 05:25:01'),
(4, 'Elisa', '100276451', '1992-02-05', 'Femenino', 'elis@gmail.com', NULL, '$2y$10$PkP.bj3qzcS.S.xhJPKF2OUukkr269ib.brOYs.ZuNE5.VIII8D6G', '0', NULL, '2022-06-27 05:26:15', '2022-06-27 05:26:15'),
(5, 'Koala', '1111111', '2022-05-31', 'Masculino', 'ko@gmail.com', NULL, '$2y$10$IfnQJqxULxoICDVo/nVc5.QdrjIq1plbSV2jdtdKUfdonZ2iUtJAa', '0', NULL, '2022-06-27 20:08:02', '2022-06-27 20:08:02'),
(6, 'Pez', '666', '2000-01-10', 'Masculino', 'pez@gmail.com', NULL, '$2y$10$2jlSbuyL4GKZyodPZTXvdujCiem4B2RGSMiSUIUOK0AoZhlFm/ZzW', '0', NULL, '2022-06-28 02:30:02', '2022-06-28 02:30:02'),
(7, 'Mariana', '654388', '1996-10-10', 'Femenino', 'mariana@gmail.com', NULL, '$2y$10$lTtCKT.6m80dFymjt.53/eBN.uvJ9Z9aZRvG1ArUVRRmztRgpkNg2', '0', NULL, '2022-06-28 20:24:26', '2022-06-28 20:24:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fluids`
--
ALTER TABLE `fluids`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pacientes_documento_unique` (`documento`),
  ADD KEY `pacientes_auxiliarid_foreign` (`auxiliarId`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fluids`
--
ALTER TABLE `fluids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `hours`
--
ALTER TABLE `hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_auxiliarid_foreign` FOREIGN KEY (`auxiliarId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
