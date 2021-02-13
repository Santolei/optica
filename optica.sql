-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2021 a las 04:09:31
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `optica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dia` varchar(50) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `monto` float NOT NULL,
  `metodo_pago` varchar(50) NOT NULL,
  `vendedor` varchar(100) NOT NULL,
  `cliente` varchar(100) NOT NULL DEFAULT 'Consumidor Final'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1, 'Anteojos'),
(3, 'Lentes de contacto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `valor_dolar` float DEFAULT NULL,
  `descuento_efectivo` float DEFAULT NULL,
  `precio_dolares` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`valor_dolar`, `descuento_efectivo`, `precio_dolares`) VALUES
(65, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_ventas`
--

CREATE TABLE `historial_ventas` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dia` varchar(50) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_producto` varchar(100) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL DEFAULT '0',
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `precio` float NOT NULL DEFAULT '0',
  `costo_usd` float NOT NULL DEFAULT '0',
  `costo_pesos` float NOT NULL DEFAULT '0',
  `valor_dolar` float NOT NULL DEFAULT '0',
  `consumo_sin_descuento` float NOT NULL DEFAULT '0',
  `consumo` float NOT NULL DEFAULT '0',
  `costo_consumo_total` float NOT NULL DEFAULT '0',
  `prod_vendidos` varchar(1000) NOT NULL,
  `vendedor` varchar(100) NOT NULL DEFAULT '0',
  `cliente` varchar(100) NOT NULL DEFAULT 'Consumidor Final'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`) VALUES
