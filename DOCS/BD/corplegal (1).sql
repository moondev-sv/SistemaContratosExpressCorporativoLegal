-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2019 a las 05:35:45
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `corplegal`
--
CREATE DATABASE IF NOT EXISTS `corplegal` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `corplegal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `ID_Cliente` int(255) NOT NULL AUTO_INCREMENT,
  `NomCli` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DuiCli` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `NitCli` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `TelCli` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `OficioCli` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `FNacCli` date DEFAULT NULL,
  `ID_Depto_FK` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ID_Munic_FK` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ID_DocIden_FK` int(11) DEFAULT NULL,
  `ID_Nacionalidad_FK` int(11) DEFAULT NULL,
  `ID_Genero_FK` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Cliente`),
  UNIQUE KEY `idCliente_UNIQUE` (`ID_Cliente`),
  KEY `fk_Cliente_Depto_idx` (`ID_Depto_FK`),
  KEY `fk_Cliente_Munic1_idx` (`ID_Munic_FK`),
  KEY `fk_Cliente_Tipo_DocIden1_idx` (`ID_DocIden_FK`),
  KEY `fk_Cliente_Nacionalidad1_idx` (`ID_Nacionalidad_FK`),
  KEY `fk_Cliente_Genero` (`ID_Genero_FK`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_Cliente`, `NomCli`, `DuiCli`, `NitCli`, `TelCli`, `OficioCli`, `FNacCli`, `ID_Depto_FK`, `ID_Munic_FK`, `ID_DocIden_FK`, `ID_Nacionalidad_FK`, `ID_Genero_FK`) VALUES
