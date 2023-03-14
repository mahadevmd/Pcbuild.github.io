-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 07:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcbuild`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(10) NOT NULL,
  `psw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categories`) VALUES
(10, 'mother board'),
(11, 'RAM'),
(12, 'Optical Drive'),
(13, 'ROM'),
(14, 'Proceesor'),
(15, 'GPU'),
(16, 'SSD'),
(17, 'HDD');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `merge`
--

CREATE TABLE `merge` (
  `id` int(50) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `mb` varchar(100) NOT NULL,
  `pro` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `gpu` varchar(255) NOT NULL,
  `rom` varchar(255) NOT NULL,
  `ssd` varchar(255) NOT NULL,
  `od` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merge`
--

INSERT INTO `merge` (`id`, `processor`, `mb`, `pro`, `ram`, `gpu`, `rom`, `ssd`, `od`) VALUES
(1, 'i3', 'intel', 'intel i5', 'itel SSD', 'ONIDA GPU', 'Linux ROM', ' SONY HDD 1TB', 'SAMSUNG Optical drive'),
(2, 'i3', 'intel', 'intel i3', 'intel 8gb ram', 'ONIDA GPU', 'Linux ROM', 'itel SSD', 'SAMSUNG Optical drive'),
(3, 'i5', 'Asus Mother board', 'intel i5', 'intel 4gb ram', 'ONIDA GPU', 'Linux ROM', ' Lenova SSD', 'SAMSUNG Optical drive'),
(4, 'i7', 'Asus Mother board', 'intel i7', 'intel 8gb ram', 'ONIDA GPU', 'Linux ROM', ' SONY HDD 1TB', 'SAMSUNG Optical drive');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` bigint(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `age`, `email`, `phone`, `address`, `uname`, `psw`) VALUES
(4, 'admin', 'male', '2022-11-04', 'admin@admin.com', '9087654321', '11 new street trichy', 'admin', '111');

-- --------------------------------------------------------

--
-- Table structure for table `turf`
--

CREATE TABLE `turf` (
  `id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `amount` varchar(16) NOT NULL,
  `place` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `turf`
--

INSERT INTO `turf` (`id`, `type`, `tname`, `amount`, `place`, `img`) VALUES
(5, 'mother board', 'Asus Mother board', '20000', 'High speed with liquid cooling', 'mb2.jpg'),
(6, 'mother board', 'intel', '25000', 'High octane ', 'mb4.jpg'),
(7, 'Proceesor', 'intel i3', '5000', 'i3 11th generation', 'i3.jpg'),
(8, 'Proceesor', 'intel i5', '7000', 'intel i5 11th generation', 'i5.jpg'),
(9, 'Proceesor', 'intel i7', '6888', 'intel i7 11th generation', 'i7.jpg'),
(10, 'SSD', ' Lenova SSD', '2000', '512gb RAM', 'ssd.jpg'),
(11, 'SSD', 'itel SSD', '5000', 'Its have storage of 1TB', 'ssd2.jpg'),
(12, 'HDD', ' SONY HDD 1TB', '2000', 'The best HDD fron sony', 'hard.jpg'),
(13, 'GPU', 'ONIDA GPU', '2000', 'IT help to run smoothly', 'gpu2.jpg'),
(14, 'Optical Drive', 'SAMSUNG Optical drive', '2003', 'nonmagnetic external media, such as compact disc r', 'od.jpg'),
(15, 'ROM', 'Linux ROM', '2000', 'for high octance Read data from media type', 'rom2.jpg'),
(16, 'RAM', 'intel 8gb ram', '2000', 'fast and safe', 'ram.jpg'),
(17, 'RAM', 'intel 4gb ram', '2000', 'safe and fast', 'ram.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merge`
--
ALTER TABLE `merge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turf`
--
ALTER TABLE `turf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `merge`
--
ALTER TABLE `merge`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `turf`
--
ALTER TABLE `turf`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
