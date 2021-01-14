-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 09:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpusmk`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `kodebuku` varchar(20) NOT NULL,
  `katbuku` varchar(40) NOT NULL,
  `namabuku` varchar(40) NOT NULL,
  `jumlahbuku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kodebuku`, `katbuku`, `namabuku`, `jumlahbuku`) VALUES
('BKU0001', 'Teks Utama', 'Bahasa Inggris', 290),
('BKU0002', 'Non-Teks Utama', 'Bahasa Indonesia', 30);

-- --------------------------------------------------------

--
-- Table structure for table `bukuguru`
--

CREATE TABLE IF NOT EXISTS `bukuguru` (
  `kodebukuguru` varchar(20) NOT NULL,
  `katbukuguru` varchar(50) NOT NULL,
  `namabukuguru` varchar(50) NOT NULL,
  `jumlahbukuguru` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukuguru`
--

INSERT INTO `bukuguru` (`kodebukuguru`, `katbukuguru`, `namabukuguru`, `jumlahbukuguru`) VALUES
('BKGR0001', 'Teks Utama', 'MATEMATIKA XI', 97);

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE IF NOT EXISTS `peminjam` (
  `idpeminjam` int(30) NOT NULL,
  `namapeminjam` varchar(50) NOT NULL,
  `nohp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`idpeminjam`, `namapeminjam`, `nohp`) VALUES
(12333, 'VIA SAHA', '08777'),
(13803, 'IAN RANDY', '08114860202'),
(13812, 'MENDIANA ALEXANDRA SASABONE', '082344758627');

-- --------------------------------------------------------

--
-- Table structure for table `peminjamguru`
--

CREATE TABLE IF NOT EXISTS `peminjamguru` (
  `idpeminjamguru` int(30) NOT NULL,
  `namapeminjamguru` varchar(50) NOT NULL,
  `nohpguru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjamguru`
--

INSERT INTO `peminjamguru` (`idpeminjamguru`, `namapeminjamguru`, `nohpguru`) VALUES
(19591120, 'HENY', '08234552635'),
(19591121, 'NICOLAS', '086362537');

-- --------------------------------------------------------

--
-- Table structure for table `pustakawan`
--

CREATE TABLE IF NOT EXISTS `pustakawan` (
  `idstaff` int(30) NOT NULL,
  `namastaff` varchar(50) NOT NULL,
  `nohpstaff` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pustakawan`
--

INSERT INTO `pustakawan` (`idstaff`, `namastaff`, `nohpstaff`) VALUES
(56, 'Lala', ''),
(1299, 'gigi', ''),
(2223, 'hana sritantiya', ''),
(2245, 'tante', ''),
(3456, 'yyyyy', ''),
(3466, 'gegee', ''),
(58302, 'setyo', ''),
(7555666, 'Ana Widyaa', '0823445678');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `kodetransaksi` varchar(30) NOT NULL,
  `idpeminjam` int(30) NOT NULL,
  `kodebuku` varchar(20) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `dendabuku` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kodetransaksi`, `idpeminjam`, `kodebuku`, `tglpinjam`, `tglkembali`, `status`, `dendabuku`) VALUES
('TR0001', 13803, 'BKU0001', '2020-01-11', '2020-01-18', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksiguru`
--

CREATE TABLE IF NOT EXISTS `transaksiguru` (
  `kodetranguru` varchar(30) NOT NULL,
  `idpeminjamguru` int(30) NOT NULL,
  `kodebukuguru` varchar(20) NOT NULL,
  `tglpinjamguru` date NOT NULL,
  `tglkembaliguru` date NOT NULL,
  `statusguru` varchar(20) NOT NULL,
  `dendabukuguru` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksiguru`
--

INSERT INTO `transaksiguru` (`kodetranguru`, `idpeminjamguru`, `kodebukuguru`, `tglpinjamguru`, `tglkembaliguru`, `statusguru`, `dendabukuguru`) VALUES
('TRGR0001', 19591121, 'BKGR0001', '2020-01-22', '2020-01-25', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'smknegeri1', 'smkn1sorong', 'smkn1', 'admin'),
(2, 'pegawai', 'pegawai', 'pegawai123', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`kodebuku`), ADD KEY `jumlahbuku` (`jumlahbuku`);

--
-- Indexes for table `bukuguru`
--
ALTER TABLE `bukuguru`
 ADD PRIMARY KEY (`kodebukuguru`), ADD KEY `jumlahbukuguru` (`jumlahbukuguru`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
 ADD PRIMARY KEY (`idpeminjam`);

--
-- Indexes for table `peminjamguru`
--
ALTER TABLE `peminjamguru`
 ADD PRIMARY KEY (`idpeminjamguru`);

--
-- Indexes for table `pustakawan`
--
ALTER TABLE `pustakawan`
 ADD PRIMARY KEY (`idstaff`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`kodetransaksi`), ADD KEY `idpeminjam` (`idpeminjam`), ADD KEY `kodebuku` (`kodebuku`);

--
-- Indexes for table `transaksiguru`
--
ALTER TABLE `transaksiguru`
 ADD PRIMARY KEY (`kodetranguru`), ADD KEY `idpeminjamguru` (`idpeminjamguru`), ADD KEY `kodebukuguru` (`kodebukuguru`), ADD KEY `idpeminjamguru_2` (`idpeminjamguru`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idpeminjam`) REFERENCES `peminjam` (`idpeminjam`);

--
-- Constraints for table `transaksiguru`
--
ALTER TABLE `transaksiguru`
ADD CONSTRAINT `transaksiguru_ibfk_1` FOREIGN KEY (`idpeminjamguru`) REFERENCES `peminjamguru` (`idpeminjamguru`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