(1, 'blizzard');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vendedor` varchar(50) NOT NULL DEFAULT 'current_timestamp()',
  `sucursal` varchar(50) NOT NULL DEFAULT 'current_timestamp()',
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `telefono` varchar(100) NOT NULL DEFAULT '',
  `dni` varchar(100) NOT NULL DEFAULT '',
  `obra_social` varchar(100) NOT NULL DEFAULT '',
  `doctor` varchar(100) NOT NULL DEFAULT '',
  `fecha_receta` varchar(100) NOT NULL DEFAULT '',
  `patologia` varchar(100) NOT NULL DEFAULT '',
  `graduacion_od` varchar(100) NOT NULL DEFAULT '',
  `graduacion_oi` varchar(100) NOT NULL DEFAULT '',
  `tipo_lente` varchar(100) NOT NULL DEFAULT '',
  `material` varchar(100) NOT NULL DEFAULT '',
  `producto` varchar(100) NOT NULL DEFAULT '',
  `tratamiento` varchar(100) NOT NULL DEFAULT '',
  `checkbox_lejos` float NOT NULL DEFAULT '0',
  `checkbox_intermedia` float NOT NULL DEFAULT '0',
  `checkbox_cerca` float NOT NULL DEFAULT '0',
  `marca_armazon` varchar(100) NOT NULL DEFAULT '',
  `material_armazon` varchar(100) NOT NULL DEFAULT '',
  `tipo_armazon` varchar(100) NOT NULL DEFAULT '',
  `dist_interpupilar` varchar(100) NOT NULL DEFAULT '',
  `altura` varchar(100) NOT NULL DEFAULT '',
  `cristales_precio` float NOT NULL DEFAULT '0',
  `armazon_precio` float NOT NULL DEFAULT '0',
  `otros_precio` float NOT NULL DEFAULT '0',
  `total` float NOT NULL DEFAULT '0',
  `senia` float NOT NULL DEFAULT '0',
  `saldo` float NOT NULL DEFAULT '0',
  `monofocal_lejos_der_esf` varchar(50) DEFAULT NULL,
  `monofocal_lejos_der_cil` varchar(50) DEFAULT NULL,
  `monofocal_lejos_der_eje` varchar(50) DEFAULT NULL,
  `monofocal_lejos_der_add` varchar(50) DEFAULT NULL,
  `monofocal_lejos_izq_esf` varchar(50) DEFAULT NULL,
  `monofocal_lejos_izq_cil` varchar(50) DEFAULT NULL,
  `monofocal_lejos_izq_eje` varchar(50) DEFAULT NULL,
  `monofocal_lejos_izq_add` varchar(50) DEFAULT NULL,
  `monofocal_intermedia_der_esf` varchar(50) DEFAULT NULL,
  `monofocal_intermedia_der_cil` varchar(50) DEFAULT NULL,
  `monofocal_intermedia_der_eje` varchar(50) DEFAULT NULL,
  `monofocal_intermedia_der_add` varchar(50) DEFAULT NULL,
  `monofocal_intermedia_izq_esf` varchar(50) DEFAULT NULL,
  `monofocal_intermedia_izq_cil` varchar(50) DEFAULT NULL,
  `monofocal_intermedia_izq_eje` varchar(50) DEFAULT NULL,
  `monofocal_intermedia_izq_add` varchar(50) DEFAULT NULL,
  `monofocal_cerca_der_esf` varchar(50) DEFAULT NULL,
  `monofocal_cerca_der_cil` varchar(50) DEFAULT NULL,
  `monofocal_cerca_der_eje` varchar(50) DEFAULT NULL,
  `monofocal_cerca_der_add` varchar(50) DEFAULT NULL,
  `monofocal_cerca_izq_esf` varchar(50) DEFAULT NULL,
  `monofocal_cerca_izq_cil` varchar(50) DEFAULT NULL,
  `monofocal_cerca_izq_eje` varchar(50) DEFAULT NULL,
  `monofocal_cerca_izq_add` varchar(50) DEFAULT NULL,
  `bifocal_der_esf` varchar(50) DEFAULT NULL,
  `bifocal_der_cil` varchar(50) DEFAULT NULL,
  `bifocal_der_eje` varchar(50) DEFAULT NULL,
  `bifocal_der_add` varchar(50) DEFAULT NULL,
  `bifocal_izq_esf` varchar(50) DEFAULT NULL,
  `bifocal_izq_cil` varchar(50) DEFAULT NULL,
  `bifocal_izq_eje` varchar(50) DEFAULT NULL,
  `bifocal_izq_add` varchar(50) DEFAULT NULL,
  `multifocal_der_esf` varchar(50) DEFAULT NULL,
  `multifocal_der_cil` varchar(50) DEFAULT NULL,
  `multifocal_der_eje` varchar(50) DEFAULT NULL,
  `multifocal_der_add` varchar(50) DEFAULT NULL,
  `multifocal_izq_esf` varchar(50) DEFAULT NULL,
  `multifocal_izq_cil` varchar(50) DEFAULT NULL,
  `multifocal_izq_eje` varchar(50) DEFAULT NULL,
  `multifocal_izq_add` varchar(50) DEFAULT NULL,
  `trabajo` varchar(50) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id`, `id_paciente`, `fecha`, `vendedor`, `sucursal`, `nombre`, `telefono`, `dni`, `obra_social`, `doctor`, `fecha_receta`, `patologia`, `graduacion_od`, `graduacion_oi`, `tipo_lente`, `material`, `producto`, `tratamiento`, `checkbox_lejos`, `checkbox_intermedia`, `checkbox_cerca`, `marca_armazon`, `material_armazon`, `tipo_armazon`, `dist_interpupilar`, `altura`, `cristales_precio`, `armazon_precio`, `otros_precio`, `total`, `senia`, `saldo`, `monofocal_lejos_der_esf`, `monofocal_lejos_der_cil`, `monofocal_lejos_der_eje`, `monofocal_lejos_der_add`, `monofocal_lejos_izq_esf`, `monofocal_lejos_izq_cil`, `monofocal_lejos_izq_eje`, `monofocal_lejos_izq_add`, `monofocal_intermedia_der_esf`, `monofocal_intermedia_der_cil`, `monofocal_intermedia_der_eje`, `monofocal_intermedia_der_add`, `monofocal_intermedia_izq_esf`, `monofocal_intermedia_izq_cil`, `monofocal_intermedia_izq_eje`, `monofocal_intermedia_izq_add`, `monofocal_cerca_der_esf`, `monofocal_cerca_der_cil`, `monofocal_cerca_der_eje`, `monofocal_cerca_der_add`, `monofocal_cerca_izq_esf`, `monofocal_cerca_izq_cil`, `monofocal_cerca_izq_eje`, `monofocal_cerca_izq_add`, `bifocal_der_esf`, `bifocal_der_cil`, `bifocal_der_eje`, `bifocal_der_add`, `bifocal_izq_esf`, `bifocal_izq_cil`, `bifocal_izq_eje`, `bifocal_izq_add`, `multifocal_der_esf`, `multifocal_der_cil`, `multifocal_der_eje`, `multifocal_der_add`, `multifocal_izq_esf`, `multifocal_izq_cil`, `multifocal_izq_eje`, `multifocal_izq_add`, `trabajo`, `observaciones`) VALUES
