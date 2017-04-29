-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 06:00 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_qlsach`
--

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE IF NOT EXISTS `sach` (
  `MaSoSach` int(11) NOT NULL,
  `TenSach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TacGia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NamXB` int(11) NOT NULL,
  `NhaXB` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`MaSoSach`, `TenSach`, `TacGia`, `NamXB`, `NhaXB`) VALUES
(1, 'Ten sÃ¡ch', 'TÃ¡c giáº£', 2000, 'NhÃ  xuáº¥t báº£n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSoSach`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `MaSoSach` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
