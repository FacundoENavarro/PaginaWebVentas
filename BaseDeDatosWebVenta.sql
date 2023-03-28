-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-03-2023 a las 21:31:13
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id20367612_ventasmariarosa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `nombre_producto` varchar(120) NOT NULL,
  `talle` int(11) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `sexo` varchar(60) NOT NULL,
  `importe` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `nombre_producto`, `talle`, `marca`, `sexo`, `importe`) VALUES
(1, 'Pantalon Adidas', 35, 'Adidas', 'Masculino', 3000),
(2, 'Pantalon De Vestir', 40, 'Shull', 'Masculino', 1500),
(3, 'Remera Aesthetic', 40, 'Aestic', 'Masculino', 4000),
(4, 'Remera Calavera', 36, 'Aestic', 'Masculino', 8000),
(5, 'Stock de Pantalones', 39, 'Klein', 'Masculino', 20000),
(6, 'Stock de Remeras', 39, 'Topper', 'Masculino', 23000),
(7, 'Stock de Sueteres', 30, 'Topper', 'Masculino', 30000),
(8, 'Stock de Camperas', 43, 'La Martina', 'Masculino', 35000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `mail` varchar(120) NOT NULL,
  `telefono` int(60) NOT NULL,
  `num_tarjeta` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nombre`, `apellido`, `direccion`, `mail`, `telefono`, `num_tarjeta`) VALUES
(1, 'Facundo', 'Navarro', '123', 'aca', 341, 4444),
(8, 'Fachindo', 'Lento', 'Sochis', 'Ange@gmail.com', 341095, 999),
(9, 'n', 'n', 'n', 'mk', 1, 8),
(10, 'a', 'k', 'k', 'k', 2, 2),
(329, 'Facundo', 'LogicaTerminada', 'Micas', 'Facundo@', 341, 9239128),
(330, 'Facundo', 'LogicaTerminada', 'Micas', 'Facundo@', 341, 9239128),
(331, 'Facundo', 'LogicaTerminada', 'Micas', 'Facundo@', 341, 9239128),
(332, 'Facundo', 'LogicaTerminada', 'Micas', 'Facundo@', 341, 9239128),
(333, 'Facundo', 'LogicaTerminada', 'Micas', 'Facundo@', 341, 9239128),
(334, 'Facundo', 'LogicaTerminada', 'Micas', 'Facundo@', 341, 9239128),
(335, 'o', 'o', 'o', 'o', 8, 8),
(336, 'u', 'u', 'u', 'u', 1, 1),
(337, 'Final', 'Final', 'Final', 'f', 22, 22),
(338, 'Facundo', 'Nvarro', '87Bis', 'Hola@1.com', 39991, 9991),
(339, 'l', 'l', 'l', 'l', 1, 1),
(340, 'Compra', 'F', 'F', 'q', 1, 321),
(341, 'Sesion', 'Ultima', '321', 'Facundo@', 34123213, 45447111),
(342, 'Anashei', 'Naneish', 'Solis14b', 'facu', 341, 2),
(343, 'a', 'a', 'a', 'festiozu37@outlook.com.ar', 341, 1),
(344, 'd', 'd', 'd', 'Festiozu37@outlook.com.ar', 341, 2123),
(345, 'd', 'd', 'd', 'Festiozu37@outlook.com.ar', 341, 1),
(346, 's', 's', 's', 'Festiozu37@outlook.com.ar', 1, 1),
(347, 'a', 'a', 'a', 'Festiozu37@outlook.com.ar', 3, 2),
(348, 'host', 'host', 'host', 'fefe', 2222222, 12),
(349, 'k', 'k', 'k', 'k', 1, 1),
(350, 'k', 'k', 'k', 'k', 1, 1),
(351, 'kl', 'kl', 'kl', 'l', 2, 2),
(352, 'kl', 'kl', 'kl', 'l', 2, 2),
(353, 'kl', 'kl', 'kl', 'l', 2, 2),
(354, 'a', 'a', 'a', 'az', 1, 1),
(355, 'a', 'a', 'a', 'az', 1, 1),
(356, 'a', 'a', 'a', 'az', 1, 1),
(357, 'a', 'a', 'a', 'az', 1, 1),
(358, 'a', 'a', 'a', 'a', 1, 1),
(359, 'a', 'a', 'a', 'a', 1, 1),
(360, 'a', 'a', 'a', 'a', 1, 1),
(361, 'a', 'a', 'a', 'a', 1, 1),
(362, 'a', 'a', 'a', 'a', 1, 1),
(363, 'a', 'a', 'a', 'a', 1, 1),
(364, 'a', 'a', 'a', 'a', 1, 1),
(365, 'a', 'a', 'a', 'a', 1, 1),
(366, 'a', 'a', 'a', 'a', 1, 1),
(367, 'a', 'a', 'a', 'a', 1, 1),
(368, 'a', 'a', 'a', 'a', 1, 1),
(369, 'a', 'a', 'a', 'a', 1, 1),
(370, 'facundo', 'nAVARRO', 'Solis', 'Facundo@', 341, 213),
(371, 'a', 'aA', 's', 'Festiozu37@outlook.com.ar', 1, 1),
(372, 'a', 'aA', 's', 'Festiozu37@outlook.com.ar', 1, 1),
(373, 'd', 'd', 'd', 'Festiozu37@outlook.com.ar', 1, 1),
(374, 'Facundo', 'Navarro', 'Solis 151', 'Festiozu37@outlook.com.ar', 34165132, 974213871),
(375, 'a', 'aa', 'a', 'a', 1, 1),
(376, 'c', 'c', 'c', 'c', 1, 1),
(377, 'q', 'qq', 'q', 'q', 1, 1),
(378, 'a', 'a', 'aa', 'a', 1, 1),
(379, 'v', 'v', 'v', 'v', 1, 1),
(380, 'Facundo', 'Navarro', 'Solis 151 Bis', 'facundo.navarro@institutozonaoeste.edu.ar', 341, 44448888);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_venta` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `nombre_art` varchar(120) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_resultado` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_venta`, `id_articulo`, `nombre_art`, `precio`, `cantidad`, `precio_resultado`) VALUES
(412, 1, 'Pantalon Adidas', 3000, 1, 0),
(412, 2, 'Pantalon De Vestir', 1500, 1, 0),
(416, 1, 'Pantalon Adidas', 3000, 1, 0),
(416, 2, 'Pantalon De Vestir', 1500, 1, 0),
(420, 1, 'Pantalon Adidas', 3000, 1, 0),
(420, 2, 'Pantalon De Vestir', 1500, 1, 0),
(422, 1, 'Pantalon Adidas', 3000, 1, 0),
(422, 2, 'Pantalon De Vestir', 1500, 1, 0),
(422, 1, 'Pantalon Adidas', 3000, 1, 0),
(424, 4, 'Remera Calavera', 8000, 1, 0),
(425, 4, 'Remera Calavera', 8000, 1, 0),
(425, 3, 'Remera Aesthetic', 4000, 1, 0),
(426, 1, 'Pantalon Adidas', 3000, 2, 0),
(426, 2, 'Pantalon De Vestir', 1500, 3, 0),
(427, 2, 'Pantalon De Vestir', 1500, 3, 4500),
(428, 3, 'Remera Aesthetic', 4000, 2, 8000),
(428, 4, 'Remera Calavera', 8000, 1, 8000),
(428, 1, 'Pantalon Adidas', 3000, 4, 12000),
(429, 1, 'Pantalon Adidas', 3000, 1, 3000),
(429, 2, 'Pantalon De Vestir', 1500, 1, 1500),
(429, 3, 'Remera Aesthetic', 4000, 5, 20000),
(429, 6, 'Stock de Remeras', 23000, 2, 46000),
(430, 1, 'Pantalon Adidas', 3000, 1, 3000),
(430, 4, 'Remera Calavera', 8000, 1, 8000),
(430, 2, 'Pantalon De Vestir', 1500, 3, 4500),
(430, 3, 'Remera Aesthetic', 4000, 1, 4000),
(431, 3, 'Remera Aesthetic', 4000, 1, 4000),
(432, 3, 'Remera Aesthetic', 4000, 1, 4000),
(432, 3, 'Remera Aesthetic', 4000, 1, 4000),
(433, 3, 'Remera Aesthetic', 4000, 1, 4000),
(433, 3, 'Remera Aesthetic', 4000, 1, 4000),
(433, 2, 'Pantalon De Vestir', 1500, 1, 1500),
(434, 3, 'Remera Aesthetic', 4000, 1, 4000),
(434, 3, 'Remera Aesthetic', 4000, 1, 4000),
(434, 2, 'Pantalon De Vestir', 1500, 1, 1500),
(434, 3, 'Remera Aesthetic', 4000, 1, 4000),
(435, 4, 'Remera Calavera', 8000, 1, 8000),
(458, 3, 'Remera Aesthetic', 4000, 1, 4000),
(458, 2, 'Pantalon De Vestir', 1500, 1, 1500),
(458, 2, 'Pantalon De Vestir', 1500, 1, 1500),
(459, 3, 'Remera Aesthetic', 4000, 1, 4000),
(459, 1, 'Pantalon Adidas', 3000, 1, 3000),
(460, 3, 'Remera Aesthetic', 4000, 1, 4000),
(460, 1, 'Pantalon Adidas', 3000, 1, 3000),
(461, 3, 'Remera Aesthetic', 4000, 1, 4000),
(461, 1, 'Pantalon Adidas', 3000, 1, 3000),
(461, 4, 'Remera Calavera', 8000, 1, 8000),
(462, 7, 'Stock de Sueteres', 30000, 3, 90000),
(463, 7, 'Stock de Sueteres', 30000, 3, 90000),
(463, 2, 'Pantalon De Vestir', 1500, 1, 1500),
(464, 3, 'Remera Aesthetic', 4000, 1, 4000),
(464, 3, 'Remera Aesthetic', 4000, 1, 4000),
(465, 1, 'Pantalon Adidas', 3000, 1, 3000),
(466, 1, 'Pantalon Adidas', 3000, 1, 3000),
(466, 3, 'Remera Aesthetic', 4000, 1, 4000),
(467, 3, 'Remera Aesthetic', 4000, 1, 4000),
(467, 3, 'Remera Aesthetic', 4000, 1, 4000),
(468, 1, 'Pantalon Adidas', 3000, 3, 9000),
(468, 4, 'Remera Calavera', 8000, 3, 24000),
(468, 3, 'Remera Aesthetic', 4000, 1, 4000),
(468, 5, 'Stock de Pantalones', 20000, 1, 20000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_cli` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `total`, `id_cli`, `fecha`) VALUES
(7, 1500, 8, '2023-01-24 19:49:24'),
(8, 3000, 9, '2023-01-25 21:36:09'),
(9, 8000, 10, '2023-02-05 22:51:58'),
(412, 4500, 329, '2023-02-11 22:59:11'),
(413, 4500, 329, '2023-02-11 22:59:11'),
(414, 4500, 330, '2023-02-11 22:59:58'),
(415, 4500, 330, '2023-02-11 22:59:58'),
(416, 4500, 331, '2023-02-11 23:00:33'),
(417, 4500, 331, '2023-02-11 23:00:33'),
(418, 4500, 332, '2023-02-11 23:01:43'),
(419, 4500, 333, '2023-02-11 23:02:00'),
(420, 4500, 334, '2023-02-11 23:02:53'),
(421, 4500, 334, '2023-02-11 23:02:53'),
(422, 7500, 335, '2023-02-11 23:03:11'),
(423, 7500, 335, '2023-02-11 23:03:11'),
(424, 8000, 336, '2023-02-11 23:03:51'),
(425, 12000, 337, '2023-02-11 23:04:07'),
(426, 10500, 338, '2023-02-18 14:57:41'),
(427, 4500, 339, '2023-02-18 15:04:55'),
(428, 28000, 340, '2023-02-18 15:07:18'),
(429, 70500, 341, '2023-02-19 23:00:47'),
(430, 19500, 342, '2023-02-20 04:50:40'),
(431, 4000, 343, '2023-02-20 22:46:53'),
(432, 8000, 344, '2023-02-20 22:48:32'),
(433, 9500, 345, '2023-02-20 22:51:26'),
(434, 13500, 346, '2023-02-20 22:53:23'),
(435, 8000, 347, '2023-02-20 22:56:08'),
(436, 4000, 348, '2023-02-26 21:24:28'),
(437, 4000, 349, '2023-02-26 21:31:49'),
(438, 4000, 350, '2023-02-26 21:32:24'),
(439, 20000, 351, '2023-02-26 21:43:49'),
(440, 20000, 352, '2023-02-26 21:45:13'),
(441, 20000, 353, '2023-02-26 21:45:15'),
(442, 20000, 354, '2023-02-26 21:45:24'),
(443, 20000, 355, '2023-02-26 21:46:10'),
(444, 20000, 356, '2023-02-26 21:46:12'),
(445, 20000, 357, '2023-02-26 21:47:01'),
(446, 20000, 358, '2023-02-26 21:47:07'),
(447, 20000, 359, '2023-02-26 22:10:24'),
(448, 20000, 360, '2023-02-26 22:13:56'),
(449, 20000, 361, '2023-02-26 22:14:28'),
(450, 20000, 362, '2023-02-26 22:14:37'),
(451, 20000, 363, '2023-02-26 22:14:49'),
(452, 20000, 364, '2023-02-26 22:17:05'),
(453, 20000, 365, '2023-02-26 22:18:46'),
(454, 20000, 366, '2023-02-26 22:18:48'),
(455, 20000, 367, '2023-02-26 22:19:02'),
(456, 20000, 368, '2023-02-26 22:19:39'),
(457, 20000, 369, '2023-02-26 22:20:09'),
(458, 7000, 370, '2023-02-26 22:27:32'),
(459, 7000, 371, '2023-02-27 02:57:20'),
(460, 7000, 372, '2023-02-27 03:02:28'),
(461, 15000, 373, '2023-02-27 03:04:57'),
(462, 90000, 374, '2023-02-28 02:02:26'),
(463, 91500, 375, '2023-02-28 02:11:20'),
(464, 8000, 376, '2023-02-28 02:13:31'),
(465, 3000, 377, '2023-02-28 02:16:08'),
(466, 7000, 378, '2023-02-28 02:17:30'),
(467, 8000, 379, '2023-02-28 02:20:50'),
(468, 57000, 380, '2023-02-28 11:17:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cli` (`id_cli`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=469;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id_articulo`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id_cli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
