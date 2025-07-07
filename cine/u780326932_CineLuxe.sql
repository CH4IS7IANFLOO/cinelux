-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-07-2025 a las 23:43:58
-- Versión del servidor: 10.11.10-MariaDB-log
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u780326932_CineLuxe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `email`, `password`, `fecha_registro`) VALUES
(1, 'favio.vives.ruidias@gmail.com', '$2y$10$QE8.SYPvKRo6g8HE1AthAex.aM8NnkAxxH9I1kCX0e.VEUNm1m/CO', '2025-06-04 06:34:15'),
(15, 'fruidias92@gmail.com', '$2y$10$sccYX7cr6eSQYFfudb3oced7kH8BwJVrVe9RxYmlIGzAJEuWPszda', '2025-06-04 07:52:06'),
(16, 'vergarayadriel@gmail.com', '$2y$10$6bA5.x4v4cXp2tujMT6UZOofM3aXHo6iLoQ9Dlsh8mGvwnPmqGtiu', '2025-06-04 07:55:02'),
(17, 'christian@gmail.com', '$2y$10$gLJXenEI9RMLL3cLpqgS2e1DtvgVkcxZbJHNX4T9fMyvpy3ZBBMpu', '2025-06-04 23:20:34'),
(18, 'vergaray@gmail.com', '$2y$10$oSEOKEpmoefdgGnzVFAh2e4F43HCOJ58nzs734k/TouSDDnWqUc6u', '2025-06-05 00:29:03'),
(19, 'adriel@gmail.com', '$2y$10$t4T0OOPb6gkk/I.L8riEOuZkAWrSB1rBOIi9IWwwwdmjUr6lsG.De', '2025-06-06 04:16:28'),
(20, 'abelitotorres828@gmail.com', '$2y$10$LH7cFczGsKzJrOeR.3jb9uT.DTJpiIaJoPjyYTou0m6oAP3l8ms/.', '2025-06-06 05:12:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombres_apellidos` varchar(200) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `asunto` varchar(150) NOT NULL,
  `motivo` text NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  `tarjeta_habiente` varchar(200) NOT NULL,
  `email_compra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `email`, `nombres_apellidos`, `dni`, `telefono`, `asunto`, `motivo`, `categoria`, `descripcion`, `fecha`, `tarjeta_habiente`, `email_compra`) VALUES
(1, 'favio.vives.ruidias@gmail.com', 'favio ruidias', '60812451', '901523986', 'robo', 'quiero matarme :( ', 'cine', 'hola xD', '2025-06-05 01:14:51', 'roberto xd', 'favio.vives.ruidias@gmail.com'),
(2, 'vergarayadriel@gmail.com', 'Arian', '4242423', '950538788', 'NINGUNO', 'NINGUNO', 'atc_ventas', 'NINGUNO', '2025-06-05 01:24:03', 'Arian Adriel Vergaray Galvez', 'vergarayadriel@gmail.com'),
(3, 'sales@support.webxtalk.com', 'Manshi', 'Txhni Cf', '9266141479', 'Lcwrybs vo', 'Hi,\r\n\r\nI\'m Manshi, working as an SEO Manager with 8 years of experience in this field.\r\n\r\nI checked your website you have an impressive site but ranking is not good on Google, Yahoo and Bing.\r\n\r\nLet me know if you are interested, I will send you our SEO Packages and price list.\r\n\r\nMay I send a quote! if interested?\r\n\r\nThank You!\r\nManshi Sharma\r\nSEO Expert', 'cine_seleccionado', 'Hi,\r\n\r\nI\'m Manshi, working as an SEO Manager with 8 years of experience in this field.\r\n\r\nI checked your website you have an impressive site but ranking is not good on Google, Yahoo and Bing.\r\n\r\nLet me know if you are interested, I will send you our SEO Packages and price list.\r\n\r\nMay I send a quote! if interested?\r\n\r\nThank You!\r\nManshi Sharma\r\nSEO Expert', '2025-06-05 07:27:50', 'Manshi', 'sales@support.webxtalk.com'),
(4, 'manshis@vgroupinc.com', '', 'Dhd Tz', '+16094004959', 'Y nqsj s fzvv', 'Hi devproyectos.com,\r\n\r\nI came across your website and wanted to check in — if you\'re looking to build a new website or improve your current one, we’d love to help at a very affordable cost.\r\n\r\nAt V Group, we create custom websites that are built to fit your business, not just templates. Whether you need a small update or a full website, we can help with:\r\n\r\n        •       Clean, modern design that’s easy for visitors to use\r\n        •       Mobile-friendly and loads fast\r\n        •       Easy to manage (we can build with or without WordPress)\r\n        •       Secure and optimized for performance\r\n        •       Ongoing support whenever you need it\r\n\r\nWe’ve helped many small businesses and startups get quality websites without spending a lot.\r\n \r\nTo learn more please visit us at: https://webstore.vgroup.net/\r\n\r\nLet me know if you’d like to talk — happy to share examples and a quick plan that fits your budget.\r\n \r\nBest regards,\r\nManshi\r\n', 'cine_seleccionado', 'Hi devproyectos.com,\r\n\r\nI came across your website and wanted to check in — if you\'re looking to build a new website or improve your current one, we’d love to help at a very affordable cost.\r\n\r\nAt V Group, we create custom websites that are built to fit your business, not just templates. Whether you need a small update or a full website, we can help with:\r\n\r\n        •       Clean, modern design that’s easy for visitors to use\r\n        •       Mobile-friendly and loads fast\r\n        •       Easy to manage (we can build with or without WordPress)\r\n        •       Secure and optimized for performance\r\n        •       Ongoing support whenever you need it\r\n\r\nWe’ve helped many small businesses and startups get quality websites without spending a lot.\r\n \r\nTo learn more please visit us at: https://webstore.vgroup.net/\r\n\r\nLet me know if you’d like to talk — happy to share examples and a quick plan that fits your budget.\r\n \r\nBest regards,\r\nManshi\r\n', '2025-06-05 16:18:24', ' Sharma', 'manshis@vgroupinc.com'),
(5, 'adan@sleeksend.center', 'Adan', 'Tqtsv fobf', '5033985000', 'Oa Fghq Uzjau', 'Hello,\r\n\r\nI just noticed your new site, devproyectos.com, and it looks fantastic!\r\n\r\nAs part of our initiative to support new website owners, I\'m excited to provide you with an email marketing tool. Think limitless subscribers and sending capabilities, at no cost, to assist you in building your audience. Normally, you\'d have to subscribe monthly for something like that, but there\'s a promotion for new site owners like you.\r\n\r\nIf you\'re keen on expanding your reach and reducing email marketing costs, take a look: https://sleeksend.center/\r\n\r\nGood luck with the launch!\r\n\r\nBest regards,\r\nAdan Rocher', 'cine', 'Hey,\r\n\r\nI just came across your new website, devproyectos.com, and it looks fantastic!\r\n\r\nAs part of our initiative to support new site owners, I\'m excited to provide you with an email marketing tool. Think unlimited subscribers and sends, at no cost, to get you started with building your audience. Normally, you\'d have to pay a monthly fee for something like that, but there\'s a special offer for new site owners like you.\r\n\r\nIf you\'re looking at growing your audience and cutting your email marketing costs, check it out: https://sleeksend.center/\r\n\r\nBest of luck with everything!\r\n\r\nBest regards,\r\nAdan Rocher', '2025-06-11 12:59:30', 'Adan Rocher', 'adan@sleeksend.center');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones`
--

CREATE TABLE `funciones` (
  `id` int(11) NOT NULL,
  `pelicula_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `sala` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `clasificacion` varchar(10) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `estado` enum('activa','inactiva') DEFAULT 'activa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacion`
--

CREATE TABLE `postulacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `distrito` varchar(100) NOT NULL,
  `tipo_trabajo` enum('full-time','part-time') NOT NULL,
  `estudios` text NOT NULL,
  `horarios` text NOT NULL,
  `disponibilidad` text NOT NULL,
  `experiencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulacion`
--

INSERT INTO `postulacion` (`id`, `nombre`, `telefono`, `correo`, `distrito`, `tipo_trabajo`, `estudios`, `horarios`, `disponibilidad`, `experiencia`) VALUES
(1, 'Arian', '950534313', 'vergaraygarcia@gmail', 'LIMA', 'part-time', 'a', 'a', 'a', 'a'),
(2, 'Arian', '950534313', 'vergaraygarcia@gmail', 'LIMA', 'part-time', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamaciones`
--

CREATE TABLE `reclamaciones` (
  `id` int(11) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `tipo_documento` enum('dni','pasaporte','cedula') NOT NULL,
  `numero_documento` varchar(50) NOT NULL,
  `fecha_reclamo` date NOT NULL,
  `nombres_apellidos` varchar(255) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `telefono_contacto` varchar(20) NOT NULL,
  `cine_seleccionado` enum('cineluxe megaplaza','proximamente') NOT NULL,
  `canal_ventas` varchar(100) NOT NULL,
  `servicio_producto` enum('boletos','alimentos') NOT NULL,
  `monto` decimal(10,2) DEFAULT NULL,
  `tipo_asunto` enum('reclamo','queja') NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reclamaciones`
--

INSERT INTO `reclamaciones` (`id`, `correo_electronico`, `tipo_documento`, `numero_documento`, `fecha_reclamo`, `nombres_apellidos`, `domicilio`, `telefono_contacto`, `cine_seleccionado`, `canal_ventas`, `servicio_producto`, `monto`, `tipo_asunto`, `descripcion`) VALUES
(1, 'adriel@gmail.com', 'dni', '90909090', '0001-09-11', 'Arian Adriel Vergaray Galvez', 'adada', '950534313', 'cineluxe megaplaza', 'web', 'alimentos', 90.00, 'reclamo', 'asas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `funcion_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `fecha_reserva` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('cliente','admin') DEFAULT 'cliente',
  `creado_en` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `rol`, `creado_en`) VALUES
(2, 'christian', 'christian@gmail.com', '$2y$10$.B/i0H88KeA3t/EuIqB80.Hg5RzTL.5fTcv19d1QVqYNPos.F1Avy', 'admin', '2025-06-05 04:34:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `pelicula` varchar(255) NOT NULL,
  `hora_funcion` varchar(50) NOT NULL,
  `asientos_seleccionados` text NOT NULL,
  `precio_total` decimal(10,2) NOT NULL,
  `impuesto` decimal(10,2) NOT NULL,
  `total_con_impuesto` decimal(10,2) NOT NULL,
  `metodo_pago` enum('tarjeta','paypal','yape','plin') NOT NULL,
  `informacion_contacto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelicula_id` (`pelicula_id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `funcion_id` (`funcion_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `funciones`
--
ALTER TABLE `funciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postulacion`
--
ALTER TABLE `postulacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD CONSTRAINT `funciones_ibfk_1` FOREIGN KEY (`pelicula_id`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`funcion_id`) REFERENCES `funciones` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
