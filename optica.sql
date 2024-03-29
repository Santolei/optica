-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2022 a las 13:47:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `id_venta` int(11) NOT NULL DEFAULT 0,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
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
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `dia` varchar(50) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_producto` varchar(100) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL DEFAULT '0',
  `cantidad` int(11) NOT NULL DEFAULT 0,
  `precio` float NOT NULL DEFAULT 0,
  `costo_usd` float NOT NULL DEFAULT 0,
  `costo_pesos` float NOT NULL DEFAULT 0,
  `valor_dolar` float NOT NULL DEFAULT 0,
  `consumo_sin_descuento` float NOT NULL DEFAULT 0,
  `consumo` float NOT NULL DEFAULT 0,
  `costo_consumo_total` float NOT NULL DEFAULT 0,
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
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `vendedor` varchar(50) NOT NULL DEFAULT '',
  `sucursal` varchar(50) NOT NULL DEFAULT '',
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `telefono` varchar(100) NOT NULL DEFAULT '',
  `dni` varchar(100) NOT NULL DEFAULT '',
  `obra_social` varchar(100) NOT NULL DEFAULT '',
  `doctor` varchar(100) NOT NULL DEFAULT '',
  `fecha_receta` varchar(100) NOT NULL DEFAULT '',
  `patologia` varchar(100) NOT NULL DEFAULT '',
  `lejos_der_esf_receta` varchar(50) DEFAULT NULL,
  `lejos_der_cil_receta` varchar(50) DEFAULT NULL,
  `lejos_der_eje_receta` varchar(50) DEFAULT NULL,
  `lejos_der_add_receta` varchar(50) DEFAULT NULL,
  `lejos_izq_esf_receta` varchar(50) DEFAULT NULL,
  `lejos_izq_cil_receta` varchar(50) DEFAULT NULL,
  `lejos_izq_eje_receta` varchar(50) DEFAULT NULL,
  `lejos_izq_add_receta` varchar(50) DEFAULT NULL,
  `intermedia_der_esf_receta` varchar(50) DEFAULT NULL,
  `intermedia_der_cil_receta` varchar(50) DEFAULT NULL,
  `intermedia_der_eje_receta` varchar(50) DEFAULT NULL,
  `intermedia_der_add_receta` varchar(50) DEFAULT NULL,
  `intermedia_izq_esf_receta` varchar(50) DEFAULT NULL,
  `intermedia_izq_cil_receta` varchar(50) DEFAULT NULL,
  `intermedia_izq_eje_receta` varchar(50) DEFAULT NULL,
  `intermedia_izq_add_receta` varchar(50) DEFAULT NULL,
  `cerca_der_esf_receta` varchar(50) DEFAULT NULL,
  `cerca_der_cil_receta` varchar(50) DEFAULT NULL,
  `cerca_der_eje_receta` varchar(50) DEFAULT NULL,
  `cerca_der_add_receta` varchar(50) DEFAULT NULL,
  `cerca_izq_esf_receta` varchar(50) DEFAULT NULL,
  `cerca_izq_cil_receta` varchar(50) DEFAULT NULL,
  `cerca_izq_eje_receta` varchar(50) DEFAULT NULL,
  `cerca_izq_add_receta` varchar(50) DEFAULT NULL,
  `tipo_lente` varchar(100) NOT NULL DEFAULT '',
  `material` varchar(100) NOT NULL DEFAULT '',
  `producto` varchar(100) NOT NULL DEFAULT '',
  `tratamiento` varchar(100) NOT NULL DEFAULT '',
  `checkbox_lejos` float NOT NULL DEFAULT 0,
  `checkbox_intermedia` float NOT NULL DEFAULT 0,
  `checkbox_cerca` float NOT NULL DEFAULT 0,
  `marca_armazon` varchar(100) NOT NULL DEFAULT '',
  `material_armazon` varchar(100) NOT NULL DEFAULT '',
  `tipo_armazon` varchar(100) NOT NULL DEFAULT '',
  `dist_interpupilar` varchar(100) NOT NULL DEFAULT '',
  `altura` varchar(100) NOT NULL DEFAULT '',
  `cristales_precio` float NOT NULL DEFAULT 0,
  `armazon_precio` float NOT NULL DEFAULT 0,
  `otros_precio` float NOT NULL DEFAULT 0,
  `total` float NOT NULL DEFAULT 0,
  `senia` float NOT NULL DEFAULT 0,
  `saldo` float NOT NULL DEFAULT 0,
  `metodo_pago` varchar(50) NOT NULL DEFAULT '0',
  `fecha_entrega` timestamp NOT NULL DEFAULT current_timestamp(),
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
  `observaciones` varchar(200) DEFAULT NULL,
  `estado` varchar(50) DEFAULT 'Reservado'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id`, `id_paciente`, `fecha`, `vendedor`, `sucursal`, `nombre`, `telefono`, `dni`, `obra_social`, `doctor`, `fecha_receta`, `patologia`, `lejos_der_esf_receta`, `lejos_der_cil_receta`, `lejos_der_eje_receta`, `lejos_der_add_receta`, `lejos_izq_esf_receta`, `lejos_izq_cil_receta`, `lejos_izq_eje_receta`, `lejos_izq_add_receta`, `intermedia_der_esf_receta`, `intermedia_der_cil_receta`, `intermedia_der_eje_receta`, `intermedia_der_add_receta`, `intermedia_izq_esf_receta`, `intermedia_izq_cil_receta`, `intermedia_izq_eje_receta`, `intermedia_izq_add_receta`, `cerca_der_esf_receta`, `cerca_der_cil_receta`, `cerca_der_eje_receta`, `cerca_der_add_receta`, `cerca_izq_esf_receta`, `cerca_izq_cil_receta`, `cerca_izq_eje_receta`, `cerca_izq_add_receta`, `tipo_lente`, `material`, `producto`, `tratamiento`, `checkbox_lejos`, `checkbox_intermedia`, `checkbox_cerca`, `marca_armazon`, `material_armazon`, `tipo_armazon`, `dist_interpupilar`, `altura`, `cristales_precio`, `armazon_precio`, `otros_precio`, `total`, `senia`, `saldo`, `metodo_pago`, `fecha_entrega`, `monofocal_lejos_der_esf`, `monofocal_lejos_der_cil`, `monofocal_lejos_der_eje`, `monofocal_lejos_der_add`, `monofocal_lejos_izq_esf`, `monofocal_lejos_izq_cil`, `monofocal_lejos_izq_eje`, `monofocal_lejos_izq_add`, `monofocal_intermedia_der_esf`, `monofocal_intermedia_der_cil`, `monofocal_intermedia_der_eje`, `monofocal_intermedia_der_add`, `monofocal_intermedia_izq_esf`, `monofocal_intermedia_izq_cil`, `monofocal_intermedia_izq_eje`, `monofocal_intermedia_izq_add`, `monofocal_cerca_der_esf`, `monofocal_cerca_der_cil`, `monofocal_cerca_der_eje`, `monofocal_cerca_der_add`, `monofocal_cerca_izq_esf`, `monofocal_cerca_izq_cil`, `monofocal_cerca_izq_eje`, `monofocal_cerca_izq_add`, `bifocal_der_esf`, `bifocal_der_cil`, `bifocal_der_eje`, `bifocal_der_add`, `bifocal_izq_esf`, `bifocal_izq_cil`, `bifocal_izq_eje`, `bifocal_izq_add`, `multifocal_der_esf`, `multifocal_der_cil`, `multifocal_der_eje`, `multifocal_der_add`, `multifocal_izq_esf`, `multifocal_izq_cil`, `multifocal_izq_eje`, `multifocal_izq_add`, `trabajo`, `observaciones`, `estado`) VALUES
