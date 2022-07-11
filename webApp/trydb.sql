-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 05:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `sku` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `weight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`sku`, `name`, `price`, `weight`) VALUES
('5', '5', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `sku` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `size` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`sku`, `name`, `price`, `size`) VALUES
('1', '1', 1, 1),
('2', '2', 2, 2),
('33', '3', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `sku` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `height` double NOT NULL,
  `width` double NOT NULL,
  `length` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myinfor`
--

CREATE TABLE `myinfor` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `age` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myinfor`
--

INSERT INTO `myinfor` (`id`, `name`, `surname`, `age`) VALUES
(36, 'terry', 'nyamz', 45),
(37, 'terry', 'nyamz', 45),
(53, 'terrance', 'Nyamfukudza', 29),
(65, '34343@gmail.com', 'again', 34);

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `sku` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `size` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `length` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `producttype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`sku`, `name`, `price`, `size`, `weight`, `height`, `length`, `width`, `producttype`) VALUES
('1111', '11', 11, NULL, 34, NULL, NULL, NULL, 'Books'),
('1222', '12', 22, NULL, 23, NULL, NULL, NULL, 'Books'),
('23', '23', 23, 23333, NULL, NULL, NULL, NULL, 'DVDs'),
('23232333', 'rrr', 43, 334.45, NULL, NULL, NULL, NULL, 'DVDs'),
('25', '25', 225, NULL, NULL, 25, 25, 2555555, 'Furnitures'),
('weer', 'er', 22.5, 300, NULL, NULL, NULL, NULL, 'DVDs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`sku`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`sku`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`sku`);

--
-- Indexes for table `myinfor`
--
ALTER TABLE `myinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`sku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myinfor`
--
ALTER TABLE `myinfor`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
