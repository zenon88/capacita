-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2021 a las 21:40:40
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `capacita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Email_usuario` varchar(40) NOT NULL,
  `Nombre_usuario` varchar(60) NOT NULL,
  `Apellp_usuario` varchar(60) NOT NULL,
  `Apellm_usuario` varchar(60) NOT NULL,
  `Fecregistro_usuario` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`Id_usuario`, `Email_usuario`, `Nombre_usuario`, `Apellp_usuario`, `Apellm_usuario`, `Fecregistro_usuario`) VALUES
(6, 'zenon_1992@hotmail14.com', 'JUAN3', 'HERNANDEZ ', 'RAMIREZ', '2021-05-20 17:20:09'),
(8, 'zenosn_1992@hotmail.com', 'ZENON', 'HERNANDEZ ', 'RAMIREZ', '2021-05-20 17:26:59'),
(9, 'zenon_19922@hotmail.com', 'ZENON', 'HERNANDEZ ', 'RAMIREZ', '2021-05-20 17:29:28'),
(10, 'zenon_199ss2@hotmail.com', 'ZENON', 'RAMIREZ', 'RAMIREZ', '2021-05-20 17:30:53'),
(11, 'zenonss_1992@hotmail.com', 'ZENON', 'RAMIREZ', 'RAMIREZ', '2021-05-20 17:51:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
