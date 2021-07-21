-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2021 a las 20:24:17
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_Cliente` int(25) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Razonsocial` varchar(50) NOT NULL,
  `Telefono` bigint(15) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `Direccion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `Nombre`, `Apellidos`, `Razonsocial`, `Telefono`, `correo`, `Direccion`) VALUES
(9, 'Julian steven', 'Rodriguez', '8096543-2', 3026542, 'julian251@gmail.com', 'carrera 25#104-'),
(10, 'Monica', 'Jimenez', '80034572-1', 4407829, 'moniji@gmail.com  ', 'carrera 117#21-'),
(13, 'Enrique ', 'Salazar ', 'N/A', 3458978, 'esalazr@hotmail.com', 'calle 45#67-92'),
(14, 'Victoria Patricia', 'Acevedo', '8026789-9', 3157278967, 'Acevedo8@gmail.com', 'calle 89a# 15-2'),
(15, 'jhostin', 'ladino', '7878523869', 7878, 'hgfgkf', 'yjfhtdt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_Cotizacion` int(25) NOT NULL,
  `Producto` varchar(25) NOT NULL,
  `fecha` date NOT NULL,
  `Costo` int(25) NOT NULL,
  `Descuento` varchar(10) NOT NULL,
  `Cantidad` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`id_Cotizacion`, `Producto`, `fecha`, `Costo`, `Descuento`, `Cantidad`) VALUES
(4, 'extintor mediano  ', '2021-07-03', 21500000, '10%', 5),
(5, 'extintor grande', '2021-07-04', 23500000, '5%', 4),
(6, 'Botiquin mediano  ', '2021-07-03', 21500000, '10%', 5),
(7, 'extintor grande', '2021-07-05', 23500000, '5%', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `Id_Factura` int(25) NOT NULL,
  `Nombre_Cliente` varchar(25) NOT NULL,
  `Cedula_Cliente` int(25) NOT NULL,
  `Fecha` date NOT NULL,
  `Costo_Unitario` int(25) NOT NULL,
  `Producto` varchar(25) NOT NULL,
  `Cantidad` int(25) NOT NULL,
  `Costo_Total` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`Id_Factura`, `Nombre_Cliente`, `Cedula_Cliente`, `Fecha`, `Costo_Unitario`, `Producto`, `Cantidad`, `Costo_Total`) VALUES
(1, 'Jhostin ladino', 1014462109, '2021-07-06', 50000, 'Botiquin mediano  ', 5, 250000000),
(5, 'Ruben Cardona', 1014462109, '2021-07-08', 350000, 'extintor grande', 2, 700000),
(6, 'Milena Fonseca', 102289599, '2021-07-04', 125000, 'botiquin pequeño', 5, 625000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(25) NOT NULL,
  `Costo` int(25) NOT NULL,
  `Caracteristicas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Costo`, `Caracteristicas`) VALUES
(3, 21500000, 'Extintor Mediano'),
(4, 23500000, 'Extintor Grande'),
(5, 21000000, 'Extintor Pequeño'),
(6, 50000000, 'Botiquin Pequeño'),
(7, 75000000, 'Botiquin Mediano'),
(8, 83000000, 'Botiquin Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(25) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `correo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Nombre`, `Apellidos`, `cargo`, `contraseña`, `correo`) VALUES
(1, 'Jhostin Alexander ', 'Ladino Gonzalez', 'administrador', 'hgvf124', 'alex941910@gmail.com'),
(2, 'Ricardo ', 'Martinez ', 'Auxiliar ', 'klhhjvjds345', 'Ricardo@hotmail.com'),
(7, 'Natalia', 'Giraldo Peña', 'Auxiliar', 'ertyui564', 'Nati@hotmail.com'),
(8, 'Dixon Daniel ', 'Lozano ', 'Administrador de bodega', 'awvhiuh85', 'admiDx@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id_Cotizacion`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`Id_Factura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_Cliente` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id_Cotizacion` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `Id_Factura` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
