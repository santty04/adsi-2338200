-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2022 a las 18:01:33
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `codigo` varchar(200) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `Nro_CREDITOS` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `Nro_ID` int(20) NOT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `codigo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decanos`
--

CREATE TABLE `decanos` (
  `cedula` varchar(20) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `decanos`
--

INSERT INTO `decanos` (`cedula`, `nombres`, `apellidos`, `celular`) VALUES
('105485448', 'Monica', 'Galindo Rueda', '3128231275'),
('1064933', 'Pedro', 'Florez', '3157864667'),
('1234234', 'julian', 'Parra', '3103216547'),
('1324459', 'Andrés', 'Véles', '3103858583'),
('3242344', 'Mario', 'Toro', '3008464647'),
('5373548', 'Diana', 'Sánchez', '3206766674'),
('5678546', 'Andrés', 'Vélez', '3126545678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `cedula` varchar(20) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `numero_fac` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Nro_Id` int(20) NOT NULL,
  `Nombres` varchar(30) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `numero` int(5) NOT NULL,
  `nombre_facultad` varchar(200) DEFAULT NULL,
  `ubicacion` varchar(200) DEFAULT NULL,
  `cedula_dec` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`numero`, `nombre_facultad`, `ubicacion`, `cedula_dec`) VALUES
(1, 'Sistemas', 'Bloque 3, piso2', '105485448'),
(2, 'Alimentos', 'Bloque 7, piso 12', '1064933'),
(3, 'Medicina', 'Bloque 3, piso 5', '1234234'),
(4, 'Turismo', 'Bloque 9, piso 1', '1324459'),
(5, 'Administracion', 'Bloque 5, piso 10', '3242344');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `Nro_inscripcion` int(20) NOT NULL,
  `codigo_ins` varchar(20) DEFAULT NULL,
  `Nro_Id` int(20) DEFAULT NULL,
  `periodo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`Nro_ID`),
  ADD KEY `cedula` (`cedula`),
  ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `decanos`
--
ALTER TABLE `decanos`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `numero_fac` (`numero_fac`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Nro_Id`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `cedula_dec` (`cedula_dec`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`Nro_inscripcion`),
  ADD KEY `codigo_ins` (`codigo_ins`),
  ADD KEY `Nro_Id` (`Nro_Id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `docentes` (`cedula`),
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`codigo`) REFERENCES `asignatura` (`codigo`);

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`numero_fac`) REFERENCES `facultad` (`numero`);

--
-- Filtros para la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD CONSTRAINT `facultad_ibfk_1` FOREIGN KEY (`cedula_dec`) REFERENCES `decanos` (`cedula`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`codigo_ins`) REFERENCES `asignatura` (`codigo`),
  ADD CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`Nro_Id`) REFERENCES `estudiante` (`Nro_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
