-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-04-2013 a las 11:12:47
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `nueva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuários`
--

CREATE TABLE IF NOT EXISTS `usuários` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `usuários`
--

INSERT INTO `usuários` (`id`, `nombre`, `email`, `password`) VALUES
(2, 'javier1', 'javier1@gmail.com', '12345'),
(5, 'javier1', 'javier1@gmail.com', '12345'),
(6, 'javier1', 'javier1@gmail.com', '12345'),
(7, 'javier1', 'javier1@gmail.com', '12345'),
(8, 'javier1', 'javier1@gmail.com', '12345'),
(9, 'javier1', 'javier1@gmail.com', '12345'),
(10, 'javier1', 'javier1@gmail.com', '12345'),
(11, 'javier1', 'javier1@gmail.com', '12345'),
(12, 'javier1', 'javier1@gmail.com', '12345'),
(13, 'javier1', 'javier1@gmail.com', '12345'),
(14, 'javier1', 'javier1@gmail.com', '12345'),
(15, 'javier1', 'javier1@gmail.com', '12345'),
(16, 'javier1', 'javier1@gmail.com', '12345'),
(17, 'javier1', 'javier1@gmail.com', '12345'),
(18, 'javier1', 'javier1@gmail.com', '12345'),
(19, 'javier1', 'javier1@gmail.com', '12345'),
(20, 'javier1', 'javier1@gmail.com', '12345'),
(21, 'javier1', 'javier1@gmail.com', '12345'),
(22, 'javier1', 'javier1@gmail.com', '12345'),
(23, 'javier1', 'javier1@gmail.com', '12345'),
(24, 'javier1', 'javier1@gmail.com', '12345'),
(25, 'javier1', 'javier1@gmail.com', '12345'),
(26, 'javier1', 'javier1@gmail.com', '12345'),
(27, 'javier1', 'javier1@gmail.com', '12345'),
(28, 'javier1', 'javier1@gmail.com', '12345'),
(29, 'javier1', 'javier1@gmail.com', '12345'),
(30, 'javier1', 'javier1@gmail.com', '12345'),
(31, 'javier1', 'javier1@gmail.com', '12345'),
(32, 'javier1', 'javier1@gmail.com', '12345'),
(33, 'javier1', 'javier1@gmail.com', '12345'),
(34, 'javier1', 'javier1@gmail.com', '12345'),
(35, 'javier1', 'javier1@gmail.com', '12345'),
(36, 'javier1', 'javier1@gmail.com', '12345'),
(37, 'javier1', 'javier1@gmail.com', '12345'),
(38, 'javier1', 'javier1@gmail.com', '12345'),
(39, 'javier1', 'javier1@gmail.com', '12345'),
(40, 'javier1', 'javier1@gmail.com', '12345'),
(41, 'javier1', 'javier1@gmail.com', '12345'),
(42, 'javier1', 'javier1@gmail.com', '12345'),
(43, 'juana', 'juana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(44, 'brian1', 'brian1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(45, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(46, 'jose2', 'jose2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(47, 'marco', 'marco@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(48, 'Victorcb', 'victorcb@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(49, 'vivi1', 'vivi1@gmail.com', '07bb1eaebd050522c3afa2844e45067f'),
(50, 'eminem', 'eminem@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(51, 'soueu', 'soueu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(53, 'Juanito2', 'juanito2@gmail.com', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
