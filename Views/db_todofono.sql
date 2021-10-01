-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2021 a las 06:38:17
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_todofono`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_A_categoria_table` (IN `_idcategoria` INT(2), IN `_idproducto` INT(3), IN `_categnombre` VARCHAR(30), IN `_categestado` TINYINT(4))  INSERT INTO categoria (id_categoria,producto_id,categoria_nombre,categoria_estado)
VALUES (_idcategoria,_idproducto,_categnombre,_categestado)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_A_producto_table` (IN `_idproducto` INT(3), IN `_idcategoria` INT(2), IN `_prodnombre` VARCHAR(40), IN `_prodmrp` FLOAT(8,2), IN `_prodprecio` FLOAT(8,2), IN `_prodstock` INT(4), IN `_prodimagen` VARCHAR(255), IN `_prod_descuento` VARCHAR(255), IN `_prod_descripcion` TEXT, IN `_prodmetatitle` TEXT, IN `_prodmetadesc` VARCHAR(255), IN `_prodkeywoard` VARCHAR(100), IN `_prodestado` TINYINT(4))  INSERT INTO producto (id_producto,id_categoria,producto_nombre,producto_mrp,producto_precio,producto_stock,producto_imagen, producto_sdescuento,producto_descripcion,producto_metatitle,producto_metadescripcion,producto_keyword,producto_estado)
VALUES (_idproducto,_idcategoria,_prodnombre,_prodmrp,_prodprecio,_prodstock,_prodimagen,_prod_descuento,_prod_descripcion,_prodmetatitle,_prodmetadesc,_prodkeywoard,_prodestado)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_A_usuario_table` (IN `_id` INT(2), IN `_user` VARCHAR(20), IN `_password` VARCHAR(20))  INSERT INTO admin_usuario (idadmin,admin_username,admin_password)
VALUES (_id,_user,_password)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_C_categoria_table` ()  SELECT * FROM categoria$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_C_producto_table` ()  SELECT * FROM producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_C_usuario_table` ()  SELECT * FROM admin_usuario$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_E_categoria_table` (IN `_idcategoria` INT(2))  DELETE FROM categoria
WHERE id_categoria = _idcategoria$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_E_producto_table` (IN `_idproducto` INT(3))  DELETE FROM producto
WHERE id_producto = _idproducto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_E_usuario_table` (IN `_id` INT(2))  DELETE FROM admin_usuario
WHERE idadmin = _id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_M_categoria_table` (IN `_idcategoria` INT(2), IN `_idproducto` INT(3), IN `_categnombre` VARCHAR(30), IN `_categestado` TINYINT(4))  UPDATE categoria SET categoria_nombre = _categnombre, categoria_estado = _categestado
WHERE id_categoria = _idcategoria$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_M_producto_table` (IN `_idproducto` INT(3), IN `_idcategoria` INT(2), IN `_prodnombre` VARCHAR(40), IN `_prodmrp` FLOAT(8,2), IN `_prodprecio` FLOAT(8,2), IN `_prodstock` INT(4), IN `_prodimagen` VARCHAR(255), IN `_prod_descuento` VARCHAR(255), IN `_prod_descripcion` TEXT, IN `_prodmetatitle` TEXT, IN `_prodmetadesc` VARCHAR(255), IN `_prodkeywoard` VARCHAR(100), IN `_prodestado` TINYINT(4))  UPDATE producto SET producto_nombre=_prodnombre, producto_mrp=_prodmrp, producto_precio=_prodprecio, producto_stock=_prodstock, producto_imagen=_prodimagen, producto_sdescuento=_prod_descuento, producto_descripcion=_prod_descripcion, producto_metatitle=_prodmetatitle, producto_metadescripcion=_prodmetadesc, producto_keyword=_prodkeywoard, producto_estado=_prodestado
WHERE id_producto=_idproducto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_M_usuario_table` (IN `_id` INT(2), IN `_user` VARCHAR(20), IN `_password` VARCHAR(20))  UPDATE usuarios SET admin_username = _user, admin_password = _password
WHERE idadmin = _id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_usuario`
--

CREATE TABLE `admin_usuario` (
  `idadmin` int(2) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_usuario`
--

INSERT INTO `admin_usuario` (`idadmin`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(2) NOT NULL,
  `producto_id` int(3) NOT NULL,
  `categoria_nombre` varchar(30) NOT NULL,
  `categoria_estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(3) NOT NULL,
  `id_categoria` int(2) NOT NULL,
  `producto_nombre` varchar(40) NOT NULL,
  `producto_mrp` float(8,2) NOT NULL,
  `producto_precio` float(8,2) NOT NULL,
  `producto_stock` int(4) NOT NULL,
  `producto_imagen` varchar(255) NOT NULL,
  `producto_sdescuento` varchar(255) NOT NULL,
  `producto_descripcion` text NOT NULL,
  `producto_metatitle` text NOT NULL,
  `producto_metadescripcion` varchar(255) NOT NULL,
  `producto_keyword` varchar(100) NOT NULL,
  `producto_estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_usuario`
--
ALTER TABLE `admin_usuario`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `fk_producto_id` (`producto_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_usuario`
--
ALTER TABLE `admin_usuario`
  MODIFY `idadmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(3) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `fk_producto_id` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