(0, 'SIN REGISTRO', 'SIN REGISTRO', 'SIN REGISTRO', 'SIN REGISTRO', 'SIN REGISTRO', '2019-05-05', '8', '210', 2, 1, 1),
(2, '?', 'test', '1234-5123352-213-2', '7777-7777', 'Abogado', '1990-02-17', '1', '101', 2, 1, 2),
(3, '', '', '', '', '', '0000-00-00', '', '', 1, 1, 1),
(4, '?', '98765432-1', '31234-12321-3211', '8888-8888', 'Jurado', '1990-02-17', '1', '102', 1, 1, 1),
(6, 'SEIKS', '12345678-9', '2131-312312-312-2', '74822740', 'Abogado', '2010-01-12', '1', '212', 2, 1, 1),
(7, 'Seiks', '31233422-2', '0203-050190-102-8', '74822740', 'AlbaÃ±il', '2000-03-12', '1', '101', 2, 1, 1),
(8, 'Seiks', '11111111-2', '1113-111111-111-1', '74822740', 'Artista', '2000-05-15', '1', '101', 2, 1, 1),
(9, 'Seiks', '31233922-2', '0203-050190-102-8', '74822740', 'Director', '1980-03-12', '4', '101', 1, 1, 1),
(10, 'Seiks', '31222922-2', '0203-050190-102-8', '74822740', 'Director', '1980-03-12', '4', '101', 1, 1, 1),
(12, 'MAURICIO ALFREDOASORELLANA ORELLANA', '12412224-2', '0203-050190-102-8', '74822740', 'Abogado', '2000-02-21', 'San Miguel', 'Las Mariasitas', 1, 1, 2),
(14, 'Seiks', '11111111-1', '2131-312312-312-2', '74822740', 'Abogado', '1970-02-12', '1', '211', 1, 1, 1),
(15, 'MAURICIO ALFREDO ORELLANA ORELLANA', '33333333-3', '2131-312312-312-2', '74822740', 'Licenciado', '1995-02-12', '1', '211', 1, 1, 1),
(16, 'FRANCISCO FLOREZ GUZMAN GUZMAN GUZMANMMMM', '33333133-3', '2131-312312-312-2', '74822740', 'Licenciado y notario', '1985-02-12', 'SantaAna', 'Santa Ana', 1, 1, 1),
(41, 'CLAUDIA MARIA MURILLO SANDOVAL', '02160019-0', '0210-110583-101-1', '74822740', 'ABOGADO Y NOTARIO', '1997-05-11', 'Santa Ana', 'Santa Ana', 1, 1, 2),
(42, 'WALTER NELSON ESCALANTE BLANCO', '02081257-4', '0612-300978-104-4', '1999779', 'ABOGADO ', '1978-10-30', '1', '211', 1, 1, 1),
(43, 'Seiks', '07142823-2', '1112-232134-213-3', '74822740', 'Militar', '1989-07-19', '1', '211', 1, 1, 1),
(44, 'Seiks', '31239423-1', '0612-300978-104-4', '74822740', 'DOCTORA', '1970-02-12', '1', '101', 1, 1, 2),
(45, 'Seiks', '12334222-2', '0203-050190-102-8', '74822740', 'Abogado', '1976-04-17', '1', '101', 1, 1, 1),
(46, 'SONIA ELIAS MARTINEZ PEREZ', '31239242-1', '0612-300978-104-4', '', 'DOCTORA', '1998-03-14', '1', '211', 1, 1, 1),
(47, 'Mauricio Antonio Liborio Martinez', '12222334-2', '0203-050190-102-8', '74822740', 'DOCTOR', '1990-03-10', '4', '101', 1, 1, 1),
(48, 'ANA MARTINA JIMENES GONZALES SUAREZ', '12345122-2', '0612-300978-104-4', '74822740', 'Artista', '1990-05-03', '3', '211', 1, 1, 2),
(49, 'JUANA JIMENES GONZALES SUAREZ', '31234444-2', '0612-300978-104-4', '74822740', 'Doctora', '1990-03-12', 'Santa Ana', 'Santa Ana', 1, 1, 2),
(50, 'Seiks test', '12332131234-2', '1112-232134-213-3', '74822740', 'Abogado', '2000-03-12', '1', '101', 2, 1, 2),
(51, 'JUAN ANGEL DE CERVANTES SAAVEDRA', '11111122-2', '1112-232134-213-3', '74822740', 'Abogado', '2000-03-12', 'Santa Ana', 'Santa Ana', 2, 1, 1),
(52, 'edith carolina mazariego avila', '04213919-6', '0203-050190-102-8', '', 'Estudiante', '1990-11-05', '8', '101', 1, 1, 2),
(53, 'gerson alberto martinez zometa', '03363093-1', '0210-070679-101-0', '', 'Jornalero', '1979-06-07', '1', '101', 1, 1, 1),
(54, 'JUAN MANNUAL VANEGAS MORAN', '12151334-2', '0203-050190-102-8', '74822740', 'Abogado', '1979-03-12', 'Santa Ana', 'Santa Ana', 1, 1, 1),
(55, 'Seiks test', '31239467-1', '0612-300978-104-4', '74822740', 'DOCTOR', '2010-03-12', '3', '101', 1, 1, 1),
(56, 'WILBER HERIBERTO GIRON RETANA', '05559724-8', '0210-150797-110-3', '', 'Estudiante', '1997-07-15', '9', '101', 1, 1, 1),
(57, 'JosÃ© Francisco Centeno CantÃ³n', '01313147-0', '0210-131266-104-9', '', 'Comerciante', '1966-12-03', '1', '211', 1, 1, 1),
(58, 'ANA GLORIA ESCOBAR CABRERA ', '01077145-9', '0210-120165-101-6', '', 'SECRETARIA', '1965-01-12', '1', '101', 1, 1, 2),
(59, 'MAURICIO ALFREDO ORELLANA ORELLANA', '13332334-2', '0203-050190-102-8', '74822740', 'Abogado', '1969-04-30', '1', '211', 1, 1, 1),
(60, 'Alejando Navas', '12331234-2', '0203-050190-102-8', '74822740', 'Abogado', '1997-07-19', '4', '101', 1, 1, 1),
(61, 'Wuchowsky', '12342313-5', '0612-300978-104-4', '74822740', 'Doctora', '1978-10-19', '3', '101', 1, 1, 1),
(62, 'Juancho', '12412411-3', '0612-300978-104-4', '74822740', 'Doctora', '1978-10-30', '3', '101', 1, 1, 1),
(63, 'MaritoRiverita', '12123334-2', '0203-050190-102-8', '74822740', 'Abogado', '1989-05-03', '4', '211', 1, 1, 1),
(65, 'Orellana', '12251545-2', '1113-111111-111-1', '74822740', 'DOCTOR', '2018-12-29', '1', '211', 1, 1, 1),
(67, 'mauricio mariya peÃ‘ateÃ± ortega', '12251545-1', '0612-300978-104-4', '74822740', 'DOCTOR', '2019-10-29', '1', '211', 1, 1, 1),
(68, 'Wuichix', 'duicito', '12312312312', '1231231231', 'Medico', '2019-06-20', 'Santa Anans', 'Marroco', 1, 1, 1),
(69, 'Eveline Gonzales', '32121321-1', '0203-050190-102-8', '', 'MecÃ¡nica', '1998-09-27', 'jocotera', 'san luis talpa', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `ID_Cont` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCont` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `ID_Usuario_FK` int(11) NOT NULL,
  `URL_contratoPDF` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_TIPO_CONTRA_FK` int(11) NOT NULL,
  `fkid_cliente1` int(11) NOT NULL,
  `fkid_cliente2` int(11) NOT NULL,
  PRIMARY KEY (`ID_Cont`),
  KEY `ID_USUARIO_FK_ve` (`ID_Usuario_FK`),
  KEY `ID_TCONT_FK` (`ID_TIPO_CONTRA_FK`),
  KEY `fkid_cliente1` (`fkid_cliente1`),
  KEY `fkid_cliente2` (`fkid_cliente2`)
) ENGINE=InnoDB AUTO_INCREMENT=1089 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`ID_Cont`, `NombreCont`, `Fecha`, `Hora`, `ID_Usuario_FK`, `URL_contratoPDF`, `ID_TIPO_CONTRA_FK`, `fkid_cliente1`, `fkid_cliente2`) VALUES
(1, 'Venta de Vehiculo', '2019-03-22', '16:29:03', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1.pdf', 1, 0, 0),
(2, 'Venta de Vehiculo', '2019-03-22', '16:29:03', 3, '', 1, 0, 0),
(3, 'Venta de Vehiculo', '2019-03-22', '16:29:03', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/3.pdf', 1, 0, 0),
(4, 'Venta de Vehiculo con Poder', '2019-03-22', '16:29:03', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/4.pdf', 1, 0, 0),
(7, 'TEST', '2019-03-13', '04:11:15', 2, 'TEST', 2, 0, 0),
(8, 'Arrendamiento', '2019-03-25', '14:19:03', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/8.pdf', 2, 0, 0),
(9, 'Venta de Vehiculo', '2019-03-25', '15:45:03', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/9.pdf', 1, 0, 0),
(10, 'Arrendamiento', '2019-03-27', '10:49:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/10.pdf', 2, 0, 0),
(11, 'Venta de Vehiculo', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/11.pdf', 1, 0, 0),
(12, 'Venta de Vehiculo', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/12.pdf', 1, 0, 0),
(13, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/13.pdf', 1, 0, 0),
(14, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/14.pdf', 1, 0, 0),
(15, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/15.pdf', 1, 0, 0),
(16, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/16.pdf', 1, 0, 0),
(17, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/17.pdf', 1, 0, 0),
(18, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/18.pdf', 1, 0, 0),
(19, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/19.pdf', 1, 0, 0),
(20, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/20.pdf', 1, 0, 0),
(21, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/21.pdf', 1, 0, 0),
(22, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/22.pdf', 1, 0, 0),
(23, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/23.pdf', 1, 0, 0),
(24, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/24.pdf', 1, 0, 0),
(25, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/25.pdf', 1, 0, 0),
(26, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/26.pdf', 1, 0, 0),
(27, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/27.pdf', 1, 0, 0),
(28, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/28.pdf', 1, 0, 0),
(29, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/29.pdf', 1, 0, 0),
(30, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/30.pdf', 1, 0, 0),
(31, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/31.pdf', 1, 0, 0),
(32, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/32.pdf', 1, 0, 0),
(33, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/33.pdf', 1, 0, 0),
(34, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/34.pdf', 1, 0, 0),
(35, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/35.pdf', 1, 0, 0),
(36, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/36.pdf', 1, 0, 0),
(37, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/37.pdf', 1, 0, 0),
(38, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/38.pdf', 1, 0, 0),
(39, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/39.pdf', 1, 0, 0),
(40, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/40.pdf', 1, 0, 0),
(41, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/41.pdf', 1, 0, 0),
(42, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/42.pdf', 1, 0, 0),
(43, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/43.pdf', 1, 0, 0),
(44, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/44.pdf', 1, 0, 0),
(45, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/45.pdf', 1, 0, 0),
(46, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/46.pdf', 1, 0, 0),
(47, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/47.pdf', 1, 0, 0),
(48, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/48.pdf', 1, 0, 0),
(49, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/49.pdf', 1, 0, 0),
(50, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/50.pdf', 1, 0, 0),
(51, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/51.pdf', 1, 0, 0),
(52, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/52.pdf', 1, 0, 0),
(53, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/53.pdf', 1, 0, 0),
(54, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/54.pdf', 1, 0, 0),
(55, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/55.pdf', 1, 0, 0),
(56, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/56.pdf', 1, 0, 0),
(57, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/57.pdf', 1, 0, 0),
(58, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/58.pdf', 1, 0, 0),
(59, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/59.pdf', 1, 0, 0),
(60, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/60.pdf', 1, 0, 0),
(61, 'Venta de Vehiculo con Poder', '2019-03-29', '11:39:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/61.pdf', 1, 0, 0),
(62, 'Venta de Vehiculo', '2019-04-01', '08:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/62.pdf', 1, 0, 0),
(63, 'Venta de Vehiculo', '2019-04-01', '08:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/63.pdf', 1, 0, 0),
(64, 'Venta de Vehiculo', '2019-04-01', '08:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/64.pdf', 1, 0, 0),
(65, 'Venta de Vehiculo', '2019-04-01', '08:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/65.pdf', 1, 0, 0),
(66, 'Venta de Vehiculo', '2019-04-01', '08:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/66.pdf', 1, 0, 0),
(67, 'Venta de Vehiculo', '2019-04-01', '08:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/67.pdf', 1, 0, 0),
(68, 'Venta de Vehiculo', '2019-04-01', '08:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/68.pdf', 1, 0, 0),
(69, 'Venta de Vehiculo con Poder', '2019-04-01', '08:32:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/69.pdf', 1, 0, 0),
(70, 'Arrendamiento', '2019-04-01', '08:42:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/70.pdf', 2, 0, 0),
(71, 'Arrendamiento', '2019-04-01', '08:42:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/71.pdf', 2, 0, 0),
(72, 'Arrendamiento', '2019-04-01', '08:52:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/72.pdf', 2, 0, 0),
(73, 'Arrendamiento', '2019-04-01', '08:52:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/73.pdf', 2, 0, 0),
(74, 'Arrendamiento', '2019-04-01', '08:52:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/74.pdf', 2, 0, 0),
(75, 'Arrendamiento', '2019-04-01', '08:52:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/75.pdf', 2, 0, 0),
(76, 'Poder para Venta de Vehiculo', '2019-04-01', '09:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/76.pdf', 2, 0, 0),
(77, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/77.pdf', 1, 0, 0),
(78, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/78.pdf', 1, 0, 0),
(79, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/79.pdf', 1, 0, 0),
(80, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/80.pdf', 1, 0, 0),
(81, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/81.pdf', 1, 0, 0),
(82, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/82.pdf', 1, 0, 0),
(83, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/83.pdf', 1, 0, 0),
(84, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/84.pdf', 1, 0, 0),
(85, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/85.pdf', 1, 0, 0),
(86, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/86.pdf', 1, 0, 0),
(87, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/87.pdf', 1, 0, 0),
(88, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/88.pdf', 1, 0, 0),
(89, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/89.pdf', 1, 0, 0),
(90, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/90.pdf', 1, 0, 0),
(91, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/91.pdf', 1, 0, 0),
(92, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/92.pdf', 1, 0, 0),
(93, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/93.pdf', 1, 0, 0),
(94, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/94.pdf', 1, 0, 0),
(95, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/95.pdf', 1, 0, 0),
(96, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/96.pdf', 1, 0, 0),
(97, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/97.pdf', 1, 0, 0),
(98, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/98.pdf', 1, 0, 0),
(99, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/99.pdf', 1, 0, 0),
(100, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/100.pdf', 1, 0, 0),
(101, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/101.pdf', 1, 0, 0),
(102, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/102.pdf', 1, 0, 0),
(103, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/103.pdf', 1, 0, 0),
(104, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/104.pdf', 1, 0, 0),
(105, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/105.pdf', 1, 0, 0),
(106, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/106.pdf', 1, 0, 0),
(107, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/107.pdf', 1, 0, 0),
(108, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/108.pdf', 1, 0, 0),
(109, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/109.pdf', 1, 0, 0),
(110, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/110.pdf', 1, 0, 0),
(111, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/111.pdf', 1, 0, 0),
(112, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/112.pdf', 1, 0, 0),
(113, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/113.pdf', 1, 0, 0),
(114, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/114.pdf', 1, 0, 0),
(115, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/115.pdf', 1, 0, 0),
(116, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/116.pdf', 1, 0, 0),
(117, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/117.pdf', 1, 0, 0),
(118, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/118.pdf', 1, 0, 0),
(119, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/119.pdf', 1, 0, 0),
(120, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/120.pdf', 1, 0, 0),
(121, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/121.pdf', 1, 0, 0),
(122, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/122.pdf', 1, 0, 0),
(123, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/123.pdf', 1, 0, 0),
(124, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/124.pdf', 1, 0, 0),
(125, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/125.pdf', 1, 0, 0),
(126, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/126.pdf', 1, 0, 0),
(127, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/127.pdf', 1, 0, 0),
(128, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/128.pdf', 1, 0, 0),
(129, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/129.pdf', 1, 0, 0),
(130, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/130.pdf', 1, 0, 0),
(131, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/131.pdf', 1, 0, 0),
(132, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/132.pdf', 1, 0, 0),
(133, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/133.pdf', 1, 0, 0),
(134, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/134.pdf', 1, 0, 0),
(135, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/135.pdf', 1, 0, 0),
(136, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/136.pdf', 1, 0, 0),
(137, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/137.pdf', 1, 0, 0),
(138, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/138.pdf', 1, 0, 0),
(139, 'Venta de Vehiculo', '2019-04-01', '09:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/139.pdf', 1, 0, 0),
(140, 'Venta de Vehiculo', '2019-04-01', '10:46:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/140.pdf', 1, 0, 0),
(141, 'Venta de Vehiculo', '2019-04-01', '10:46:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/141.pdf', 1, 0, 0),
(142, 'Venta de Vehiculo', '2019-04-01', '10:46:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/142.pdf', 1, 0, 0),
(143, 'Venta de Vehiculo', '2019-04-01', '10:46:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/143.pdf', 1, 0, 0),
(144, 'Venta de Vehiculo', '2019-04-01', '10:46:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/144.pdf', 1, 0, 0),
(145, 'Venta de Vehiculo', '2019-04-01', '10:46:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/145.pdf', 1, 0, 0),
(146, 'Venta de Vehiculo', '2019-04-01', '10:46:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/146.pdf', 1, 0, 0),
(147, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/147.pdf', 1, 0, 0),
(148, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/148.pdf', 1, 0, 0),
(149, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/149.pdf', 1, 0, 0),
(150, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/150.pdf', 1, 0, 0),
(151, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/151.pdf', 1, 0, 0),
(152, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/152.pdf', 1, 0, 0),
(153, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/153.pdf', 1, 0, 0),
(154, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/154.pdf', 1, 0, 0),
(155, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/155.pdf', 1, 0, 0),
(156, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/156.pdf', 1, 0, 0),
(157, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/157.pdf', 1, 0, 0),
(158, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/158.pdf', 1, 0, 0),
(159, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/159.pdf', 1, 0, 0),
(160, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/160.pdf', 1, 0, 0),
(161, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/161.pdf', 1, 0, 0),
(162, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/162.pdf', 1, 0, 0),
(163, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/163.pdf', 1, 0, 0),
(164, 'Poder para Venta de Vehiculo', '2019-04-01', '11:04:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/164.pdf', 2, 0, 0),
(165, 'Poder para Venta de Vehiculo', '2019-04-01', '11:04:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/165.pdf', 2, 0, 0),
(166, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/166.pdf', 1, 0, 0),
(167, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/167.pdf', 1, 0, 0),
(168, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/168.pdf', 1, 0, 0),
(169, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/169.pdf', 1, 0, 0),
(170, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/170.pdf', 1, 0, 0),
(171, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/171.pdf', 1, 0, 0),
(172, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/172.pdf', 1, 0, 0),
(173, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/173.pdf', 1, 0, 0),
(174, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/174.pdf', 1, 0, 0),
(175, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/175.pdf', 1, 0, 0),
(176, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/176.pdf', 1, 0, 0),
(177, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/177.pdf', 1, 0, 0),
(178, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/178.pdf', 1, 0, 0),
(179, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/179.pdf', 1, 0, 0),
(180, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/180.pdf', 1, 0, 0),
(181, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/181.pdf', 1, 0, 0),
(182, 'Poder para Venta de Vehiculo', '2019-04-01', '11:04:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/182.pdf', 2, 0, 0),
(183, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/183.pdf', 1, 0, 0),
(184, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/184.pdf', 1, 0, 0),
(185, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/185.pdf', 1, 0, 0),
(186, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/186.pdf', 1, 0, 0),
(187, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/187.pdf', 1, 0, 0),
(188, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/188.pdf', 1, 0, 0),
(189, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/189.pdf', 1, 0, 0),
(190, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/190.pdf', 1, 0, 0),
(191, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/191.pdf', 1, 0, 0),
(192, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/192.pdf', 1, 0, 0),
(193, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/193.pdf', 1, 0, 0),
(194, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/194.pdf', 1, 0, 0),
(195, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/195.pdf', 1, 0, 0),
(196, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/196.pdf', 1, 0, 0),
(197, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/197.pdf', 1, 0, 0),
(198, 'Venta de Vehiculo con Poder', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/198.pdf', 1, 0, 0),
(199, 'Venta de Vehiculo', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/199.pdf', 1, 0, 0),
(200, 'Venta de Vehiculo', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/200.pdf', 1, 0, 0),
(201, 'Venta de Vehiculo', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/201.pdf', 1, 0, 0),
(202, 'Venta de Vehiculo', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/202.pdf', 1, 0, 0),
(203, 'Venta de Vehiculo', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/203.pdf', 1, 0, 0),
(204, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/204.pdf', 1, 0, 0),
(205, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/205.pdf', 1, 0, 0),
(206, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/206.pdf', 1, 0, 0),
(207, 'Venta de Vehiculo', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/207.pdf', 1, 0, 0),
(208, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/208.pdf', 1, 0, 0),
(209, 'Venta de Vehiculo', '2019-04-01', '10:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/209.pdf', 1, 0, 0),
(210, 'Venta de Vehiculo', '2019-04-01', '15:30:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/210.pdf', 1, 0, 0),
(211, 'Venta de Vehiculo', '2019-04-01', '15:30:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/211.pdf', 1, 0, 0),
(212, 'Venta de Vehiculo', '2019-04-01', '15:30:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/212.pdf', 1, 0, 0),
(213, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/213.pdf', 1, 0, 0),
(214, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/214.pdf', 1, 0, 0),
(215, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/215.pdf', 1, 0, 0),
(216, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/216.pdf', 1, 0, 0),
(217, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/217.pdf', 1, 0, 0),
(218, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/218.pdf', 1, 0, 0),
(219, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/219.pdf', 1, 0, 0),
(220, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/220.pdf', 1, 0, 0),
(221, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/221.pdf', 1, 0, 0),
(222, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/222.pdf', 1, 0, 0),
(223, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/223.pdf', 1, 0, 0),
(224, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/224.pdf', 1, 0, 0),
(225, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/225.pdf', 1, 0, 0),
(226, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/226.pdf', 1, 0, 0),
(227, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/227.pdf', 1, 0, 0),
(228, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/228.pdf', 1, 0, 0),
(229, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/229.pdf', 1, 0, 0),
(230, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/230.pdf', 1, 0, 0),
(231, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/231.pdf', 1, 0, 0),
(232, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/232.pdf', 1, 0, 0),
(233, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/233.pdf', 1, 0, 0),
(234, 'Venta de Vehiculo con Poder', '2019-04-01', '14:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/234.pdf', 1, 0, 0),
(235, 'Venta de Vehiculo', '2019-04-01', '15:30:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/235.pdf', 1, 0, 0),
(236, 'Venta de Vehiculo', '2019-04-01', '15:30:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/236.pdf', 1, 0, 0),
(237, 'Venta de Vehiculo', '2019-04-03', '09:34:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/237.pdf', 1, 0, 0),
(238, 'Arrendamiento', '2019-04-03', '10:01:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/238.pdf', 2, 0, 0),
(239, 'Arrendamiento', '2019-04-03', '10:01:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/239.pdf', 2, 0, 0),
(240, 'Arrendamiento', '2019-04-03', '10:01:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/240.pdf', 2, 0, 0),
(241, 'Arrendamiento', '2019-04-03', '10:01:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/241.pdf', 2, 0, 0),
(242, 'Arrendamiento', '2019-04-03', '10:01:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/242.pdf', 2, 0, 0),
(243, 'Arrendamiento', '2019-04-03', '10:01:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/243.pdf', 2, 0, 0),
(244, 'Arrendamiento', '2019-04-03', '10:01:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/244.pdf', 2, 0, 0),
(245, 'Arrendamiento', '2019-04-03', '10:01:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/245.pdf', 2, 0, 0),
(246, 'Venta de Vehiculo', '2019-04-03', '09:34:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/246.pdf', 1, 0, 0),
(247, 'Venta de Vehiculo', '2019-04-03', '11:12:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/247.pdf', 1, 0, 0),
(248, 'Venta de Vehiculo', '2019-04-03', '11:12:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/248.pdf', 1, 0, 0),
(249, 'Venta de Vehiculo', '2019-04-03', '11:12:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/249.pdf', 1, 0, 0),
(250, 'Venta de Vehiculo', '2019-04-03', '11:12:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/250.pdf', 1, 0, 0),
(251, 'Venta de Vehiculo', '2019-04-03', '11:12:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/251.pdf', 1, 0, 0),
(252, 'Venta de Vehiculo', '2019-04-03', '11:36:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/252.pdf', 1, 0, 0),
(253, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/253.pdf', 1, 0, 0),
(254, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/254.pdf', 1, 0, 0),
(255, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/255.pdf', 1, 0, 0),
(256, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/256.pdf', 1, 0, 0),
(257, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/257.pdf', 1, 0, 0),
(258, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/258.pdf', 1, 0, 0),
(259, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/259.pdf', 1, 0, 0),
(260, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/260.pdf', 1, 0, 0),
(261, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/261.pdf', 1, 0, 0),
(262, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/262.pdf', 1, 0, 0),
(263, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/263.pdf', 1, 0, 0),
(264, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/264.pdf', 1, 0, 0),
(265, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/265.pdf', 1, 0, 0),
(266, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/266.pdf', 1, 0, 0),
(267, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/267.pdf', 1, 0, 0),
(268, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/268.pdf', 1, 0, 0),
(269, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/269.pdf', 1, 0, 0),
(270, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/270.pdf', 1, 0, 0),
(271, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/271.pdf', 1, 0, 0),
(272, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/272.pdf', 1, 0, 0),
(273, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/273.pdf', 1, 0, 0),
(274, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/274.pdf', 1, 0, 0),
(275, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/275.pdf', 1, 0, 0),
(276, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/276.pdf', 1, 0, 0),
(277, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/277.pdf', 1, 0, 0),
(278, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/278.pdf', 1, 0, 0),
(279, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/279.pdf', 1, 0, 0),
(280, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/280.pdf', 1, 0, 0),
(281, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/281.pdf', 1, 0, 0),
(282, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/282.pdf', 1, 0, 0),
(283, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/283.pdf', 1, 0, 0),
(284, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/284.pdf', 1, 0, 0),
(285, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/285.pdf', 1, 0, 0),
(286, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/286.pdf', 1, 0, 0),
(287, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/287.pdf', 1, 0, 0),
(288, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/288.pdf', 1, 0, 0),
(289, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/289.pdf', 1, 0, 0),
(290, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/290.pdf', 1, 0, 0),
(291, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/291.pdf', 1, 0, 0),
(292, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/292.pdf', 1, 0, 0),
(293, 'Venta de Vehiculo', '2019-04-03', '11:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/293.pdf', 1, 0, 0),
(294, 'Venta de Vehiculo', '2019-04-03', '15:34:04', 0, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/294.pdf', 1, 0, 0),
(295, 'Venta de Vehiculo', '2019-04-03', '19:17:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/295.pdf', 1, 0, 0),
(296, 'Venta de Vehiculo', '2019-04-03', '19:21:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/296.pdf', 1, 0, 0),
(297, 'Venta de Vehiculo', '2019-04-03', '19:21:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/297.pdf', 1, 0, 0),
(298, 'Venta de Vehiculo', '2019-04-03', '19:21:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/298.pdf', 1, 0, 0),
(299, 'Venta de Vehiculo', '2019-04-03', '19:17:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/299.pdf', 1, 0, 0),
(300, 'Venta de Vehiculo', '2019-04-03', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/300.pdf', 1, 0, 0),
(301, 'Venta de Vehiculo', '2019-04-03', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/301.pdf', 1, 0, 0),
(302, 'Venta de Vehiculo', '2019-04-03', '20:52:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/302.pdf', 1, 0, 0),
(303, 'Venta de Vehiculo', '2019-04-03', '22:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/303.pdf', 1, 0, 0),
(304, 'Venta de Vehiculo', '2019-04-03', '22:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/304.pdf', 1, 0, 0),
(305, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/305.pdf', 1, 0, 0),
(306, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/306.pdf', 1, 0, 0),
(307, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/307.pdf', 1, 0, 0),
(308, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/308.pdf', 1, 0, 0),
(309, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/309.pdf', 1, 0, 0),
(310, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/310.pdf', 1, 0, 0),
(311, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/311.pdf', 1, 0, 0),
(312, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/312.pdf', 1, 0, 0),
(313, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/313.pdf', 1, 0, 0),
(314, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/314.pdf', 1, 0, 0),
(315, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/315.pdf', 1, 0, 0),
(316, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/316.pdf', 1, 0, 0),
(317, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/317.pdf', 1, 0, 0),
(318, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/318.pdf', 1, 0, 0),
(319, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/319.pdf', 1, 0, 0),
(320, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/320.pdf', 1, 0, 0),
(321, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/321.pdf', 1, 0, 0),
(322, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/322.pdf', 1, 0, 0),
(323, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/323.pdf', 1, 0, 0),
(324, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/324.pdf', 1, 0, 0),
(325, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/325.pdf', 1, 0, 0),
(326, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/326.pdf', 1, 0, 0),
(327, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/327.pdf', 1, 0, 0),
(328, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/328.pdf', 1, 0, 0),
(329, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/329.pdf', 1, 0, 0),
(330, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/330.pdf', 1, 0, 0),
(331, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/331.pdf', 1, 0, 0),
(332, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/332.pdf', 1, 0, 0),
(333, 'Venta de Vehiculo', '2019-04-03', '22:27:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/333.pdf', 1, 0, 0),
(334, 'Venta de Vehiculo', '2019-04-04', '10:48:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/334.pdf', 1, 0, 0),
(335, 'Venta de Vehiculo', '2019-04-04', '10:51:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/335.pdf', 1, 0, 0),
(336, 'Venta de Vehiculo', '2019-04-05', '15:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/336.pdf', 1, 0, 0),
(337, 'Venta de Vehiculo', '2019-04-05', '15:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/337.pdf', 1, 0, 0),
(338, 'Venta de Vehiculo', '2019-04-05', '15:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/338.pdf', 1, 0, 0),
(339, 'Venta de Vehiculo', '2019-04-05', '15:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/339.pdf', 1, 0, 0),
(340, 'Venta de Vehiculo', '2019-04-05', '15:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/340.pdf', 1, 0, 0),
(341, 'Venta de Vehiculo', '2019-04-05', '15:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/341.pdf', 1, 0, 0),
(342, 'Venta de Vehiculo', '2019-04-05', '15:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/342.pdf', 1, 0, 0),
(343, 'Venta de Vehiculo', '2019-04-05', '15:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/343.pdf', 1, 0, 0),
(344, 'Venta de Vehiculo', '2019-04-05', '15:08:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/344.pdf', 1, 0, 0),
(345, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/345.pdf', 1, 0, 0),
(346, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/346.pdf', 1, 0, 0),
(347, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/347.pdf', 1, 0, 0),
(348, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/348.pdf', 1, 0, 0),
(349, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/349.pdf', 1, 0, 0),
(350, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/350.pdf', 1, 0, 0),
(351, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/351.pdf', 1, 0, 0),
(352, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/352.pdf', 1, 0, 0),
(353, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/353.pdf', 1, 0, 0),
(354, 'Venta de Vehiculo', '2019-04-07', '20:25:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/354.pdf', 1, 0, 0),
(355, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/355.pdf', 1, 0, 0),
(356, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/356.pdf', 1, 0, 0),
(357, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/357.pdf', 1, 0, 0),
(358, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/358.pdf', 1, 0, 0),
(359, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/359.pdf', 1, 0, 0),
(360, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/360.pdf', 1, 0, 0),
(361, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/361.pdf', 1, 0, 0),
(362, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/362.pdf', 1, 0, 0),
(363, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/363.pdf', 1, 0, 0),
(364, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/364.pdf', 1, 0, 0),
(365, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/365.pdf', 1, 0, 0),
(366, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/366.pdf', 1, 0, 0),
(367, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/367.pdf', 1, 0, 0),
(368, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/368.pdf', 1, 0, 0),
(369, 'Venta de Vehiculo con Poder', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/369.pdf', 1, 0, 0),
(370, 'Venta de Vehiculo con Poder', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/370.pdf', 1, 0, 0),
(371, 'Venta de Vehiculo con Poder', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/371.pdf', 1, 0, 0),
(372, 'Venta de Vehiculo con Poder', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/372.pdf', 1, 0, 0),
(373, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/373.pdf', 1, 0, 0),
(374, 'Venta de Vehiculo con Poder', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/374.pdf', 1, 0, 0),
(375, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/375.pdf', 1, 0, 0),
(376, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/376.pdf', 1, 0, 0),
(377, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/377.pdf', 1, 0, 0),
(378, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/378.pdf', 1, 0, 0),
(379, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/379.pdf', 1, 0, 0),
(380, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/380.pdf', 1, 0, 0),
(381, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/381.pdf', 1, 0, 0),
(382, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/382.pdf', 1, 0, 0),
(383, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/383.pdf', 1, 0, 0),
(384, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/384.pdf', 1, 0, 0),
(385, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/385.pdf', 1, 0, 0),
(386, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/386.pdf', 1, 0, 0),
(387, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/387.pdf', 1, 0, 0),
(388, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/388.pdf', 1, 0, 0),
(389, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/389.pdf', 1, 0, 0);
INSERT INTO `contratos` (`ID_Cont`, `NombreCont`, `Fecha`, `Hora`, `ID_Usuario_FK`, `URL_contratoPDF`, `ID_TIPO_CONTRA_FK`, `fkid_cliente1`, `fkid_cliente2`) VALUES
(390, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/390.pdf', 1, 0, 0),
(391, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/391.pdf', 1, 0, 0),
(392, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/392.pdf', 1, 0, 0),
(393, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/393.pdf', 1, 0, 0),
(394, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/394.pdf', 1, 0, 0),
(395, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/395.pdf', 1, 0, 0),
(396, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/396.pdf', 1, 0, 0),
(397, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/397.pdf', 1, 0, 0),
(398, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/398.pdf', 1, 0, 0),
(399, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/399.pdf', 1, 0, 0),
(400, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/400.pdf', 1, 0, 0),
(401, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/401.pdf', 1, 0, 0),
(402, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/402.pdf', 1, 0, 0),
(403, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/403.pdf', 1, 0, 0),
(404, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/404.pdf', 1, 0, 0),
(405, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/405.pdf', 1, 0, 0),
(406, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/406.pdf', 1, 0, 0),
(407, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/407.pdf', 1, 0, 0),
(408, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/408.pdf', 1, 0, 0),
(409, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/409.pdf', 1, 0, 0),
(410, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/410.pdf', 1, 0, 0),
(411, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/411.pdf', 1, 0, 0),
(412, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/412.pdf', 1, 0, 0),
(413, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/413.pdf', 1, 0, 0),
(414, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/414.pdf', 1, 0, 0),
(415, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/415.pdf', 1, 0, 0),
(416, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/416.pdf', 1, 0, 0),
(417, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/417.pdf', 1, 0, 0),
(418, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/418.pdf', 1, 0, 0),
(419, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/419.pdf', 1, 0, 0),
(420, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/420.pdf', 1, 0, 0),
(421, 'Venta de Vehiculo', '2019-04-08', '00:49:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/421.pdf', 1, 0, 0),
(422, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/422.pdf', 1, 0, 0),
(423, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/423.pdf', 1, 0, 0),
(424, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/424.pdf', 1, 0, 0),
(425, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/425.pdf', 1, 0, 0),
(426, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/426.pdf', 1, 0, 0),
(427, 'Venta de Vehiculo con Poder', '2019-04-08', '05:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/427.pdf', 1, 0, 0),
(428, 'Venta de Vehiculo con Poder', '2019-04-08', '05:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/428.pdf', 1, 0, 0),
(429, 'Venta de Vehiculo con Poder', '2019-04-08', '05:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/429.pdf', 1, 0, 0),
(430, 'Venta de Vehiculo con Poder', '2019-04-08', '03:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/430.pdf', 1, 0, 0),
(431, 'Venta de Vehiculo con Poder', '2019-04-08', '05:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/431.pdf', 1, 0, 0),
(432, 'Venta de Vehiculo con Poder', '2019-04-08', '05:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/432.pdf', 1, 0, 0),
(433, 'Venta de Vehiculo con Poder', '2019-04-08', '05:10:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/433.pdf', 1, 0, 0),
(434, 'Venta de Vehiculo con Poder', '2019-04-08', '05:52:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/434.pdf', 1, 0, 0),
(435, 'Venta de Vehiculo con Poder', '2019-04-08', '05:52:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/435.pdf', 1, 0, 0),
(436, 'Venta de Vehiculo con Poder', '2019-04-08', '05:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/436.pdf', 1, 0, 0),
(437, 'Venta de Vehiculo con Poder', '2019-04-08', '05:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/437.pdf', 1, 0, 0),
(438, 'Venta de Vehiculo con Poder', '2019-04-08', '05:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/438.pdf', 1, 0, 0),
(439, 'Venta de Vehiculo con Poder', '2019-04-08', '05:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/439.pdf', 1, 0, 0),
(440, 'Venta de Vehiculo con Poder', '2019-04-08', '05:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/440.pdf', 1, 0, 0),
(441, 'Venta de Vehiculo con Poder', '2019-04-08', '06:34:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/441.pdf', 1, 0, 0),
(442, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/442.pdf', 1, 0, 0),
(443, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/443.pdf', 1, 0, 0),
(444, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/444.pdf', 1, 0, 0),
(445, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/445.pdf', 1, 0, 0),
(446, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/446.pdf', 1, 0, 0),
(447, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/447.pdf', 1, 0, 0),
(448, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/448.pdf', 1, 0, 0),
(449, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/449.pdf', 1, 0, 0),
(450, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/450.pdf', 1, 0, 0),
(451, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/451.pdf', 1, 0, 0),
(452, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/452.pdf', 1, 0, 0),
(453, 'Venta de Vehiculo', '2019-04-08', '17:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/453.pdf', 1, 0, 0),
(454, 'Venta de Vehiculo', '2019-04-08', '17:20:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/454.pdf', 1, 0, 0),
(455, 'Venta de Vehiculo', '2019-04-08', '17:20:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/455.pdf', 1, 0, 0),
(456, 'Venta de Vehiculo', '2019-04-08', '17:20:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/456.pdf', 1, 0, 0),
(457, 'Venta de Vehiculo', '2019-04-08', '17:20:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/457.pdf', 1, 0, 0),
(458, 'Venta de Vehiculo', '2019-04-08', '17:20:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/458.pdf', 1, 0, 0),
(459, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/459.pdf', 1, 0, 0),
(460, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/460.pdf', 1, 0, 0),
(461, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/461.pdf', 1, 0, 0),
(462, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/462.pdf', 1, 0, 0),
(463, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/463.pdf', 1, 0, 0),
(464, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/464.pdf', 1, 0, 0),
(465, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/465.pdf', 1, 0, 0),
(466, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/466.pdf', 1, 0, 0),
(467, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/467.pdf', 1, 0, 0),
(468, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/468.pdf', 1, 0, 0),
(469, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/469.pdf', 1, 0, 0),
(470, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/470.pdf', 1, 0, 0),
(471, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/471.pdf', 1, 0, 0),
(472, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/472.pdf', 1, 0, 0),
(473, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/473.pdf', 1, 0, 0),
(474, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/474.pdf', 1, 0, 0),
(475, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/475.pdf', 1, 0, 0),
(476, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/476.pdf', 1, 0, 0),
(477, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/477.pdf', 1, 0, 0),
(478, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/478.pdf', 1, 0, 0),
(479, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/479.pdf', 1, 0, 0),
(480, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/480.pdf', 1, 0, 0),
(481, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/481.pdf', 1, 0, 0),
(482, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/482.pdf', 1, 0, 0),
(483, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/483.pdf', 1, 0, 0),
(484, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/484.pdf', 1, 0, 0),
(485, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/485.pdf', 1, 0, 0),
(486, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/486.pdf', 1, 0, 0),
(487, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/487.pdf', 1, 0, 0),
(488, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/488.pdf', 1, 0, 0),
(489, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/489.pdf', 1, 0, 0),
(490, 'Venta de Vehiculo con Poder', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/490.pdf', 1, 0, 0),
(491, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/491.pdf', 1, 0, 0),
(492, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/492.pdf', 1, 0, 0),
(493, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/493.pdf', 1, 0, 0),
(494, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/494.pdf', 1, 0, 0),
(495, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/495.pdf', 1, 0, 0),
(496, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/496.pdf', 1, 0, 0),
(497, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/497.pdf', 1, 0, 0),
(498, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/498.pdf', 1, 0, 0),
(499, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/499.pdf', 1, 0, 0),
(500, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/500.pdf', 1, 0, 0),
(501, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/501.pdf', 1, 0, 0),
(502, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/502.pdf', 1, 0, 0),
(503, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/503.pdf', 1, 0, 0),
(504, 'Venta de Vehiculo con Poder', '2019-04-08', '19:26:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/504.pdf', 1, 0, 0),
(505, 'Venta de Vehiculo con Poder', '2019-04-08', '19:26:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/505.pdf', 1, 0, 0),
(506, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/506.pdf', 1, 0, 0),
(507, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/507.pdf', 1, 0, 0),
(508, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/508.pdf', 1, 0, 0),
(509, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/509.pdf', 1, 0, 0),
(510, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/510.pdf', 1, 0, 0),
(511, 'Venta de Vehiculo', '2019-04-08', '17:33:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/511.pdf', 1, 0, 0),
(512, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/512.pdf', 1, 0, 0),
(513, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/513.pdf', 1, 0, 0),
(514, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/514.pdf', 1, 0, 0),
(515, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/515.pdf', 1, 0, 0),
(516, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/516.pdf', 1, 0, 0),
(517, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/517.pdf', 1, 0, 0),
(518, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/518.pdf', 1, 0, 0),
(519, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/519.pdf', 1, 0, 0),
(520, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/520.pdf', 1, 0, 0),
(521, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/521.pdf', 1, 0, 0),
(522, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/522.pdf', 1, 0, 0),
(523, 'Venta de Vehiculo con Poder', '2019-04-08', '20:05:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/523.pdf', 1, 0, 0),
(524, 'Arrendamiento', '2019-04-10', '04:28:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/524.pdf', 2, 0, 0),
(525, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/525.pdf', 2, 0, 0),
(526, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/526.pdf', 2, 0, 0),
(527, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/527.pdf', 2, 0, 0),
(528, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/528.pdf', 2, 0, 0),
(529, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/529.pdf', 2, 0, 0),
(530, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/530.pdf', 2, 0, 0),
(531, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/531.pdf', 2, 0, 0),
(532, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/532.pdf', 2, 0, 0),
(533, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/533.pdf', 2, 0, 0),
(534, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/534.pdf', 2, 0, 0),
(535, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/535.pdf', 2, 0, 0),
(536, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/536.pdf', 2, 0, 0),
(537, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/537.pdf', 2, 0, 0),
(538, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/538.pdf', 2, 0, 0),
(539, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/539.pdf', 2, 0, 0),
(540, 'Arrendamiento', '2019-04-10', '04:43:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/540.pdf', 2, 0, 0),
(541, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/541.pdf', 2, 0, 0),
(542, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/542.pdf', 2, 0, 0),
(543, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/543.pdf', 2, 0, 0),
(544, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/544.pdf', 2, 0, 0),
(545, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/545.pdf', 2, 0, 0),
(546, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/546.pdf', 2, 0, 0),
(547, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/547.pdf', 2, 0, 0),
(548, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/548.pdf', 2, 0, 0),
(549, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/549.pdf', 2, 0, 0),
(550, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/550.pdf', 2, 0, 0),
(551, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/551.pdf', 2, 0, 0),
(552, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/552.pdf', 2, 0, 0),
(553, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/553.pdf', 2, 0, 0),
(554, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/554.pdf', 2, 0, 0),
(555, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/555.pdf', 2, 0, 0),
(556, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/556.pdf', 2, 0, 0),
(557, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/557.pdf', 2, 0, 0),
(558, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/558.pdf', 2, 0, 0),
(559, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/559.pdf', 2, 0, 0),
(560, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/560.pdf', 2, 0, 0),
(561, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/561.pdf', 2, 0, 0),
(562, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/562.pdf', 2, 0, 0),
(563, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/563.pdf', 2, 0, 0),
(564, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/564.pdf', 2, 0, 0),
(565, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/565.pdf', 2, 0, 0),
(566, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/566.pdf', 2, 0, 0),
(567, 'Arrendamiento', '2019-04-10', '05:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/567.pdf', 2, 0, 0),
(568, 'Arrendamiento', '2019-04-10', '15:55:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/568.pdf', 2, 0, 0),
(569, 'Arrendamiento', '2019-04-10', '15:55:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/569.pdf', 2, 0, 0),
(570, 'Arrendamiento', '2019-04-10', '15:55:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/570.pdf', 2, 0, 0),
(571, 'Arrendamiento', '2019-04-10', '15:55:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/571.pdf', 2, 0, 0),
(572, 'Arrendamiento', '2019-04-10', '15:55:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/572.pdf', 2, 0, 0),
(573, 'Arrendamiento', '2019-04-10', '15:55:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/573.pdf', 2, 0, 0),
(574, 'Arrendamiento', '2019-04-10', '15:55:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/574.pdf', 2, 0, 0),
(575, 'Arrendamiento', '2019-04-10', '15:55:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/575.pdf', 2, 0, 0),
(576, 'Arrendamiento', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/576.pdf', 2, 0, 0),
(577, 'Arrendamiento', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/577.pdf', 2, 0, 0),
(578, 'Arrendamiento', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/578.pdf', 2, 0, 0),
(579, 'Arrendamiento', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/579.pdf', 2, 0, 0),
(580, 'Arrendamiento', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/580.pdf', 2, 0, 0),
(581, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/581.pdf', 2, 0, 0),
(582, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/582.pdf', 2, 0, 0),
(583, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/583.pdf', 2, 0, 0),
(584, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/584.pdf', 2, 0, 0),
(585, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/585.pdf', 2, 0, 0),
(586, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/586.pdf', 2, 0, 0),
(587, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/587.pdf', 2, 0, 0),
(588, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/588.pdf', 2, 0, 0),
(589, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/589.pdf', 2, 0, 0),
(590, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/590.pdf', 2, 0, 0),
(591, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/591.pdf', 2, 0, 0),
(592, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/592.pdf', 2, 0, 0),
(593, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/593.pdf', 2, 0, 0),
(594, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/594.pdf', 2, 0, 0),
(595, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/595.pdf', 2, 0, 0),
(596, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/596.pdf', 2, 0, 0),
(597, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/597.pdf', 2, 0, 0),
(598, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/598.pdf', 2, 0, 0),
(599, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/599.pdf', 2, 0, 0),
(600, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/600.pdf', 2, 0, 0),
(601, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/601.pdf', 2, 0, 0),
(602, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/602.pdf', 2, 0, 0),
(603, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/603.pdf', 2, 0, 0),
(604, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/604.pdf', 2, 0, 0),
(605, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/605.pdf', 2, 0, 0),
(606, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/606.pdf', 2, 0, 0),
(607, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/607.pdf', 2, 0, 0),
(608, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/608.pdf', 2, 0, 0),
(609, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/609.pdf', 2, 0, 0),
(610, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/610.pdf', 2, 0, 0),
(611, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/611.pdf', 2, 0, 0),
(612, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/612.pdf', 2, 0, 0),
(613, 'Poder para Venta de Vehiculo', '2019-04-10', '16:45:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/613.pdf', 2, 0, 0),
(614, 'Arrendamiento', '2019-04-12', '23:53:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/614.pdf', 4, 0, 0),
(615, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/615.pdf', 2, 0, 0),
(616, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/616.pdf', 2, 0, 0),
(617, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/617.pdf', 2, 0, 0),
(618, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/618.pdf', 2, 0, 0),
(619, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/619.pdf', 2, 0, 0),
(620, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/620.pdf', 2, 0, 0),
(621, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/621.pdf', 2, 0, 0),
(622, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/622.pdf', 2, 0, 0),
(623, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/623.pdf', 2, 0, 0),
(624, 'Arrendamiento', '2019-04-24', '16:13:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/624.pdf', 2, 0, 0),
(625, 'Venta de Vehiculo', '2019-04-25', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/625.pdf', 1, 0, 0),
(626, 'Venta de Vehiculo', '2019-04-25', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/626.pdf', 1, 0, 0),
(627, 'Venta de Vehiculo', '2019-04-25', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/627.pdf', 1, 0, 0),
(628, 'Venta de Vehiculo', '2019-04-25', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/628.pdf', 1, 0, 0),
(629, 'Venta de Vehiculo', '2019-04-30', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/629.pdf', 1, 0, 0),
(630, 'Venta de Vehiculo', '2019-04-30', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/630.pdf', 1, 0, 0),
(631, 'Venta de Vehiculo', '2019-03-31', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/631.pdf', 1, 0, 0),
(632, 'Venta de Vehiculo', '2019-03-31', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/632.pdf', 1, 0, 0),
(633, 'Venta de Vehiculo', '2019-03-31', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/633.pdf', 1, 0, 0),
(634, 'Venta de Vehiculo', '2019-03-31', '14:07:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/634.pdf', 1, 0, 0),
(635, 'Venta de Vehiculo', '2019-04-30', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/635.pdf', 1, 0, 0),
(636, 'Venta de Vehiculo', '2019-04-30', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/636.pdf', 1, 0, 0),
(637, 'Venta de Vehiculo', '2019-04-30', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/637.pdf', 1, 0, 0),
(638, 'Venta de Vehiculo', '2019-04-30', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/638.pdf', 1, 0, 0),
(639, 'Venta de Vehiculo', '2019-04-30', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/639.pdf', 1, 0, 0),
(640, 'Venta de Vehiculo', '2019-04-30', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/640.pdf', 1, 0, 0),
(641, 'Venta de Vehiculo', '2019-04-30', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/641.pdf', 1, 0, 0),
(642, 'Venta de Vehiculo', '2019-04-30', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/642.pdf', 1, 0, 0),
(643, 'Venta de Vehiculo', '2019-04-30', '20:00:04', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/643.pdf', 1, 0, 0),
(644, 'Poder para Venta de Vehiculo', '2019-05-02', '00:45:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoMutuo/644.pdf', 3, 0, 0),
(645, 'Poder para Venta de Vehiculo', '2019-05-02', '00:45:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoMutuo/645.pdf', 3, 0, 0),
(646, 'Poder para Venta de Vehiculo', '2019-05-02', '00:45:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoMutuo/646.pdf', 3, 0, 0),
(647, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/647.pdf', 1, 0, 0),
(648, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/648.pdf', 1, 0, 0),
(649, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/649.pdf', 1, 0, 0),
(650, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/650.pdf', 1, 0, 0),
(651, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/651.pdf', 1, 0, 0),
(652, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/652.pdf', 1, 0, 0),
(653, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/653.pdf', 1, 0, 0),
(654, 'Venta de Vehiculo', '2019-05-03', '17:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/654.pdf', 1, 0, 0),
(655, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/655.pdf', 1, 0, 0),
(656, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/656.pdf', 1, 0, 0),
(657, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/657.pdf', 1, 0, 0),
(658, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/658.pdf', 1, 0, 0),
(659, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/659.pdf', 1, 0, 0),
(660, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/660.pdf', 1, 0, 0),
(661, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/661.pdf', 1, 0, 0),
(662, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/662.pdf', 1, 0, 0),
(663, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/663.pdf', 1, 0, 0),
(664, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/664.pdf', 1, 0, 0),
(665, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/665.pdf', 1, 0, 0),
(666, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/666.pdf', 1, 0, 0),
(667, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/667.pdf', 1, 0, 0),
(668, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/668.pdf', 1, 0, 0),
(669, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/669.pdf', 1, 0, 0),
(670, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/670.pdf', 1, 0, 0),
(671, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/671.pdf', 1, 0, 0),
(672, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/672.pdf', 1, 0, 0),
(673, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/673.pdf', 1, 0, 0),
(674, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/674.pdf', 1, 0, 0),
(675, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/675.pdf', 1, 0, 0),
(676, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/676.pdf', 1, 0, 0),
(677, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/677.pdf', 1, 0, 0),
(678, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/678.pdf', 1, 0, 0),
(679, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/679.pdf', 1, 0, 0),
(680, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/680.pdf', 1, 0, 0),
(681, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/681.pdf', 1, 0, 0),
(682, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/682.pdf', 1, 0, 0),
(683, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/683.pdf', 1, 0, 0),
(684, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/684.pdf', 1, 0, 0),
(685, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/685.pdf', 1, 0, 0),
(686, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/686.pdf', 1, 0, 0),
(687, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/687.pdf', 1, 0, 0),
(688, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/688.pdf', 1, 0, 0),
(689, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/689.pdf', 1, 0, 0),
(690, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/690.pdf', 1, 0, 0),
(691, 'Venta de Vehiculo', '2019-05-03', '17:34:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/691.pdf', 1, 0, 0),
(692, 'Venta de Vehiculo', '2019-05-15', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/692.pdf', 1, 0, 0),
(693, 'Venta de Vehiculo', '2019-05-15', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/693.pdf', 1, 0, 0),
(694, 'Venta de Vehiculo', '2019-05-15', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/694.pdf', 1, 0, 0),
(695, 'Venta de Vehiculo', '2019-05-15', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/695.pdf', 1, 0, 0),
(696, 'Venta de Vehiculo', '2019-05-01', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/696.pdf', 1, 0, 0),
(697, 'Venta de Vehiculo', '2019-05-31', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/697.pdf', 1, 0, 0),
(698, 'Venta de Vehiculo', '2019-05-31', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/698.pdf', 1, 0, 0),
(699, 'Venta de Vehiculo', '2019-05-30', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/699.pdf', 1, 0, 0),
(700, 'Venta de Vehiculo', '2019-05-30', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/700.pdf', 1, 0, 0),
(701, 'Venta de Vehiculo', '2019-05-31', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/701.pdf', 1, 0, 0),
(702, 'Venta de Vehiculo', '2019-05-01', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/702.pdf', 1, 0, 0),
(703, 'Venta de Vehiculo', '2019-05-02', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/703.pdf', 1, 0, 0),
(704, 'Venta de Vehiculo', '2019-05-02', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/704.pdf', 1, 0, 0),
(705, 'Venta de Vehiculo', '2019-05-31', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/705.pdf', 1, 0, 0),
(706, 'Venta de Vehiculo', '2019-05-28', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/706.pdf', 1, 0, 0),
(707, 'Venta de Vehiculo', '2019-05-26', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/707.pdf', 1, 0, 0),
(708, 'Venta de Vehiculo', '2019-05-14', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/708.pdf', 1, 0, 0),
(709, 'Venta de Vehiculo', '2019-05-17', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/709.pdf', 1, 0, 0),
(710, 'Venta de Vehiculo', '2019-05-19', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/710.pdf', 1, 0, 0),
(711, 'Venta de Vehiculo', '2019-05-21', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/711.pdf', 1, 0, 0),
(712, 'Venta de Vehiculo', '2019-05-20', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/712.pdf', 1, 0, 0),
(713, 'Venta de Vehiculo', '2019-05-20', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/713.pdf', 1, 0, 0),
(714, 'Venta de Vehiculo', '2019-05-01', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/714.pdf', 1, 0, 0),
(715, 'Venta de Vehiculo', '2019-05-19', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/715.pdf', 1, 0, 0),
(716, 'Venta de Vehiculo', '2019-05-14', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/716.pdf', 1, 0, 0),
(717, 'Venta de Vehiculo', '2019-05-16', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/717.pdf', 1, 0, 0),
(718, 'Venta de Vehiculo', '2019-05-18', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/718.pdf', 1, 0, 0),
(719, 'Venta de Vehiculo', '2019-05-19', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/719.pdf', 1, 0, 0),
(720, 'Venta de Vehiculo', '2019-05-18', '17:27:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/720.pdf', 1, 0, 0),
(721, 'Venta de Vehiculo', '2019-05-15', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/721.pdf', 1, 0, 0),
(722, 'Venta de Vehiculo', '2019-05-18', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/722.pdf', 1, 0, 0),
(723, 'Venta de Vehiculo', '2019-05-20', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/723.pdf', 1, 0, 0),
(724, 'Venta de Vehiculo', '2019-05-01', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/724.pdf', 1, 0, 0),
(725, 'Venta de Vehiculo', '2019-05-01', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/725.pdf', 1, 0, 0),
(726, 'Venta de Vehiculo', '2019-05-01', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/726.pdf', 1, 0, 0),
(727, 'Venta de Vehiculo', '2019-05-01', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/727.pdf', 1, 0, 0),
(728, 'Arrendamiento', '2019-05-18', '17:29:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/728.pdf', 2, 0, 0),
(729, 'Arrendamiento', '2019-05-14', '17:29:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/729.pdf', 2, 0, 0),
(730, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/730.pdf', 2, 0, 0),
(731, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/731.pdf', 2, 0, 0),
(732, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/732.pdf', 2, 0, 0),
(733, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/733.pdf', 2, 0, 0),
(734, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/734.pdf', 2, 0, 0),
(735, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/735.pdf', 2, 0, 0),
(736, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/736.pdf', 2, 0, 0),
(737, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/737.pdf', 2, 0, 0),
(738, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/738.pdf', 2, 0, 0),
(739, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/739.pdf', 2, 0, 0),
(740, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/740.pdf', 2, 0, 0),
(741, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/741.pdf', 2, 0, 0),
(742, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/742.pdf', 2, 0, 0),
(743, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/743.pdf', 2, 0, 0),
(744, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/744.pdf', 2, 0, 0),
(745, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/745.pdf', 2, 0, 0),
(746, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/746.pdf', 2, 0, 0),
(747, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/747.pdf', 2, 0, 0),
(748, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/748.pdf', 2, 0, 0),
(749, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/749.pdf', 2, 0, 0),
(750, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/750.pdf', 2, 0, 0),
(751, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/751.pdf', 2, 0, 0),
(752, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/752.pdf', 2, 0, 0),
(753, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/753.pdf', 2, 0, 0),
(754, 'Arrendamiento', '2019-05-21', '03:30:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/754.pdf', 2, 0, 0),
(755, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/755.pdf', 1, 0, 0),
(756, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/756.pdf', 1, 0, 0),
(757, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/757.pdf', 1, 0, 0),
(758, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/758.pdf', 1, 0, 0),
(759, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/759.pdf', 1, 0, 0),
(760, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/760.pdf', 1, 0, 0),
(761, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/761.pdf', 1, 0, 0),
(762, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/762.pdf', 1, 0, 0),
(763, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/763.pdf', 1, 0, 0),
(764, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/764.pdf', 1, 0, 0),
(765, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/765.pdf', 1, 0, 0),
(766, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/766.pdf', 1, 0, 0),
(767, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/767.pdf', 1, 0, 0),
(768, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/768.pdf', 1, 0, 0),
(769, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/769.pdf', 1, 0, 0),
(770, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/770.pdf', 1, 0, 0),
(771, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/771.pdf', 1, 0, 0),
(772, 'Venta de Vehiculo', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/772.pdf', 1, 0, 0),
(773, 'Venta de Vehiculo con Poder', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/773.pdf', 1, 0, 0),
(774, 'Venta de Vehiculo con Poder', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/774.pdf', 1, 0, 0);
INSERT INTO `contratos` (`ID_Cont`, `NombreCont`, `Fecha`, `Hora`, `ID_Usuario_FK`, `URL_contratoPDF`, `ID_TIPO_CONTRA_FK`, `fkid_cliente1`, `fkid_cliente2`) VALUES
(775, 'Venta de Vehiculo con Poder', '2019-05-25', '17:43:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/775.pdf', 1, 0, 0),
(776, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/776.pdf', 1, 0, 0),
(777, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/777.pdf', 1, 0, 0),
(778, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/778.pdf', 1, 0, 0),
(779, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/779.pdf', 1, 0, 0),
(780, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/780.pdf', 1, 0, 0),
(781, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/781.pdf', 1, 0, 0),
(782, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/782.pdf', 1, 0, 0),
(783, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/783.pdf', 1, 0, 0),
(784, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/784.pdf', 1, 0, 0),
(785, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/785.pdf', 1, 0, 0),
(786, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/786.pdf', 1, 0, 0),
(787, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/787.pdf', 1, 0, 0),
(788, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/788.pdf', 1, 0, 0),
(789, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/789.pdf', 1, 0, 0),
(790, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/790.pdf', 1, 0, 0),
(791, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/791.pdf', 1, 0, 0),
(792, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/792.pdf', 1, 0, 0),
(793, 'Venta de Vehiculo', '2019-05-26', '03:26:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/793.pdf', 1, 0, 0),
(794, 'Arrendamiento', '2019-05-26', '15:24:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/794.pdf', 2, 0, 0),
(795, 'Arrendamiento', '2019-05-26', '15:24:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/795.pdf', 2, 0, 0),
(796, 'Arrendamiento', '2019-05-26', '15:24:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/796.pdf', 2, 0, 0),
(797, 'Arrendamiento', '2019-05-26', '15:24:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/797.pdf', 2, 0, 0),
(798, 'Arrendamiento', '2019-05-26', '15:24:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/798.pdf', 2, 0, 0),
(799, 'Arrendamiento', '2019-05-26', '15:24:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/799.pdf', 2, 0, 0),
(800, 'Arrendamiento', '2019-05-26', '15:24:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/800.pdf', 2, 0, 0),
(801, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/801.pdf', 1, 0, 0),
(802, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/802.pdf', 1, 0, 0),
(803, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/803.pdf', 1, 0, 0),
(804, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/804.pdf', 1, 0, 0),
(805, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/805.pdf', 1, 0, 0),
(806, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/806.pdf', 1, 0, 0),
(807, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/807.pdf', 1, 0, 0),
(808, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/808.pdf', 1, 0, 0),
(809, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/809.pdf', 1, 0, 0),
(810, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/810.pdf', 1, 0, 0),
(811, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/811.pdf', 1, 0, 0),
(812, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/812.pdf', 1, 0, 0),
(813, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/813.pdf', 1, 0, 0),
(814, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/814.pdf', 1, 0, 0),
(815, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/815.pdf', 1, 0, 0),
(816, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/816.pdf', 1, 0, 0),
(817, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/817.pdf', 1, 0, 0),
(818, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/818.pdf', 1, 0, 0),
(819, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/819.pdf', 1, 0, 0),
(820, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/820.pdf', 1, 0, 0),
(821, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/821.pdf', 1, 0, 0),
(822, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/822.pdf', 1, 0, 0),
(823, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/823.pdf', 1, 0, 0),
(824, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/824.pdf', 1, 0, 0),
(825, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/825.pdf', 1, 0, 0),
(826, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/826.pdf', 1, 0, 0),
(827, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/827.pdf', 1, 0, 0),
(828, 'Venta de Vehiculo con Poder', '2019-05-26', '15:40:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/828.pdf', 1, 0, 0),
(829, 'Arrendamiento', '2019-05-26', '16:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/829.pdf', 2, 0, 0),
(830, 'Arrendamiento', '2019-05-26', '16:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/830.pdf', 2, 0, 0),
(831, 'Arrendamiento', '2019-05-26', '16:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/831.pdf', 2, 0, 0),
(832, 'Arrendamiento', '2019-05-26', '16:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/832.pdf', 2, 0, 0),
(833, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-05-26', '17:25:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/833.pdf', 5, 0, 0),
(834, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-05-26', '17:25:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/834.pdf', 5, 0, 0),
(835, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-05-26', '17:25:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/835.pdf', 5, 12, 65),
(836, 'Venta de Vehiculo', '2019-05-27', '01:56:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/836.pdf', 1, 12, 16),
(837, 'Arrendamiento', '2019-05-27', '01:58:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/837.pdf', 2, 49, 12),
(838, 'Poder para Venta de Vehiculo', '2019-05-27', '02:07:05', 3, '', 3, 12, 0),
(839, 'Arrendamiento', '2019-05-27', '02:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/839.pdf', 4, 15, 48),
(840, 'Arrendamiento', '2019-05-27', '02:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/840.pdf', 4, 15, 48),
(841, 'Arrendamiento', '2019-05-27', '02:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/841.pdf', 4, 15, 48),
(842, 'Arrendamiento', '2019-05-27', '02:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/842.pdf', 4, 15, 48),
(843, 'Arrendamiento', '2019-05-27', '02:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/843.pdf', 4, 15, 48),
(844, 'Arrendamiento', '2019-05-27', '23:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/844.pdf', 4, 15, 48),
(845, 'Arrendamiento', '2019-05-27', '23:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/845.pdf', 4, 15, 48),
(846, 'Arrendamiento', '2019-05-27', '01:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/846.pdf', 4, 15, 48),
(847, 'Arrendamiento', '2019-05-27', '01:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/847.pdf', 4, 15, 48),
(848, 'Arrendamiento', '2019-05-27', '01:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/848.pdf', 4, 15, 48),
(849, 'Arrendamiento', '2019-05-27', '01:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/849.pdf', 4, 15, 48),
(850, 'Arrendamiento', '2019-05-27', '01:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/850.pdf', 4, 15, 48),
(851, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/851.pdf', 4, 15, 48),
(852, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/852.pdf', 4, 15, 48),
(853, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/853.pdf', 4, 15, 48),
(854, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/854.pdf', 4, 15, 48),
(855, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/855.pdf', 4, 15, 48),
(856, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/856.pdf', 4, 15, 48),
(857, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/857.pdf', 4, 15, 48),
(858, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/858.pdf', 4, 15, 48),
(859, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/859.pdf', 4, 15, 48),
(860, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/860.pdf', 4, 15, 48),
(861, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/861.pdf', 4, 15, 48),
(862, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/862.pdf', 4, 15, 48),
(863, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/863.pdf', 4, 15, 48),
(864, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/864.pdf', 4, 15, 48),
(865, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/865.pdf', 4, 15, 48),
(866, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/866.pdf', 4, 15, 48),
(867, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/867.pdf', 4, 15, 48),
(868, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/868.pdf', 4, 15, 48),
(869, 'Arrendamiento', '2019-05-27', '10:22:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/869.pdf', 4, 15, 48),
(870, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-05-27', '03:30:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/870.pdf', 5, 15, 0),
(871, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-05-27', '03:30:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/871.pdf', 5, 16, 0),
(872, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-05-27', '03:30:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/872.pdf', 5, 16, 0),
(873, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-05-27', '03:30:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/873.pdf', 5, 16, 0),
(874, 'Arrendamiento', '2019-05-27', '04:14:05', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoArma/874.pdf', 4, 12, 12),
(875, 'Venta de Vehiculo con Poder', '2019-05-29', '03:37:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/875.pdf', 1, 0, 0),
(876, 'Venta de Vehiculo con Poder', '2019-05-29', '03:37:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/876.pdf', 1, 0, 0),
(877, 'Venta de Vehiculo con Poder', '2019-05-29', '03:37:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/877.pdf', 1, 0, 0),
(878, 'Venta de Vehiculo con Poder', '2019-05-29', '03:47:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/878.pdf', 1, 0, 0),
(879, 'Venta de Vehiculo con Poder', '2019-05-29', '03:47:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/879.pdf', 1, 0, 0),
(880, 'Venta de Vehiculo con Poder', '2019-05-29', '03:47:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/880.pdf', 1, 0, 0),
(881, 'Venta de Vehiculo con Poder', '2019-05-29', '03:47:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/881.pdf', 1, 0, 0),
(882, 'Venta de Vehiculo con Poder', '2019-05-29', '03:47:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/882.pdf', 1, 0, 0),
(883, 'Venta de Vehiculo con Poder', '2019-05-29', '03:47:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/883.pdf', 1, 0, 0),
(884, 'Venta de Vehiculo', '2019-05-29', '18:32:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/884.pdf', 1, 12, 12),
(885, 'Venta de Vehiculo', '2019-05-29', '18:32:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/885.pdf', 1, 12, 12),
(886, 'Venta de Vehiculo', '2019-05-29', '18:32:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/886.pdf', 1, 12, 12),
(887, 'Venta de Vehiculo', '2019-05-29', '18:32:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/887.pdf', 1, 12, 12),
(888, 'Venta de Vehiculo', '2019-05-29', '18:32:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/888.pdf', 1, 12, 12),
(889, 'Venta de Vehiculo', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/889.pdf', 1, 12, 16),
(890, 'Venta de Vehiculo', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/890.pdf', 1, 12, 16),
(891, 'Venta de Vehiculo', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/891.pdf', 1, 12, 16),
(892, 'Venta de Vehiculo', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/892.pdf', 1, 12, 16),
(893, 'Venta de Vehiculo', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/893.pdf', 1, 12, 16),
(894, 'Venta de Vehiculo', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/894.pdf', 1, 12, 16),
(895, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/895.pdf', 1, 0, 0),
(896, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/896.pdf', 1, 0, 0),
(897, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/897.pdf', 1, 0, 0),
(898, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/898.pdf', 1, 0, 0),
(899, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/899.pdf', 1, 0, 0),
(900, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/900.pdf', 1, 0, 0),
(901, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/901.pdf', 1, 0, 0),
(902, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/902.pdf', 1, 0, 0),
(903, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/903.pdf', 1, 0, 0),
(904, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/904.pdf', 1, 0, 0),
(905, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/905.pdf', 1, 0, 0),
(906, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/906.pdf', 1, 0, 0),
(907, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/907.pdf', 1, 0, 0),
(908, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/908.pdf', 1, 0, 0),
(909, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/909.pdf', 1, 0, 0),
(910, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/910.pdf', 1, 0, 0),
(911, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/911.pdf', 1, 0, 0),
(912, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/912.pdf', 1, 0, 0),
(913, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/913.pdf', 1, 0, 0),
(914, 'Venta de Vehiculo con Poder', '2019-05-31', '04:56:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/914.pdf', 1, 0, 0),
(915, 'Venta de Vehiculo con Poder', '2019-05-31', '04:56:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/915.pdf', 1, 0, 0),
(916, 'Venta de Vehiculo con Poder', '2019-05-31', '04:56:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/916.pdf', 1, 0, 0),
(917, 'Venta de Vehiculo con Poder', '2019-05-31', '04:56:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/917.pdf', 1, 0, 0),
(918, 'Venta de Vehiculo con Poder', '2019-05-31', '03:59:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/918.pdf', 1, 0, 0),
(919, 'Venta de Vehiculo con Poder', '2019-05-31', '04:56:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/919.pdf', 1, 0, 0),
(920, 'Venta de Vehiculo con Poder', '2019-05-31', '04:56:05', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/920.pdf', 1, 0, 0),
(921, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/921.pdf', 1, 15, 16),
(922, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/922.pdf', 1, 15, 16),
(923, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/923.pdf', 1, 15, 16),
(924, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/924.pdf', 1, 15, 16),
(925, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/925.pdf', 1, 15, 16),
(926, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/926.pdf', 1, 15, 16),
(927, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/927.pdf', 1, 15, 16),
(928, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/928.pdf', 1, 15, 16),
(929, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/929.pdf', 1, 15, 16),
(930, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/930.pdf', 1, 15, 16),
(931, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/931.pdf', 1, 15, 16),
(932, 'Venta de Vehiculo', '2019-06-01', '20:12:06', 3, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/932.pdf', 1, 15, 16),
(933, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/933.pdf', 1, 12, 12),
(934, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/934.pdf', 1, 12, 12),
(935, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/935.pdf', 1, 12, 12),
(936, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/936.pdf', 1, 12, 12),
(937, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/937.pdf', 1, 12, 12),
(938, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/938.pdf', 1, 12, 12),
(939, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/939.pdf', 1, 12, 12),
(940, 'Venta de Vehiculo con Poder', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/940.pdf', 1, 0, 0),
(941, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/941.pdf', 1, 12, 12),
(942, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/942.pdf', 1, 12, 12),
(943, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/943.pdf', 1, 12, 12),
(944, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/944.pdf', 1, 12, 12),
(945, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/945.pdf', 1, 12, 12),
(946, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/946.pdf', 1, 12, 12),
(947, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/947.pdf', 1, 12, 12),
(948, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/948.pdf', 1, 12, 12),
(949, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/949.pdf', 1, 12, 12),
(950, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/950.pdf', 1, 12, 12),
(951, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/951.pdf', 1, 12, 12),
(952, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/952.pdf', 1, 12, 12),
(953, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/953.pdf', 1, 12, 12),
(954, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/954.pdf', 1, 12, 12),
(955, 'Venta de Vehiculo', '2019-06-08', '16:52:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/955.pdf', 1, 12, 12),
(956, 'Venta de Vehiculo', '2019-06-08', '18:14:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/956.pdf', 1, 68, 12),
(957, 'Venta de Vehiculo', '2019-06-08', '18:14:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/957.pdf', 1, 68, 12),
(958, 'Venta de Vehiculo', '2019-06-15', '18:20:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/958.pdf', 1, 69, 12),
(959, 'Venta de Vehiculo', '2019-06-15', '20:54:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/959.pdf', 1, 69, 54),
(960, 'Venta de Vehiculo', '2019-06-15', '18:20:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/960.pdf', 1, 69, 12),
(961, 'Venta de Vehiculo', '2019-06-15', '18:20:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/961.pdf', 1, 69, 12),
(962, 'Venta de Vehiculo', '2019-06-29', '17:36:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/962.pdf', 1, 41, 12),
(963, 'Venta de Vehiculo', '2019-06-29', '17:46:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/963.pdf', 1, 12, 54),
(964, 'Venta de Vehiculo', '2019-06-29', '17:46:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/964.pdf', 1, 12, 54),
(965, 'Venta de Vehiculo', '2019-06-29', '17:46:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/965.pdf', 1, 12, 54),
(966, 'Venta de Vehiculo', '2019-06-29', '17:46:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/966.pdf', 1, 12, 54),
(967, 'Venta de Vehiculo', '2019-06-29', '17:46:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/967.pdf', 1, 12, 54),
(968, 'Venta de Vehiculo', '2019-06-29', '17:46:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/968.pdf', 1, 12, 54),
(969, 'Venta de Vehiculo', '2019-06-29', '17:46:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/969.pdf', 1, 12, 54),
(970, 'Venta de Vehiculo con Poder', '2019-06-29', '18:19:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/970.pdf', 1, 0, 0),
(971, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/971.pdf', 1, 16, 41),
(972, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/972.pdf', 1, 16, 41),
(973, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/973.pdf', 1, 16, 41),
(974, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/974.pdf', 1, 16, 41),
(975, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/975.pdf', 1, 16, 41),
(976, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/976.pdf', 1, 16, 41),
(977, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/977.pdf', 1, 16, 41),
(978, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/978.pdf', 1, 16, 41),
(979, 'Venta de Vehiculo con Poder', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/979.pdf', 1, 0, 0),
(980, 'Venta de Vehiculo con Poder', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/980.pdf', 1, 0, 0),
(981, 'Venta de Vehiculo con Poder', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/981.pdf', 1, 0, 0),
(982, 'Venta de Vehiculo con Poder', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/982.pdf', 1, 0, 0),
(983, 'Venta de Vehiculo con Poder', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/983.pdf', 1, 0, 0),
(984, 'Venta de Vehiculo con Poder', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/984.pdf', 1, 0, 0),
(985, 'Venta de Vehiculo con Poder', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/985.pdf', 1, 0, 0),
(986, 'Venta de Vehiculo con Poder', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/986.pdf', 1, 0, 0),
(987, 'Venta de Vehiculo con Poder', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/987.pdf', 1, 0, 0),
(988, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/988.pdf', 1, 16, 41),
(989, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/989.pdf', 1, 16, 41),
(990, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/990.pdf', 1, 16, 41),
(991, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/991.pdf', 1, 15, 12),
(992, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/992.pdf', 1, 15, 12),
(993, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/993.pdf', 1, 15, 12),
(994, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/994.pdf', 1, 15, 12),
(995, 'Venta de Vehiculo', '2019-06-29', '18:21:06', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/995.pdf', 1, 15, 12),
(996, 'Venta de Vehiculo', '2019-07-06', '17:16:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/996.pdf', 1, 3, 15),
(997, 'Venta de Vehiculo', '2019-07-06', '17:16:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/997.pdf', 1, 49, 15),
(998, 'Venta de Vehiculo', '2019-07-06', '17:57:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/998.pdf', 1, 15, 41),
(999, 'Venta de Vehiculo', '2019-07-06', '17:57:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/999.pdf', 1, 15, 41),
(1000, 'Venta de Vehiculo', '2019-07-06', '17:16:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1000.pdf', 1, 49, 15),
(1001, 'Venta de Vehiculo', '2019-07-06', '17:16:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1001.pdf', 1, 49, 15),
(1002, 'Venta de Vehiculo', '2019-07-06', '17:16:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1002.pdf', 1, 49, 15),
(1003, 'Venta de Vehiculo', '2019-07-06', '17:16:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1003.pdf', 1, 49, 15),
(1004, 'Venta de Vehiculo', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1004.pdf', 1, 12, 12),
(1005, 'Venta de Vehiculo', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1005.pdf', 1, 12, 12),
(1006, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1006.pdf', 1, 0, 0),
(1007, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1007.pdf', 1, 0, 0),
(1008, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1008.pdf', 1, 0, 0),
(1009, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1009.pdf', 1, 0, 0),
(1010, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1010.pdf', 1, 0, 0),
(1011, 'Venta de Vehiculo', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1011.pdf', 1, 12, 12),
(1012, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1012.pdf', 1, 0, 0),
(1013, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1013.pdf', 1, 0, 0),
(1014, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1014.pdf', 1, 0, 0),
(1015, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1015.pdf', 1, 0, 0),
(1016, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1016.pdf', 1, 0, 0),
(1017, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1017.pdf', 1, 0, 0),
(1018, 'Venta de Vehiculo con Poder', '2019-07-08', '00:38:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1018.pdf', 1, 0, 0),
(1019, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-08', '02:27:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1019.pdf', 5, 12, 0),
(1020, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-08', '02:37:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1020.pdf', 5, 12, 0),
(1021, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-08', '02:42:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1021.pdf', 5, 12, 0),
(1022, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-08', '02:42:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1022.pdf', 5, 12, 0),
(1023, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-08', '02:42:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1023.pdf', 5, 12, 0),
(1024, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-08', '02:42:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1024.pdf', 5, 12, 0),
(1025, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1025.pdf', 5, 12, 0),
(1026, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1026.pdf', 5, 12, 0),
(1027, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1027.pdf', 5, 12, 0),
(1028, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1028.pdf', 5, 12, 0),
(1029, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1029.pdf', 5, 12, 0),
(1030, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1030.pdf', 5, 12, 0),
(1031, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1031.pdf', 5, 12, 0),
(1032, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1032.pdf', 5, 12, 0),
(1033, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1033.pdf', 5, 12, 0),
(1034, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1034.pdf', 5, 12, 0),
(1035, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1035.pdf', 5, 12, 0),
(1036, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1036.pdf', 5, 12, 0),
(1037, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1037.pdf', 5, 12, 0),
(1038, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1038.pdf', 5, 12, 0),
(1039, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1039.pdf', 5, 12, 0),
(1040, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1040.pdf', 5, 12, 0),
(1041, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1041.pdf', 5, 12, 0),
(1042, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1042.pdf', 5, 12, 0),
(1043, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1043.pdf', 5, 12, 0),
(1044, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1044.pdf', 5, 12, 0),
(1045, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '02:46:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1045.pdf', 5, 12, 0),
(1046, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '18:45:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1046.pdf', 5, 12, 0),
(1047, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '18:45:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1047.pdf', 5, 12, 0),
(1048, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '18:45:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1048.pdf', 5, 12, 0),
(1049, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-10', '18:45:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1049.pdf', 5, 12, 0),
(1050, 'Venta de Vehiculo', '2019-07-13', '17:26:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1050.pdf', 1, 12, 15),
(1051, 'Venta de Vehiculo', '2019-07-13', '17:26:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1051.pdf', 1, 12, 15),
(1052, 'Venta de Vehiculo', '2019-07-13', '17:26:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1052.pdf', 1, 12, 15),
(1053, 'Venta de Vehiculo', '2019-07-13', '17:26:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1053.pdf', 1, 12, 15),
(1054, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1054.pdf', 5, 49, 0),
(1055, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1055.pdf', 5, 49, 0),
(1056, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1056.pdf', 5, 49, 0),
(1057, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1057.pdf', 5, 49, 0),
(1058, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1058.pdf', 5, 49, 0),
(1059, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1059.pdf', 5, 49, 0),
(1060, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1060.pdf', 5, 49, 0),
(1061, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1061.pdf', 5, 49, 0),
(1062, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1062.pdf', 5, 49, 0),
(1063, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1063.pdf', 5, 49, 0),
(1064, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1064.pdf', 5, 49, 0),
(1065, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1065.pdf', 5, 49, 0),
(1066, 'Venta de Vehiculo', '2019-07-13', '17:26:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1066.pdf', 1, 12, 15),
(1067, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1067.pdf', 5, 41, 0),
(1068, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1068.pdf', 5, 41, 0),
(1069, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1069.pdf', 5, 41, 0),
(1070, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1070.pdf', 5, 41, 0),
(1071, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '17:35:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1071.pdf', 5, 41, 0),
(1072, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:50:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1072.pdf', 5, 51, 0),
(1073, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:50:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1073.pdf', 5, 51, 0),
(1074, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1074.pdf', 5, 15, 0),
(1075, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1075.pdf', 5, 15, 0),
(1076, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1076.pdf', 5, 15, 0),
(1077, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1077.pdf', 5, 15, 0),
(1078, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1078.pdf', 5, 15, 0),
(1079, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1079.pdf', 5, 15, 0),
(1080, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1080.pdf', 5, 15, 0),
(1081, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1081.pdf', 5, 15, 0),
(1082, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1082.pdf', 5, 15, 0),
(1083, 'Permiso migratorio: P/Viajar con 1 de los padres', '2019-07-13', '18:58:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Permiso_Migratorio/1083.pdf', 5, 15, 0),
(1084, 'Venta de Vehiculo', '2019-07-13', '19:33:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1084.pdf', 1, 12, 41),
(1085, 'Venta de Vehiculo', '2019-07-13', '19:33:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1085.pdf', 1, 12, 41),
(1086, 'Venta de Vehiculo', '2019-07-13', '19:33:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1086.pdf', 1, 12, 41),
(1087, 'Venta de Vehiculo', '2019-07-29', '19:39:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1087.pdf', 1, 12, 54),
(1088, 'Venta de Vehiculo', '2019-07-29', '19:39:07', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1088.pdf', 1, 12, 54);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_arre`
--

CREATE TABLE IF NOT EXISTS `contrato_arre` (
  `ID_Cont` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCont` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `ID_Usuario_FK` int(11) NOT NULL,
  `URL_contratoPDF` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_Cont`),
  KEY `ID_USUARIO_FK_` (`ID_Usuario_FK`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `contrato_arre`
--

INSERT INTO `contrato_arre` (`ID_Cont`, `NombreCont`, `Fecha`, `Hora`, `ID_Usuario_FK`, `URL_contratoPDF`) VALUES
(1, 'Arrendamiento', '2019-03-22', '09:53:03', 1, ''),
(2, 'Arrendamiento', '2019-03-22', '09:53:03', 1, ''),
(3, 'Arrendamiento', '2019-03-22', '09:53:03', 1, ''),
(4, 'Arrendamiento', '2019-03-22', '09:53:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/4.pdf'),
(5, 'Arrendamiento', '2019-03-22', '09:53:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/5.pdf'),
(6, 'Arrendamiento', '2019-03-22', '09:53:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/6.pdf'),
(7, 'Poder para Venta de Vehiculo', '2019-03-22', '12:05:03', 1, ''),
(8, 'Poder para Venta de Vehiculo', '2019-03-22', '12:05:03', 1, ''),
(9, 'Poder para Venta de Vehiculo', '2019-03-22', '12:05:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/9.pdf'),
(10, 'Poder para Venta de Vehiculo', '2019-03-22', '12:05:03', 1, 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/Contratoarrendamiento/10.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_vtavehi_cp`
--

CREATE TABLE IF NOT EXISTS `contrato_vtavehi_cp` (
  `ID_Cont` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCont` varchar(45) DEFAULT 'Poder para venta Arma de Fuego',
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `ID_Cliente_FK` int(11) NOT NULL,
  `ID_Usuario_FK` int(11) NOT NULL,
  `ID_Depto_FK` int(11) NOT NULL,
  `ID_Munic_FK` int(11) NOT NULL,
  `ID_Benef_FK` int(11) NOT NULL,
  `NArmaFuego` varchar(45) DEFAULT NULL,
  `Marca` year(4) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Serie` varchar(45) DEFAULT NULL,
  `Calibre` varchar(45) DEFAULT NULL,
  `Modelo` varchar(45) DEFAULT NULL,
  `Pabon` varchar(45) DEFAULT NULL,
  `LargoCanion` varchar(45) DEFAULT NULL,
  `NRegistro` varchar(45) DEFAULT NULL,
  `Clasificacion` varchar(45) DEFAULT NULL,
  `FechaExp` date DEFAULT NULL,
  `Notario_ID_Notario` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID_Cont`),
  UNIQUE KEY `idContA_UNIQUE` (`ID_Cont`),
  KEY `fk_ContratoA_Cliente1_idx` (`ID_Cliente_FK`),
  KEY `fk_ContratoA_Usuario1_idx` (`ID_Usuario_FK`),
  KEY `fk_ContratoB_Depto1_idx` (`ID_Depto_FK`),
  KEY `fk_ContratoB_Munic1_idx` (`ID_Munic_FK`),
  KEY `fk_ContratoB_Cliente1_idx` (`ID_Benef_FK`),
  KEY `fk_Poder_Vta_Vehiculo_Notario1_idx` (`Notario_ID_Notario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_vtavehi_sp`
--

CREATE TABLE IF NOT EXISTS `contrato_vtavehi_sp` (
  `ID_Cont` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCont` varchar(45) DEFAULT 'Poder para Venta de Vehiculo',
  `Fecha` datetime DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `ID_Cliente_FK` int(11) NOT NULL,
  `ID_Usuario_FK` int(11) NOT NULL,
  `ID_Depto_FK` int(11) NOT NULL,
  `ID_Munic_FK` int(11) NOT NULL,
  `ID_Benef_FK` int(11) NOT NULL,
  `Placa` varchar(45) DEFAULT NULL,
  `Marca` varchar(45) DEFAULT NULL,
  `Modelo` varchar(45) DEFAULT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Anio` year(4) DEFAULT NULL,
  `Capacidad` varchar(45) DEFAULT NULL,
  `Clase` varchar(45) DEFAULT NULL,
  `Traccion` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Dominio` varchar(45) DEFAULT NULL,
  `NMotor` varchar(45) DEFAULT NULL,
  `Grabado` varchar(45) DEFAULT NULL,
  `NVin` varchar(45) DEFAULT NULL,
  `Calidad` varchar(45) DEFAULT NULL,
  `Precio` varchar(45) DEFAULT NULL,
  `Notario_ID_Notario` int(11) NOT NULL DEFAULT '1',
  `TCircula_Poliza_ID_TCircula_Poliza` int(11) NOT NULL,
  `Numero_tarjeta` varchar(45) NOT NULL,
  `URL_contratoPDF` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo',
  PRIMARY KEY (`ID_Cont`),
  UNIQUE KEY `idContA_UNIQUE` (`ID_Cont`),
  KEY `fk_ContratoA_Cliente1_idx` (`ID_Cliente_FK`),
  KEY `fk_ContratoA_Usuario1_idx` (`ID_Usuario_FK`),
  KEY `fk_ContratoB_Depto1_idx` (`ID_Depto_FK`),
  KEY `fk_ContratoB_Munic1_idx` (`ID_Munic_FK`),
  KEY `fk_ContratoB_Cliente1_idx` (`ID_Benef_FK`),
  KEY `fk_Poder_Vta_Vehiculo_Notario1_idx` (`Notario_ID_Notario`),
  KEY `fk_Poder_Vta_Vehiculo_TCircula_Poliza1_idx` (`TCircula_Poliza_ID_TCircula_Poliza`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contrato_vtavehi_sp`
--

INSERT INTO `contrato_vtavehi_sp` (`ID_Cont`, `NombreCont`, `Fecha`, `Hora`, `ID_Cliente_FK`, `ID_Usuario_FK`, `ID_Depto_FK`, `ID_Munic_FK`, `ID_Benef_FK`, `Placa`, `Marca`, `Modelo`, `Color`, `Anio`, `Capacidad`, `Clase`, `Traccion`, `Tipo`, `Dominio`, `NMotor`, `Grabado`, `NVin`, `Calidad`, `Precio`, `Notario_ID_Notario`, `TCircula_Poliza_ID_TCircula_Poliza`, `Numero_tarjeta`, `URL_contratoPDF`) VALUES
(1, 'Venta de Vehiculo', '2019-03-22 00:00:00', '10:53:03', 55, 1, 1, 101, 12, 'P-123441231-2', 'Honda', 'Civic', 'Amarillo', 2019, '22', 'AUTOMOVIL', '', 'Sedan', '', '12123asd3-021332', '12123asd3-021332', '12123asd3-021332', '', '2769', 1, 1, '12123asd3-021332', 'C:/xampp/htdocs/CL/DOCS/CONTRATOS/ContratoVehiculo/1.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv poliza`
--

CREATE TABLE IF NOT EXISTS `cv poliza` (
  `ID_Cont` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCont` varchar(45) DEFAULT 'Poder para venta Arma de Fuego',
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `ID_Cliente_FK` int(11) NOT NULL,
  `ID_Usuario_FK` int(11) NOT NULL,
  `ID_Depto_FK` int(11) NOT NULL,
  `ID_Munic_FK` int(11) NOT NULL,
  `ID_Benef_FK` int(11) NOT NULL,
  `NArmaFuego` varchar(45) DEFAULT NULL,
  `Marca` year(4) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Serie` varchar(45) DEFAULT NULL,
  `Calibre` varchar(45) DEFAULT NULL,
  `Modelo` varchar(45) DEFAULT NULL,
  `Pabon` varchar(45) DEFAULT NULL,
  `LargoCanion` varchar(45) DEFAULT NULL,
  `NRegistro` varchar(45) DEFAULT NULL,
  `Clasificacion` varchar(45) DEFAULT NULL,
  `FechaExp` date DEFAULT NULL,
  `Notario_ID_Notario` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID_Cont`),
  UNIQUE KEY `idContA_UNIQUE` (`ID_Cont`),
  KEY `fk_ContratoA_Cliente1_idx` (`ID_Cliente_FK`),
  KEY `fk_ContratoA_Usuario1_idx` (`ID_Usuario_FK`),
  KEY `fk_ContratoB_Depto1_idx` (`ID_Depto_FK`),
  KEY `fk_ContratoB_Munic1_idx` (`ID_Munic_FK`),
  KEY `fk_ContratoB_Cliente1_idx` (`ID_Benef_FK`),
  KEY `fk_Poder_Vta_Vehiculo_Notario1_idx` (`Notario_ID_Notario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depto`
--

CREATE TABLE IF NOT EXISTS `depto` (
  `ID_Depto` int(11) NOT NULL AUTO_INCREMENT,
  `NomDepto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_Depto`),
  UNIQUE KEY `ID_Depto_UNIQUE` (`ID_Depto`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `depto`
--

INSERT INTO `depto` (`ID_Depto`, `NomDepto`) VALUES
(1, 'Santa Ana'),
(2, 'Sonsonate'),
(3, 'San Salvador'),
(4, 'San Miguel'),
(5, 'Cabanias'),
(6, 'Morazan'),
(7, 'Usulutan'),
(8, 'chalchuapa'),
(9, 'Coatepeque'),
(10, 'Array'),
(11, '23'),
(12, 'Depto Santa Ana'),
(13, 'Santa Anans');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `ID_Genero` int(11) NOT NULL,
  `NombreGenero` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_Genero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`ID_Genero`, `NombreGenero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `munic`
--

CREATE TABLE IF NOT EXISTS `munic` (
  `ID_Munic` int(11) NOT NULL AUTO_INCREMENT,
  `NomMunic` varchar(45) DEFAULT NULL,
  `ID_Depto_FK` int(11) NOT NULL,
  PRIMARY KEY (`ID_Munic`),
  UNIQUE KEY `ID_Munic_UNIQUE` (`ID_Munic`),
  KEY `fk_Munic_Depto1_idx` (`ID_Depto_FK`)
) ENGINE=InnoDB AUTO_INCREMENT=218 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `munic`
--

INSERT INTO `munic` (`ID_Munic`, `NomMunic`, `ID_Depto_FK`) VALUES
(101, 'Santa Ana', 1),
(102, 'Chalchuapa', 1),
(210, 'Soyapango', 4),
(211, 'Las Marias', 7),
(212, 'San Miguel', 4),
(213, 'Array', 10),
(214, '2', 1),
(215, 'Juan Perez', 11),
(216, 'Santa Ana City', 12),
(217, 'Marroco', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidad`
--

CREATE TABLE IF NOT EXISTS `nacionalidad` (
  `ID_Nacionalidad` int(11) NOT NULL,
  `NombreNac` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Nacionalidad`),
  UNIQUE KEY `ID_Nacionalidad_UNIQUE` (`ID_Nacionalidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nacionalidad`
--

INSERT INTO `nacionalidad` (`ID_Nacionalidad`, `NombreNac`) VALUES
(1, 'Salvadoreño'),
(2, 'Extranjero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notario`
--

CREATE TABLE IF NOT EXISTS `notario` (
  `ID_Notario` int(11) NOT NULL DEFAULT '1',
  `Nit` varchar(45) DEFAULT '1234-1234',
  `Domicilio` varchar(45) DEFAULT 'Santa Ana',
  PRIMARY KEY (`ID_Notario`),
  UNIQUE KEY `ID_Notario_UNIQUE` (`ID_Notario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notario`
--

INSERT INTO `notario` (`ID_Notario`, `Nit`, `Domicilio`) VALUES
(1, '1234-1234', 'Santa Ana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poder_vta_arma`
--

CREATE TABLE IF NOT EXISTS `poder_vta_arma` (
  `ID_Cont` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCont` varchar(45) DEFAULT 'Poder para venta Arma de Fuego',
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `ID_Cliente_FK` int(11) NOT NULL,
  `ID_Usuario_FK` int(11) NOT NULL,
  `ID_Depto_FK` int(11) NOT NULL,
  `ID_Munic_FK` int(11) NOT NULL,
  `ID_Benef_FK` int(11) NOT NULL,
  `NArmaFuego` varchar(45) DEFAULT NULL,
  `Marca` year(4) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `Serie` varchar(45) DEFAULT NULL,
  `Calibre` varchar(45) DEFAULT NULL,
  `Modelo` varchar(45) DEFAULT NULL,
  `Pabon` varchar(45) DEFAULT NULL,
  `LargoCanion` varchar(45) DEFAULT NULL,
  `NRegistro` varchar(45) DEFAULT NULL,
  `Clasificacion` varchar(45) DEFAULT NULL,
  `FechaExp` date DEFAULT NULL,
  `Notario_ID_Notario` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID_Cont`),
  UNIQUE KEY `idContA_UNIQUE` (`ID_Cont`),
  KEY `fk_ContratoA_Cliente1_idx` (`ID_Cliente_FK`),
  KEY `fk_ContratoA_Usuario1_idx` (`ID_Usuario_FK`),
  KEY `fk_ContratoB_Depto1_idx` (`ID_Depto_FK`),
  KEY `fk_ContratoB_Munic1_idx` (`ID_Munic_FK`),
  KEY `fk_ContratoB_Cliente1_idx` (`ID_Benef_FK`),
  KEY `fk_Poder_Vta_Vehiculo_Notario1_idx` (`Notario_ID_Notario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcircula_poliza`
--

CREATE TABLE IF NOT EXISTS `tcircula_poliza` (
  `ID_TCircula_Poliza` int(11) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_TCircula_Poliza`),
  UNIQUE KEY `ID_TCircula_Poliza_UNIQUE` (`ID_TCircula_Poliza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tcircula_poliza`
--

INSERT INTO `tcircula_poliza` (`ID_TCircula_Poliza`, `Tipo`) VALUES
(1, 'Tarjeta de Circulacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocontrato`
--

CREATE TABLE IF NOT EXISTS `tipocontrato` (
  `ID_TContrato` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID_TContrato`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipocontrato`
--

INSERT INTO `tipocontrato` (`ID_TContrato`, `Nombre`) VALUES
(1, 'Vehiculo'),
(2, 'Arrendamento'),
(3, 'Mutuo'),
(4, 'Venta de Arma'),
(5, 'P Migratorio'),
(6, 'Trabajo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_dociden`
--

CREATE TABLE IF NOT EXISTS `tipo_dociden` (
  `ID_DocIden` int(11) NOT NULL,
  `NombreDoc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_DocIden`),
  UNIQUE KEY `ID_Nacionalidad_UNIQUE` (`ID_DocIden`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_dociden`
--

INSERT INTO `tipo_dociden` (`ID_DocIden`, `NombreDoc`) VALUES
(1, 'Documento Unico de Identidad'),
(2, 'Pasaporte'),
(3, 'Carnet de Residente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE IF NOT EXISTS `tusuario` (
  `ID_TUser` int(11) NOT NULL,
  `NomTUser` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_TUser`),
  UNIQUE KEY `ID_TUsuario_UNIQUE` (`ID_TUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`ID_TUser`, `NomTUser`) VALUES
(1, 'Admin'),
(2, 'Digitador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `NomUser` varchar(45) NOT NULL,
  `NickUser` varchar(45) NOT NULL,
  `ContUser` varchar(45) DEFAULT NULL,
  `ID_TUser_FK` int(11) NOT NULL,
  PRIMARY KEY (`ID_Usuario`),
  UNIQUE KEY `idUsuario_UNIQUE` (`ID_Usuario`),
  KEY `fk_Usuario_TUsuario1_idx` (`ID_TUser_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `NomUser`, `NickUser`, `ContUser`, `ID_TUser_FK`) VALUES
(0, 'LAvalos', 'LAvalos', '1234', 2),
(1, 'Mauricio Orellana', 'Seik', '1234', 1),
(2, 'Lizet Botto', 'LiBo', '1234', 1),
(3, 'Mauricio Alfredo Orellana', 'seik_ct', '1234', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_Genero` FOREIGN KEY (`ID_Genero_FK`) REFERENCES `genero` (`ID_Genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Cliente_Nacionalidad1` FOREIGN KEY (`ID_Nacionalidad_FK`) REFERENCES `nacionalidad` (`ID_Nacionalidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Cliente_Tipo_DocIden1` FOREIGN KEY (`ID_DocIden_FK`) REFERENCES `tipo_dociden` (`ID_DocIden`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `ID_TCONT_FK` FOREIGN KEY (`ID_TIPO_CONTRA_FK`) REFERENCES `tipocontrato` (`ID_TContrato`),
  ADD CONSTRAINT `ID_USUARIO_FK_ve` FOREIGN KEY (`ID_Usuario_FK`) REFERENCES `usuario` (`ID_Usuario`);

--
-- Filtros para la tabla `contrato_arre`
--
ALTER TABLE `contrato_arre`
  ADD CONSTRAINT `ID_USUARIO_FK_` FOREIGN KEY (`ID_Usuario_FK`) REFERENCES `usuario` (`ID_Usuario`);

--
-- Filtros para la tabla `contrato_vtavehi_cp`
--
ALTER TABLE `contrato_vtavehi_cp`
  ADD CONSTRAINT `fk_ContratoA_Cliente100000` FOREIGN KEY (`ID_Cliente_FK`) REFERENCES `cliente` (`ID_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoA_Usuario100000` FOREIGN KEY (`ID_Usuario_FK`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Cliente10000` FOREIGN KEY (`ID_Benef_FK`) REFERENCES `cliente` (`ID_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Depto10000` FOREIGN KEY (`ID_Depto_FK`) REFERENCES `depto` (`ID_Depto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Munic10000` FOREIGN KEY (`ID_Munic_FK`) REFERENCES `munic` (`ID_Munic`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Poder_Vta_Vehiculo_Notario1000` FOREIGN KEY (`Notario_ID_Notario`) REFERENCES `notario` (`ID_Notario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contrato_vtavehi_sp`
--
ALTER TABLE `contrato_vtavehi_sp`
  ADD CONSTRAINT `fk_ContratoA_Cliente100` FOREIGN KEY (`ID_Cliente_FK`) REFERENCES `cliente` (`ID_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoA_Usuario100` FOREIGN KEY (`ID_Usuario_FK`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Cliente10` FOREIGN KEY (`ID_Benef_FK`) REFERENCES `cliente` (`ID_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Depto10` FOREIGN KEY (`ID_Depto_FK`) REFERENCES `depto` (`ID_Depto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Munic10` FOREIGN KEY (`ID_Munic_FK`) REFERENCES `munic` (`ID_Munic`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Poder_Vta_Vehiculo_Notario1` FOREIGN KEY (`Notario_ID_Notario`) REFERENCES `notario` (`ID_Notario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Poder_Vta_Vehiculo_TCircula_Poliza1` FOREIGN KEY (`TCircula_Poliza_ID_TCircula_Poliza`) REFERENCES `tcircula_poliza` (`ID_TCircula_Poliza`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cv poliza`
--
ALTER TABLE `cv poliza`
  ADD CONSTRAINT `fk_ContratoA_Cliente10000` FOREIGN KEY (`ID_Cliente_FK`) REFERENCES `cliente` (`ID_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoA_Usuario10000` FOREIGN KEY (`ID_Usuario_FK`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Cliente1000` FOREIGN KEY (`ID_Benef_FK`) REFERENCES `cliente` (`ID_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Depto1000` FOREIGN KEY (`ID_Depto_FK`) REFERENCES `depto` (`ID_Depto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Munic1000` FOREIGN KEY (`ID_Munic_FK`) REFERENCES `munic` (`ID_Munic`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Poder_Vta_Vehiculo_Notario100` FOREIGN KEY (`Notario_ID_Notario`) REFERENCES `notario` (`ID_Notario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `munic`
--
ALTER TABLE `munic`
  ADD CONSTRAINT `fk_Munic_Depto1` FOREIGN KEY (`ID_Depto_FK`) REFERENCES `depto` (`ID_Depto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `poder_vta_arma`
--
ALTER TABLE `poder_vta_arma`
  ADD CONSTRAINT `fk_ContratoA_Cliente1000` FOREIGN KEY (`ID_Cliente_FK`) REFERENCES `cliente` (`ID_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoA_Usuario1000` FOREIGN KEY (`ID_Usuario_FK`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Cliente100` FOREIGN KEY (`ID_Benef_FK`) REFERENCES `cliente` (`ID_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Depto100` FOREIGN KEY (`ID_Depto_FK`) REFERENCES `depto` (`ID_Depto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ContratoB_Munic100` FOREIGN KEY (`ID_Munic_FK`) REFERENCES `munic` (`ID_Munic`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Poder_Vta_Vehiculo_Notario10` FOREIGN KEY (`Notario_ID_Notario`) REFERENCES `notario` (`ID_Notario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_TUsuario1` FOREIGN KEY (`ID_TUser_FK`) REFERENCES `tusuario` (`ID_TUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
