-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 05:48 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aisyah_bukan_bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_catatan_mk`
--

CREATE TABLE `tb_catatan_mk` (
  `id_mk` int(11) NOT NULL,
  `nama_mk` varchar(200) NOT NULL,
  `catatan_mk` varchar(200) NOT NULL,
  `deadline_mk` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_catatan_mk`
--

INSERT INTO `tb_catatan_mk` (`id_mk`, `nama_mk`, `catatan_mk`, `deadline_mk`, `id_user`) VALUES
(27, '1', '1', '1', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tb_datauser`
--

CREATE TABLE `tb_datauser` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datauser`
--

INSERT INTO `tb_datauser` (`id_user`, `nama`) VALUES
(123, 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_catatan_mk`
--
ALTER TABLE `tb_catatan_mk`
  ADD PRIMARY KEY (`id_mk`),
  ADD KEY `tb_catatan_mk_fk1` (`id_user`);

--
-- Indexes for table `tb_datauser`
--
ALTER TABLE `tb_datauser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_catatan_mk`
--
ALTER TABLE `tb_catatan_mk`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_catatan_mk`
--
ALTER TABLE `tb_catatan_mk`
  ADD CONSTRAINT `tb_catatan_mk_fk1` FOREIGN KEY (`id_user`) REFERENCES `tb_datauser` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