(53, 1, '2021-02-09 20:36:27', '8', 'Plaza', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'Alvaro Rodriguez', '3-2-2021', 'Astigmatismo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 2', 1, 0, 0, 'Marca', 'Material', 'Armazon', '2', '2', 1500, 2500, 300, 4300, 2000, 2300, '0', '2021-02-16 03:00:00', '1', '2', '1', '1', '1', '1', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Entregado'),
(54, 8, '2021-02-09 20:51:43', '10', 'Av. del sol', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'Alvaro Rodriguez', '12-5-2020', 'Astigmatismo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bifocal', 'Mineral', 'Prueba producto', 'Tratamiento 2', 0, 0, 0, 'asdad', 'asdasd', 'asdasd', '2', '2', 5000, 2222, 150, 7372, 5000, 2372, '0', '2021-02-16 03:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rep', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Entregado'),
(55, 9, '2021-02-27 22:58:21', '9', 'Plaza', 'Santiago Tolosa 2', '266475487', '33225544', 'Sancor', 'asdasd', '32-1-2021', 'Astigmatismo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bifocal', 'Mineral', 'Producto 3', 'Tratamiento 3', 0, 0, 0, 'asdasd', 'asdasdhg', 'asdasasd', '77', '7', 234234, 234, 234, 234702, 234, 234468, 'Tarj Debito', '2021-02-16 03:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', '', 'Entregado'),
(57, 3, '2021-02-27 23:06:55', '9', 'Plaza', 'Juancito Perez', '123123123', '4545254', 'Sancor', 'asdasdasd', '32-1-2021', 'Astigmatismo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monofocal', 'Otros', 'Producto 4', 'Tratamiento 2', 1, 1, 0, 'asdasd', 'asdasd', 'asdasd', '2asd', 'asdd', 123, 33, 60, 216, 200, 16, 'Tarj Credito', '2021-02-16 03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', '2', '2', '2', '2', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', 'asdasdasdasds', 'Reservado'),
(58, 1, '2021-02-27 23:09:08', '9', 'Plaza', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', '123', '10-2-2021', 'Astigmatismo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monofocal', 'Mineral', 'Producto 3', 'Tratamiento 2', 1, 0, 0, 'sdadasd', 'asdasda', 'asdasd', '22', '22', 123, 22, 2, 147, 50, 97, 'Efectivo', '2021-02-22 03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rep', 'asdadsadadasdad', 'Entregado'),
(59, 8, '2021-02-27 23:19:43', '9', 'Plaza', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', 'asdasdasd', '32-1-2021', 'Astigmatismo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monofocal', 'Mineral', 'Prueba producto', 'Tratamiento 2', 1, 0, 0, 'asdads', 'asdasd', 'asdasd', '2', '2', 123, 23, 33, 179, 79, 100, 'Tarj Debito', '2021-02-21 03:00:00', '1', '11', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', 'asdasdasdasd', 'Esperando armazón'),
(60, 1, '2021-03-03 21:23:04', '8', 'Av. del sol', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'Alvaro Rodriguez', '12-12-1289', 'Miopia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monofocal', 'Mineral', 'Prueba producto', 'Tratamiento 1', 1, 1, 1, 'casdasda', 'asdasd', 'asdasd', '2', '2', 500, 700, 1500, 2700, 1500, 1200, 'Tarj Debito', '2021-03-12 03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '12', '2', '2', '2', '2', '2', '3', '3', '3', '3', '3', '3', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rep', 'Cosas varias por hacer, bla bla bla bla', 'Entregado'),
(61, 10, '2021-03-08 18:15:03', '10', 'Av. del sol', 'Pedro Perez Fernandez', '475445', '12555666', 'Osde', 'Juan perez', '12-12-2020', 'Miopia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monofocal', 'Mineral', 'Prueba producto', 'Tratamiento 3', 1, 0, 0, 'Marca', 'Material', 'Armazon', '5', '5', 900, 1500, 500, 2900, 500, 2400, 'Tarj Debito', '2021-03-15 03:00:00', '1', '1', '2', '1', '2', '2', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Trat', 'Lorem ipsum dolor sit Amet Lorem ipsum dolor sit Amet Lorem ipsum dolor sit AmetLorem ipsum dolor sit Amet', 'En taller'),
(62, 8, '2021-03-08 19:17:39', '8', 'Plaza', 'Jose Luis Pereyra', '123123123', '20345333', 'Prueba obra', '12asdasd', '9-3-2021', 'Astigmatismo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 2', 1, 0, 0, 'Marca', 'Material', 'Armazon', '5', '5', 500, 1200, 800, 2500, 1000, 1500, 'Efectivo', '2021-03-09 03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', 'Prueba de comentarios', 'Para entregar (Avisado)'),
(63, 1, '2021-03-10 20:20:30', '9', 'Plaza', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'Nombre Doc', '10-3-2021', 'Miopia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Multifocal', 'Mineral', 'Producto 3', 'Tratamiento 1', 0, 0, 0, 'marca', 'Material', 'Armazon', '5', '5', 500, 500, 2500, 3500, 1500, 2000, 'Efectivo', '2021-03-17 03:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '-5', '-1', '-1', '1', '1', '1', 'Trat', 'Prueba de comentarios', 'Entregado'),
(64, 1, '2021-07-07 20:34:22', '9', 'Av. del sol', 'Santiago Tolosa', '2664713206 /476453', '34304468', 'Sancor Salud', 'Alvaro Rodriguez', '28-7-2021', 'Miopia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 1', 1, 0, 0, 'Caballo', 'Madera', 'Maderudo', '12', '12', 1200, 500, 250, 1950, 1000, 950, 'Tarj Debito', '2021-07-14 03:00:00', '0.25', '0.75', '1', '0.5', '1', '0.75', '1', '0.25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Trat', 'El cliente no tiene nariz por lo que se le caen los anteojos', 'Para entregar (Avisar)'),
(65, 4, '2021-07-27 19:12:32', '8', 'Av. del sol', 'Carloncho Tiza', '244658746', '34304456', 'Sancor', 'Alvaro rodriguez', '29-6-2021', 'Astigmatismo', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '0', '0.25', 'Bifocal', 'Organico', 'Producto 2', 'Tratamiento 1', 0, 0, 0, 'asdasdasd', 'asdasd', 'asdasd', '1', '1', 123, 123, 123, 369, 22, 347, 'Tarj Debito', '2021-07-12 03:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Trat', 'asdadasdasdas', 'Entregado'),
(66, 4, '2021-07-27 19:12:32', '8', 'Av. del sol', 'Carloncho Tiza', '244658746', '34304456', 'Sancor', 'Alvaro rodriguez', '29-6-2021', 'Astigmatismo', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '0', '0.25', 'Bifocal', 'Organico', 'Producto 2', 'Tratamiento 1', 0, 0, 0, 'asdasdasd', 'asdasd', 'asdasd', '1', '1', 123, 123, 123, 369, 22, 347, 'Tarj Debito', '2021-07-12 03:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Trat', 'asdadasdasdas', 'Entregado'),
(67, 4, '2021-07-27 19:29:47', '9', 'Plaza', 'Carloncho Tiza', '244658746', '34304456', 'Sancor', 'asdasdasd', '27-7-2021', 'Astigmatismo', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.25', '0.25', '1', '0.25', '0.25', '0.5', '1', '0.25', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 2', 0, 0, 1, 'Cagasd', 'asdasd', 'asdad', '22', '22', 500, 688, 56, 1244, 55, 1189, 'Efectivo', '2021-08-04 03:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.25', '-0.25', '-1', '0.25', '0.25', '0.25', '1', '0.25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', 'asdasdasdasd', 'Entregado'),
(68, 4, '2021-07-27 19:32:20', '9', 'Plaza', 'Carloncho Tiza', '244658746', '34304456', 'Sancor', 'Alvaro', '26-7-2021', 'Astigmatismo', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '', '', '', '', '', '', '', '', 'Monofocal', 'Organico', 'Producto 2', 'Tratamiento 1', 1, 1, 0, 'asdasd', 'asdasd', 'asdasd', '23', '23', 5000, 3000, 2344, 10344, 5000, 5344, 'Efectivo', '2021-08-04 03:00:00', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '0.25', '0.25', '0.25', '0', '0', '0.25', '0.25', '1', '0.25', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', 'asdadasdasdasdsa', 'Entregado'),
(69, 13, '2021-09-24 20:38:15', '7', 'Plaza', 'VERONICA BARALDI', '2664036140', '33115845', 'OSECAC', 'Carlos perez', '22-9-2021', 'Hipermetropia', '2', '2', '1', '0', '1', '', '1', '0', '0', '4', '4', '4', '4', '5', '1', '1', '', '', '', '', '', '', '', '', 'Monofocal', 'Policarbonato', 'Prueba de producto con nombre largo', 'Tratamiento 2', 1, 1, 0, 'Carbon', 'Plastico', 'Prueba armazón', '2mm', '2mm', 500, 1500, 5500, 7250, 2000, 5250, 'Efectivo', '2021-09-30 03:00:00', '0.75', '0.75', '2', '0.75', '0.5', '0.75', '3', '0.75', '0.5', '0.5', '2', '0.5', '0.5', '-0.5', '1', '0.25', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', 'Prueba de comentario, esto es para testear como funciona todo.', 'Entregado'),
(72, 9, '2021-09-24 21:13:33', '10', 'Plaza', 'Santiago Tolosa 2', '266475487', '33225544', 'Sancor', 'Pulcini', '28-9-2021', 'Hipermetropia', '0.5', '0.25', '1', '0.25', '0.5', '0.5', '2', '0.5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bifocal', 'Policarbonato', 'Prueba de producto con nombre largo', 'BLUE LIGHT', 0, 0, 0, 'Prueba de marca', 'material', 'armazon', '12', '12', 5000, 2500, 455, 7455, 1100, 6355, 'Efectivo', '2021-10-08 03:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.25', '0.25', '1', '0.25', '0.25', '0.25', '1', '-0.25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rep', 'Prueba de comentario', 'Entregado'),
(73, 10, '2021-09-24 21:15:56', '7', 'Av. del sol', 'Pedro Perez Fernandez', '475445', '12555666', 'Osde', 'Pulcini', '21-9-2021', 'Astigmatismo', '0.25', '0.25', '1', '0.5', '0.5', '0.25', '1', '0.25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Monofocal', 'Organico', 'CRIZAL PREVENCIA', 'TINTE 1', 1, 0, 0, 'Prueba de marca', 'Material', 'Armazon', '12|', '12', 2500, 3500, 500, 6375, 3000, 3375, 'Efectivo', '2021-10-01 03:00:00', '0.25', '0.25', '2', '0.25', '0.25', '0.25', '1', '0.25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Calib', 'Prueba de comentario y observaciones', 'Reservado'),
(74, 4, '2022-01-18 22:33:29', '9', 'Av. del sol', 'Carloncho Tiza', '244658746', '34304456', 'Sancor', 'asdasdadads', '26-12-2021', 'Cataratas', '0.25', '0.25', '1', '0.25', '0', '0.25', '1', '0.25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Monofocal', 'Mineral', 'Producto 3', 'AR', 1, 0, 0, 'asdadasdasd', 'asdasdasda', 'sdadads', '2', '2', 112, 333, 2223, 2645.75, 1000, 1645.75, 'Efectivo', '2022-01-12 03:00:00', '0.25', '0.25', '1', '0', '0', '0.25', '1', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rep', 'Probando referencias', 'Reservado');

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
(9, 'Santiago Tolosa 2', '266475487', '33225544', 'Sancor'),
(10, 'Pedro Perez Fernandez', '475445', '12555666', 'Osde'),
(13, 'VERONICA BARALDI', '2664036140', '33115845', 'OSECAC'),
(14, 'MARISA GUZMAN', '2664863307', '11111111', ''),
(15, 'Paula Baraldi', '2664036207', '29077884', 'Osecac');

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
(7, 'Miopia'),
(8, 'Hipermetropia'),
(9, 'Cataratas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` int(11) NOT NULL DEFAULT 0,
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  `categoria` varchar(50) NOT NULL DEFAULT '0',
  `material` varchar(100) NOT NULL DEFAULT '0',
  `editar` varchar(100) DEFAULT NULL,
  `borrar` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT 1,
  `modificado` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo`, `nombre`, `categoria`, `material`, `editar`, `borrar`, `estado`, `modificado`) VALUES
(1, 1, 'STOCK', 'Anteojos', 'Mineral', '1', '1', 1, '2021-09-24 17:28:20'),
(2, 2, 'CRIZAL PREVENCIA', 'Anteojos', 'Organico', '2', '2', 1, '2021-09-24 17:28:36'),
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
(2, 'Empleado');

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
(11, 'AR'),
(12, 'BLUE LIGHT'),
(13, 'TINTE 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `rol` int(11) NOT NULL DEFAULT 0,
  `password` varchar(300) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `rol`, `password`) VALUES
(5, 'Admin', 1, 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec'),
(6, 'Santiago', 1, '765129f617218be6005e99eff125588787cd6443f07231af11a8b88d691179ea3ea0a4abd295dc030545633add41c5b560f1fc4529b3e3a1b84477d1c0d8292f'),
(7, 'Empleado', 2, 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413');

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
(7, 'VICTOR', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413'),
(8, 'Vendedor 2', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413'),
(9, 'Vendedor 3', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413'),
(10, 'Vendedor 4', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_temporal`
--

CREATE TABLE `venta_temporal` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL DEFAULT 0,
  `codigo` int(11) NOT NULL DEFAULT 0,
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  `precio` float NOT NULL DEFAULT 0,
  `costo_usd` float NOT NULL DEFAULT 0,
  `costo_pesos` float NOT NULL DEFAULT 0,
  `valor_dolar` float NOT NULL DEFAULT 0,
  `descuento` float NOT NULL DEFAULT 0,
  `cantidad` int(11) NOT NULL DEFAULT 0,
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `patologias`
--
ALTER TABLE `patologias`
  MODIFY `id_patologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id_tratamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
