-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2023 a las 01:06:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elecciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `id_can` int(11) NOT NULL,
  `cedula_can` varchar(100) NOT NULL,
  `dignidad_can` varchar(200) NOT NULL,
  `apellidos_can` varchar(500) NOT NULL,
  `nombres_can` varchar(500) NOT NULL,
  `edad_can` int(11) NOT NULL,
  `movimiento_can` varchar(500) NOT NULL,
  `ideologia_can` varchar(200) NOT NULL,
  `latitud_can` varchar(500) NOT NULL,
  `longitud_can` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id_can`, `cedula_can`, `dignidad_can`, `apellidos_can`, `nombres_can`, `edad_can`, `movimiento_can`, `ideologia_can`, `latitud_can`, `longitud_can`) VALUES
(1, '0750520967', 'Presidente', 'Asanza Orozco', 'Carlitos Javier', 22, 'Rojo', 'Izquierda', '-3.2555484807783377', '-79.95496773453053'),
(2, '077777777', 'Asambleista Nacional', 'Tenelema', 'Steven', 22, 'PSC', 'Izquierda', '-0.9209844158611291', '-78.63180001872291'),
(7, '12345678', 'Presidente', 'Quiroga', 'Chanel', 22, 'Naranja', 'Derecha', '-0.5888187759734208', '-79.51313284327163'),
(8, '0999999999', 'Asambleista Provincial', 'Ortiz ', 'Maraya', 20, 'Anarquismo', 'Izquierda', '-0.03916417147012734', '-78.45530255064953'),
(9, '0701928374', 'Presidente', 'Orozco Bustamante', 'Javier Alexander', 30, 'Naranja', 'Derecha', '-1.659986429986395', '-78.66416930208102'),
(10, '0813282736', 'Presidente', 'Palomo Criollo', 'Kevin Alexander', 40, 'El Criollo', 'Izquierda', '-0.2911274017189521', '-78.49500550040696'),
(11, '1234567890', 'Presidente', 'Asanza Quiroga', 'Zeus Hades', 1, 'Gatuno', 'Derecha', '-0.987454131121444', '-91.00583615542976'),
(16, '0750520967', 'Asambleista Nacional', 'Asanza Orozco', 'Carlos Javier', 22, 'PSC', 'Derecha', '-0.6876505531929249', '-90.96566417274992');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id_can`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id_can` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
