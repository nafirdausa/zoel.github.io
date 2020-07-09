-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 06:20 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ktp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_ktp`
--

CREATE TABLE `tb_data_ktp` (
  `nik` bigint(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` char(1) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data_ktp`
--

INSERT INTO `tb_data_ktp` (`nik`, `nama`, `tmp_lahir`, `tgl_lahir`, `gender`, `gol_darah`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `agama`, `pekerjaan`, `status`) VALUES
(3320145103030002, 'Erliana Jihan Auliya', 'Jepara', '2003-03-11', 'P', '-', 'Dk Sidorejo', 2, 2, 'Pendem', 'Kembang', 'Islam', 'Pelajar', 'BK'),
(1234567890123401, 'Nur Azizah F', 'Sleman', '2001-10-04', 'P', '-', 'Nglengkong Lor', 2, 14, 'Sumberrejo', 'Tempel', 'Islam', 'Web Developer', 'BK'),
(1111111111112222, 'Ryu', 'Kyoto', '2001-10-04', 'L', '', 'Jerman', 3, 1, 'Mororejo', 'Temple', 'Islam', 'Nananina', 'BK'),
(1234567890123450, 'hikari', 'Sleman', '2003-10-04', 'P', '', 'Nglengkong Lor', 1, 5, 'Mororejo', 'Tempel', 'Islam', 'Wirausaha', 'BK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(10, 'admin', '$2y$10$YvVmF1RJ.BDRoCfOcdJ5aukZT1PUX9Zc.k0CbXYfW1lfQZYDpiW1m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data_ktp`
--
ALTER TABLE `tb_data_ktp`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
