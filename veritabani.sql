-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2024 at 09:45 PM
-- Server version: 5.7.43-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3x1xyz`
--
CREATE DATABASE IF NOT EXISTS `3x1xyz` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `3x1xyz`;

-- --------------------------------------------------------

--
-- Table structure for table `etiketler`
--

CREATE TABLE `etiketler` (
  `id` int(7) NOT NULL,
  `baslik` varchar(75) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etiketler`
--

-- --------------------------------------------------------

--
-- Table structure for table `kral`
--

CREATE TABLE `kral` (
  `id` int(11) NOT NULL,
  `k_nick` varchar(50) NOT NULL,
  `k_pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kral`
--

INSERT INTO `kral` (`id`, `k_nick`, `k_pass`) VALUES
(1, 'admin', 'admin123456');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `yer` varchar(20) NOT NULL,
  `title` varchar(60) NOT NULL,
  `aciklama` varchar(150) NOT NULL,
  `etiket` varchar(100) NOT NULL,
  `h1` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`yer`, `title`, `aciklama`, `etiket`, `h1`) VALUES
('video', '%baslik% | Porno 3x1', '%once% %baslik% %sonra%', '%baslik%, %parca%, %baslik% porno, %baslik% sikiş, %baslik% sex, sikiş, porno izle', '%baslik%'),
('anasayfa', '3x1 Porno Video Sitesi', '31 çekeceklerin sitesi 3x1 ile am got sikme videoları izle kendine gel.', 'porno video sitesi, porno', '3x1 Porno Video Sitesi'),
('yeni', '31 çek Porno Liste:  %id%', '%id%', '%id%', '31 çek Porno Liste:  %id%');

-- --------------------------------------------------------

--
-- Table structure for table `yapi`
--

CREATE TABLE `yapi` (
  `ad` varchar(30) NOT NULL,
  `veri` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yapi`
--

INSERT INTO `yapi` (`ad`, `veri`) VALUES
('benzervideobaslik', 'Diğer Porno Videolar'),
('hgaciklama', ''),
('reklamalt', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etiketler`
--
ALTER TABLE `etiketler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kral`
--
ALTER TABLE `kral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`yer`);

--
-- Indexes for table `yapi`
--
ALTER TABLE `yapi`
  ADD PRIMARY KEY (`ad`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etiketler`
--
ALTER TABLE `etiketler`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311406;

--
-- AUTO_INCREMENT for table `kral`
--
ALTER TABLE `kral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
