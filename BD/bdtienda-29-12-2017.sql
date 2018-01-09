-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2017 a las 03:08:41
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtienda`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizararticulo` (IN `nombre` VARCHAR(50), IN `descripcion` VARCHAR(1000), IN `marca` VARCHAR(50), IN `tipo` VARCHAR(50), IN `id` INT)  MODIFIES SQL DATA
UPDATE tbarticulo SET nombrearticulo =nombre, descripcionarticulo=descripcion,marcaarticulo=marca,tipoarticulo=tipo WHERE idarticulo =id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarMoto` (IN `serie` VARCHAR(50), IN `marca` VARCHAR(50), IN `modelo` VARCHAR(50), IN `cilindraje` VARCHAR(50), IN `precio` FLOAT, IN `ano` INT(5), IN `descripcion` VARCHAR(1000), IN `tipo` VARCHAR(50), IN `id` INT)  MODIFIES SQL DATA
UPDATE tbmoto SET seriemoto =serie, marcamoto=marca,modelomoto=modelo, cilindrajemoto=cilindraje,preciomoto=precio,anomoto=ano,	descripcionmoto=descripcion,tipomoto=tipo  WHERE idmoto =id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarClienteLogin` (IN `idLogin` INT)  MODIFIES SQL DATA
SELECT idpersona FROM tbcliente WHERE idlogin=idLogin$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarPersona` (IN `id` INT)  MODIFIES SQL DATA
SELECT cedulapersona FROM tbpersona WHERE idpersona=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminararticulo` (IN `id` INT)  MODIFIES SQL DATA
DELETE FROM tbarticulo WHERE idarticulo=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarMoto` (IN `id` INT)  MODIFIES SQL DATA
DELETE FROM tbmoto WHERE idmoto=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarArticulo` (IN `id` INT, IN `nombre` VARCHAR(50), IN `descripcion` VARCHAR(1000), IN `marca` VARCHAR(50), IN `tipo` VARCHAR(50), IN `precio` FLOAT)  MODIFIES SQL DATA
INSERT INTO tbarticulo(idarticulo,nombrearticulo,descripcionarticulo,marcaarticulo,tipoarticulo,precioarticulo) VALUES(id,nombre,descripcion,marca,tipo,precio)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarMoto` (IN `id` INT, IN `serie` VARCHAR(50), IN `marca` VARCHAR(50), IN `modelo` VARCHAR(50), IN `cilindraje` VARCHAR(50), IN `precio` FLOAT, IN `ano` INT(5), IN `descripcion` VARCHAR(1000), IN `tipo` VARCHAR(50))  MODIFIES SQL DATA
INSERT INTO tbmoto(idmoto,seriemoto,marcamoto,modelomoto,cilindrajemoto,preciomoto,anomoto,descripcionmoto,tipomoto) VALUES (id,serie,marca,modelo,cilindraje,precio,ano,descripcion,tipo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertLogin` (IN `usuario` VARCHAR(50), IN `contrasena` VARCHAR(50), IN `rol` VARCHAR(50))  NO SQL
INSERT INTO tblogin (userlogin,passwordlogin,rollogin) VALUES(usuario,contrasena,rol)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrararticulos` ()  MODIFIES SQL DATA
SELECT* FROM tbarticulo$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarMotos` ()  MODIFIES SQL DATA
SELECT* FROM tbmoto$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbarticulo`
--

CREATE TABLE `tbarticulo` (
  `idarticulo` int(11) NOT NULL,
  `nombrearticulo` varchar(50) NOT NULL,
  `descripcionarticulo` text NOT NULL,
  `marcaarticulo` varchar(50) NOT NULL,
  `tipoarticulo` varchar(50) NOT NULL,
  `precioarticulo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbarticulo`
--

INSERT INTO `tbarticulo` (`idarticulo`, `nombrearticulo`, `descripcionarticulo`, `marcaarticulo`, `tipoarticulo`, `precioarticulo`) VALUES
(1, 'qqq', 'qqq', 'qqq', 'qqq', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idcliente` int(11) NOT NULL,
  `direccioncliente` varchar(1000) NOT NULL,
  `idlogin` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcolaborador`
--

CREATE TABLE `tbcolaborador` (
  `idcolaborador` int(11) NOT NULL,
  `areacolaborador` int(11) NOT NULL,
  `habilidadescolaborador` int(11) NOT NULL,
  `idLogin` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbinventario`
