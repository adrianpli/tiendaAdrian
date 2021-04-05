-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 09:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE `administradores` (
  `ID` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contra` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administradores`
--

INSERT INTO `administradores` (`ID`, `nombre`, `correo`, `contra`, `created_at`, `updated_at`) VALUES
(1, 'Adrian', 'adrianpli8099@gmail.com', '123', '2021-04-03 18:58:31', '2021-04-03 18:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `ID` int(5) NOT NULL,
  `ID_usuario` int(5) NOT NULL,
  `ID_producto` int(5) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `imagen1` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carrito`
--

INSERT INTO `carrito` (`ID`, `ID_usuario`, `ID_producto`, `producto`, `descripcion`, `precio`, `imagen1`, `created_at`, `updated_at`) VALUES
(35, 2, 1, 'Belfort Zotz 2020', 'Bicicleta belfort zotz modelo 2020 doble suspension R29 All mountaint', '20000', 'https://belfortbikestores.com/wp-content/uploads/2020/03/BF1002290170120-3.jpg', '2021-04-04 07:01:39', '2021-04-04 07:01:39'),
(36, 2, 10, 'Trek supercaliber', 'Bicicleta de montaña R29', '15000', '/storage/UDm1zcX8lDZ5WujyYJCTseM8CfP72qGKIPAkscIC.webp', '2021-04-04 07:01:43', '2021-04-04 07:01:43'),
(37, 2, 13, 'Belfort Ruta', 'Bicicleta R25 ruta', '15000', '/storage/y8sPgz8F8QCtelcpSZQkPSpGv2HbnTVgZ4DPHScj.jpg', '2021-04-04 07:01:48', '2021-04-04 07:01:48'),
(38, 2, 10, 'Trek supercaliber', 'Bicicleta de montaña R29', '15000', '/storage/UDm1zcX8lDZ5WujyYJCTseM8CfP72qGKIPAkscIC.webp', '2021-04-04 07:10:48', '2021-04-04 07:10:48'),
(39, 2, 11, 'Casco fox', 'Casco para ciclismo de montaña', '2000', '/storage/0Rt19PPUoza8vu1jt3LeoawtMVUrxD200tJkaKS7.jpg', '2021-04-04 07:10:58', '2021-04-04 07:10:58'),
(40, 2, 11, 'Casco fox', 'Casco para ciclismo de montaña', '2000', '/storage/0Rt19PPUoza8vu1jt3LeoawtMVUrxD200tJkaKS7.jpg', '2021-04-04 07:18:09', '2021-04-04 07:18:09'),
(41, 2, 10, 'Trek supercaliber', 'Bicicleta de montaña R29', '15000', '/storage/UDm1zcX8lDZ5WujyYJCTseM8CfP72qGKIPAkscIC.webp', '2021-04-04 07:18:12', '2021-04-04 07:18:12'),
(42, 2, 10, 'Trek supercaliber', 'Bicicleta de montaña R29', '15000', '/storage/UDm1zcX8lDZ5WujyYJCTseM8CfP72qGKIPAkscIC.webp', '2021-04-04 07:18:21', '2021-04-04 07:18:21'),
(43, 2, 1, 'Belfort Zotz 2020', 'Bicicleta belfort zotz modelo 2020 doble suspension R29 All mountaint', '20000', 'https://belfortbikestores.com/wp-content/uploads/2020/03/BF1002290170120-3.jpg', '2021-04-04 07:18:24', '2021-04-04 07:18:24'),
(44, 2, 1, 'Belfort Zotz 2020', 'Bicicleta belfort zotz modelo 2020 doble suspension R29 All mountaint', '20000', 'https://belfortbikestores.com/wp-content/uploads/2020/03/BF1002290170120-3.jpg', '2021-04-04 07:26:06', '2021-04-04 07:26:06'),
(45, 2, 10, 'Trek supercaliber', 'Bicicleta de montaña R29', '15000', '/storage/UDm1zcX8lDZ5WujyYJCTseM8CfP72qGKIPAkscIC.webp', '2021-04-04 07:26:10', '2021-04-04 07:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `ID` int(5) NOT NULL,
  `id_comprador` int(5) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `imagen1` varchar(200) NOT NULL,
  `imagen2` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`ID`, `id_comprador`, `producto`, `descripcion`, `precio`, `imagen1`, `imagen2`, `created_at`, `updated_at`) VALUES
(46, 2, 'Belfort Zotz 2020', 'Bicicleta belfort zotz modelo 2020 doble suspension R29 All mountaint', '20000', 'https://belfortbikestores.com/wp-content/uploads/2020/03/BF1002290170120-3.jpg', 'https://i.ytimg.com/vi/gI5ECtAeYC0/maxresdefault.jpg', '2021-04-04 12:01:56', '2021-04-04 12:01:56'),
(47, 2, 'Trek supercaliber', 'Bicicleta de montaña R29', '15000', '/storage/UDm1zcX8lDZ5WujyYJCTseM8CfP72qGKIPAkscIC.webp', '/storage/7adrPWrQqhraJsJX1DzIuCcBHNAg9nV4IBd1zxnx.webp', '2021-04-04 12:01:56', '2021-04-04 12:01:56'),
(48, 2, 'Belfort Ruta', 'Bicicleta R25 ruta', '15000', '/storage/y8sPgz8F8QCtelcpSZQkPSpGv2HbnTVgZ4DPHScj.jpg', '/storage/o1qy3WhC00WwgUnpZsuTrQPZCkPcJnKfwxoBg8IX.jpg', '2021-04-04 12:01:56', '2021-04-04 12:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `stock` int(5) NOT NULL,
  `imagen1` varchar(300) NOT NULL,
  `imagen2` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`ID`, `producto`, `descripcion`, `precio`, `stock`, `imagen1`, `imagen2`, `created_at`, `updated_at`) VALUES
(1, 'Belfort Zotz 2020', 'Bicicleta belfort zotz modelo 2020 doble suspension R29 All mountaint', '20000', 42, 'https://belfortbikestores.com/wp-content/uploads/2020/03/BF1002290170120-3.jpg', 'https://i.ytimg.com/vi/gI5ECtAeYC0/maxresdefault.jpg', '2021-04-03 09:18:55', '2021-04-03 09:18:55'),
(10, 'Trek supercaliber', 'Bicicleta de montaña R29', '15000', 32, '/storage/UDm1zcX8lDZ5WujyYJCTseM8CfP72qGKIPAkscIC.webp', '/storage/7adrPWrQqhraJsJX1DzIuCcBHNAg9nV4IBd1zxnx.webp', '2021-04-04 11:56:00', '2021-04-04 11:56:00'),
(11, 'Casco fox', 'Casco para ciclismo de montaña', '2000', 23, '/storage/0Rt19PPUoza8vu1jt3LeoawtMVUrxD200tJkaKS7.jpg', '/storage/b2w7L81inI4oRBDk3u8xtblAlkRqID8HjbrSG6YD.png', '2021-04-04 11:56:43', '2021-04-04 11:56:43'),
(12, 'Llantas maxxis R29', 'Llantas R29 para montaña', '2200', 54, '/storage/EW819PNhXSWlQdOm2PRXn05Ne9Rhk9QqR9o9SC3Z.webp', '/storage/APtZGsyUJ2AXs13pBPZxY4fFC454vosK9sp83c0K.webp', '2021-04-04 11:57:53', '2021-04-04 11:57:53'),
(13, 'Belfort Ruta', 'Bicicleta R25 ruta', '15000', 23, '/storage/y8sPgz8F8QCtelcpSZQkPSpGv2HbnTVgZ4DPHScj.jpg', '/storage/o1qy3WhC00WwgUnpZsuTrQPZCkPcJnKfwxoBg8IX.jpg', '2021-04-04 11:59:08', '2021-04-04 11:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contra` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `correo`, `contra`, `created_at`, `updated_at`) VALUES
(1, 'adrian', 'adrian@gmail.com', '$2y$10$64Km70xDao0DViA7d0450.Bws4AndhiUDVgoDjVHR3DLLkFnm4ESm', '2021-04-04 04:10:06', '2021-04-04 04:10:06'),
(2, 'Dany', 'dani@gmail.com', '$2y$10$ZpycaV.MrB.jkgRaWmNUXu3PwkffXZrTIXJC3zoPTcHtsYm0ZRltu', '2021-04-04 07:40:15', '2021-04-04 07:40:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
