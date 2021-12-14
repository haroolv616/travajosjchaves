-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2021 a las 22:26:55
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre del Administrador',
  `usuario` varchar(100) NOT NULL COMMENT 'Nombre de Usuario',
  `password` varchar(100) NOT NULL COMMENT 'Contraseña'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `usuario`, `password`) VALUES
(2, 'Hiromi', 'Hiromi', '1327');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre de la Historia',
  `imagen` longblob NOT NULL COMMENT 'Portada',
  `archivo` varchar(500) NOT NULL COMMENT 'Archivo PDF'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `nombre`, `imagen`, `archivo`) VALUES
(20, 'El Principito', 0x312e6a7067, 'El_Principito.pdf'),
(21, 'El Cuento de otro Dia', 0x312e6a7067, 'El_Principito.pdf'),
(22, 'El Principito', 0x706f7274616461612e6a7067, 'El_Principito.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre del Usuario',
  `apellido` varchar(100) NOT NULL COMMENT 'Apellidos del Usuario',
  `correo` varchar(100) NOT NULL COMMENT 'Correo del Usuario',
  `usuario` varchar(100) NOT NULL COMMENT 'Usuario',
  `password` varchar(100) NOT NULL COMMENT 'Contraseña'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `usuario`, `password`) VALUES
(2, 'Hiromi', 'Olivera Nuñez', 'hiro@gmail.com', 'Hiromi', '1234567'),
(3, 'Jose luis', 'Chavez Gomez', 'iscjoseluis@gmail.com', 'Chavez', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