--

CREATE TABLE `tbinventario` (
  `idinventario` int(11) NOT NULL,
  `precioarticulo` int(11) NOT NULL,
  `cantidadadinventario` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbinventario`
--

INSERT INTO `tbinventario` (`idinventario`, `precioarticulo`, `cantidadadinventario`, `idarticulo`) VALUES
(1, 222, 222, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblogin`
--

CREATE TABLE `tblogin` (
  `idlogin` int(11) NOT NULL,
  `userlogin` varchar(200) NOT NULL,
  `passwordlogin` varchar(30) NOT NULL,
  `rollogin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblogin`
--

INSERT INTO `tblogin` (`idlogin`, `userlogin`, `passwordlogin`, `rollogin`) VALUES
(1, 'steven', 'sscq2121', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmoto`
--

CREATE TABLE `tbmoto` (
  `idmoto` int(11) NOT NULL,
  `seriemoto` varchar(30) NOT NULL,
  `marcamoto` varchar(30) NOT NULL,
  `modelomoto` varchar(30) NOT NULL,
  `cilindrajemoto` varchar(30) NOT NULL,
  `preciomoto` float NOT NULL,
  `anomoto` int(5) NOT NULL,
  `descripcionmoto` text NOT NULL,
  `tipomoto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbmoto`
--

INSERT INTO `tbmoto` (`idmoto`, `seriemoto`, `marcamoto`, `modelomoto`, `cilindrajemoto`, `preciomoto`, `anomoto`, `descripcionmoto`, `tipomoto`) VALUES
(1, '22', '22', '22', '22', 22, 2017, 'ljdfkljsdlf', 'montana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpersona`
--

CREATE TABLE `tbpersona` (
  `idpersona` int(11) NOT NULL,
  `nombrepersona` varchar(100) NOT NULL,
  `apellidopersona` varchar(100) NOT NULL,
  `cedulapersona` varchar(100) NOT NULL,
  `telefonopersona` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbpersona`
--

INSERT INTO `tbpersona` (`idpersona`, `nombrepersona`, `apellidopersona`, `cedulapersona`, `telefonopersona`) VALUES
(1, 'steven', 'cespedes quiros', '702430805', '84015647');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbarticulo`
--
ALTER TABLE `tbarticulo`
  ADD PRIMARY KEY (`idarticulo`),
  ADD KEY `idarticulo` (`idarticulo`);

--
-- Indices de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD KEY `idlogin` (`idlogin`),
  ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `tbcolaborador`
--
ALTER TABLE `tbcolaborador`
  ADD KEY `idLogin` (`idLogin`),
  ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `tbinventario`
--
ALTER TABLE `tbinventario`
  ADD PRIMARY KEY (`idarticulo`),
  ADD KEY `idarticulo` (`idarticulo`);

--
-- Indices de la tabla `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indices de la tabla `tbmoto`
--
ALTER TABLE `tbmoto`
  ADD PRIMARY KEY (`idmoto`);

--
-- Indices de la tabla `tbpersona`
--
ALTER TABLE `tbpersona`
  ADD PRIMARY KEY (`idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbarticulo`
--
ALTER TABLE `tbarticulo`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbmoto`
--
ALTER TABLE `tbmoto`
  MODIFY `idmoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbpersona`
--
ALTER TABLE `tbpersona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD CONSTRAINT `tbcliente_ibfk_1` FOREIGN KEY (`idlogin`) REFERENCES `tblogin` (`idlogin`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbcliente_ibfk_2` FOREIGN KEY (`idpersona`) REFERENCES `tbpersona` (`idpersona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbcolaborador`
--
ALTER TABLE `tbcolaborador`
  ADD CONSTRAINT `tbcolaborador_ibfk_1` FOREIGN KEY (`idLogin`) REFERENCES `tblogin` (`idlogin`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbcolaborador_ibfk_2` FOREIGN KEY (`idpersona`) REFERENCES `tbpersona` (`idpersona`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbinventario`
--
ALTER TABLE `tbinventario`
  ADD CONSTRAINT `tbinventario_ibfk_1` FOREIGN KEY (`idarticulo`) REFERENCES `tbarticulo` (`idarticulo`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