(13, 3, '2020-10-27 18:02:15', 'current_timestamp()', 'current_timestamp()', 'Juancito Perez', '123123123', '4545254', 'Sancor', 'asdasdasd', '29-9-2020', 'Astigmatismo', '2', '2', 'Multifocal', 'Organico', 'Producto 2', 'Tratamiento 2', 0, 0, 0, 'asdasd', 'asdasd', 'asdasd', '2', '3', 0, 0, 0, 123, 123, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 8, '2020-10-28 15:05:42', 'current_timestamp()', 'current_timestamp()', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'asdasdasd', '6-10-2020', 'Miopia', '1', '1', 'Bifocal', 'Organico', 'Producto 2', 'Tratamiento 2', 0, 0, 0, 'asdasdasd', 'asdasd', 'asdasdasd', '2', '2', 0, 0, 0, 1000, 145, 134, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 8, '2020-10-28 15:09:10', 'current_timestamp()', 'current_timestamp()', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'asdasdasd', '12-2-2020', 'Miopia', '2', '2', 'Multifocal', 'Policarbonato', 'Producto', 'Tratamiento 1', 0, 0, 0, 'casda', 'asdasd', '123123', '123', '12', 0, 0, 0, 123, 123, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 7, '2020-10-28 15:11:34', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', 'qasdasdasd', '9-10-2020', 'Astigmatismo', '2', '2', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 2', 0, 0, 0, '1asdasd', 'asdasda', 'sdasd', '22', '22', 0, 0, 0, 1231, 23, 123, '2', '2', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 9, '2020-10-28 15:17:21', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa 2', '266475487', '33225544', 'Sancor', '12asdasd', '22-10-2020', 'Miopia', '2', '2', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 1', 0, 0, 0, 'asdasdas', 'asdasd', 'asdasd', '22', '22', 0, 0, 0, 123, 123, 12, '12', '12', '2', '2', '12', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 1, '2020-10-30 15:05:32', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'asdasdasd', '5-10-2020', 'Astigmatismo', '12', '2', 'Multifocal', 'Organico', 'Producto 2', 'Tratamiento 2', 0, 0, 0, '1', '1', '1', '1', '1', 0, 0, 0, 123, 123, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 7, '2020-10-30 15:09:57', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', '1', '19-10-2020', 'Miopia', '1', '1', 'Multifocal', 'Mineral', 'Producto 3', 'Tratamiento 3', 0, 0, 0, '1', '1', '1', '1', '1', 0, 0, 0, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 1, '2020-11-02 19:10:14', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'asdasd', '9-11-2020', 'Astigmatismo', '-1', '1', 'Monofocal', 'Policarbonato', 'Producto', 'Tratamiento 2', 0, 0, 0, '2asd', 'asd', 'asd', '2', '2', 0, 0, 0, 222, 222, 22, '1', '2', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 1, '2020-11-02 19:13:32', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'asdasdsa', '17-11-2020', 'Astigmatismo', '1', '1', 'Bifocal', 'Organico', 'Producto 2', 'Tratamiento 2', 0, 0, 0, 'asdasd', 'asdasd', 'asdasd', '1', '1', 0, 0, 0, 123, 123, 12, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 8, '2020-11-02 19:14:56', 'current_timestamp()', 'current_timestamp()', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'asdasdad', '10-11-2020', 'Astigmatismo', '1', '1', 'Monofocal', 'Mineral', 'Producto 3', 'Tratamiento 1', 0, 0, 0, '123', '22', '2', '11', '11', 0, 0, 0, 1, 1, 1, '1', '2', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 1, '2020-11-02 20:17:56', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'asdasdasd', '11-11-2020', '0', '3', '3', 'Bifocal', 'Organico', 'Producto 2', 'Tratamiento 2', 0, 0, 0, 'asdasd', 'asdasd', 'asdasd', '2', '2', 0, 0, 0, 123, 12, 12, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 3, '2020-11-05 19:25:20', 'current_timestamp()', 'current_timestamp()', 'Juancito Perez', '123123123', '4545254', 'Sancor', 'Juan Alvarez Pinto', '11-11-2020', 'Astigmatismo', '1', '1', 'Multifocal', 'Policarbonato', 'Prueba de producto con nombre largo', 'Tratamiento 2', 0, 0, 0, 'Puma lentes ortopedicos', 'Policarbotano tubanato', 'Madera corrugada', '1', '1', 0, 0, 0, 123, 123, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 1, '2020-11-09 22:38:07', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'asdasdasd', '3-11-2020', 'Astigmatismo', '1', '1', 'Monofocal', 'Otros', 'Producto 4', 'Tratamiento 1', 0, 0, 0, 'asdasd', 'asdasd', 'asdasd', '112', '12', 0, 0, 0, 123, 123, 12, '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 7, '2020-11-24 23:51:17', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', 'asdasdasd', 'NaN-NaN-NaN', '0', '1', '1', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 1', 1, 1, 1, '123', '12', '12', '12', '12', 0, 0, 0, 123, 123, 123, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 1, '2020-11-24 23:57:25', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'asdasdasd', '10-11-2020', 'Astigmatismo', '1', '1', 'Monofocal', 'Mineral', 'Producto 3', 'Tratamiento 2', 1, 0, 0, '123123', '123123', '123123', '12', '12', 0, 0, 0, 123123, 12312, 121231, '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 7, '2020-11-25 00:01:04', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', '12asdasd', '11-11-2020', 'Astigmatismo', '1', '1', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 1', 1, 0, 0, '1', '1', '1', '1', '1', 0, 0, 0, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 7, '2020-11-25 00:07:13', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', 'asdasdasd', '2-11-2020', 'Miopia', '1', '1', 'Monofocal', 'Mineral', 'Producto 3', 'Tratamiento 1', 1, 0, 0, '1', '1', '1', '1', '1', 0, 0, 0, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 7, '2020-11-25 00:07:19', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', 'asdasdasd', '2-11-2020', 'Miopia', '1', '1', 'Monofocal', 'Mineral', 'Producto 3', 'Tratamiento 1', 1, 0, 0, '1', '1', '1', '1', '1', 0, 0, 0, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 7, '2020-11-25 00:07:23', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', 'asdasdasd', '2-11-2020', 'Miopia', '1', '1', 'Monofocal', 'Mineral', 'Producto 3', 'Tratamiento 1', 1, 0, 0, '1', '1', '1', '1', '1', 0, 0, 0, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 7, '2020-11-25 00:10:12', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', 'asdasdasd', '3-11-2020', 'Astigmatismo', '1', '1', 'Monofocal', 'Mineral', 'Producto 3', 'Tratamiento 2', 1, 0, 0, '1', '1', '11', '', '1', 0, 0, 0, 12312, 3123, 333, '1', '1', '1', '11', '1', '11', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 8, '2020-11-25 00:16:53', 'current_timestamp()', 'current_timestamp()', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'asdasdasd', '3-11-2020', 'Astigmatismo', '1', '1', 'Bifocal', 'Mineral', 'Producto 3', 'Tratamiento 1', 0, 0, 0, 'asdasdasd', 'asdasd', 'asdasd', '1', '1', 0, 0, 0, 123, 123, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '2', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 8, '2020-11-25 00:16:57', 'current_timestamp()', 'current_timestamp()', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'asdasdasd', '3-11-2020', 'Astigmatismo', '1', '1', 'Bifocal', 'Mineral', 'Producto 3', 'Tratamiento 1', 0, 0, 0, 'asdasdasd', 'asdasd', 'asdasd', '1', '1', 0, 0, 0, 123, 123, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2', '2', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 1, '2020-11-25 01:07:58', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'ghfjfj', '18-11-2020', 'Astigmatismo', '1', '1', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 1', 1, 1, 1, 'ggcgc', 'hvhvh', 'hgcvhch', '1', '1', 0, 0, 0, 1321320, 3321, 3321, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 1, '2020-11-25 01:07:58', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'ghfjfj', '18-11-2020', 'Astigmatismo', '1', '1', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 1', 1, 1, 1, 'ggcgc', 'hvhvh', 'hgcvhch', '1', '1', 0, 0, 0, 1321320, 3321, 3321, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 9, '2020-11-29 14:54:14', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa 2', '266475487', '33225544', 'Sancor', 'asdasdasd', '10-11-2020', 'Astigmatismo', '1', '1', 'Bifocal', 'Policarbonato', 'Prueba de producto con nombre largo', 'Tratamiento 1', 0, 0, 0, 'asdasd', 'asdasd', 'asdasd', '1', '1', 0, 0, 0, 123, 123, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', '2', '2', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 9, '2020-11-29 14:54:14', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa 2', '266475487', '33225544', 'Sancor', 'asdasdasd', '10-11-2020', 'Astigmatismo', '1', '1', 'Bifocal', 'Policarbonato', 'Prueba de producto con nombre largo', 'Tratamiento 1', 0, 0, 0, 'asdasd', 'asdasd', 'asdasd', '1', '1', 0, 0, 0, 123, 123, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', '2', '2', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 8, '2020-11-29 14:56:00', 'current_timestamp()', 'current_timestamp()', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'asdasdasd', '16-11-2020', 'Astigmatismo', '1', '1', 'Bifocal', 'Policarbonato', 'Producto', 'Tratamiento 2', 0, 0, 0, 'asdasdasdd', 'asdasdsad', 'asdasdds', '2', '2', 0, 0, 0, 123, 123, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', '2', '2', '3', '3', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 4, '2020-11-29 15:33:21', 'current_timestamp()', 'current_timestamp()', 'Carloncho Tiza', '244658746', '34304456', 'Sancor', 'asdasdasd', '11-11-2020', 'Astigmatismo', '2', '2', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 2', 1, 0, 1, 'asdasda', 'asdad', 'asdas', '2', '2', 0, 0, 0, 123, 123, 23, '1', '1', '1', '1', '2', '2', '2', '2', '', '', '', '', '', '', '', '', '3', '1', '1', '2', '2', '3', '13', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 4, '2020-11-29 15:33:21', 'current_timestamp()', 'current_timestamp()', 'Carloncho Tiza', '244658746', '34304456', 'Sancor', 'asdasdasd', '11-11-2020', 'Astigmatismo', '2', '2', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 2', 1, 0, 1, 'asdasda', 'asdad', 'asdas', '2', '2', 0, 0, 0, 123, 123, 23, '1', '1', '1', '1', '2', '2', '2', '2', '', '', '', '', '', '', '', '', '3', '1', '1', '2', '2', '3', '13', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 9, '2020-11-29 15:35:59', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa 2', '266475487', '33225544', 'Sancor', 'asdasdasd', '3-11-2020', 'Astigmatismo', '2', '2', 'Monofocal', 'Policarbonato', 'Producto', 'Tratamiento 2', 0, 1, 0, 'asdasdad', 'asdasd', 'asdads', '2', '2', 0, 0, 0, 123, 123, 23, '', '', '', '', '', '', '', '', '2', '2', '2', '2', '2', '2', '2', '2', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 7, '2020-12-02 20:11:01', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', 'asdasdasd', '10-12-2020', 'Astigmatismo', '1', '1', 'Monofocal', 'Policarbonato', 'Producto', 'Tratamiento 2', 1, 1, 1, 'asdasdasd', 'asdasd', 'asdasd', '1', '1', 0, 0, 0, 123123, 1232, 122, '1', '2', '1', '1', '2', '2', '2', '2', '1', '2', '1', '1', '2', '1', '2', '1', '2', '1', '1', '1', '2', '2', '2', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 8, '2020-12-02 20:19:19', 'current_timestamp()', 'current_timestamp()', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'asdasdasd', '2-12-2020', 'Astigmatismo', '2', '2', 'Bifocal', 'Organico', 'Producto 2', 'Tratamiento 2', 0, 0, 0, 'asdasdad', 'asdasdad', 'asdasd', '2', '2', 0, 0, 0, 123, 123, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 1, '2020-12-02 20:36:27', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'asasds', '3-12-2020', 'Astigmatismo', '2', '2', 'Bifocal', 'Organico', 'Producto 2', 'Tratamiento 1', 0, 0, 0, '12', '2', '2', '2', '2', 0, 0, 0, 22, 222, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', '2', '2', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 1, '2020-12-02 20:36:27', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'asasds', '3-12-2020', 'Astigmatismo', '2', '2', 'Bifocal', 'Organico', 'Producto 2', 'Tratamiento 1', 0, 0, 0, '12', '2', '2', '2', '2', 0, 0, 0, 22, 222, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', '2', '2', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 7, '2020-12-02 20:52:50', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', 'asdasdasd', '22-12-2020', 'Astigmatismo', '2', '2', 'Multifocal', 'Policarbonato', 'Prueba de producto con nombre largo', 'Tratamiento 3', 0, 0, 0, 'asdasd', 'asdasd', 'asdasd', '2', '2', 0, 0, 0, 22, 22, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL),
(48, 7, '2020-12-02 20:53:16', 'current_timestamp()', 'current_timestamp()', 'Cacaroto', '2366451554', '323212312', 'Osde', 'asdasdasd', '22-12-2020', 'Astigmatismo', '2', '2', 'Multifocal', 'Policarbonato', 'Prueba de producto con nombre largo', 'Tratamiento 3', 0, 0, 0, 'asdasd', 'asdasd', 'asdasd', '2', '2', 0, 0, 0, 22, 22, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL),
(49, 4, '2020-12-02 20:54:18', 'current_timestamp()', 'current_timestamp()', 'Carloncho Tiza', '244658746', '34304456', 'Sancor', 'asdasdasd', '23-12-2020', 'Astigmatismo', '2', '2', 'Multifocal', 'Policarbonato', 'Prueba de producto con nombre largo', 'Tratamiento 2', 0, 0, 0, 'asdasd', 'asdasd', 'asdasd', '2', '2', 0, 0, 0, 123, 123, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL),
(50, 3, '2021-01-12 20:19:24', 'current_timestamp()', 'current_timestamp()', 'Juancito Perez', '123123123', '4545254', 'Sancor', 'Alvaro rodriguez', '13-1-2021', 'Astigmatismo', '5', '5', 'Multifocal', 'Organico', 'Producto 2', 'Tratamiento 1', 0, 0, 0, 'CArlos', 'Madera', 'Roto', '11', '2', 1500, 2000, 500, 4000, 1500, 2500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '2', '2', '2', NULL, NULL),
(51, 1, '2021-02-07 21:11:45', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'Alvaro Rodriguez', '16-2-2021', 'Astigmatismo', '2', '2', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 2', 1, 0, 0, 'MarcaLente', 'Plástico', 'Mixto', '2', '22', 450, 2000, 500, 2950, 1500, 1450, '1', '1', '1', '1', '1', '1', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 1, '2021-02-07 21:20:51', 'current_timestamp()', 'current_timestamp()', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'asdasdasd', '10-2-2021', 'Astigmatismo', '2', '2', 'Monofocal', 'Mineral', 'Prueba producto', 'Tratamiento 2', 1, 1, 0, 'Casdasd', 'asdadasd', 'asdasdasd', '2', '2', 3000, 2000, 0, 5000, 1900, 3100, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', '2', '2', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'El cliente está cansado así que solo puede venir a retirar el sabado por la tarde porque es el único día que puede dormir hasta tarde. Paga todo con efectivo'),
(53, 1, '2021-02-09 20:36:27', '8', 'Plaza', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'Alvaro Rodriguez', '3-2-2021', 'Astigmatismo', '2', '2', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 2', 1, 0, 0, 'Marca', 'Material', 'Armazon', '2', '2', 1500, 2500, 300, 4300, 2000, 2300, '1', '2', '1', '1', '1', '1', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(54, 8, '2021-02-09 20:51:43', '10', 'Av. del sol', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'Alvaro Rodriguez', '12-5-2020', 'Astigmatismo', '2', '2', 'Bifocal', 'Mineral', 'Prueba producto', 'Tratamiento 2', 0, 0, 0, 'asdad', 'asdasd', 'asdasd', '2', '2', 5000, 2222, 150, 7372, 5000, 2372, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rep', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  `tel_cel` varchar(100) NOT NULL DEFAULT '0',
  `dni` varchar(100) NOT NULL DEFAULT '0',
  `obra_social` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre`, `tel_cel`, `dni`, `obra_social`) VALUES
(1, 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud'),
(3, 'Juancito Perez', '123123123', '4545254', 'Sancor'),
(4, 'Carloncho Tiza', '244658746', '34304456', 'Sancor'),
(7, 'Cacaroto', '2366451554', '323212312', 'Osde'),
(8, 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra'),
(9, 'Santiago Tolosa 2', '266475487', '33225544', 'Sancor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patologias`
--

CREATE TABLE `patologias` (
  `id_patologia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `patologias`
--

INSERT INTO `patologias` (`id_patologia`, `titulo`) VALUES
(4, 'Astigmatismo'),
(7, 'Miopia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  `categoria` varchar(50) NOT NULL DEFAULT '0',
  `material` varchar(100) NOT NULL DEFAULT '0',
  `editar` varchar(100) DEFAULT NULL,
  `borrar` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT '1',
  `modificado` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo`, `nombre`, `categoria`, `material`, `editar`, `borrar`, `estado`, `modificado`) VALUES
(1, 1, 'Producto', 'Anteojos', 'Policarbonato', '1', '1', 1, '2020-09-20 21:53:23'),
(2, 2, 'Producto 2', 'Anteojos', 'Organico', '2', '2', 1, '2020-09-20 21:27:18'),
(5, 3, 'Producto 3', 'Lentes de contacto', 'Mineral', '5', '5', 1, '2020-09-20 21:39:55'),
(6, 4, 'Producto 4', 'Anteojos', 'Otros', '6', '6', 1, '2020-09-20 21:54:11'),
(7, 5, 'Prueba producto', 'Anteojos', 'Mineral', '7', '7', 1, '2020-09-20 22:12:27'),
(8, 6, 'prueba producto2', 'Anteojos', 'Mineral', '8', '8', 1, '2020-09-20 22:12:40'),
(9, 7, 'Prueba de producto con nombre largo', 'Lentes de contacto', 'Policarbonato', '9', '9', 1, '2020-11-05 16:24:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Cajero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id_tratamiento` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id_tratamiento`, `titulo`) VALUES
(11, 'Tratamiento 1'),
(12, 'Tratamiento 2'),
(13, 'Tratamiento 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `rol` int(11) NOT NULL DEFAULT '0',
  `password` varchar(300) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `rol`, `password`) VALUES
(5, 'Admin', 1, 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec'),
(6, 'Santiago', 1, '765129f617218be6005e99eff125588787cd6443f07231af11a8b88d691179ea3ea0a4abd295dc030545633add41c5b560f1fc4529b3e3a1b84477d1c0d8292f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id_vendedor` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(300) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id_vendedor`, `nombre`, `password`) VALUES
(7, 'Vendedor 1', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413'),
(8, 'Vendedor 2', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413'),
(9, 'Vendedor 3', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413'),
(10, 'Vendedor 4', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_temporal`
--

CREATE TABLE `venta_temporal` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL DEFAULT '0',
  `codigo` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  `precio` float NOT NULL DEFAULT '0',
  `costo_usd` float NOT NULL DEFAULT '0',
  `costo_pesos` float NOT NULL DEFAULT '0',
  `valor_dolar` float NOT NULL DEFAULT '0',
  `descuento` float NOT NULL DEFAULT '0',
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `vendedor` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `historial_ventas`
--
ALTER TABLE `historial_ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `patologias`
--
ALTER TABLE `patologias`
  ADD PRIMARY KEY (`id_patologia`) USING BTREE;

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id_tratamiento`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id_vendedor`) USING BTREE;

--
-- Indices de la tabla `venta_temporal`
--
ALTER TABLE `venta_temporal`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `historial_ventas`
--
ALTER TABLE `historial_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `patologias`
--
ALTER TABLE `patologias`
  MODIFY `id_patologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `id_tratamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `venta_temporal`
--
ALTER TABLE `venta_temporal`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
