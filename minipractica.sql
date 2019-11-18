-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2019 a las 14:46:58
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `destinia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `minipractica`
--

CREATE TABLE `minipractica` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `minipractica`
--

INSERT INTO `minipractica` (`id`, `nombre`) VALUES
(1, 'jorge'),
(2, 'jorge2'),
(3, 'jorge3'),
(4, 'jorge4'),
(5, 'jorge5'),
(6, 'jorge6'),
(7, 'jorge7'),
(8, 'jorge8'),
(9, 'jorge9'),
(10, 'jorge10'),
(11, 'jorge11'),
(12, 'jorge12'),
(13, 'jorge13'),
(14, 'jorge14'),
(15, 'jorge15'),
(16, 'jorge16'),
(17, 'jorge17'),
(18, 'jorge18'),
(19, 'jorge19'),
(20, 'jorge20'),
(21, 'jorge22'),
(22, 'jorge23'),
(23, 'joge24'),
(24, 'joge25'),
(25, 'joge26'),
(26, 'joge27'),
(27, 'joge28'),
(28, 'joge29'),
(29, 'joge30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `minipractica`
--
ALTER TABLE `minipractica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `minipractica`
--
ALTER TABLE `minipractica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
